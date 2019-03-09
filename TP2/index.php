<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP2_NOP_PHEARUM</title>
</head>
<body>
    <p>Exercise:1</p>
    <p>
        <?php
            $str = "Hello World";
            echo "Display string uppercase: ";
            echo strtoupper($str);
            echo "<br>Display String lowercase: ";
            echo strtolower($str);
            ?>
    </p>
    <hr>
    <p>Exercise:2</p>
    <p>
        <?php
        $name = "Jonh";
        echo "Hello ".$name."<br>";
        echo "Hello {$name}";
        ?>
    </p>
    <hr>
    <p>Exercise:3</p>
    <p>
        <?php
        $sample = "The str_replace method is used to perform replacement in targeted string by thegiven search term. <br> The str_replace is case-sensitive function";
        echo str_replace('str_replace','Replace',$sample);
        ?>
    </p>
    <hr>
    <p>Exercise:4</p>
    <p>
        <p>Function to check a number is prime or not</p>
        <?php
            function checkPrime($prime){
                if($prime%2 != 0 && $prime > 1 && $prime/$prime != 1){
                    echo "Number $prime is prime number";
                }
                else{
                    echo "Number $prime is not prime number";
                }
            }
            checkPrime(9);
        ?>
    </p>
    <hr>
    <p>Exercise:5</p>
    <p>
        <?php
        function reversString($str){
            $len = strlen($str);
            $revers = str_split($str);
            for($i = $len; $i >= 0; $i--){
                echo $revers[$i];
            }
        }
        reversString("Hello World");
        ?>
    </p>
    <hr>
    <p>Exercise:6</p>
    <p>
        <p>String Palindrome</p>
        <?php
            function palindrome($str){
                $len = strlen($str);
                $strrevers = str_split($str);
                $len = sizeof($strrevers);
                $reverseStr ="";

                for($i=$len-1; $i>=0; $i--){
                    $reverseStr .=$strrevers[$i];
                }
                if ($reverseStr == $str) {
                    echo " $str is a palindrome";
                } else {
                    echo " $str is not a palindrome";
                }
            }
            palindrome("hello");
            echo "<br>";
            palindrome("hahah");
        ?>
    </p>
    <hr>
    <p>Exercise:7</p>
    <?php
    
    ?>
    <hr>
    <p>Exercise:8</p>
    <?php
    
    ?>
    <hr>
    <p>Exercise:9</p>
    <?php
    
    ?>
    <hr>
    <p>Exercise:10</p>
    <?php
    
    ?>
    <hr>
</body>
</html>