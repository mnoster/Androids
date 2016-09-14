/**
 * Created by njporter10 on 9/4/16.
 */
$(document).on('click','#submit_img',function(){
   change_profile_img(); 
});

function change_profile_img() {
    var upload_file_form = $('#img_file_upload')[0]; //have to use the [0] because is a jQuery element and we later want to use it in javascript
    var formData = new FormData(upload_file_form); //it is javascript here not jQuery 
    $.ajax({
        url: "img_file_handler.php",
        method: 'post',
        dataType: 'text',
        mimeType: "multipart/form-data",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log("You successfully connected: ", response);
            if(response.status == false){
               $("#img_file_upload").append('<span>').text("image size too big");
            }
        },
        error: function (response) {
            console.log("There was an error: ", response);
        }
    });

}
//------------------------background image-------------------------
/**
 * Created by njporter10 on 9/4/16.
 */
$(document).on('click','#submit_background_img',function(){
    change_background_img();
});

function change_background_img() {
    var upload_file_form = $('#background_img_file_upload')[0]; //have to use the [0] because is a jQuery element and we later want to use it in javascript
    var formData = new FormData(upload_file_form); //it is javascript here not jQuery 
    $.ajax({
        url: "background_img_file_handler.php",
        method: 'post',
        dataType: 'text',
        mimeType: "multipart/form-data",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log("You successfully connected: ", response);
            if(response == {"status":false}){
                $("#img_file_upload").append('<span>').text("image size too big");
            }
        },
        error: function (response) {
            console.log("There was an error: ", response);
        }
    });

}

$(document).on('click','#submit_song',function(){
    change_song();
});

function change_song() {
    var upload_file_form = $('#song_upload')[0]; //have to use the [0] because is a jQuery element and we later want to use it in javascript
    var formData = new FormData(upload_file_form); //it is javascript here not jQuery 
    $.ajax({
        url: "song_handler.php",
        method: 'post',
        dataType: 'text',
        mimeType: "audio/mpeg",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log("You successfully connected: ", response);
            if(response == {"status":false}){
                $("#song_upload").append('<span>').text("song size too big");
            }
        },
        error: function (response) {
            console.log("There was an error: ", response);
        }
    });

}
