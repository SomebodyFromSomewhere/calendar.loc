$(document).ready(function () {
    let year = $(".year").val();
    let month = $(".curr_month").val();
    let day = $(".day_num");
    day.click(function () {
        let daySelected = $(this).val();
        window.location.replace("http://calendar.loc/schedule.php?day=" + daySelected + "&month=" + month + "&year=" + year);
    });
});