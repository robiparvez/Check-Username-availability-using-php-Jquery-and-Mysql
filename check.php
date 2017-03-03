<?php

$con = mysqli_connect("localhost", "root", "", "webslesson_1");

if (isset($_POST["usernamePost"]))
{
    $sql    = "SELECT * FROM tbl_user WHERE user_name='" . $_POST["usernamePost"] . "' ";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0)
    {

        echo '<span class="text-success">Username Available</span>';
    }
    else
    {
    	echo '<span class="text-danger">Username NOT vailable</span>';
    }
}
?>
