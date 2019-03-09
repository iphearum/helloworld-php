<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestPHP</title>
</head>
<body>
    <h1>Hello 
    <?php
        $hi = "World";
        echo $hi;
    ?>
    </h1>
    <h1>This is a function<br>
        <?php
            function infor($name,$job){
                echo "My name is $name, I am a $job";
            }
            infor("phearum","student");
        ?>
    </h1>
    <hr>
    <form action="displayname.php" method="POST">
        <h2>what is your name?</h2>
        <input type="text" name="inputname" placeholder="input your name" required>
        <button>Submit</button>
    </form>
</body>
</html>