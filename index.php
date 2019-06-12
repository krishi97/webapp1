<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="./src/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Ikigai
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="./src/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./src/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./src/demo/demo.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" rel="stylesheet" type="text/css">
    <link href="src/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="src/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" type="text/css">
    <link href="src/demo/demo.css" rel="stylesheet" type="text/css">
</head>


<body class="body">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
                    <b>Ikigai</b></a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav" id="nav-ul">
                    <li class="active">
                        <a href="./index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-lg">
                <span id="span-itname-tag" class="error-tag"
                    style="color:red; margin-left: 580px; "><b>Error:<b>&nbsp;&nbsp;<span
                                id="JS-control-tag"></span></span>
                <!-- <form id="loginForm" action="logindb.php" method="POST"> -->
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-1 form-p-tag">
                        Username
                    </div>
                    <div class="col-3" id="div-username-tag">
                        <input type="text" id="username-input-tag" class="form-control" placeholder="Username"
                            autocomplete="off">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-1 form-p-tag">
                        Password
                    </div>
                    <div class="col-3" id="div-password-tag">
                        <input type="text" id="password-input-tag" class="form-control" placeholder="Password"
                            autocomplete="off">
                    </div>
                </div><br>
                <div class="row justify-content-center">
                    <div class="col-1">
                    </div>
                    <div class="col-1">
                        <button id="login-btn-tag" name="login-btn-tag" class=" btn btn-primary">Login</button>
                    </div>
                    <div class="col-1">
                        <!-- Only to reset the text's -->
                        <button id="reset-btn-tag" class=" btn btn-primary">Reset</button>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-2">
                    </div>
                    <div class="col-3 form-p-tag">
                        Not a user <a href="register.php">Register</a>
                    </div>
                </div>
                <!-- </form> -->
            </div>

            <footer class="footer">
                <div class="container-fluid"></div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./src/js/core/jquery.min.js"></script>
    <script src="./src/js/core/popper.min.js"></script>
    <script src="./src/js/core/bootstrap.min.js"></script>
    <script src="./src/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Chart JS -->
    <script src="./src/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="./src/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./src/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>

    <script>
    /*Login btn*/
    document.getElementById("login-btn-tag").addEventListener('click', (e) => {
        //e.preventDefault();
        loginbtn();
    });
    var loginbtn = () => {
        var username = document.getElementById('username-input-tag').value;
        var password = document.getElementById('password-input-tag').value;

        //validation
        if (!(username)) {
            errorTxt = 'Enter Username';
            errorprint(errorTxt);
            return false;
        }
        if (!(password)) {
            errorTxt = 'Enter Password';
            errorprint(errorTxt);
            return false;
        }
        $.post('logindb.php', {
            username,
            password
        }, (data) => {
            if (data === 's') {
                window.location.replace("publicpage.php?uname=" + username);
            } else {
                errorTxt = data;
                errorprint(errorTxt);
            }
            //console.log(data);
        });
    }

    //JS error printing
    var errorprint = (e) => {
        if (errorTxt) {
            // console.log('function opened');
            document.querySelector('#span-itname-tag').style.visibility = 'visible';
            document.querySelector('#JS-control-tag').innerHTML = errorTxt;
        } else {
            document.querySelector('#span-itname-tag').style.visibility = 'hidden';
        }
    }
    </script>

    </div>
</body>

</html>