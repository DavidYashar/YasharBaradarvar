
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        
        if(scroll< 300 ){
            $('ul').css('background-color', 'transparent');
            $('ul').css('transition', '1s');
           
        }else if(scroll> 300 && $(window).width()>701){
            
            $('ul').css('background-color', 'rgb(131, 128, 125)');
            $('ul').css('transition', '1s');
            
    
        }else{
            $('ul').css('background-color', 'transparent');
            $('ul').css('transition', '1s');
        }
    })
})

