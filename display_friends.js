/**
 * Created by njporter10 on 9/7/16.
 */
$(document).ready(function(){
    populate_profile_friends();
    console.log("profile friends");
});

function populate_profile_friends(){
    var user_obj = {};
    $.ajax({
        url: "display_friends_handler.php",
        dataType:'json',
        method: "post",
        success: function (response){
            console.log("you connected successfully: " , response);
            for(var i = 0; i<response['friend_ID'].length; i++) {
                var username = response['friend_ID'][i];
                var src = response['profile_image_path'][i];
                var user_fullname = response['full_name'][i];
                var user_obj = {  //made user obj for possible later use
                    image: src,
                    name: user_fullname,
                    username: username
                };
                console.log("user obj: " , user_obj);
                if (response.status == "success") {
                    $(".profile-friends").append("<li class='img-list-style'><img name='" + user_obj.username + "' class='user_img_items' src='" + user_obj.image + "'/>" + user_obj.name + "</li>");

                }
            }
        },
        error: function(response){
            console.log("there was an error: ", response );
        }
    })
}
