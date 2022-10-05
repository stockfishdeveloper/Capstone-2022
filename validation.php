<?php>

    session_start();

    if($_POST["username"] == "nick" && $_POST["password"] == "monkey")
        echo "success";
    else
        echo "failure";

?>