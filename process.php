<?php
    echo "Processing...";

    //Check for GET variables

    if(isset($_GET['name'])){
        echo 'GET: Your name is '.$_GET['name'];
    }
?>