<?php
if (intval($_GET['month']) < 8) {
    if ((intval($_GET['month']) % 2) == 0) {
        $last_month_day = 30;
    } else {
        $last_month_day = 31;
    }
} else {
    if ((intval($_GET['month']) % 2) == 1) {
        $last_month_day = 30;
    } else {
        $last_month_day = 31;
    }
}
if ($_GET['month'] == 2) {
    if ((intval($_GET['year']) % 4) == 0) {
        $last_month_day = 29;
    } else {
        $last_month_day = 28;
    }
}

if (($_GET['year'] < 1900 || $_GET['year'] > 2150) || ($_GET['month'] < 1 || $_GET['month'] > 12) || ($_GET['day'] < 0 || $_GET['day'] > ($last_month_day))) {
    header('Location: http://calendar.loc/');
} else {
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
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php include 'lib/php/side_bar.php'; ?>
    <div class="main">
        <div class="wrapper">
            <div class="month">
                <button class="prev" id="prevDay"><i><</i></button>
                <div class="date_wrapper">
                    <select class="curr_day" id="currDay">
                        <?php
                        for ($i = 1; $i <= $last_month_day; $i++) {
                            if ($i == intval($_GET['day'])) {
                                echo "<option class='select-item' value='" . $i . "' selected='selected' id='" . $i . "'>" . $i . "</option>";
                            } else {
                                echo "<option class='select-item' value='" . $i . "'id='" . $i . "'>" . $i . "</option>";
                            }
                        }
                        ?></select>
                    </br>
                    <select class="curr_month" id="currMonth">
                        <?php
                        $month_arr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                        for ($i = 1; $i < 13; $i++) {
                            if ($i == intval($_GET['month'])) {
                                echo '<option class="select-item" value="' . $i . '"id="' . $i . '" selected="selected">' . $month_arr[($i - 1)] . '</option>';
                            } else {
                                echo "<option class='select-item' value='" . $i . "'id='" . $i . "'>" . $month_arr[$i - 1] . "</option>";
                            }
                        }
                        ?>
                    </select>
                    </br>
                    <select class="year" id="year">
                        <?php
                        for ($i = 1900; $i <= 2150; $i++) {
                            if ($i == intval($_GET['year'])) {
                                echo "<option class='select-item' value='" . $i . "' selected='selected'>" . $i . "</option>";
                            } else {
                                echo "<option class='select-item' value='" . $i . "'>" . $i . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <button class="next" id="nextDay"><i>></i></button>
            </div>
            <div class="days">
                <div class="event create_new_event">
                    <button class="contr_btn" id="create">Create new event</button>
                    <button class="contr_btn" id="delete_all">Delete all
                        on <?php echo $day . " " . $month_text; ?></button>
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
    <script src="lib/js/navigationSchedule.js"></script>
    <script src="lib/js/changingColor.js"></script>
    </body>
    </html>
<?php } ?>