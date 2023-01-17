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

        <section class="why_us d-block d-lg-flex gap-4 align-items-center">
            <div class="master_card">
            <div class="card">
                    <h2 class="text-center">WHY US?</h2>
                    <div class="card_body">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut et quibusdam officiis in illum ex odio nulla quisquam dolorum ipsum cupiditate molestias praesentium iure totam, minima a. Fugiat illo doloremque consectetur possimus nihil fuga corrupti suscipit rem accusantium? Nobis, iure perferendis! Voluptatum necessitatibus provident repellat animi optio hic placeat assumenda.
                        </p>
                    </div>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="cards d-xl-flex gap-2 align-items-center">
                <div class="card">
                    <div class="card_body">
                        <div class="card_icon">
                            <i class='bx bxs-star'></i>
                        </div>
                        <h4>Lorem ipsum dolor sit.</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card_body">
                        <div class="card_icon">
                            <i class='bx bxs-cube'></i>
                        </div>
                        <h4>Lorem ipsum dolor sit.</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card_body">
                        <div class="card_icon">
                            <i class='bx bxs-graduation'></i>
                        </div>
                        <h4>Lorem ipsum dolor sit.</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include("./components/_footer.php"); ?>
    <?php include("./components/_js.php"); ?>

</body>

</html>