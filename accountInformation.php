<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 3.9.2015.
 * Time: 21:19
 */

namespace root;

session_start();
$_SESSION["redirect"] = "accountinformation.php"

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>PKCalypso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/glavni.css" rel="stylesheet">
    <link href="css/levMeni.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
       queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page
       via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
            html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
            respond.min.js"></script>
    <![endif]-->
    <script>
        function findDancer(dancer) {
            if (dancer == "") {
                document.getElementById("fillWithAjax").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("fillWithAjax").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "ajaxFindDancer.php?dancer=" + dancer, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files
      as needed -->
<script src="bootstrap/js/bootstrap.js"></script>

<!-- Blok za meni telefona -->
<div class="container-fluid visible-xs">
    <div class="row">
        <nav role="navigation" class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand hidden-sm">PK Calypso</a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown-header hidden-sm">Account</li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <form class="navbar-form navbar-left" role="login">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-left" placeholder="Username">
                                    <input type="password" class="form-control pull-left" placeholder="password">
                                    <button type="submit" class="form-control">Login</button>
                                </div>
                            </form>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <form class="navbar-form navbar-left" role="register">
                                <div class="form-group">
                                    <input type="text" class="form-control pull-left" placeholder="Username">
                                    <input type="password" class="form-control pull-left" placeholder="password">
                                    <input type="text" class="form-control pull-left" placeholder="Firstname">
                                    <input type="text" class="form-control pull-left" placeholder="Lastname">
                                    <input type="text" class="form-control pull-left" placeholder="Email">
                                    <button type="submit" class="form-control">Register</button>
                                </div>
                            </form>
                        </ul>
                    </li>

                    <li class="divider"></li>
                    <li class="dropdown-header hidden-sm">Meni</li>
                    <li><a href="#">O nama</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Plesni Klub
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li class="dropdown-header"><a href="#">Instruktori</a></li>
                            <li><a href="#">Dragana Labudović</a></li>
                            <li><a href="#">Dusan Petronijević</a></li>
                            <li><a href="#">Ivana Zarić</a></li>

                            <li class="divider"></li>
                            <li class="dropdown-header"><a href="#">Takmicarski plesovi</a></li>
                            <li><a href="#" tabindex="-1">Lazar Ristić i Sanja Petrović</a></li>
                            <li><a href="#">Ognjen Dimovksi i Jana Spasović</a></li>
                            <li><a href="#">Dusan Petronijević i Ivana Zarić</a></li>

                            <li class="divider"></li>
                            <li><a href="#">Hip Hop</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Plesna Skola
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <li class="dropdown-header"><a href="#">Hitni casovi</a></li>
                            <li><a href="#">Za specijalne prilike</a></li>

                            <li class="divider"></li>
                            <li class="dropdown-header"><a href="#">Tecajevi</a></li>
                            <li><a href="#">Za odrasle</a></li>
                            <li><a href="#">Za decu</a></li>
                            <li><a href="#">Za Veterane</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Galerija</a></li>
                    <li><a href="#">Kontakt</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- /# Blok za meni telefona -->

<!-- Cover i Naslov, ne vidi se na telefonu -->
<div class="container hidden-xs">
    </br>
    <div class="row col-sm-12 col-md-12 col-lg-12">
        <div class="cover">
            <img src="images/header.jpg" class="center-block img-responsive">

            <div class="col">
                <div class="col-sm-12">
                    <h1 class="hidden-xs">PK Calypso</br>
                        <small>Plesni Klub Calypso</small>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /# Cover i Naslov, ne vidi se na telefonu -->

<!-- Meni za tablet -->
<div class="container visible-sm">
    <div class="row col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="rest/index.php">Home</a></li>
            <li><a href="#">O nama</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Plesni Klub<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown-header"><a href="#">Instruktori</a></li>
                    <li><a href="#">Dragana Labudović</a></li>
                    <li><a href="#">Dusan Petronijević</a></li>
                    <li><a href="#">Ivana Zarić</a></li>

                    <li class="divider"></li>
                    <li class="dropdown-header"><a href="#">Takmicarski plesovi</a></li>
                    <li><a href="#" tabindex="-1">Lazar Ristić i Sanja Petrović</a></li>
                    <li><a href="#">Ognjen Dimovksi i Jana Spasović</a></li>
                    <li><a href="#">Dusan Petronijević i Ivana Zarić</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Hip Hop</a></li>

                    <li class="divider"></li>
                    <li><a href="#">Lationo Dance Aerobik</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Plesna Skola<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown-header"><a href="#">Hitni casovi</a></li>
                    <li><a href="#">Za specijalne prilike</a></li>

                    <li class="divider"></li>
                    <li class="dropdown-header"><a href="#">Tecajevi</a></li>
                    <li><a href="#">Za odrasle</a></li>
                    <li><a href="#">Za decu</a></li>
                    <li><a href="#">Za Veterane</a></li>
                </ul>
            </li>
            <li><a href="#">Galerija</a></li>
            <li><a href="#">Kontakt</a></li>
            <li class="dropdown pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown-header">Login</li>
                    <li>
                        <form class="navbar-form" role="login">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="enter your username">
                                <input type="password" class="form-control" placeholder="enter you passwod">
                                <button type="submit" class="form-control">Login</button>
                            </div>
                        </form>
                    </li>

                    <li class="divider"></li>
                    <li class="dropdown-header">Register</li>
                    <li>
                        <form class="navbar-form" role="register">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username">
                                <input type="password" class="form-control" placeholder="Password">
                                <input type="text" class="form-control" placeholder="Firstname">
                                <input type="text" class="form-control" placeholder="Lastname">
                                <input type="text" class="form-control" placeholder="Email">
                                <button type="submit" class="form-control">Register</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /# Meni za tablet -->

<!-- Blok za dekstop meni -->
<div class="container visible-md visible-lg">
    <div class="row col-md-12 col-lg-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="danceingclubs.php">Plesni Klubovi</a></li>
            <li><a href="finddancer.php">Trazi Igraca</a></li>
            <li><a href="register.php">Registujte Klub</a></li>
            <li><a href="#">O nama</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Plesni Klub<span class="caret"></span></a>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Instruktori</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" tabindex="-1">Dragana Labudović</a></li>
                            <li><a href="#">Dusan Petronijević</a></li>
                            <li><a href="#">Ivana Zarić</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Takmicarski plesovi</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" tabindex="-1">Lazar Ristić i Sanja Petrović</a></li>
                            <li><a href="#">Ognjen Dimovksi i Jana Spasović</a></li>
                            <li><a href="#">Dusan Petronijević i Ivana Zarić</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Hip Hop</a></li>
                    <li><a href="#">Lationo Dance Aerobik</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Plesna Skola<span class="caret"></span></a>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li><a href="#">Za specijalne prilike</a></li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Tecajevi</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">Za odrasle</a></li>
                            <li><a href="#">Za decu</a></li>
                            <li><a href="#">Za Veterane</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Galerija</a></li>
            <li><a href="#">Kontakt</a></li>
            <?php
            if (empty($_SESSION["username"]) or empty($_SESSION["password"])) {
                echo "<li><a href='login.php'>Log in</a></li>";
            } else {
                echo '
                    <li class="dropdown"">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Information<span class="caret"></span></a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="accountInformation.php">My information</a></li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Change</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" tabindex="-1">Change Account Information</a></li>
                                    <li><a href="#">Change Username</a></li>
                                    <li><a href="#">Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>';
            }
            ?>
        </ul>
    </div>
</div>
<!-- /# Blok za dekstop meni -->

<!-- Body -->
<div class="container">

    <div class="row col-sm-12 col-md-12">
        <?php
        if (!empty($_SESSION["usernmae"])) {
            echo "Majcicu, ovde ide tabela, url ti se nalazi u komentaru ispod :D";
            /*
            $username = $_GET["dancer"];
            $url = "http://localhost/IS%20PK%20Calypso/PS-PKCalypso/rest/dancer/json/" . $username;

            $curl = curl_init();

            curl_setopt($curl, CURLOPT_URL, $url); //Url together with parameters
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, false);
            $curl_odgovor = curl_exec($curl);
            curl_close($curl);
            $curl_odg = json_decode($curl_odgovor);

            $dance->setId($curl_odg->{'d_id'});
            $dance->setFirstname($curl_odg->{'d_first_name'});
            $dance->setLastname($curl_odg->{'d_last_name'});
            $dance->setEmail($curl_odg->{'d_email'});
            $dance->setCoutry($curl_odg->{'d_country'});
            $dance->setPassword($curl_odg->{'d_password'});
            $dance->setUsername($curl_odg->{'d_username'});
            $dance->setGender($curl_odg->{'d_gender'});
            $dance->setNationality($curl_odg->{'d_nationality'});
            $danceClub->setId($curl_odg->{'d_club'}->{'dc_id'});
            $danceClub->setTitle($curl_odg->{'d_club'}->{'dc_title'});
            $danceClub->setAddress($curl_odg->{'d_club'}->{'dc_address'});
            $danceClub->setEmail($curl_odg->{'d_club'}->{'dc_email'});
            $danceClub->setCoutry($curl_odg->{'d_club'}->{'dc_country'});
            $danceClub->setCity($curl_odg->{'d_club'}->{'dc_city'});
            $danceClub->setWebSite($curl_odg->{'d_club'}->{'dc_web_site'});
            echo "Majcicuuuuu, ovde ide tabela zapravo.";
             */
        }
        ?>
    </div>

</div>
<!-- /# Body -->


</body>
</html>