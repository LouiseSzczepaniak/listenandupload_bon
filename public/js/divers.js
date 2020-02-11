$(document).ready(function(){
    $("a.chanson").click(function(e){
        e.preventDefault();
        let url = $(this).attr('data-file');
        console.log(url);
        let audio = $('#audio');
        audio[0].src = url;
        audio[0].play();
    })
})
