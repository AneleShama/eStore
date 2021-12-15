<?php
    //include header.php file
    ob_start();
    include('header.php');

    //Include banner.php file
    include('Include/_banner-area.php');

    //Include top-sales.php file
    include('Include/_top-sales.php');

    //Include special.php file
    include('Include/_special.php');

    //Include adds.php file
    include('Include/_banner_adds.php');

    //Include new-phone.php file
    include('Include/_new-phone.php');

    //include footer.php file
    include('footer.php');
?>