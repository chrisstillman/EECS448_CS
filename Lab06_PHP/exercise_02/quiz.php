<html>
    <body>
        <h1>Quiz Submission</h1>
        <?php
        $numCorrect = 0;
        $question1 = $_POST["color1"];
        $question2 = $_POST["color2"];
        $question3 = $_POST["color3"];
        $question4 = $_POST["color4"];
        $question5 = $_POST["color5"];
        
        
        echo "<br><h4>Question 1</h4>";
        echo "You answered: ".$question1;
        if($question1 == "Red") {
            $numCorrect++;
            echo "<br>Correct!";
        } else {
            echo "<br>Correct answer: Red";
        }

        echo "<br><h4>Question 2</h4>";
        echo "You answered: ".$question2;
        if($question2 == "Yellow") {
            $numCorrect++;
            echo "<br>Correct!";
        } else {
            echo "<br>Correct answer: Yellow";
        }

        echo "<br><h4>Question 3</h4>";
        echo "You answered: ".$question3;
        if($question3 == "Blue") {
            $numCorrect++;
            echo "<br>Correct!";
        } else {
            echo "<br>Correct answer: Blue";
        }

        echo "<br><h4>Question 4</h4>";
        echo "You answered: ".$question4;
        if($question4 == "Green") {
            $numCorrect++;
            echo "<br>Correct!";
        } else {
            echo "<br>Correct answer: Green";
        }

        echo "<br><h4>Question 5</h4>";
        echo "You answered: ".$question5;
        if($question5 == "Orange") {
            $numCorrect++;
            echo "<br>Correct!";
        } else {
            echo "<br>Correct answer: Orange";
        }

        echo "<h3>".$numCorrect." answers were correct</h3>";
        echo "<h3>Your score: ".(($numCorrect/5)*100)."%</h3>";
        ?>
    </body>
</html>