<header>
    <img id="header_logo" src="../../assets/img/header_logo.png">
    <nav id="header_top_bar">
        <a id="btn_signin_signup" href="#"><?php echo(SIGNIN_SIGNUP); ?></a>
        <section id="signin_signup_container">
            <ul>
                <li id="tab_signin" class="active_tab"><?php echo(SIGNIN); ?></li>
                <li id="tab_signup" class="inactive_tab"><?php echo(SIGNUP); ?></li>
            </ul>
            <div id="signin_container">
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
                                <input id="btn_signin_submit" type="submit" value="<?php echo(SIGNIN); ?>" >
                                <input type="checkbox" id="chkbox_keep_signed_in">
                                <label for="chkbox_keep_signed_in"><?php echo(KEEP_SIGNED_IN); ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#"><?php echo(FORGOT_PASSWORD); ?></a></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div id="signup_container">
                <form>
                    <table>
                        <tr>
                            <td>
                                <input class="txtbox_name" type="text" placeholder="<?php echo(FIRSTNAME); ?>">
                                <input class="txtbox_name" type="text" placeholder="<?php echo(LASTNAME); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="<?php echo(EMAIL); ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="<?php echo(PASSWORD); ?>"></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="<?php echo(RE_ENTER_PW); ?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <select>
                                        <option><?php echo(YEAR); ?></option>
                                    </select>
                                </label>
                                <label>
                                    <select>
                                        <option><?php echo(MONTH); ?></option>
                                    </select>
                                </label>
                                <label>
                                    <select>
                                        <option><?php echo(DAY); ?></option>
                                    </select>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="drpbox_gender"><?php echo(GENDER); ?></label>
                                <select id="drpbox_gender">
                                    <option><?php echo(MALE); ?></option>
                                    <option><?php echo(FEMALE); ?></option>
                                    <option><?php echo(OTHER); ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="<?php echo(SIGNUP); ?>"</td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
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
    <!--    <h1 id="telephone">Tel: +84 900 000 000</h1>-->
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
                    <label for="txtbox_search">
                        <img title="<?php echo(SEARCH_BUTTON_TITLE); ?>" src="../../assets/img/search_icon.png">
                    </label>
                    <input id="txtbox_search" placeholder="<?php echo(SEARCH_PLACEHOLDER); ?>" type="text">
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