<?php
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
    <title>Apartman Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="css/style.css"rel="stylesheet"/>
</head> <!--Head Open  Here-->
<body style="margin-top:50px;">
<?php
include('Menu Bar.php')
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--Slider Image Start Here-->
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!--Indicators Close Here-->

<!--    <!-- slides -->



</div>

<div class="container-fluid"id="red">
    <div class="container text-center">
        <h1>Welcome To <b>Apartman Booking</b></h1><hr><br>
        <div class="row">
            <div class="hov">


                <?php
                $sql=mysqli_query($con,"select * from rooms");
                while($r_res=mysqli_fetch_assoc($sql))
                {
                    ?>
                    <div class="col-sm-4">
                        <img src="image/rooms/<?php echo $r_res['image']; ?>"class="img-responsive thumbnail"alt="Image"id="img1"> <!--Id Is Img-->
                        <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
                        <p class="text-justify"><?php echo substr($r_res['details'],0,100); ?></p><br>
                        <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read more</a><br><br>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php
include('Footer.php')
?>
</body>
</html>