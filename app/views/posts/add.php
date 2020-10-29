<?php require_once APPROOT . '/views/inc/header.php';?>

<div class="col-md-6 mt-4">
    <h1>Take photo</h1>
</div>

<div class="card">
    <div class="row d-flex">
        <div class="col-md-6">
            <div class="card-body" width="50%">
                <video autoplay="true" id="video"></video>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3 justify-content-right">
            <div class="d-flex flex-column">
                <div class="mt-3">
                    <canvas id="canvas"></canvas>
                    <!-- <img id="photo" srs=""> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4 mb-3">
    <div class="col-md-6  d-flex justify-content-center">
    <a href="#" id="capture" class="btn btn-primary">
            <i class="fa fa-camera"></i> Take photo
        </a>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
        <a href="#" class="btn btn-primary d-flex">
            <i class="fa fa-upload"></i> Upload photo
        </a>
    </div>
</div>

<script>
var video = document.querySelector("#video");
var canvas = document.querySelector("#canvas");
var context = canvas.getContext("2d");
//var photo = document.querySelector('#photo');

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}

document.getElementById("capture").addEventListener('click', function() {
    context.drawImage(video, 0, 0, 200, 150);
    canvas.toDataURL('image/png');
});
</script>

<?php require_once APPROOT . '/views/inc/footer.php';?>
