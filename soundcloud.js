// initialization

$('#submit').on('click',function(){
    getSoundCloudSong();
});
function getSoundCloudSong(){ //this is the function that holds the SOundcloud song player api
    SC.initialize({ // this will initialize the client id needed for access to the SC api
        client_id: "15c5a12b5d640af73b16bd240753ffbb"
    });

    // Play audio
    //---the soundcloud api call does not use ajax---it uses only javscript and there is an external script attatched in the index that adds more functionality
    var player = $("#sc-search"); //the variable of SC player will be set to the id of the song media player
    var artist = $('.artistName').val();  // the artist name will be deifined as a string of text in the
    artist = artist.replace(/\s/g, "_");
    artist = artist.replace(".", "_");
    SC.oEmbed('https://soundcloud.com/' + artist, {
        maxheight: 150,
        // maxwidth: 800
    }, function(res) {
        $("#SCplayer").html(res.html); //this will get the data that the call sends back to and append it to the dom
        // $('<div><h3>Latest Tracks</h3></div>').addClass('artist_base').prependTo($('#SCplayer'));//this is the div that will be appended to the dom above the player
        // $('.contain-player').css("visibility","visible");// this will make the tweet box visible if the function is success
    });
}
