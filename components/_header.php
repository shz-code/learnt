<header>
    <div class="container-sm">
        <nav class="d-flex justify-content-between align-items-center">
            <div>
                <a href="./index.php" class="nav_icon">Learnt</a>
            </div>
            <div class="nav_links">
                <ul>
                    <li class="nav_item"><a href="./index.php">Home</a></li>
                    <li class="nav_item"><a href="#">Courses</a></li>
                    <?php
                    if (!isset($_SESSION))
                        session_start();
                    if (isset($_SESSION["logged_in"])) {
                        echo '<li class="nav_item"><a href="./services/_logout.php" class="d-flex items-center gap-2">Logout<i class="bx bx-happy fs-4 text-light pointer"></i></a></li>';
                    } else {
                        echo '<li class="nav_item"><a class="btn" href="./login.php">Get Started</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="hambtn">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </div>
</header>