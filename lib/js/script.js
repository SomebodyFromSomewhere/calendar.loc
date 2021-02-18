$(document).ready(function () {
    let sideBlock = $("#side_block");
    let sideBtn = $("#side_btn");
    let isHidden = true;
    sideBtn.click(function () {
        if (isHidden == true) {
            sideBlock.animate({left: "0"}, 250, "swing", function () {
                sideBlock.css("left", "0");
            });
            sideBtn.animate({left: "13vw"}, 250, function () {
                sideBtn.css("left", "13vw");
            });
            isHidden = false;
        } else {
            sideBlock.animate({left: "-15vw"}, 250, "swing", function () {
                sideBlock.css("left", "-15vw");
            });
            sideBtn.animate({left: "0"},250, function () {
                sideBtn.css("left", "0");
            });
            isHidden = true;
        }
    });
});