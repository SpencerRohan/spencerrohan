$( document ).ready(function() {
    console.log('Inspect me?! I barely know you! XOXO Spencer [SpencerMRohan@gmail.com]');
    
    $('.outer-circle input').on('change', function(){
        $('.content-box').toggleClass('open', $(this).is(':checked'));
        $('.content-box').toggleClass('closed', $(this).is(':not(:checked)'));
    	$('.outer-circle').toggleClass('ready', $(this).is(':not(:checked)'));
        
        var $siblings = $(this).parent().siblings(),
            $parent = $(this).parent(),
            contentID = $(this).attr("id");


        $('.content').removeClass('about film web projects');
        $('.content').toggleClass(contentID, $(this).is(':checked'));

        setTimeout(function(){
     		$('.outer-circle').removeClass('ready');  
            $('.content-box').removeClass('closed');
   		},500);

    	$siblings.children('input').prop( "checked", false );
    	$siblings.removeClass('active', $(this).is(':checked'));
    	$parent.removeClass('hidden', $(this).is(':checked'));
    	$siblings.toggleClass('hidden', $(this).is(':checked'));
    	$parent.toggleClass('active', $(this).is(':checked'));
    });

});