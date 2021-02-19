<?php
$date = $_GET['year'] . '-' . $_GET['month'] . '-' . '1';
$time = \strtotime($date);
$day = \date('l', $time);
$year = $_GET['year'];
$month = $_GET['month'];
$first_day = 0;
$last_day = 0;
$live_time_day = date("d");
$live_time_month = date("m");
$live_time_year = date("Y");

function getLastDay()
{
    if ($_GET['month'] == 2) {
        if ((intval($_GET['year']) % 4) == 0) {
            return 29;
        } else {
            return 28;
        }
    }
    switch (intval($_GET['month']) % 2) {
        case 0:
            return 30;
        case 1:
            return 31;
    }
}

switch ($day) {
    case Monday:
        $first_day = 1;
        break;
    case Tuesday:
        $first_day = 2;
        break;
    case Wednesday:
        $first_day = 3;
        break;
    case Thusday:
        $first_day = 4;
        break;
    case Friday:
        $first_day = 5;
        break;
    case Saturday:
        $first_day = 6;
        break;
    case Sunday:
        $first_day = 7;
        break;
}

switch ($month) {
    case 1:
        $month_text = "January";
        break;
    case 2:
        $month_text = "February";
        break;
    case 3:
        $month_text = "March";
        break;
    case 4:
        $month_text = "April";
        break;
    case 5:
        $month_text = "May";
        break;
    case 6:
        $month_text = "June";
        break;
    case 7:
        $month_text = "July";
        break;
    case 8:
        $month_text = "August";
        break;
    case 9:
        $month_text = "September";
        break;
    case 10:
        $month_text = "October";
        break;
    case 11:
        $month_text = "November";
        break;
    case 12:
        $month_text = "December";
        break;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>index</title>
    <link href="lib/css/main.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include 'lib/php/side_bar.php'; ?>
<div class="main">
    <div class="wrapper">
        <div class="month">
            <button class="prev" id="prevMonth"><i><</i></button>
            <div class="date_wrapper">
                <button class="curr_month" value="<?php echo $month; ?>"><?php echo $month_text; ?></button>
                </br>
                <button class="year" value="<?php echo $year; ?>"><i><?php echo $year; ?></i></button>
            </div>
            <button class="next" id="nextMonth"><i>></i></button>

        </div>
        <div class="days">
            <table class="days_table">
                <thead>
                <td>Mon</td>
                <td>Tue</td>
                <td>Wed</td>
                <td>Thu</td>
                <td>Fri</td>
                <td>Sat</td>
                <td>Sun</td>
                </thead>
                <?php
                $data = 1;
                $id = 1;
                $last_day = getLastDay();
                for ($i = 0; $i < 6; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 7; $j++) {
                        if ($id >= intval($first_day) && $data < ($last_day + 1)) {
                            if ($data == $live_time_day && $_GET['month'] == $live_time_month && $_GET['year'] == $live_time_year) {
                                echo '<td><button class="day_num active" value="' . $data . '" id="' . $id . '">' . $data . '</button></td>';
                                $data++;
                                $id++;
                            } else {
                                $input = array("empty", "busy");
                                $rand_keys = array_rand($input, 1);
                                echo '<td><button class="day_num ' . $input[$rand_keys] . '" value="' . $data . '" id="' . $id . '">' . $data . '</button></td>';
                                $data++;
                                $id++;
                            }
                        } else {
                            echo '<td><button class="other_month">nan</button></td>';
                            $id++;
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="lib/js/script.js"></script>
<script src="lib/js/goTo.js"></script>
<script src="lib/js/navigationMain.js"></script>
</body>
</html>