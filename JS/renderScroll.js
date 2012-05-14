var scrollView;
YUI().use('scrollview', function(Y) {
        scrollView = new Y.ScrollView({
            id: "scrollview",
            srcNode: '#scrollview-content',
            height: 300,
            flick: {
                minDistance:1,
                minVelocity:0.01,
                axis: "y"
            }
        });
       // scrollView.render();
        var content = scrollView.get("contentBox"); 
        
				content.delegate("click", function(e) {
				    // Prevent links from navigating as part of a scroll gesture
				    if (Math.abs(scrollView.lastScrolledAmt) > 2) {
				        e.preventDefault();
						Y.log("Link behavior suppressed.")
				    }
				}, "a");

        content.delegate("mousedown", function(e) {
            // Prevent default anchor drag behavior, on browsers which let you drag anchors to the desktop
            e.preventDefault();
        }, "a");
        
    });
    function disable(){
        scrollView.disable();
    }
    function enable(){
        scrollView.enable();
    }
    function setHeightZero(){
        scrollView=set("height",0);
        
    }
    function render(){
        scrollView.render();
    }
    