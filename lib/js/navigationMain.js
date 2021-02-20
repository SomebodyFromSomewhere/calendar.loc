$(document).ready(function () {
    let prevMonthBtn = $("#prevMonth");
    let nextMonthBtn = $("#nextMonth");
    let monthBtn = $(".curr_month");
    let yearBtn = $(".year");
    let year = parseInt($("#year :selected").val());
    let month = parseInt($("#curr_month :selected").val());

    function getPreviousMonth(month) {
        switch (month) {
            case 1:
                return 12;
            default:
                let prevMonth = month - 1;
                return prevMonth;
        }
    }

    function getNextMonth(month) {
        switch (month) {
            case 12:
                return 1;
            default:
                let nextMonth = month + 1;
                return nextMonth;
        }
    }

    prevMonthBtn.click(function () {
        if (month == 1) {
            //go previous year
            let prevMonth = getPreviousMonth(month);
            window.location.replace("http://calendar.loc/main.php?&month=" + prevMonth + "&year=" + (year - 1));
        } else {
            //go previous month
            let prevMonth = getPreviousMonth(month);
            window.location.replace("http://calendar.loc/main.php?&month=" + prevMonth + "&year=" + year);
        }
    });

    nextMonthBtn.click(function () {
        if (month == 12) {
            //go next year
            let nextMonth = getNextMonth(month);
            window.location.replace("http://calendar.loc/main.php?&month=" + nextMonth + "&year=" + (year + 1));
        } else {
            //go next month
            let nextMonth = getNextMonth(month);
            window.location.replace("http://calendar.loc/main.php?&month=" + nextMonth + "&year=" + year);
        }
    });
    monthBtn.click(
        monthBtn.change(function () {
            let year = parseInt($(".year option:selected").val());
            let month = parseInt($(".curr_month option:selected").val());
            window.location.replace("http://calendar.loc/main.php?&month=" + month + "&year=" + (year));
        })
    );
    yearBtn.click(
        yearBtn.change(function () {
            let year = parseInt($(".year option:selected").val());
            let month = parseInt($(".curr_month option:selected").val());
            window.location.replace("http://calendar.loc/main.php?&month=" + month + "&year=" + (year));
        })
    );
});