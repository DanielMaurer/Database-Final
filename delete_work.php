<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>DK Labs Delete Work</title>


</head>

<body>
    <main role="main" class="container-fluid">
	<h1> DK Labs Work Entry Results </h1>
<?php
    $workID=intval($_GET["workID"]);
   // echo"Delete isbn $isbn"; 
    
    //connect to the database
    @$db = new mysqli('localhost', 'dannymaurer', 'databasefinal', 'dkLabs');


    if ($db->connect_error) {
        die('Connect Error ' . $db->connect_errno . ': ' . $db->connect_error);
    }


    $query = "delete from work where workID=?"; 
    $stmt = $db->prepare($query);
    $stmt->bind_param("d", $workID);
    $stmt->execute();
    echo $stmt->affected_rows." work deleted from database";

    $db->close();
?>
    <br/
    ><a href="show_work.php">Show Work</a> // use a relative path, not a path to my directory
</main>
</body>

</html>
