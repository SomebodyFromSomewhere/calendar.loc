<div class="side_block" id="side_block">
    <div class="profile">
        <a class="side_menu_link logo" href="http://calendar.loc">Main</a>
        <img class="user-avatar" src="lib/images/avatars/def(0).jpg">
        <a class="side_menu_link">Profile</a>
        <button class="sbr-btn">Menu</button>
        <a class="side_menu_link">Exit</a>
        <div class="sbr-menu">
            <div class="menu-block">
                <input type="color" name="main" id="main_chg" class="change_color"
                >
                <p class="choosen-color">Main background:</p>
                <p class="choosen-color" id="main_color_choose">#FFF</p>
                <label for="main_chg" class="color_choose" name="main_col"></label>
            </div>
            <div class="menu-block">
                <input type="color" name="side_block" id="side_block_chg" class="change_color"
                >
                <p class="choosen-color">Menu background:</p>
                <p class="choosen-color" id="side_block_color_choose">#FFF</p>
                <label for="side_block_chg" class="color_choose" name="side_block_col"></label>
            </div>
            <div class="menu-block">
                <input type="color" name="font" id="font_chg" class="change_color">
                <p class="choosen-color">Font color:</p>
                <p class="choosen-color" id="font_color_choose">#FFF</p>
                <label for="font_chg" class="color_choose" name="font_col"></label>
            </div>
            <?php
            $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $url = explode('?', $url);
            $url = $url[0];
            if ($url == "http://calendar.loc/main.php") { ?>
                <div class="menu-block">
                    <input type="color" name="empty" id="empty_chg" class="change_color">
                    <p class="choosen-color">Tile empty:</p>
                    <p class="choosen-color" id="empty_color_choose">#FFF</p>
                    <label for="empty_chg" class="color_choose" name="empty_col"></label>
                </div>
                <div class="menu-block">
                    <input type="color" name="busy" id="busy_chg" class="change_color">
                    <p class="choosen-color">Tile busy:</p>
                    <p class="choosen-color" id="busy_color_choose">#FFF</p>
                    <label for="busy_chg" class="color_choose" name="busy_col"></label>
                </div>
                <div class="menu-block">
                    <input type="color" name="active" id="active_chg" class="change_color">
                    <p class="choosen-color">Tile active:</p>
                    <p class="choosen-color" id="active_color_choose">#FFF</p>
                    <label for="active_chg" class="color_choose" name="active_col"></label>
                </div>
            <?php } ?>
            <div class="menu-block">
                <input type="color" name="hover" id="hover_chg" class="change_color">
                <p class="choosen-color">On hover color:</p>
                <p class="choosen-color" id="hover_color_choose">#FFF</p>
                <label for="hover_chg" class="color_choose" name="hover_col"></label>
            </div>
            <?php
            $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $url = explode('?', $url);
            $url = $url[0];
            if ($url == "http://calendar.loc/schedule.php") { ?>
                <div class="menu-block">
                    <input type="color" name="event" id="event_chg" class="change_color">
                    <p class="choosen-color">Event color:</p>
                    <p class="choosen-color" id="event_color_choose">#FFF</p>
                    <label for="event_chg" class="color_choose" name="event_col"></label>
                </div>
            <?php }
            ?>
        </div>
    </div>
    <!--    <a href="/" class="side_menu_link">Some Link</a>-->
</div>
<button class="btn" id="side_btn">
    <i class="fa fa-bars"></i>
</button>