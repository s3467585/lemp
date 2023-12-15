$(document).ready(function() {
	$('form').submit(function(event) {
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				json = jQuery.parseJSON(result);
				if (json.url) {
					window.location.href = '/' + json.url;
				} else {
					alert(json.status + ' - ' + json.message);
				}
			},
		});
	});
});


function myTimer() {

$('#nav li a').click(function(){
	    
	    var toLoad = $(this).attr('href')+' #container_gr';
	    $('#container_gr').hide('fast',loadContent);
	    $('#load').remove();
	    $('#load').fadeIn('normal');
	    function loadContent() {
	    	$('#container_gr').load(toLoad,'',showNewContent())
	    }
	    function showNewContent() {
	    	$('#container_gr').show('normal',hideLoader());
	    }
	    function hideLoader() {
	    	$('#load').fadeOut('normal');
	    }
	    return false;
	    
	    });



}

	$(document).ready(function() {
	 
	    setInterval(myTimer, 15000);
	    
	});





/*setInterval(
  () => console.log('Hello every 15 seconds'),
  15000
);*/