<!DOCTYPE html>
<html lang="en">

<?php include("./components/_head.php") ?>

<body>
    <?php include("./components/_header.php") ?>
    <?php include("./components/_preLoader.php") ?>

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
        <?php include("./components/_features.php") ?>

    </main>

    <?php include("./components/_footer.php"); ?>
    <?php include("./components/_js.php"); ?>

</body>

</html>