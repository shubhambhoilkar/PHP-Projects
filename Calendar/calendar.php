<!DOCTYPE html>
<html>
<head>
    <title>PHP Calendar Functions</title>
</head>
<body>
    <h1>PHP Calendar Functions - Examples</h1>

    <?php
    echo "<h2>1. Calendar Info</h2>";
    print_r(cal_info());

    echo "<h2>2. Days in Month</h2>";
    echo "Days in February 2024: " . cal_days_in_month(CAL_GREGORIAN, 6, 2025) . "<br>";

    echo "<h2>3. Julian Day Conversions</h2>";
    $jd = cal_to_jd(CAL_GREGORIAN, 4, 25, 2024);
    echo "Julian Day for April 25, 2024: " . $jd . "<br>";
    echo "From JD to Gregorian: " . jdtogregorian($jd) . "<br>";
    echo "From JD to French: " . jdtofrench($jd) . "<br>";
    echo "From JD to Jewish: " . jdtojewish($jd) . "<br>";
    echo "From JD to Julian: " . jdtojulian($jd) . "<br>";
    echo "From JD to Unix Timestamp: " . jdtounix($jd) . "<br>";

    echo "<h2>4. JD from Other Calendars</h2>";
    echo "JD from French date: " . frenchtojd(10, 1, 14) . "<br>";
    echo "JD from Gregorian date: " . gregoriantojd(4, 25, 2024) . "<br>";
    echo "JD from Jewish date: " . jewishtojd(10, 10, 5784) . "<br>";
    echo "JD from Julian date: " . juliantojd(4, 12, 2024) . "<br>";
    echo "JD from Unix Timestamp: " . unixtojd(time()) . "<br>";

    echo "<h2>5. JD Related Info</h2>";
    echo "Day of week from JD: " . jddayofweek($jd, 1) . "<br>"; // 1 = full name
    echo "Month name from JD: " . jdmonthname($jd, 1) . "<br>"; // 1 = full name

    echo "<h2>6. Easter Date Calculations</h2>";
    echo "Easter Date (timestamp): " . easter_date() . "<br>";
    echo "Easter Date: " . date("Y-m-d", easter_date()) . "<br>";
    echo "Days after March 21: " . easter_days() . "<br>";
    ?>
</body>
</html>
