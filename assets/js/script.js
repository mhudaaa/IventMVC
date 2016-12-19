$(document).ready(function(){
    $(".open-login").click(function(){
        $(".login-form").slideToggle();
    });

    $(".open-account").click(function(){
        $(".account-panel").slideToggle();
    });
});