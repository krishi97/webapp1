<?php
if(!isset($_GET['uname'])){
    echo "FORBIDDEN";
    return false;
}
$uname = $_GET['uname'];

require_once('dbconnection.php');

$posts = new stdClass();
$query = "select * from userikigai where username = '{$uname}'";
$execute_query = @mysqli_query($con, $query);
$tot_rcd = @mysqli_num_rows($execute_query);
$rcd = ceil($tot_rcd/20);


if(isset($_GET['page'])){
  $page = $_GET['page'];
}else{
  $page = "";
}

if($page=="" || $page==1){
  $page_1 = 0;
}else{
  $page_1 = ($page * 20) - 20;
}

$query = "select * from userikigai  where username = '{$uname}' limit $page_1, 20";
$execute_query = @mysqli_query($con, $query);
if($execute_query){
  while($temp = @mysqli_fetch_array($execute_query)){
    //print_r(json_encode($temp));
    $posts->username[] = $temp['username'];
    $posts->date[] = $temp['date'];
    $posts->ikigai[] = $temp['ikigai'];
  }

?>
<script>
var posts = new Object();
posts = <?php print_r(json_encode($posts)); ?>;
console.log(posts);
</script>

<?php
  }
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
                        <a href="publicpage.php?uname=<?php echo $uname ?>">Home</a>
                    </li>
                    <li>
                        <a href="viewikigai.php?uname=<?php echo $uname ?>">
                            <p>Your Past Ikigai's</p>
                        </a>
                    </li>
                    <li>
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
            <table id="table-tag" class="table table-striped" align="center">
                <thead class="primary" style="background-color: #f96332; font-weight: bolder" align="center">
                    <tr>
                        <th><b>#</b></th>
                        <th><b>Username</b></th>
                        <th><b>Date</b></th>
                        <th><b>Ikigai Conslusion</b></th>
                    </tr>
                </thead>
                <tbody class="table-body-tag" align="center">
                    <!-- <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>X</td>
                        </tr>   -->
                </tbody>
            </table><br><br>

            <!-- Pagination -->
            <div class="row">
                <div class="col-4"></div>
                <div class="col-5 section-pagination">
                    <ul class="pagination pagination-primary">

                    </ul>
                </div>
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
    for (var i = 0; i < posts['username'].length; i++) {
        var html =
            '<tr id="table-row-tag-%id%"><td>%id%</td><td>%username%</td><td>%date%</td><td>%ikigai%</td></tr>';

        var newhtml = html.replace('%id%', i + 1);
        newhtml = newhtml.replace('%id%', i + 1);
        newhtml = newhtml.replace('%username%', posts['username'][i]);
        newhtml = newhtml.replace('%date%', posts['date'][i]);
        newhtml = newhtml.replace('%ikigai%', posts['ikigai'][i]);


        document.querySelector('.table-body-tag').insertAdjacentHTML('beforeend', newhtml);
    }
    </script>

    </div>
</body>

</html>