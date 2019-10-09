$(document).ready(function (){
    $(window).scroll(function() {
        $("#animatecat").each(function(){
        var imagePos = $(this).offset().top;
        
        var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+400) {
                $(this).addClass("slideUp");
            }
        });

        $("#animateabout").each(function(){
            var imagePos = $(this).offset().top;
            
            var topOfWindow = $(window).scrollTop();
                if (imagePos < topOfWindow+200) {
                    $(this).addClass("fadeIn");
                }
            });
    });
});
