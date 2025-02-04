<!DOCTYPE html>
      
<html>
    <head>
      <title>Wage Report</title>
      <link rel ="stylesheet" type="text/css" href="sample.css">
    </head>
    <body>
      <h1>index</h1>
      
        <?php
        
        include("functions/students-functions.php");
        $students = [ 
                      ["name" => "Jose","score" => 89], 
                      ["name" => "Josh", "score" => 90],
                     ["name" => "Micah", "score" => 78]
        ];

        $updatedStudents = addBonusPoints($students);

        addBonusPointsByReference($students);
        
        echo "Original Scores after Pass by Value:<br>";
       print_r($updatedStudents);

        print("<br><br>");

       echo "Original Scores after Pass by Reference:<br>";
      print_r($students);

        ?>
    </body>
  </html>
