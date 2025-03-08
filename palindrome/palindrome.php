<!DOCTYPE html>

    <html>
        <head>
            <meta charset="utf-8">
            <title>Is Palindrome?</title>
        </head>

        <body>
            <h1>Is It A Palindrome?</h1>

            <?php
                include("palindrome-functions.php");
                $sentence = $_POST['sentence'];

                $oldSentence = $sentence;
                $sentence = removePunctuation($sentence);
                $reverseSentence = strrev($sentence);

                print("Your sentence was: $oldSentence");

                if($sentence == $reverseSentence) 
                    print("<p>It is a palindrome!</p>"); 
                else 
                    print("<p>It is not a palindrome!</p>");
                
            ?>
        </body>

    </html>
