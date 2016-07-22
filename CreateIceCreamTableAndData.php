<?php
// DB connection info
include 'DatabaseCredentials.php';

echo "<h2>Starting To create all needed tablse and data for Project.</h2>\n\n";

try{
    $conn = new PDO( "mysql:host=$hostname;dbname=$databasename", $username, $password);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


    echo "<p>&nbsp;</p>\n\n";
    echo "<p>&nbsp;</p>\n\n";
    echo "<p>&nbsp;</p>\n\n";
    echo "<hr size='5'>\n\n";
    echo "<h2>Starting to create Table Table_Project_Base.<br>\n\n";
    #base_id_db INT NOT NULL AUTO_INCREMENT,
    $sql = "CREATE TABLE Table_Project_Base(
                base_id_db INT NOT NULL,
                PRIMARY KEY(base_id_db),
                base_name VARCHAR(30),
                base_date_created DATE)";
    $conn->query($sql);

    echo "Table Table_Project_Base created successfully.</h2>\n\n";

    echo "<p>Adding Vanilla Base Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_Base (base_id_db, base_name, base_date_created) VALUES ('1','Vanilla', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Chocolate Base Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_Base (base_id_db, base_name, base_date_created) VALUES ('2','Chocolate', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Mint Base Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_Base (base_id_db, base_name, base_date_created) VALUES ('3','Mint', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Watermelon Base Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_Base (base_id_db, base_name, base_date_created) VALUES ('4','Watermelon', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Cherry Base Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_Base (base_id_db, base_name, base_date_created) VALUES ('5','Cherry', '2014-07-01')";
    $conn->query($sql);

    echo "All Base Records successfully added.</p>\n\n";






    echo "<p>&nbsp;</p>\n\n";
    echo "<p>&nbsp;</p>\n\n";
    echo "<p>&nbsp;</p>\n\n";
    echo "<hr size='5'>\n\n";
    echo "<h2>Starting to create Table Table_Project_AddIn.<br>\n\n";
    #addin_id_db INT NOT NULL AUTO_INCREMENT,
    $sql = "CREATE TABLE Table_Project_AddIn(
                addin_id_db INT NOT NULL,
                PRIMARY KEY(addin_id_db),
                addin_name VARCHAR(30),
                addin_date_created DATE)";
    $conn->query($sql);

    echo "Table Table_Project_AddIn created successfully.</h2>\n\n";

    echo "<p>Adding None AddIn Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_AddIn (addin_id_db, addin_name, addin_date_created) VALUES ('1','None', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Chocolate Chips AddIn Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_AddIn (addin_id_db, addin_name, addin_date_created) VALUES ('2','Chocolate Chips', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Bing Cherries AddIn Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_AddIn (addin_id_db, addin_name, addin_date_created) VALUES ('3','Bing Cherries', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Nuts AddIn Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_AddIn (addin_id_db, addin_name, addin_date_created) VALUES ('4','Nuts', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Marshmallow AddIn Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_AddIn (addin_id_db, addin_name, addin_date_created) VALUES ('5','Marshmallow', '2016-04-23')";
    $conn->query($sql);

    echo "Adding Peanut Butter Cup AddIn Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_AddIn (addin_id_db, addin_name, addin_date_created) VALUES ('6','Peanut Butter Cups', '2015-10-17')";
    $conn->query($sql);

    echo "Adding Brownie AddIn Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_AddIn (addin_id_db, addin_name, addin_date_created) VALUES ('7','Brownies', '2014-07-01')";
    $conn->query($sql);

    echo "Adding Carmel AddIn Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_AddIn (addin_id_db, addin_name, addin_date_created) VALUES ('8','Carmel', '2015-02-16')";
    $conn->query($sql);

    echo "All AddIn Records successfully added.</p>\n\n";








    echo "<p>&nbsp;</p>\n\n";
    echo "<p>&nbsp;</p>\n\n";
    echo "<p>&nbsp;</p>\n\n";
    echo "<hr size='5'>\n\n";
    echo "<h2>Starting to create Table Table_Project_IceCream.<br>\n\n";
    $sql = "CREATE TABLE Table_Project_IceCream(
                icecream_id_db INT(11) NOT NULL AUTO_INCREMENT,
                icecream_name VARCHAR(30),
                icecream_base_id_db INT,
                icecream_addin_id_db INT,
                icecream_date_created DATE,
                PRIMARY KEY (icecream_id_db))";
    $conn->query($sql);

    echo "Table Table_Project_IceCream created successfully.</h2>\n\n";

    echo "<p>Adding Mint Chocolate Chip IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('1','Mint Chocolate Chip','3','2','2015-01-04')";
    $conn->query($sql);

    echo "Adding Cherry Jubilee IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('2','Cherry Jubilee','5','3','2016-01-12')";
    $conn->query($sql);

    echo "Adding Rocky Road IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('3','Rocky Road','2','4','2015-04-24')";
    $conn->query($sql);

    echo "Adding Vanilla IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('4','Vanilla','1','1','2015-09-07')";
    $conn->query($sql);

    echo "Adding Watermelon Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('5','Watermelon','4','2','2014-12-25')";
    $conn->query($sql);

    echo "Adding French Silk IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('6','French Silk','2','2','2016-03-29')";
    $conn->query($sql);

    echo "Adding Chocolate Peanut Butter Cup IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('7','Chocolate Peanut Butter Cup','2','6','2015-02-24')";
    $conn->query($sql);

    echo "Adding Brownie Cascade IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('8','Brownie Cascade','2','7','2015-06-28')";
    $conn->query($sql);

    echo "Adding Haleys Comet IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('9','Haleys Comet','2','8','2016-02-24')";
    $conn->query($sql);

    echo "Adding Chocolate IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('10','Chocolate','2','1','2015-11-01')";
    $conn->query($sql);

    echo "Adding Grasshopper IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('11','Grasshopper','3','7','2015-02-16')";
    $conn->query($sql);

    echo "Adding Cherry Vanilla IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('12','Cherry Vanilla','1','3','2014-07-01')";
    $conn->query($sql);

    echo "Adding Cherry Chip IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('13','Cherry Chip','1','2','2014-06-14')";
    $conn->query($sql);

    echo "Adding Chocolate Chunk IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('14','Chocolate Chunk','1','2','2015-05-18')";
    $conn->query($sql);

    echo "Adding Chocolate Brownie IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('15','Chocolate Brownie','2','7','2014-12-03')";
    $conn->query($sql);

    echo "Adding Vanilla Carmel IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('16','Vanilla Carmel','1','8','2015-07-07')";
    $conn->query($sql);

    echo "Adding Mint IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('17','Mint','3','1','2015-03-17')";
    $conn->query($sql);

    echo "Adding Cherry IceCream Record<br>\n\n";
    $sql = "INSERT INTO Table_Project_IceCream (icecream_id_db, icecream_name, icecream_base_id_db, icecream_addin_id_db, icecream_date_created) VALUES ('18','Cherry','5','1','2015-09-12')";
    $conn->query($sql);

    echo "All IceCream Records successfully added.</p>\n\n";


}
catch(Exception $e){
    die(print_r($e));
}
echo "<p>&nbsp;</p>\n\n";
echo "<p>&nbsp;</p>\n\n";
echo "<p>&nbsp;</p>\n\n";
echo "<hr size='5'>\n\n";
echo "<h2>Successfully created tables and added data.</h2>\n\n";

echo "<p><a href='index.php'>Return to Home Page.</a></p>\n\n";

?>