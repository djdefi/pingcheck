$(function() {

    $("#deleteDomain").load("layouts/_result.php");

    $("#insertDomain").load("adddomain.php").hide();
    $("#addDomain").click(function() {
        if($("#insertDomain").is(':visible')) {
            //$("#ajaxContainer").animate({width: 'toggle'});
            $("#insertDomain").fadeOut();
        } else {
            //$("#ajaxContainer").animate({width: 'toggle'});
            $("#insertDomain").fadeIn();
        } 
    });

    $("#deleteDomain").submit(function(event) {
        event.preventDefault();

        var chkArray = [];
        $("input[type='checkbox']:checked").each(function() {
            chkArray.push($(this).val());
        });
        var selected;
        selected = chkArray.join(',') + ",";

        var dataString = selected;

        $.ajax({
            type: "POST",
            url: "delete.php",
            data: "id="+dataString,
            cache: false,
            success: function(result){
                $("#resultUpdate").html(result);
                refresh();
            }
        });

        //$form.fadeOut();
    });

    $("#insertDomain").submit(function(event) {
        event.preventDefault();
        var $form = $(this),
            term = $form.find("input[name='DomainName']").val(),
            url = $form.attr("action");

        $form.fadeOut();
        setTimeout(function(){}, 1000);
        var posting = $.post(url,{s:term}); 

        posting.done(function(data) {
            refresh();
            var content = $(data).find("#deleteForm");
            $ ("#deleteForm").empty().append(content);
        });
    });

});

function refresh() {
    $("#deleteDomain").load("layouts/_result.php");
    var resultContainer = $("#deleteDomain").html();
}
