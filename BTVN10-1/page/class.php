<?php
require(__DIR__."/../DBO.php");
$table = $_REQUEST["page"] ?? "class";
$sql = "SELECT * FROM $table";
$classList = getData($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js6.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <title>BTVN 10</title>
</head>
<body>
    
    <nav>
        <div class="logo">Văn Hoạt</div>
        <ul>
            <li><a href="#">Home</a></li>
            <li>
                <a href="#">Features</a>
                <ul>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Elements</a></li>
                    <li><a href="#">Icons</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Services</a>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">App Design</a></li>
                    <li>
                        <a href="#">More
                            <span class="fa fa-plus"></span>
                        </a>
                        <ul>
                            <li><a href="#">Submenu-1</a></li>
                            <li><a href="#">Submenu-2</a></li>
                            <li><a href="#">Submenu-3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="row">
        <div class="left-sidebar col-sm-2">
            <div class="list-group action-list" id="sidebar">
                <a href="#" class="list-group-item list-group-item-action active">
                  Danh mục
                </a>
                <a href="?page=class" class="list-group-item list-group-item-action">Danh sách lớp</a>
                <a href="?page=teacher" class="list-group-item list-group-item-action">Danh sách giáo viên</a>
                <a href="?page=student" class="list-group-item list-group-item-action">Danh sách học sinh</a>
            </div>
                <div class="card" style="width: 14rem;">
                    <img src="https://c.tenor.com/Q8mpXfSulAQAAAAC/%E1%BA%A3nh.gif" alt="Card image cap">
                </div>
        </div>
        <div class="main-page col-sm-10">
            <h3 class="title">Đây là trang danh sách lớp</h3>
            <div class="block">
                <?php
                    if(count($classList) > 0) {
                    
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Time</th>
                            <th scope="col">Quality</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                foreach($classList as $class) {
                                    $id = $class['id'] ?? "N/A";
                                    $name = $class['name'] ?? "N/A";
                                    $time = $class['time'] ?? "N/A";
                                    $quality = $class['quality'] ?? "N/A";
                                    
                                    echo "<tr>";
                                    echo "<th scope='row'>$id</th>";
                                    echo "<td>$name</td>";
                                    echo "<td>$time</td>";
                                    echo "<td>$quality</td>";
                                    echo "</tr>";
                                }
                            ?>
                    </tbody>
                </table>
                <?php
                } else {
                    echo "Danh sách lớp trống";
                }   
                ?>
            </div>
    </div>
    
</body>
</html>