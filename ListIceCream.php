<html>
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <Title>ICT-475 - Project - List Ice Cream</Title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?  //The end!! bootstrap  ?>
    <link href="custom.css" rel="stylesheet">
</head>

<style>
    tr {

    }
</style>

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

    <div class="divanimation">ICT-475 - Project - List Ice Cream</div>

    <div class="row">
        <div class="col-md-8">

            <?php

            // DB connection info
            include 'DatabaseCredentials.php';


            // Connect to database.
            try {
                $conn = new PDO( "mysql:host=$hostname;dbname=$databasename", $username, $password);
                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            catch(Exception $e){
                die(var_dump($e));
            }

            $sql_select = "SELECT * FROM Table_Project_IceCream, Table_Project_Base, Table_Project_AddIn WHERE icecream_base_id_db=base_id_db AND icecream_addin_id_db=addin_id_db ORDER BY icecream_name ASC";
            $stmt = $conn->query($sql_select);
            $icecreams = $stmt->fetchAll();


            if(count($icecreams) > 0) {
                echo "<table class=\"table table-hover\">\n\n";

                echo "<tr><th>IceCream Name</th>";
                echo "<th>Base Name</th>";
                echo "<th>AddIn Name</th>";
                echo "<th>IceCream Date Created</th>";
                echo "<th>Update</th>";
                echo "<th>Delete</th></tr>";

                foreach($icecreams as $icecream) {

                    echo "<tr><td>".$icecream['icecream_name']."</td>";
                    echo "<td>".$icecream['base_name']."</td>";
                    echo "<td>".$icecream['addin_name']."</td>";
                    echo "<td>".$icecream['icecream_date_created']."</td>";
                    echo "<td><a href='UpdateIceCream.php?id=".$icecream['icecream_id_db']."'><img src='image/upload.png' width='28px'></a></td>";
                    echo "<td><a href='DeleteIceCream.php?id=".$icecream['icecream_id_db']."'><img src='image/error.png' width='28px'></a></td></tr>";
                }
                echo "</table>";
            } else {
                echo "<h3>There was an error with Table_Project_IceCream.</h3>";
            }

            echo "<p>&nbsp;</p>\n\n";

            ?>
            
        </div>
        <div class="col-md-4"><?php include('Favorite.php') ?></div>
    </div>


    <div id="footer"><?php include('footer.php') ?></div>


</div>







</body>
</html>