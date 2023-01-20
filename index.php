<!DOCTYPE html>
<html lang="en">

<?php include("./components/_head.php") ?>

<body>
    <?php include("./components/_header.php") ?>

    <main class="main container-sm">
        <section class="hero d-md-flex py-4 justify-content-between align-items-center">
            <div class="text-md-start text-center">
                <h1>
                    Learning Today, <br>
                    Leading Tomorrow
                </h1>
                <p class="lead">We are team of talented designers making websites with Bootstrap</p>
            </div>
            <div class="d-none d-md-block">
                <div class="img_box">
                    <?php include("./assets/images/hero.svg") ?>
                </div>
            </div>
        </section>

        <?php include("./components/_whyUs.php") ?>

        <section class="features container-sm my-4 p-0">
            <dis class="features_container gap-3 justify-content-between">
                <div class="features_card d-flex gap-5 cusBp align-items-center border border-gray px-4">
                    <i class='bx bx-infinite col-1 fs-1 text-primary'></i>
                    <span class="col-10 fw-bold">Lorem, ipsum.</span>
                </div>
                <div class="features_card d-flex gap-5 cusBp align-items-center border border-gray px-4">
                    <i class='bx bx-infinite col-1 fs-1 text-primary'></i>
                    <span class="col-10 fw-bold">Lorem, ipsum.</span>
                </div>
                <div class="features_card d-flex gap-5 cusBp align-items-center border border-gray px-4">
                    <i class='bx bx-infinite col-1 fs-1 text-primary'></i>
                    <span class="col-10 fw-bold">Lorem, ipsum.</span>
                </div>
                <div class="features_card d-flex gap-5 cusBp align-items-center border border-gray px-4">
                    <i class='bx bx-infinite col-1 fs-1 text-primary'></i>
                    <span class="col-10 fw-bold">Lorem, ipsum.</span>
                </div>
                <div class="features_card d-flex gap-5 cusBp align-items-center border border-gray px-4">
                    <i class='bx bx-infinite col-1 fs-1 text-primary'></i>
                    <span class="col-10 fw-bold">Lorem, ipsum.</span>
                </div>
                <div class="features_card d-flex gap-5 cusBp align-items-center border border-gray px-4">
                    <i class='bx bx-infinite col-1 fs-1 text-primary'></i>
                    <span class="col-10 fw-bold">Lorem, ipsum.</span>
                </div>
            </dis>
        </section>

    </main>

    <?php include("./components/_footer.php"); ?>
    <?php include("./components/_js.php"); ?>

</body>

</html>