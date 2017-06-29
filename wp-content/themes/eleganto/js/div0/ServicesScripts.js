var $ = jQuery.noConflict();

$(document).ready(function($) {

    var baseUrl = $("#baseUrlContainer").val();

    $(".orderServiceButton").click(function(){
        var serviceType = $(this).data("servicetype");
        
        switch(serviceType){
            case 0:
                window.location.href = baseUrl+"/singlemasterclassrequestpage";
                break;
            case 1:
                window.location.href = baseUrl+"/adultmasterclassrequest";
                break;
            case 2:
                window.location.href = baseUrl+"/individual_ordering";

                break;
        }

    })
});