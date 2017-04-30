

wow = new WOW(
                    {
                        boxClass:     'wow', 
                        animateClass: 'animated',
                        offset:       100
                    }
                );
            wow.init();

var n = document.getElementById("counter");
		if (n == null) {
	} 
	else {
	
	var lastWasLower = false;
		$(document).scroll(function(){
		
		var p = $( "#counter" );
		var position = p.position();
		var position2 = position.top;
	
		if ($(document).scrollTop() > position2-500){
		if (!lastWasLower)
			$('#1').html('100');
			$('#2').html('150');
			$('#3').html('10');
			
	
		lastWasLower = true;
			} else {
		lastWasLower = false;
		}
		});		
	};

