<?php
$day = $_GET['day'];
$month = $_GET['month'];
$year = $_GET['year'];

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
            <button class="prev" id="prevDay"><i><</i></button>
            <div class="date_wrapper">
                <button class="curr_day" value="<?php echo $day; ?>"><?php echo $day; ?></button>
                </br>
                <button class="curr_month" value="<?php echo $month; ?>"><?php echo $month_text;?></button>
                </br>
                <button class="year" value="<?php echo $year; ?>"><i><?php echo $year;?>></i></button>
            </div>
            <button class="next" id="nextDay"><i>></i></button>
        </div>
        <div class="days">
            <div class="event create_new_event">
                <button class="contr_btn" id="create">Create new event</button>
                <button class="contr_btn" id="delete_all">Delete all on <?php echo $day . " " . $month_text; ?></button>
            </div>
            <div class="event passed">
                <div class="content">
                    <h3>8:00-12:00</h3>
                    <p>Some text</p>
                </div>
                <div class="settings_btn">
                    <button class="btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="event current">
                <div class="content">
                    <h3>8:00-12:00</h3>
                    <p>Some text</p>
                </div>
                <div class="settings_btn">
                    <button class="btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="event coming">
                <div class="content">
                    <h3>8:00-12:00</h3>
                    <p>Some text</p>
                </div>
                <div class="settings_btn">
                    <button class="btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="lib/js/script.js"></script>
<script src="lib/js/goTo.js"></script>
<script src="lib/js/changingDate.js"></script>
</body>
</html>