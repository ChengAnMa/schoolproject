<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <Title>ICT-475 - Project - Update Ice Cream</Title>

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

    <div class="divanimation">ICT-475 - Project - Update Ice Cream</div>

    <div class="row">
        <div class="col-md-8">

            <p>Fill in the following information, then click <strong>Add this is Ice Cream</strong> button.</p>
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

            $sql_base_select = "SELECT * FROM Table_Project_Base";
            $stmt_base = $conn->query($sql_base_select);
            $bases = $stmt_base->fetchAll();

            $sql_addin_select = "SELECT * FROM Table_Project_Addin";
            $stmt_addin = $conn->query($sql_addin_select);
            $addins = $stmt_addin->fetchAll();


            echo "<form method='post' action='AddIceCreamProcess.php' enctype='multipart/form-data' >\n";
            echo "Ice Cream Name: <input type='text' name='icecream_name' id='icecream_name'><br>\n";
            echo "&nbsp;<br>\n\n";


            echo "Ice Cream Base Flavor: \n";
            if(count($bases) > 0) {
                echo "<select name='icecream_base_id_db' id='icecream_base_id_db'>\n";
                foreach($bases as $base) {
                    echo "<option value=" . $base['base_id_db'];
                    if ($icecream['icecream_base_id_db']==$base['base_id_db']) {
                        echo ' selected="selected"';
                    } else {
                        //echo "<option value=" . $base['base_id_db'] . ">" . $base['base_name'] . "</option>\n";
                    }
                    echo ">" . $base['base_name'] . "</option>\n";
                }
                echo "</select>\n";
            } else {
                echo "<h2>That id number had no values associated with it. icecream_base_id_db</h2>";
            }
            echo "<br>\n";
            echo "&nbsp;</br>\n\n";



            echo "Ice Cream AddIn: \n";
            if(count($addins) > 0) {
                echo "<select name='icecream_addin_id_db' id='icecream_addin_id_db'>\n";
                foreach($addins as $addin) {
                    echo "<option value=" . $addin['addin_id_db'];
                    if ($icecream['icecream_addin_id_db']==$addin['addin_id_db']) {
                        echo ' selected="selected"';
                    } else {
                        //echo "<option value=" . $base['base_id_db'] . ">" . $base['base_name'] . "</option>\n";
                    }
                    echo ">" . $addin['addin_name'] . "</option>\n";
                }
                echo "</select>\n";
            } else {
                echo "<h2>That id number had no values associated with it. icecream_addin_id_db</h2>";
            }
            echo "</br>\n";
            echo "&nbsp;</br>\n\n";

            echo "<input type='submit' name='submit' value='Add this is Ice Cream' />\n";
            echo "</form>\n";

            echo "<p><a href='ListIceCream.php'>Return to List Ice Cream</a></p>\n\n";


            ?>


        </div>
        <div class="col-md-4"><?php include('Favorite.php') ?></div>
    </div>


    <div id="footer"><?php include('footer.php') ?></div>


</div>




</body>
</html>