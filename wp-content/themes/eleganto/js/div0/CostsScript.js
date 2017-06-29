var $ = jQuery.noConflict();

$(document).ready(function($) {
    var baseUrl = $("#baseUrlContainer").val();
    $(".costSectionOrderButton").click(function(){
        
        var orderType = $(this).data("ordertype");
        
        switch(orderType){
            case 0:
                window.location.href = baseUrl+"/adultmasterclassrequest";
                break;
            case 1:
                window.location.href = baseUrl+"/adultabonement4";
                break;
            case 2:
                window.location.href = baseUrl+"/singlemasterclassrequestpage";
                break;
            case 3:
                window.location.href = baseUrl+"/abonement4";
                break;
            case 4:
                window.location.href = baseUrl+"/abonement10";
                break;
            case 5:
                window.location.href = baseUrl+"/individual_ordering";
                break;
        }
    })
});