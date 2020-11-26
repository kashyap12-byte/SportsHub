var videoplayer = document.getElementById('videoplayer');
var myVideo = document.getElementById('myVideo');

function stopVideo(){
    
    videoplayer.style.display = "none";
}

function playVideo(file){

    myVideo.src = file;
    videoplayer.style.display = "block";

}