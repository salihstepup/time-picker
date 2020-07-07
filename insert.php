
<?php
if(isset($_POST['insert']) && !empty($_POST['time'])){
    //db details
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'task5';
    
    //Connect and select the database
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Insert datetime into the database
    $time = $db->real_escape_string($_POST['time']);
    $insert = $db->query("INSERT INTO picker (time) VALUES ('".$time."')");
    
    //Insert status
    if($insert){
        echo 'Event data inserted successfully';
    }else{
        echo 'Failed to insert event data.';
    }
}
?>