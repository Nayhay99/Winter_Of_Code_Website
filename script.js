$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = 0;
        scroll = $(window).scrollTop();
        if(scroll > 700)
            $("#menu_btn").css('color','black');
        else
            $("#menu_btn").css('color','white'); 
    });
});

function openNav() {
    document.getElementById("myNav").style.width = "100%";
    $(".closebtn").show();
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
