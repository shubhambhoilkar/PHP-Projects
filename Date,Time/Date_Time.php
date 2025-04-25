<!DOCTYPE html>
<html>
<head>
    <title>PHP Date/Time</title>
</head>
<body>
    <?php
    echo "<h2>1. Current Default Timezone</h2>";
    echo "Default timezone: " . date_default_timezone_get() . "<br>";
    echo "Current time: " . date("Y-m-d H:i:s") . "<br>";

    echo "<h2>2. Set a New Timezone</h2>";
    date_default_timezone_set("Asia/Kolkata");
    echo "New timezone set to: " . date_default_timezone_get() . "<br>";
    echo "Current time: " . date("Y-m-d H:i:s") . "<br>";

    echo "<h2>3. Date Settings from php.ini (Using ini_get)</h2>";
    echo "date.timezone: " . ini_get("date.timezone") . "<br>";
    echo "date.default_latitude: " . ini_get("date.default_latitude") . "<br>";
    echo "date.default_longitude: " . ini_get("date.default_longitude") . "<br>";
    echo "date.sunrise_zenith: " . ini_get("date.sunrise_zenith") . "<br>";
    echo "date.sunset_zenith: " . ini_get("date.sunset_zenith") . "<br>";

    echo "<h2>4. Sunrise and Sunset Times (Using Delhi Coordinates)</h2>";
    $timestamp = strtotime("today");
    $sunrise = date_sunrise($timestamp, SUNFUNCS_RET_STRING, 28.61, 77.23, 90.83, 5.5);
    $sunset = date_sunset($timestamp, SUNFUNCS_RET_STRING, 28.61, 77.23, 90.83, 5.5);
    echo "Sunrise in Mumbai today: " . $sunrise . "<br>";
    echo "Sunset in Mumbai today: " . $sunset . "<br>";
    ?>
</body>
</html>
