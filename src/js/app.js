$( document ).ready(function() {
    $('.outer-circle input').on('change', function(){
    	var $siblings = $(this).parent().siblings(),
    			$parent = $(this).parent();

    	$('.outer-circle').toggleClass('ready', $(this).is(':not(:checked)'));
    	setTimeout(function(){
     		$('.outer-circle').removeClass('ready');  
   		},500);
    	$siblings.children('input').prop( "checked", false );
    	$siblings.removeClass('active', $(this).is(':checked'));
    	$parent.removeClass('hidden', $(this).is(':checked'));
    	$siblings.toggleClass('hidden', $(this).is(':checked'));
    	$parent.toggleClass('active', $(this).is(':checked'));
    });

});