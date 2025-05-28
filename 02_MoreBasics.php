<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 80%;
            background-color: grey;
            margin: auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's learn about PHP</h1>
        <!-- <p>Your party status is below: </p> -->
        <?php

            // Conditional Statements
            
            // $age=7;
            // if($age>18){
            //     echo "You can go to the party";
            // }
            // else if($age==7) {
            //     echo "You are 7 years old";
            // }
            // else {
            //     echo "You cannot go to the party";
            // }

            // Loops

                // While Loop 
                // $a=0;
                // while($a<=10) {
                //     echo "The value of a is: ";
                //     echo $a;
                //     echo "<br>";
                //     $a++;
                // }

                // Do While Loop

                // $languages=array("Python", "C++", "PHP", "NodeJS");
                // $a=0;
                // do {
                //     echo "The value of language is: ";
                //     echo $languages[$a];
                //     echo "<br>";
                //     $a++;
                // } while($a<count($languages));
                
                // For Loop

                // for ($a=0; $a < 10; $a++) { 
                //     echo "The value of a is: ";
                //     echo $a;
                //     echo "<br>";
                // }

                // For Each Loop 

                $languages=array("Python", "C++", "PHP", "NodeJS");
                foreach ($languages as $value) {
                    echo "The value of language is ";
                    echo $value;
                    echo "<br>";
                }

        ?>
    </div>
</body>
</html>