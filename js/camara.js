
'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const snap = document.getElementById("snap");
const errorMsgElement = document.querySelector('span#errorMsg');


const cameraToggle = document.getElementById('cameraToggle');



var front = true;
var constraints = {
    video: {
        width:300,
        height:470,
        facingMode: "user"

    }
};

// webcam
async function init() {
    try {

        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);

    } catch (e) {
        errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
    }
}

// Success
function handleSuccess(stream) {
    window.stream = stream;
    video.srcObject = stream;
}

cameraToggle.addEventListener("click", function() {

    if (front == true) {

        constraints.video.facingMode = "environment";

        front = false;
        console.log(constraints.video.facingMode);



    } else if (front == false) {

        constraints.video.facingMode = "user";

        console.log(constraints.video.facingMode);

        front = true;


    }

    init();

});

// Load init
init();


// captura de imagen
var context = canvas.getContext('2d');
snap.addEventListener("click", function() {
    $('#camara').css('display', 'none');
    $('#captura').css('display', 'block');

    context.drawImage(video, 0, 0, 300, 470);
});