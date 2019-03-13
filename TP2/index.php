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
        echo "<p>a) Display days in the following way</p>";
        $day = array('Monday','Tuesday','Wenesday','Thursday','Friday','Saturday','Sunday');
        for ($i=0; $i < 7; $i++) { 
            # code...
            echo "<li>".$day[$i]."</li>";
        }
        echo "<br>b) Underline the curent day of week<br>";
        function underline(){
            $day = array('Monday','Tuesday','Wenesday','Thursday','Friday','Saturday','Sunday');
            for ($i=0; $i < 7; $i++) { 
                if($day[$i]==date("l")){
                    echo "<u>".$day[3]."</u><br>";
                }
                else{
                    echo $day[$i]."<br>";
                }
            }
        }
        underline();
    ?>
    <hr>
    <p>Exercise:8</p>
    <?php
        $countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
        "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
        "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
        "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
        "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
        "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
        "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
        "Austria" => "Vienna", "Poland"=>"Warsaw");

        asort($countries); //sort the value
        ksort($countries); // sort the main of value

        foreach($countries as $value => $x_value) {
            echo "<i>The capital of ".$value." is ".$x_value."</i><br>";
        }
    ?>
    <hr>
    <p>Exercise 9: Create a program to print out the pyramid of star:</p>
    <?php
        for ($g=0; $g < 4; $g++) {
            for ($i=4; $i > $g; $i--) { 
                echo "&nbsp ";
            }
            for ($j=($g*2+1); $j > 0; $j--) {
                echo "*";
            }
            echo"<br>";
        }
    ?>
    <hr>
    <p>Exercise 10: We have the second degree equation: aX<sup>2</sup>+ bX + c = 0.</p>
    <form action="" method="POST">
        <input type="text" name="val-a" placeholder="a" style="width:20px;outline:none">
        <label for="">X<sup>2</sup> + </label>
        <input type="text" name="val-b" placeholder="b" style="width:20px;outline:none">
        <label for=""> + X</label>
        <input type="text" name="val-c" placeholder="c" style="width:20px;outline:none">
        <label for=""> = 0</label>
        <button type="submit">Calculate</button>
    </form>
    <?php
        $a = $_POST['val-a'];
        $b = $_POST['val-b'];
        $c = $_POST['val-c'];
        if($a==0){
            $x = (-1)*($c/$b);
            echo "<br>Answer<br><label>X</label> = ".$x;
        }
        else{
            $x1 = (-$b+sqrt($b*$b-4*$a*$a))/2*$a;
            $x2 = (-$b-sqrt($b*$b-4*$a*$a))/2*$a;
            echo "<br>Answer<br><label>X1</label> = ".$x1."<br>";
            echo "<label>X2</label> = ".$x2;
        }
    ?>
    <hr>
</body>
</html>