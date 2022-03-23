<?php
include "template/header.php";
?>




<div class="d-flex align-items-center justify-content-center base w100 h100">
    <div class="max-480 ">
        <?php
    include "template/menu.php";
    ?>



        <div class="base w100 d-flex align-items-center justify-content-center my-3 ">

            <i class="fas fa-arrow-left size-icons mx-3"></i>
            <img src="img/avatar.svg" width="60" class="base mx-4" alt="">
            <p class="user-name">Susana Arévalo</p>

        </div>
        <div class="base w100 px-5 pb-5">

            <div class="base w100">
                <a href="foto-ine.php" class="base col-6 text-center my-3">
                    <div class="document-preview"></div>
                    <p class="subtitle">INE</p>
                </a>

                <a href="foto-selfie.php" class="base col-6 text-center my-3">
                    <div class="document-preview"></div>
                    <p class="subtitle">Foto de perfil</p>
                </a>
            </div>


            <div class="base w100">
                <div class="base col-6 text-center my-3">
                    <div class="document-preview"></div>
                    <p class="subtitle">Documento 3</p>
                </div>

                <div class="base col-6 text-center my-3">
                    <div class="document-preview"></div>
                    <p class="subtitle">Documento 4</p>
                </div>
            </div>

            <div class="base w100 text-center my-3">
                <p class="caption-text">Revise que los documentos sean claros y legibles</p>
            </div>

        </div>

    </div>
</div>



<?php
include "template/footer.php";
?>