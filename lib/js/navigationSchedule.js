$(document).ready(function () {
    let year = parseInt($(".year").val());
    let month = parseInt($(".curr_month").val());
    let day = parseInt($(".curr_day").val());
    let prevBtn = $("#prevDay");
    let nextBtn = $("#nextDay");

    function checkPrevMonth(month) {
        switch (month) {
            case 1:
                return 12;
            default:
                let prevMonth = month - 1;
                return prevMonth;
        }
    }

    function checkNextMonth(month) {
        switch (month) {
            case 12:
                return 1;
                break;
            default:
                let nextMonth = month + 1;
                return nextMonth;
        }
    }

    function getLastMonthDay(Month) {
        if (Month == 2) {
            if ((year % 4) == 0) {
                return 29;
            } else {
                return 28;
            }
        }
        switch (Month % 2) {
            case 0:
                return 30;
            case 1:
                return 31;
        }
    }

    prevBtn.click(function () {
        if (day == 1) {
            let prevMonth = checkPrevMonth(month);
            if (month == 1) {
                let prevMonth = checkPrevMonth(month);
                let lastMonthDay = getLastMonthDay(prevMonth);
                window.location.replace("http://calendar.loc/schedule.php?day=" + lastMonthDay + "&month=" + prevMonth + "&year=" + (year - 1));
            } else {
                let prevMonth = checkPrevMonth(month);
                let lastMonthDay = getLastMonthDay(prevMonth);
                window.location.replace("http://calendar.loc/schedule.php?day=" + lastMonthDay + "&month=" + prevMonth + "&year=" + year);
            }
        } else {
            window.location.replace("http://calendar.loc/schedule.php?day=" + (day - 1) + "&month=" + month + "&year=" + year);
        }
    });

    nextBtn.click(function () {
        let lastMonthDay = getLastMonthDay(month);
        if (day == lastMonthDay) {
            if (month == 12) {
                window.location.replace("http://calendar.loc/schedule.php?day=" + 1 + "&month=" + 1 + "&year=" + (year + 1));
            } else {
                let nextMonth = checkNextMonth(month);
                window.location.replace("http://calendar.loc/schedule.php?day=" + 1 + "&month=" + parseInt(nextMonth) + "&year=" + year);
            }
        } else {
            window.location.replace("http://calendar.loc/schedule.php?day=" + (day + 1) + "&month=" + month + "&year=" + year);
        }
    });
});