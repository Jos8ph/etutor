<header>
    <img id="header_logo" src="../../assets/img/header_logo.png">
    <nav id="header_top_bar">
        <a id="btn_login_signup" href="#"><?php echo(LOGIN_SIGNUP); ?></a>
        <ul id="horizon_social_bar">
            <li>
                <a href="#">
                    <img title="Facebook" src="../../assets/img/fb_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Twitter" src="../../assets/img/twitter_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Google+" src="../../assets/img/google_plus_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Youtube" src="../../assets/img/youtube_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="RSS" src="../../assets/img/rss_icon.png">
                </a>
            </li>
        </ul>
    </nav>
    <h1 id="telephone">Tel: +84 900 000 000</h1>
    <nav id="header_nav">
        <ul>
            <li>
                <a class="header_nav_item" href="#"><?php echo(HOMEPAGE) ?></a>
            </li>
            <li>
                <a class="header_nav_item" href="#"><?php echo(ABOUT_US) ?></a>
            </li>
            <li>
                <div id="subjects_dropdown_container">
                    <a class="header_nav_item" id="header_nav_subjects_item" href="#"><?php echo(SUBJECTS) ?></a>
                    <ul id="header_nav_subject_list">
                        <li><a href="#"><?php echo ENGLISH; ?></a></li>
                        <li><a href="#"><?php echo MATH; ?></a></li>
                        <li><a href="#"><?php echo PHYSICS; ?></a></li>
                        <li><a href="#"><?php echo CHEMISTRY; ?></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="header_nav_item" href="#"><?php echo(NEWS) ?></a>
            </li>
            <li>
                <a class="header_nav_item" href="#"><?php echo(CONTACT_US) ?></a>
            </li>
            <li>
                <form id="search_form">
                    <label for="search_txtbox">
                        <img title="<?php echo(SEARCH_BUTTON_TITLE); ?>" src="../../assets/img/search_icon.png">
                    </label>
                    <input id="search_txtbox" placeholder="<?php echo(SEARCH_PLACEHOLDER); ?>" type="text">
                </form>
            </li>
            <li>
                <label for="language_list"><?php echo(LANGUAGE); ?></label>
                <select id="language_list" name="language">
                    <?php if ($_SESSION['lang'] == 'vi') { ?>
                        <option value="vi">Tiếng Việt</option>
                        <option value="en">English</option>
                    <?php } else { ?>
                        <option value="en">English</option>
                        <option value="vi">Tiếng Việt</option>
                    <?php } ?>
                </select>
            </li>
        </ul>
    </nav>
</header>