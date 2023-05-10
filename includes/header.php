<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo2.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <?php
                //Check if user is loging or not
                if (!isset($_SESSION["user_id"])) {
                ?>
                    <!--This is home nav bar-->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"  >
                        <i class="fa fa-home" aria-hidden="true"></i><strong>Home</strong>
                        </a>
                    </li>
                    <div class="nav-vl"></div>

                    <!--This is about us nav bar-->
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.php">
                            <i class="fa fa-info-circle" aria-hidden="true"></i><strong>About-Us</strong>
                        </a>
                    </li>
                    <div class="nav-vl"></div>

                    <!--This is contact us nav bar-->
                    <li class="nav-item">
                        <a class="nav-link" href="ContactUs.php" >
                            <i class="fa fa-phone" aria-hidden="true"></i><strong>Contact-Us</strong>
                        </a>
                    </li>
                    <div class="nav-vl"></div>

                    <!--This is Signup nav bar-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i><strong>Signup</strong>
                        </a>
                    </li>
                    <div class="nav-vl"></div>

                    <!--This is login nav bar-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i><strong>Login</strong>
                        </a>
                    </li>
                    <div class="nav-vl"></div>


                    <!--This is list your properties nav bar-->
                    <li class="nav-item">
                        <a class="nav-link" href="listyourproperty.php">
                        <i class="fa fa-list-alt" aria-hidden="true"></i><strong>List your properties</strong>
                        </a>
                    </li>


                <?php
                } else {
                ?>
                    <div class='nav-name'>
                        Hi, <?php echo $_SESSION["full_name"] ?>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-user"></i>Dashboard
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</div>

<div id="loading">
</div>
