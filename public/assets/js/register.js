$(document).ready(function(){
    var baseApiUrl = 'http://localhost/diaspora/public/api/';
    var fadeSpeed = 200;

    var $registerProgress = $('#registerProgress');

    //When ajax request starts ~ show progress back
    $(this).ajaxStart(function(){
        $registerProgress.removeClass('d-none').fadeIn(fadeSpeed);        
    });

    //When ajax requests are over
    $(this).ajaxStop(function(){
        //Add a slight delay to hiding the progress, so the bar is at least seen ~ UX, prevent confusion
        setTimeout(function(){
            $registerProgress.fadeOut(fadeSpeed,function(){
                $(this).addClass('d-none');}
            );
        },400);//The number of milliseconds the progress bar will stall
    });

    //Validate user input in the register form
    function validateRegisterInfo()
    {
        
    }

    //Register user
    function registerUser()
    {
        var url = baseApiUrl+'';
        var data;

        $.post(url,data,function(){

        });
    }
    //Register button clicked
    $("#btnRegister").on("click",function(e){
        e.preventDefault();
        registerUser();
    });
});