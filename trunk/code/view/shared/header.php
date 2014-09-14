<header>
    <img id="logo_header" src="../../assets/images/logo_header.png">
    <div id="top_bar">
        <a id="btn_login_signup" href="#"><?php echo(LOGIN_SIGNUP); ?></a>
        <ul id="social_bar">
            <li>
                <a href="#">
                    <img title="Facebook" src="../../assets/images/fb_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Twitter" src="../../assets/images/twitter_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Google+" src="../../assets/images/google_plus_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Youtube" src="../../assets/images/youtube_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="RSS" src="../../assets/images/rss_icon.png">
                </a>
            </li>
        </ul>
    </div>
    <p id="telephone">Tel: +84 900 000 000</p>
    <nav id="header_nav">
        <ul>
            <li>
                <a href="#"><?php echo(HOMEPAGE) ?></a>
            </li>
            <li>
                <a href="#"><?php echo(ABOUT_US) ?></a>
            </li>
            <li>
                <a href="#"><?php echo(SUBJECTS) ?></a>
            </li>
            <li>
                <a href="#"><?php echo(NEWS) ?></a>
            </li>
            <li>
                <a href="#"><?php echo(CONTACT_US) ?></a>
            </li>
            <li>
                <form id="search_form">
                    <label for="search_input">
                        <img title="<?php echo(SEARCH_BUTTON_TITLE); ?>" src="../../assets/images/search_icon.png">
                    </label>
                    <input id="search_input" placeholder="<?php echo(SEARCH_PLACEHOLDER); ?>" type="text">
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