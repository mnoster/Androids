$(document).on('mouseup',"#connect",function(){
   add_friend();
    console.log("connect clicked");
});

function add_friend(){
    var friend_ID = $('#connect').attr('value');
    console.log("friend id: ", friend_ID);
    $.ajax({
        url:"add_friend_handler.php",
        method: 'post',
        dataType: 'json',
        data: {
            friend_ID: friend_ID
        },
        success: function(response){
            console.log("you connected successfully: " , response);
        },
        error: function(response){
            console.log("there was an error: " , response)
        }
    });
}

$(document).on('mouseup',"#squad",function(){
    add_squad();
});
function add_squad(){
    console.log("squad clicked");
    $.ajax({
        url:"add_squad_handler.php",
        method: 'post',
        dataType: 'json',
        success: function(response){
            console.log("you connected successfully: " , response);
        },
        error: function(repsonse){
            console.log("there was an error: " , response)
        }
    });
}