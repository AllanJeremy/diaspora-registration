$(document).ready(function(){
    var $current_country = $('#currentCountryButton');
    //Update the country code appeara
    $('.country-code-option').on('click',function(){
        var selected =  $(this).html();
        console.log('Clicked');
        $current_country.html(selected);
    });
});