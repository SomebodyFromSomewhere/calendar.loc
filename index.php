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
            <button class="prev"><i><</i></button>
            <div class="date_wrapper">
                <button class="curr_month" value="2">February</button>
                </br>
                <button class="year" value="2021"><i>2021</i></button>
            </div>
            <button class="next"><i>></i></button>
        </div>
        <div class="days">
            <table class="days_table">
                <tr>
                    <td>
                        <button class="day_num empty" value="1">1</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="2">2</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="3">3</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="4">4</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="5">5</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="6">6</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="7">7</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="day_num empty" value="8">8</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="9">9</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="10">10</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="11">11</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="12">12</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="13">13</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="14">14</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="day_num empty" value="15">15</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="16">16</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="17">17</button>
                    </td>
                    <td>
                        <button class="day_num busy" value="18">18</button>
                    </td>
                    <td>
                        <button class="day_num empty active" value="19">19</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="20">20</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="21">21</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="day_num empty" value="22">22</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="23">23</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="24">24</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="25">25</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="26">26</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="27">27</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="28">28</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="day_num empty" value="29">29</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="30">30</button>
                    </td>
                    <td>
                        <button class="day_num empty" value="31">31</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="1">1</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="2">2</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="3">3</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="4">4</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="day_num other_month" value="4">4</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="5">5</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="6">6</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="7">7</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="8">8</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="9">9</button>
                    </td>
                    <td>
                        <button class="day_num other_month" value="10">10</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="lib/js/script.js"></script>
<script src="lib/js/goTo.js"></script>
</body>
</html>