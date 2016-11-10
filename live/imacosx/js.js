$(document).ready(function () {

// date time update ----------------------
    setInterval(function () {
        var date = new Date();
        var hour = date.getHours();
        var min = date.getMinutes();
        document.getElementById("notifydate").innerHTML = hour + ":" + min;
        //document.write(hour + ":" + min);
    }, 1000);

// drag able dialogue box ------------------
    $(".dialoguebox_con").draggable();

// active dialogue box ---------------------
    $(".dialoguebox_con").mousedown(function () {
        $(".dialoguebox_con").css({"z-index": "1"});
        $(this).css({"z-index": "999999"});
    });

// close dialogue box -------------------
    $(".db_close_btn").click(function () {
        $(this).closest(".dialoguebox_con").fadeOut("fast");
    });

// open about this mac -------------------
    $("#aboutthismac_menu").click(function () {
        $("#aboutthismac").css({"display": "block"});
    });

// open about this project --------------------
    $("#aboutthisproject_menu").click(function(){
        $("#aboutthisproject").css({"display":"block"});
    });

// open finder ----------------------------
    $("#aboutfinder_menu").click(function(){
        $("#aboutfinder").css({"display":"block"});
    });

// dockbar icon click ---------------------------
//    $("#dockbar img").click(function(){
//        $(this).effect("bounce",{times:2}, 500);
//        //$("#my_div").effect("bounce", { times:3 }, 300);
//    });

// center div -----------------------
    $.fn.center = function () {
        this.css("left", ( $(window).width() - this.width() ) / 2 + $(window).scrollLeft() + "px");
        return this;
    }
    $("#dockbar").center();


}); // +++++++++++++

$(window).load(function () {
    $("#loginpage").slideUp("slow");
})
