<header>
    <img id="header_logo" src="../../../asset/img/header_logo.png">
    <nav id="header_top_bar">
        <a id="btn_sign_in_box"><?php echo(SIGN_IN); ?></a>
        <section class="sign_in_box">
            <form>
                <table>
                    <tr>
                        <td class="padding_bottom_5px"><input type="text" placeholder="<?php echo(EMAIL); ?>" id="txtbox_signin_id"></td>
                    </tr>
                    <tr>
                        <td class="padding_bottom_5px"><input type="text" id="txtbox_signin_pw" placeholder="<?php echo(PASSWORD); ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <input id="btn_signin_submit" type="submit" value="<?php echo(SIGN_IN); ?>" >
                            <input type="checkbox" />
                            <label for="chkbox_keep_signed_in"><?php echo(KEEP_SIGNED_IN); ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#"><?php echo(FORGOT_PASSWORD); ?></a></td>
                    </tr>
                </table>
            </form>
        </section>

        <ul id="horizon_social_bar">
            <li>
                <a href="#">
                    <img title="Facebook" src="../../../asset/img/fb_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Twitter" src="../../../asset/img/twitter_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Google+" src="../../../asset/img/google_plus_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="Youtube" src="../../../asset/img/youtube_icon.png">
                </a>
            </li>
            <li>
                <a href="#">
                    <img title="RSS" src="../../../asset/img/rss_icon.png">
                </a>
            </li>
        </ul>
    </nav>

    <h1 id="telephone">Tel: +84 900 000 000</h1>

    <nav id="header_nav">
        <ul>
            <li>
                <a class="header_nav_item" href="index.php"><?php echo(HOMEPAGE); ?></a>
            </li>
            <li>
                <a class="header_nav_item" href="about.php"><?php echo(ABOUT_US); ?></a>
            </li>
            <li>
                <a class="header_nav_item" id="header_nav_subjects_item" href="#"><?php echo(SUBJECTS); ?></a>
                <ul id="header_nav_subject_list">
                    <li><a href="#"><?php echo ENGLISH; ?></a></li>
                    <li><a href="#"><?php echo MATH; ?></a></li>
                    <li><a href="#"><?php echo PHYSICS; ?></a></li>
                    <li><a href="#"><?php echo CHEMISTRY; ?></a></li>
                </ul>
            </li>
            <li>
                <a class="header_nav_item" href="news.php"><?php echo(NEWS); ?></a>
            </li>
            <li>
                <a class="header_nav_item" href="#"><?php echo(CONTACT_US); ?></a>
            </li>
        </ul>
            <div id="search_box">
                <form>
                    <label for="txtbox_search">
                        <img title="<?php echo(SEARCH_BUTTON_TITLE); ?>" src="../../../asset/img/search_icon.png">
                    </label>
                    <input id="txtbox_search" placeholder="<?php echo(SEARCH_PLACEHOLDER); ?>" type="text">
                </form>
            </div>
            <div id="languages_switch_box">
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
            </div>
    </nav>
</header>