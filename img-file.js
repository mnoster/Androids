/**
 * Created by njporter10 on 9/4/16.
 */
$(document).on('click','#submit_img',function(){
    console.log("file handler");
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