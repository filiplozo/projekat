<?php
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
    mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");
    $msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
    <div class="container-fluid">
        <div class="col-sm-4 hov">
            <img src="logo/logo.png"width="200px"height="50px"/><br><br>
<!--            <p class="text-justify">A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, a flat screen television, and en-suite bathrooms. Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business center</p><br>-->
<!--            <center><a href="../about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>-->
<!--            --><?php
//            include('Social ican.php')
//            ?>
        </div>&nbsp;&nbsp;
        <br> <br>
        <br> <br>
        <div class="col-sm-4 text-justify">
            <h3 style="color:#cdd51f;">Contact Us</h3>
            <p style="color:white;"><strong>Address: </strong>lallalalla</p>
            <p style="color:white;"><strong>Email-Id:&nbsp;</strong>klllalalal</p>
            <p style="color:white;"><strong>Contact Us:&nbsp;</strong>lallalalal</p><br><br><br>

        </div>&nbsp;



    </div>
</footer>

<div id="detection">
    <?php
    $header_ua = strtolower($_SERVER['HTTP_USER_AGENT']);
    $keywords = array("nokia","samsung","sonyericsson","alcatel","panasonic","tosh","benq","sagem","android","iphone","berry","palm","mobi","lg","symb");
    $mobile = false;
    $match = "";

    foreach($keywords as $keyword)
    {
        if(strpos($header_ua,$keyword)!==false)
        {
            $mobile = true;
            $match = $keyword;
            break;
        }
    }
    echo "<p><b>You are using :</b> $header_ua</b>";

    if($mobile)
        echo "<p>You are using mobile device. (Your device is : $match)</p>";
    else
        echo "<p>You are not using mobile device.</p>"
    ?>

<footer class="container-fluid text-center"style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
    <p> All Rights Reserved 2020</p>
</footer>

