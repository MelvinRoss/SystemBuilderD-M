<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

        public function __contruct(){
            parent::__construct();
 
            //$this->load->model('jobjar_model');
        }


	public function index()
	{
                
		$this->load->view('home');
                //if($this->input->post('button')){
              		
	}
        public function home()
        {
            
            $this->load->view('home');
        }
        public function action(){
           
         $action = $this->input->post('name');
         echo $action;
             
        }
        public function advanced_1(){
            $this->load->view('advanced_1');
            
        }
        public function guided(){
            
        }
        public function motherboard(){
               if($this->input->post('submit')){
                   $data['onsubmit']=true;
                    $this->load->view('motherboard',$data);
                }
                else{
                    $data['onsubmit']=false;
                    $this->load->view('motherboard',$data);  
                }
        }
        public function cpu(){
                if($this->input->post('cpusubmit')){
                   $data['onsubmit']=true;
                    $this->load->view('cpu',$data);
                }
                else{
                    $data['onsubmit']=false;
                    $this->load->view('cpu',$data);  
                }  
        }
        public function gpu(){
               if($this->input->post('submit')){
                   $data['onsubmit']=true;
                    $this->load->view('gpu',$data);
                }
                else{
                    $data['onsubmit']=false;
                    $this->load->view('gpu',$data);  
                }  
        }
        public function memory(){
               if($this->input->post('submit')){
                   $data['onsubmit']=true;
                    $this->load->view('memory',$data);
                }
                else{
                    $data['onsubmit']=false;
                    $this->load->view('memory',$data);  
                }
        }
        public function compcase(){
                if($this->input->post('submit')){
                   $data['onsubmit']=true;
                    $this->load->view('case',$data);
                }
                else{
                    $data['onsubmit']=false;
                    $this->load->view('case',$data);  
                }
        }
        public function psu(){
               if($this->input->post('submit')){
                   $data['onsubmit']=true;
                    $this->load->view('psu',$data);
                }
                else{
                    $data['onsubmit']=false;
                    $this->load->view('psu',$data);  
                }
        }
        public function hdd(){
               if($this->input->post('submit')){
                   $data['onsubmit']=true;
                    $this->load->view('hdd',$data);
                }
                else{
                    $data['onsubmit']=false;
                    $this->load->view('hdd',$data);  
                }
        }
        public function accessory(){
               if($this->input->post('submit')){
                   $data['onsubmit']=true;
                    $this->load->view('accessory',$data);
                }
                else{
                    $data['onsubmit']=false;
                    $this->load->view('accessory',$data);  
                }
        }
        public function myparts(){
            $this->load->view('myparts');
        }
        public function removemyparts(){
            
            //remove the selected part
        }
        
       
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */