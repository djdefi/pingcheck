$(function() {

    $("#resultContainer").load("layouts/_result.php");

    $("#ajaxContainer").load("adddomain.php").hide();
    $("#addDomain").click(function() {
        if($("#ajaxContainer").is(':visible')) {
            $("#ajaxContainer").animate({width: 'toggle'});
        } else {
            $("#ajaxContainer").animate({width: 'toggle'});
        } 
    });


});

function refresh() {
    $("#resultContainer").load("layouts/_result.php");
}
