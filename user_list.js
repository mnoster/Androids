/**
 * Created by njporter10 on 9/4/16.
 */
$(document).on('click','#user_list',function(){
    console.log("user list click");
   // populate_user_list();
});

$(document).ready(function(){
    populate_user_list();
});

function populate_user_list(){
    $.ajax({
        url: "user_list_handler.php",
        dataType:'json',
        method: "post",
        success: function (response){
            console.log("you connected successfully: " , response);

            for(var i = 0; i<response[1].profile_img_path.length; i++){
                var src = response[1].profile_img_path[i];
                var user_name = response[0].names[i];
                // $('<li>').appendTo('#display_user_list').html($('<img>').attr("src", response[1].profile_img_path[i]).addClass("user_img_items"));
                $("#display_user_list").append("<li class='img-list-style'><img class='user_img_items' src='" + src + "'/>" + user_name + "</li>");

            }
        },
        error: function(response){
            console.log("there was an error: ", response );
        }
    })
}
