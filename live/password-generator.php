<?php
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>

<div class="contents">

    <div class="inner_content">

        <h2 class="inner_content_title">Password Generator</h2>

        <p class="inner_content_description">
            <u>On: 12-09-2015</u>
            &emsp;
            <u>Update: 16/04/2016</u>
            &emsp;
            <u>Version: 1.0</u>
        </p>

        <div class="zee-social-buttons" data-social-buttons-img="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.png"></div>

        <p>
            Online Password Generator.<br/>
            We do not store, share or sell any password.
        </p>

        <br/>

        <?php
        if (isset($_POST['gen_btn'])) {
            $the_gen_pass = '';

            if (isset($_POST['upcase'])) {
                $upcase = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
                for ($i = 0; $i < 20; $i++) {
                    $ran = mt_rand(0, 25);
                    $the_gen_pass .= $upcase[$ran];
                }
            }

            if (isset($_POST['lowcase'])) {
                $lowcase = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
                for ($i = 0; $i < 20; $i++) {
                    $ran = mt_rand(0, 25);
                    $the_gen_pass .= $lowcase[$ran];
                }
            }

            if (isset($_POST['numb'])) {
                $numb = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
                for ($i = 0; $i < 20; $i++) {
                    $ran = mt_rand(0, 9);
                    $the_gen_pass .= $numb[$ran];
                }
            }

            if (isset($_POST['symb'])) {
                $symb = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '[', ']', '{', '}', '|', '<', '>', '?', '+', '-');
                for ($i = 0; $i < 20; $i++) {
                    $ran = mt_rand(0, 19);
                    $the_gen_pass .= $symb[$ran];
                }
            }

            $the_gen_pass = substr(str_shuffle($the_gen_pass), 0, $_POST['pas_len']);
        }
        ?>

        <form action="<?php echo $this->URL('FULL'); ?>" method="post">
            <table class="table table_noborder">
                <tr>
                    <td>Password Length</td>
                    <td>
                        <select class="field" name="pas_len">
                            <?php
                            for ($i = 6; $i <= 20; $i++) {
                                $checked = null;
                                if (isset($_POST['pas_len']) && $_POST['pas_len'] == $i) {
                                    $checked = ' selected';
                                }
                                echo '<option' . $checked . '>' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Uppercase</td>
                    <td>
                        <input type="checkbox" <?php if (isset($_POST['upcase'])) echo 'checked="checked"'; ?> name="upcase"/> (e.g. ABCDEF)
                    </td>
                </tr>
                <tr>
                    <td>Lowercase</td>
                    <td>
                        <input type="checkbox" checked <?php if (isset($_POST['lowcase'])) echo 'checked="checked"'; ?> name="lowcase"/> (e.g. abcdef)
                    </td>
                </tr>
                <tr>
                    <td>Numbers</td>
                    <td>
                        <input type="checkbox" checked <?php if (isset($_POST['numb'])) echo 'checked="checked"'; ?> name="numb"/> (e.g. 123456)
                    </td>
                </tr>
                <tr>
                    <td>Symbols</td>
                    <td>
                        <input type="checkbox" <?php if (isset($_POST['symb'])) echo 'checked="checked"'; ?> name="symb"/> (e.g. @#$%)
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <input type="submit" value="Generate" name="gen_btn" class="btn btn_block btn_cbu" style="padding: 4px 60px"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input value="<?php
                        if (isset($_POST['gen_btn'])) {
                            echo $the_gen_pass;
                        }
                        ?>" onclick="javascript:this.select();" type="text" placeholder="Your Password Will Be Shown Here" class="field field_block" style="text-align: center;" />                        
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>