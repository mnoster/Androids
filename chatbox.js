
var input_val = null;
var input_val_rpt = null;
var array_george = [];
var input_count = 0;
var array_erica = [];

//----------------------------------
//     if (input_val == input_val_rpt) {
//         $('.button1').attr('disabled', 'disabled');
//     }

    //---------------on click-------------------
    $(document).on('click','#button2', function () {
        var input_val2 = $('#value2').val();
        array_erica.push(input_val2);
        console.log(array_erica);
        $('#new-feed').append($('<p>', {
            addClass: 'erica',
            html: '<strong>Erica: </strong>' + input_val2
        }));
        $('#value2').val("");
    });

    // //---------------on enter-------------------
    // $(document).on('keypress', function () {
    //     var input_val2 = $('#value2').val();
    //     $('#value2').val('');
    //     array_erica.push(input_val2);
    //     console.log(array_erica);
    //     $('#new-feed').append($('<p>', {
    //         addClass: 'erica',
    //         html: '<strong>Erica: </strong>' + input_val2
    //     }));
    // });


    //---------highlightbox-------------

    $('input[type="text"]').each(function () {
        $(this).focus(function () {
            $(this).addClass('boxStyle');
        });
        $(this).blur(function () {
            $(this).removeClass('boxStyle');
        });
    });

