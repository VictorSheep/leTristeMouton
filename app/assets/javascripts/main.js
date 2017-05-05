$( document ).ready(function() {
    console.log( "JQuery ready!" );
    $('#head-title>hr').animate(
    	{width:"50%",opacity:"1"},
    	1200,'easeOutQuint',function(){
    		
    	}
    );
    $('#head-title h1').delay(400).animate(
		{opacity:"1","margin-bottom":"0"},
		1200,'easeOutExpo'
	);
	$('#head-title h6').delay(700).animate(
		{opacity:"1","margin-top":"0"},
		1200,'easeOutExpo'
	);
});