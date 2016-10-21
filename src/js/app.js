$( document ).ready(function() {
    $('.outer-circle input').on('change', function(){
    	$(this).parent().siblings().toggleClass('hidden', $(this).is(':checked'));
    	$(this).parent().toggleClass('active', $(this).is(':checked'));
    });

});