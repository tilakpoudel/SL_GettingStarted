<?php
if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
    // do user authentication as per your requirements
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Your task : TODO:: connect to the database and perform check with the data from the database table and return response.

    if($username ==="radha" && $password ==="krishna"){
            // ...
        // based on successful authentication
        echo json_encode(array('success' => 1));
    }else{
       echo json_encode(array('success' => 2));
    }
    
} else {
    echo json_encode(array('success' => 0));
}