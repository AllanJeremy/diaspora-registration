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
        return true;
    }

    // Show the alert box at the top
    function _showResultMessage(response)
    {
        var $resultMessageAlert = $('#resultMessageAlert');
        $resultMessageAlert.removeClass('alert-success');
        $resultMessageAlert.removeClass('alert-danger');

        var alertClass = response.ok ? 'alert-success' : 'alert-danger';
        var alertContent = response.message;
        
        $resultMessageAlert.html(alertContent);
        $resultMessageAlert.addClass(alertClass);
        $resultMessageAlert.removeClass('d-none');
    }

    //Register user
    function registerUser()
    {
        var firstName = $('#inputFirstName').val();
        var lastName = $('#inputLastName').val();
        var email = $('#inputEmail').val();
        var phone = $('#inputPhone').val();
        var countryCode = $('#inputCountryCode').val();

        var url = baseApiUrl+'add_user';
        var data = {
            "first_name": firstName,
            "last_name": lastName,
            "email": email,
            "phone": phone,
            "country_code": countryCode,
            "captcha": grecaptcha.getResponse()
        };

        console.log(data);

        $.post(url,data).then(function(response){ //Show appropriate message
            _showResultMessage(response);
            grecaptcha.reset();// Reset captcha

            //If the request was ok ~ clear the form fields
            if(response.ok)
            {
                $('#inputFirstName').val('');
                $('#inputLastName').val('');
                $('#inputEmail').val('');
                $('#inputPhone').val('');
            }
        });
    }
    //Register button clicked
    $("#btnRegister").on("click",function(e){
        e.preventDefault();
        registerUser();
    });
});