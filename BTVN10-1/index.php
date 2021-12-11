<?php
if (array_key_exists('page', $_REQUEST)) {
    $mainPage = $_REQUEST['page'];
    switch ($mainPage) {
        case 'teacher':
            require __DIR__."/page/teacher.php";
            break;
        case 'student';
            require __DIR__."/page/student.php";
            break;
        default:
            require __DIR__."/page/class.php";
    }
} else {
    require __DIR__."/page/class.php";
}
?>