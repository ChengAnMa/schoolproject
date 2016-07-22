<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <Title>ICT-475 - Project - Home Page</Title>

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

    <div class="divanimation">Ice Cream Project - Final</div>

    <div class="row">
        <div class="col-md-8">
            <img src="image/mixicecream.jpg" width="300px" style="border:2px solid #ddd; border-radius: 10px;  padding: 5px;">
            <p style="padding:25px 0px; color:#00168f;">"Ice cream (derived from earlier iced cream or cream ice) is a sweetened frozen food typically eaten as a snack or dessert. It is usually made from dairy products, such as milk and cream, and often combined with fruits or other ingredients and flavours. It is typically sweetened with sucrose, corn syrup, cane sugar, beet sugar, and/or other sweeteners. Typically, flavourings and colourings are added in addition to stabilizers. The mixture is stirred to incorporate air spaces and cooled below the freezing point of water to prevent detectable ice crystals from forming. The result is a smooth, semi-solid foam that is solid at very low temperatures (<35 °F / 2 °C). It becomes more malleable as its temperature increases."</p>
            <p style="font-weight:bold;">Reference  https://en.wikipedia.org/wiki/Ice_cream</p>
        </div>
        <div class="col-md-4"><?php include('Favorite.php') ?></div>
    </div>


    <div id="footer"><?php include('footer.php') ?></div>


</div>


</body>
</html>
