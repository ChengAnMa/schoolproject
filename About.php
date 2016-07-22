<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <Title>ICT-475 - Project - About</Title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?  //The end!! bootstrap  ?>
    <link href="custom.css" rel="stylesheet">
</head>
<body>




<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Project</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="ListIceCream.php">List Ice Cream</a></li>
                <li><a href="AddIceCream.php">Add Ice Cream</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="http://www.icecream.com/" target="_blank">Link</a></li>
            </ul>
        </div><!--/.nav-collapse -->

    </nav>

    <div class="divanimation">ICT-475 - Project - About</div>

    <div class="row">
        <div class="col-md-3">
            <div class="polaroid">
                <img src="image/cone1.jpg" alt="cone1" class="sepia" style="width:100%; border-radius:10px;">
                <div class="container_img">
                    <p>Mayfield hand dipped Ice Cream coming soon and home made waffle cones!﻿</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="polaroid">
                <img src="image/cone2.jpg" alt="cone2" style="width:100%; border-radius: 25px;">
                <div class="container_img">
                    <p>Top 10 Best Ice Cream Cone!</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="polaroid">
                <img src="image/cone3.jpg" alt="cone3" style="width:100%; border-radius:55px;">
                <div class="container_img">
                    <p>Caroline Sunshine Eats The Biggest Ice Cream Cone We've Seen</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <?php include('Favorite.php') ?>
        </div>
    </div>


    <div id="footer"><?php include('footer.php') ?></div>


</div>




</body>
</html>
