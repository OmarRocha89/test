<?php
include "template/header.php";
?>




<div class="d-flex align-items-center justify-content-center base w100 h100">
    <div class="max-480 ">
        <?php
    include "template/menu2.php";
    ?>




        <div id="camara" class="base w100 px-5 pb-5">



            <div class="base w100 text-center py-3">
                <p class="color-blue"> <strong> Coloca dentro del margen tu rostro </strong></p>

            </div>


            <!-- Stream video via webcam -->
            <div class="video-wrap base base w100 text-center">
                <video id="video" class="preview-selfie" playsinline autoplay></video>
                <div class="circulo"></div>
            </div>

            <div class="base w100 text-center">

                <button id="cameraToggle" class="button-camera">
                    <i class="fas fa-sync-alt"></i>
                </button>

                <button id="snap" class="button-camera">
                    <i class="fas fa-camera size-icons"></i>
                </button>
            </div>


        </div>



        <div id="captura" class="base w100 px-5 pb-5 " style="display:none;">


            <!-- Stream video via webcam -->
            <div class="w100 base pt-3 base w100 text-center">
                <canvas id="canvas" width="300" height="470"></canvas>
            </div>



            <div class="base w100 text-center pb-3">
                <i class="fas fa-check-circle size-icons2 color-yellow mt-3 mb-2"></i>
                <p class="title"> <strong>Bien </strong></p>
                <p class="caption-text my-2">¡Haz tomado exitosamente tu foto!</p>
            </div>


            <div class="base w100 text-center">

                <div class="base w100 mb-3">
                    <a href="biometria.php" class="button-continue">
                        Continuar
                    </a>
                </div>
                <div class="base w100">
                    <a href="javascript:window.location.reload(true)" class="button-reload">
                        Volver a tomar
                    </a>
                </div>

            </div>


        </div>



        <!-- Webcam video snapshot -->
        <!-- <canvas id="canvas" width="640" height="480"></canvas>-->


    </div>
</div>



<?php
include "template/footer.php";
?>
<script src="js/jquery.js"></script>

<script src="js/camara.js"></script>