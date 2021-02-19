$(document).ready(function () {
    let prevMonthBtn = $("#prevMonth");
    let nextMonthBtn = $("#nextMonth");
    let year = parseInt($(".year").val());
    let month = parseInt($(".curr_month").val());

    function getPreviousMonth(month) {
        switch (month) {
            case 1:
                return 12;
            default:
                let prevMonth = month - 1;
                return prevMonth;
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
        } else {
            //go next month
        }
    });
});