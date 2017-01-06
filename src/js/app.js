$( document ).ready(function() {
    console.log('Inspect me?! I barely know you! XOXO Spencer [SpencerMRohan@gmail.com]');

    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    if (getUrlVars()['loc']){
        setTimeout(function(){
            $(getUrlVars()['loc']).click(); 
        },1);
    };

    $(".fss").click(function(event) {
        event.preventDefault();
        var link = $(this).data('link')
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 2000);
    });

    $('.parallax').parallax();

    $(document).on('click', '.main-anchors-lg .fs', function(event) { 
        event.preventDefault();
        var link    = $(this).data('link'),
            current = $(this).data('current');
        $(current).click();
        setTimeout(function(){
            $(link).click(); 
        },600);
    });

    
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