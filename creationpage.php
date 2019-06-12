<?php
if(!isset($_GET['uname'])){
    echo "FORBIDDEN";
    return false;
}
$uname = $_GET['uname'];
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
                    <li>
                        <a href="publicpage.php?uname=<?php echo $uname ?>">Home</a>
                    </li>
                    <li>
                        <a href="viewikigai.php?uname=<?php echo $uname ?>">
                            <p>Your Past Ikigai's</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="creationpage.php?uname=<?php echo $uname ?>">
                            <p>Create New Ikigais</p>
                        </a>
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
                        <a class="navbar-brand" href="index.php">Logout</a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-lg">
                <img src="src/img/ikigai.png" alt="ikigai image"
                    style="height:400px;width:700px;margin-top:-100px;margin-left:300px">
            </div>
            <div class="container-fluid cbclass">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header">
                                <p>Select you passion:</p>
                                <p>(Things that you love doing)</p>
                            </div>
                            <div class="card-body">
                                <select id="sel-1-tag">
                                    <option default value="Select Your Option">Select Your Option</option>
                                    <option value="Web Designing">Web Designing</option>
                                    <option value="Hacking">Hacking</option>
                                    <option value="Networking">Networking</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header">
                                <p>Select your abilities:</p>
                                <p>(Things that you do with ease)</p>
                            </div>
                            <div class="card-body">
                                <select id="sel-2-tag">
                                    <option default value="Select Your Option">Select Your Option</option>
                                    <option value="Creating Designs">Creating Designs</option>
                                    <option value="Breaking Codes">Breaking Codes</option>
                                    <option value="Hardware">Hardware</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header">
                                <p>Select your work</p>
                                <p>(The service that you are doing)</p>
                            </div>
                            <div class="card-body">
                                <select id="sel-3-tag">
                                    <option default value="Select Your Option">Select Your Option</option>
                                    <option value="Web Designer">Web Designer</option>
                                    <option value="Cybersecurity Engineer">Cybersecurity Engineer</option>
                                    <option value="Network Engineer">Network Engineer</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-header">
                                <p>Select what the world needs:</p>
                                <p>(Things needed to make the world a better place)</p>
                            </div>
                            <div class="card-body">
                                <select id="sel-4-tag">
                                    <option default value="Select Your Option">Select Your Option</option>
                                    <option value="User Friendly Applications">User Friendly Applications</option>
                                    <option value="Safe Internet">Safe Internet</option>
                                    <option value="Faster Networking">Faster Networking</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="insert-div-tag-1" class="row">
                <div class="col-5"></div>
                <button id="insert-btn-tag-1" name="insert-btn-tag-1" class="btn btn-primary col-2"
                    style="width: 200px;">Insert</button>
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
    /*Insert event*/
    document.getElementById("insert-btn-tag-1").addEventListener('click', () => {
        //console.log('clicked');
        insertbtn();
    });

    /*Button for inserting*/
    var insertbtn = () => {
        var o1 = document.getElementById('sel-1-tag').value;
        var o2 = document.getElementById('sel-2-tag').value;
        var o3 = document.getElementById('sel-3-tag').value;
        var o4 = document.getElementById('sel-4-tag').value;
        var result;

        if (o1 == "Web Designing" && o2 == "Creating Designs" && o3 == "Web Designer" && o4 ==
            "User Friendly Applications") {
            result = "Perfect Being";
        } else if (o1 == "Hacking" && o2 == "Breaking Codes" && o3 == "Cybersecurity Engineer" && o4 ==
            "Safe Internet") {
            result = "Perfect Being";
        } else if (o1 == "Networking" && o2 == "Hardware" && o3 == "Network Engineer" && o4 ==
            "Faster Networking") {
            result = "Perfect Being";
        } else if (o1 == "Web Designing" && o2 == "Creating Designs" || o1 == "Hacking" && o2 == "Breaking Codes" ||
            o1 == "Networking" && o2 == "Hardware") {
            result = "Mission";
        } else if (o2 == "Creating Designs" && o3 == "Web Designer" || o2 == "Breaking Codes" && o3 ==
            "Cybersecurity Engineer" || o2 == "Hardware" && o3 == "Network Engineer") {
            result = "Vocation";
        } else if (o3 == "Web Designer" && o4 == "User Friendly Applications" || o3 == "Cybersecurity Engineer" &&
            o4 == "Safe Internet" || o3 == "Network Engineer" && o4 == "Faster Networking") {
            result = "Profession";
        } else if (o4 == "User Friendly Applications" && o1 == "Web Designing" || o4 == "Safe Internet" && o1 ==
            "Hacking" || o4 == "Faster Networking" && o1 == "Networking") {
            result = "Passion";
        } else {
            result = "Sorry Try Again";
        }

        var uname = '<?php echo $uname ?>';

        $.post('creationpagedb.php', {
            result,
            uname
        }, (data) => {
            if (data === 's') {
                console.log('success');
                location.reload();
            } else {
                errorTxt = data;
                console.log(data);
            }
            //console.log(data);
        });

    }
    </script>

    </div>
</body>

</html>