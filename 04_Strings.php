<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <h1>Strings in PHP</h1>
    <?php
        $str="This is a string";
        echo $str;
        echo "<br>";

        // String Length
        // $len=strlen($str);
        // echo "The length of the string is: ";
        // echo $len;
        
        // String Concatenation
        // echo "The length of the string is: ". $len;

        // Word Counter
        // echo "The number of words in the string is: ". str_word_count($str);

        // Reverse String
        // echo "The reverse string is: ". strrev($str);

        // Search Position of a Word
        // echo "The position of 'is' in the string is: ". strpos($str, "is");

        // Replace a word 
        echo "The string after replacing 'is' is: ". str_replace("is", "at", $str);
        
    ?>
</body>
</html>