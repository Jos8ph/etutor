<?php
/**
 * Created by PhpStorm.
 * User: Dai
 * Date: 9/16/14
 * Time: 10:04 PM
 */
?>
<aside id="right-sidebar">
    <h1 class="btn_sign_up_box"><?php echo(SIGN_UP); ?></h1>
    <div class="sign_up_box">
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
                    <td><input type="submit" value="<?php echo(SIGN_UP); ?>"</td>
                </tr>
            </table>
        </form>
    </div>

    <section id="news">
        <h3><?php echo(LATEST_NEWS); ?></h3>
    </section>
</aside>