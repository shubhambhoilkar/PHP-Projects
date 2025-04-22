<!DOCTYPE html>
<html>
<head>
    <title>Random Day Scheduler.</title>
</head>
<body>

<pre>
    <?php    
    $weekdays =["Monday", "Tuesday", "Wednesday", "Thursday",  "Friday",  "Saturday","Sunday"];

    $day = $weekdays[rand(0,6)];

    echo "Today is: $day\n";

    switch ($day) {
        case "Monday":
            echo "Go to the gym!";
            break;

        case "Tuesday":
            echo "Attend the team meeting!";
            break;

        case "Wednesday":
            echo "Focus on project work!";
            break;

        case "Thursday":
            echo "Do the code review!";
            break;

        case "Friday":
            echo "Prepare for client presentation!";
            break;

        case "Saturday":
            echo "It's Family Time ;)";
            break;

        case "Sunday":
            echo "Relax and recharge!";
            break;

        default:
            echo "Not sure what day it is!";
    }
?>
</pre>

</body>
</html>
