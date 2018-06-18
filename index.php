<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Exercises</title>
</head>
<body>
    <?php 
        $name = "Tim";
        echo "<h3>Exercise 1</h3>";
        echo "<div id=\"header\"><h1>My name is {$name}<h1></div>";


        echo "<h3>Exercise 2/3</h3>";
        $current_day_of_the_week = date('w');
        // function to create a date
        $my_date = date_create("2018-06-19");

        // Function to get a day of the week for desired date.
        function get_day_of_the_week($date) {
            echo date('w', strtotime($date));
        }
        $my_date_string = date_format($my_date,"Y/m/d");
        // get_day_of_the_week($my_date_string);


        if ($current_day_of_the_week == 1) {
            echo "Happy Monday";
        } elseif ($current_day_of_the_week == 2) {
            echo "Have a nice day";
        }

        echo "<br>";

        switch ($current_day_of_the_week) {
            case 1:
                echo "Today is Monday";
                break;

            case 2:
                echo "Today is Tuesday";
                break;
            
            case 3:
                echo "Today is Wednesday";
                break;

            case 4:
                echo "Today is Thursday";
                break;
            
            case 5:
                echo "Today is Friday";
                break;
            
            case 6:
                echo "Today is Saturday";
                break;

            case 7:
                echo "Today is Sunday";
                break;
        }

        echo "<h3>Exercise 4</h3>";

        echo "<h4>For Loop</h4>";
        for ($i=0; $i < 51; $i++) { 
            echo "$i = $name <br>";
        }

        echo "<h4>While Loop</h4>";
        $a = 0;
        while ($a <= 50) {
            echo "$a = $name <br>";
            $a++;
        }
        echo "<h4>Do.. While Loop</h4>";
        $b = 0;
        do {
            echo "$b = $name <br>";
            $b++;
        } while ($b <= 50);


        echo "<h3>Exercise 5</h3>";
        $my_array = array(1,2,3,4,5,6,7,8,9,10);
        
        foreach ($my_array as $value) {
            echo "$value ";
        }

        echo "<h3>Exercise 6</h3>";

        $characters_array = $arrayName = array(
            "Mickey Mouse" => array
            (
                "age" => 5,
                "species" => 'Mouse',
                "origin" => 'Disney'
            ),
            "Shrek" => array
            (
                "age" => 35,
                "species" => 'Ogre',
                "origin" => 'Dreamworks'
            ),
            "Zelda" => array
            (
                "age" => 20,
                "species" => 'human',
                "origin" => 'Nintendo'
            ),
        );
        foreach ($characters_array as $key => $value) {
            $age_temp = $value['age'];
            $species_temp = $value['species'];
            $origin_temp = $value['origin'];
            echo "<h4>$key is $age_temp years old. He is a $species_temp, and this he was created by $origin_temp</h4>";
        }
    ?>
</body>
</html>