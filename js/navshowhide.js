(function($) {
    $(document).ready(function(){
        $('.navigation h3').click(function(event){
            event.preventDefault();
            var menu = $('.navigation--wrapper');

            if( menu.hasClass('hidden') ) 
            {
                menu.removeClass('hidden');
            } else {
                menu.addClass('hidden');
            }
        })        
    });
}(jQuery));