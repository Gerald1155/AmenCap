$(document).ready(function(){

    $("#mobile_table .mobile_profit_lost_number").on("click",function(e)
    {
        e.preventDefault();
        $(".mobile_profit_lost_number").fadeOut("fast");
        $(".mobile_profit_lost_percentage").fadeIn("fast");
        $("#mobile_profit_loss_title").text("Profit/Loss(%)")
        
    })

    $("#mobile_table .mobile_profit_lost_percentage").on("click",function(e)
    {
        e.preventDefault();
        $(".mobile_profit_lost_percentage").fadeOut("fast");
        $(".mobile_profit_lost_number").fadeIn("fast");
        $("#mobile_profit_loss_title").text("Profit/Loss(USD)")
    })

    $("#table .profit_lost").on("click",function(e)
    {
        e.preventDefault();
        $(".profit_lost").fadeOut("fast");
        $(".profit_lost_percentage").fadeIn("fast");
        $("#profit_loss_title").text("Profit / Loss(%)")

        
    })

    $("#table .profit_lost_percentage").on("click",function(e)
    {
        e.preventDefault();
        $(".profit_lost_percentage").fadeOut("fast");
        $(".profit_lost").fadeIn("fast");
        $("#profit_loss_title").text("Profit / Loss(USD)")

    })

    $('#table .profit_lost').each(function($i,$v) {
        $data_id = $(this).attr("data-id");
        $number = parseInt($(this).attr("data-number"));
        if ($number > 0) {
            $(`#value_`+$data_id).css("color","lawngreen");
            $(`#img_`+$data_id).attr("src","../icons/profit.png");
            $(`#img_`+$data_id).show()
        }
        else
        {
            $(`#value_`+$data_id).css("color","red");
            $(`#img_`+$data_id).attr("src","../icons/loss.png");
            $(`#img_`+$data_id).show()
        }
    });
    
    $('#table .profit_lost_percentage').each(function($i,$v) {
        $data_id = $(this).attr("data-percetageID");
        $number = parseInt($(this).attr("data-percentage"));
        if ($number > 0) {
            $(`#percentage_value_`+$data_id).css("color","lawngreen");
            $(`#percentage_img_`+$data_id).attr("src","../icons/profit.png");
            $(`#percentage_img_`+$data_id).show()
        }
        else
        {
            $(`#percentage_value_`+$data_id).css("color","red");
            $(`#percentage_img_`+$data_id).attr("src","../icons/loss.png");
            $(`#percentage_img_`+$data_id).show()
        }
    });    

   
    $('#mobile_table .mobile_profit_lost_percentage').each(function($i,$v) {
        $data_id = $(this).attr("data-percetageID-mobile");
        $number = parseInt($(this).attr("data-percentage-mobile"));
        if ($number > 0) {
            $(`#mobile_percentage_value_`+$data_id).css("color","lawngreen");
            $(`#mobile_percentage_img_`+$data_id).attr("src","../icons/profit.png");
            $(`#mobile_percentage_img_`+$data_id).show()
        }
        else
        {
            $(`#mobile_percentage_value_`+$data_id).css("color","red");
            $(`#mobile_percentage_img_`+$data_id).attr("src","../icons/loss.png");
            $(`#mobile_percentage_img_`+$data_id).show()
        }
    });    

    $('#mobile_table .mobile_profit_lost_number').each(function($i,$v) {
        $data_id = $(this).attr("data-numberID-mobile");
        $number = parseInt($(this).attr("data-number-mobile"));
        if ($number > 0) {
            $(`#mobile_number_value_`+$data_id).css("color","lawngreen");
            $(`#mobile_number_img_`+$data_id).attr("src","../icons/profit.png");
            $(`#mobile_number_img_`+$data_id).show()
        }
        else
        {
            $(`#mobile_number_value_`+$data_id).css("color","red");
            $(`#mobile_number_img_`+$data_id).attr("src","../icons/loss.png");
            $(`#mobile_number_img_`+$data_id).show()
        }
    });    
})