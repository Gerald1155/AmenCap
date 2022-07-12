$(document).ready(function(){
    $("#contact_form").on("submit",function(e){
        e.preventDefault();
        $first = $("#first").val()
        $last = $("#last").val()
        $email = $("#email").val()
        $phone = $("#phone").val()
        $message = $("#message").val()
        $.ajaxSetup({
            headers:{
                "X-CSRF-TOKEN":$("meta[name='csrf_token']").attr("content")
            }
        })
        $.ajax({
            url:"/contact/store",
            method:"POST",
            data:{"first_name":$first,"last_name":$last,"email":$email,"phone_number":$phone,"message":$message},
            success:function(data){
                switch (data.status) {
                    case 200:
                        $('#contact_form').hide();
                        $("#errors").hide();
                        $("#extra").hide();
                        $("#form_success").show();

                        break;
                    case 422:
                        $("#errors").empty();
                        $.each(data.errors, function (index,error) { 
                             $("#errors").append(`<span class="wpcf7-not-valid-tip" style="margin-top:10px;margin-bottom:10px;">`+error+`</span>`)
                        });
                        $("#errors").show();
                        break;
                    default:
                        window.location.reload()
                        break;
                }
            }
            ,error:function(e)
            {
                console.log(e);
            }
        })
    })
})