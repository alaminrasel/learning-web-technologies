
<?php

if(isset($_POST['submit'])){

    $email 		=  $_POST['email'];

    if($email == ""){
        echo "Null submission...";
    }else{
        echo $email;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Email Input field</title>
</head>

<body>
    <form method="POST" action="#">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="email" value=""> <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>
