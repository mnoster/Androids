/**
 * Created by njporter10 on 9/3/16.
 */
$(document).on('click',"#save_changes_btn", function () {
    console.log("save changes button");
    update_profile();
});
$(document).on('click',".btn-to-bottom",function(){
    $('html,body').animate({
            scrollTop: $(".change-img-row").offset().top},
        'slow');
});

function update_profile(e) {
    var display_name = $('#display_name').val(); //have to use the [0] because is a jQuery element and we later want to use it in javascript
    var country = $('#country').val(); //it is javascript here not jQuery
    var age = $('#age').val();
    var quote = $('#quote').val();
    var first_name = $('#first_name').val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();
    var gender = $('#gender').val();
    // console.log(gender);
    $.ajax({
        url: "edit_profile_handler.php",
        dataType: 'json',
        method: "POST",
        data: {
            display_name: display_name,
            country: country,
            age: age,
            quote: quote,
            first_name: first_name,
            last_name: last_name,
            email: email,
            gender: gender
        },
        success: function (response) {
            // console.log("You successfully connected: ", response);
            console.log("username:" , response.username);// username is undefined at this spot

            if(response.message == "success"){
                var username = response.username;
                populate_user_profile_info(username);
                window.location.replace('create_profile.php');
            }
        },
        error: function (response) {
            console.log("There was an error: ", response);
        }
    })
}