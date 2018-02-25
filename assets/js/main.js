$(document).ready(function(){
	
	init();

});

function init(){

	$('.slider').slick();

		if($('body').attr('data-template') == 'calendar'){
		  $('.date-wrapper').on('click', function(e) {
		    var url = $(this).data("target");
		    var $loadCont = $(this).next('.loadPage');
		    e.preventDefault();
		    console.log($loadCont.hasClass('active'));
		    if($loadCont.hasClass('active')){
		    	console.log('activeClass');
		    	$loadCont.removeClass('active');
		    	$loadCont.html('');
		    }
		    else{
		    	console.log('notClass', $loadCont);
		    	$loadCont.addClass('active');
		    	openPage(url, $loadCont);
		    }
		  });

	}

}


function openPage(url, target){
  $.ajax({
   url: url,
    success: function(data) {
      target.html(data).addClass('active');
    }
  });
}

