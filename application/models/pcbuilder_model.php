<?php
class PCBuilder_Model extends CI_Model {

	function PCBuilder_Model(){
		parent::__construct();
	}

	function getProcessorList($currentConstraints){
		$cores = $currentConstraints['numCores'];
		$socket = $currentConstraints['socket'];
		$minimumClockSpeed = $currentConstraints['minimumClock'];
		$brand = $currentConstraints['brand'];
		$sql="SELECT * FROM `cpu` WHERE `Brand`= ? and `CPU Socket Type` =? and `Multi-Core`=?  and `Operating Frequency` >=?";
		/*$resultSet = $this->db->query($sql,array($brand,$socket,$cores,$minimumClockSpeed));
		if($resultSet->num_rows == 0){ //Do something special if there are no results. 
			return;
		} */
	}

	function getJobFromJar ($users_name){
		$sql="SELECT * FROM jobs WHERE inProgress=?"; //String
		$resultSet= $this->db->query($sql,0); //Get result set of non-assigned jobs from job jar

		if ($resultSet->num_rows() == 0){
			//Return null if there are no unassigned jobs or no jobs in the jar
			$empty['empty']=true;
			return $empty;
		}
		else {
			$isNotFun= rand(0, 9) > 0 ? 1 : 0; //boolean that determines if it is a fun job or not
			$sql="SELECT ID,jobTitle,jobDescription FROM jobs WHERE inProgress= ? AND isNotFun= ?";
			$resultSet= $this->db->query($sql,array(0,$isNotFun)); //Get Resul set of unassigned jobs of the randomly selected fun type.

			if($resultSet->num_rows() == 0){
				//If result set got is empty, because no jobs of that fun type exist
				//Check if there all of one of the types (fun or not fun) is taken
				$isNotFun= $isNotFun ? 0 : 1; //int: Flip the value of the fun boolean
				$resultSet= $this->db->query($sql,array(0,$isNotFun)); //result set object: Get the non-empty result set of jobs
			}
			$numberOfRows=$resultSet->num_rows();//int: number of rows in the returned result set
			$selectedJobIndex = rand(0,$numberOfRows-1);  //int: Randomly select a job from the job result set. Subtract 1 since arrays start at 0
			$selectedJobRow=$resultSet->row_array($selectedJobIndex); //Row object: Get the row containing the selected Job's information
			$selectedJobID=$selectedJobRow['ID'].",";  //string: Get the ID off the selected job and attach a comma to it, to facilitate storying array data into a table element.
			$resultSet->free_result();				
			$sql="UPDATE jobs SET inProgress= ? WHERE ID= ?";
			if( $this->db->query($sql,array(1,$selectedJobRow['ID'])) == false) //Set the selected job to inProgress in the jobs tables
			echo 'Query failed';
			$currentlyAssignedJobsArray= $this->getUsersJobsArray($users_name); //string array of all the users assigned jobs, though values are actually integers
			if($currentlyAssignedJobsArray == null){ //If the user's name is not in the database				
				$sql="INSERT INTO assignedJobs (name,assignmentIndices) VALUES(?,?)";  
				$this->db->query($sql,array($users_name,$selectedJobID));    //Inser the new user into the database
			}
			else{
				$assignmentString=implode(",", $currentlyAssignedJobsArray);  //recreate the jobs string
				$assignmentString=$assignmentString.$selectedJobID;  //append the newly assigned job to the already assigned jobs				
				$sql="UPDATE assignedJobs SET assignmentIndices= ? WHERE name= ?";
				$this->db->query($sql,array($assignmentString,$users_name));
			}
			$resultArray['assignedJobTitle'] = $selectedJobRow['jobTitle'];
			$resultArray['assignedJobDescription'] = $selectedJobRow['jobDescription'];
			return $resultArray;
		}
	}

	
		
	function getUsersJobsString($users_name){
		$sql="SELECT assignmentIndices FROM assignedJobs WHERE name= ?";
		$resultSet=$this->db->query($sql,array($users_name));
		if($resultSet->num_rows() == 0)
			return null;
		$row=$resultSet->row();
		$resultSet->free_result();
		return $row->assignmentIndices;
	}
		
		
	function getUsersJobsArray($users_name){
		if($jobsString=$this->getUsersJobsString($users_name) != null );
			return explode(",",$jobsString,-1);  //Return an array composed of the CSVs of the users job assignment string of job IDs
		return null;
	}

	
}