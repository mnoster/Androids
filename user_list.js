$(document).ready(function(){
    populate_user_list();

});


function populate_user_list(){
    var user_obj = {};
    $.ajax({
        url: "user_list_handler.php",
        dataType:'json',
        method: "post",
        success: function (response){
            // console.log("you connected successfully: " , response);
            for(var i = 0; i<response[1].profile_img_path.length; i++){
                var username = response[2].username[i];
                var src = response[1].profile_img_path[i];
                var user_fullname = response[0].names[i];
                var user_obj = {  //made user obj for possible later use
                    image: src,
                    name: user_fullname,
                    username: username
                };
                // $('<li>').appendTo('#display_user_list').html($('<img>').attr("src", response[1].profile_img_path[i]).addClass("user_img_items"));
                $("#display_user_list").append("<li class='img-list-style'><img name='"+ user_obj.username +"' class='user_img_items' src='" + user_obj.image + "'/>" + user_obj.name + "</li>");
                $('.user_img_items').tooltip({
                    html:true,

                    title: "<div><h4>" + user_obj.username + "</h4><hr></div>",

                    /*delay: {show: 0, hide: 100000000}*/
                });
            }
        },
        error: function(response){
            console.log("there was an error: ", response );
        }
    })
}
$(document).on('click','.img-list-style',function(){
    var username = $(this).children(".user_img_items").attr("name");
    // console.log("username: " ,username);
    go_to_user_profile(username);

});

function go_to_user_profile(username){
    console.log("username: " ,username);
    $.ajax({
        url: "other_user_session.php",
        dataType:'json',
        method: "post",
        data:{
            username: username
        },
        success: function (response){
            // console.log("you connected successfully: " , response[12]);
            if(response.status == "success"){
                window.location.replace("other_user_profile.php");

            }
        },
        error: function(response){
            console.log("there was an error: ", response );
        }
    })
}

