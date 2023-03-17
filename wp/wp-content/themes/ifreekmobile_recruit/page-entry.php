<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST)) {
        if ($_POST['namae'] == '') {
            $error = [
                'namae' => 'blank'
            ];
        }
        if ($_POST['kana'] == '') {
            $error['kana'] = 'blank';
        }
        if ($_POST['tel'] == '') {
            $error['tel'] = 'blank';
        }
        if ($_POST['email'] == '') {
            $error['email'] = 'blank';
        }
        if (!empty($_POST['email'])) {
            if (!preg_match('|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|', $_POST['email'])) {
                $error['email'] = 'error';
            }
        }
        if ($_POST['confirm_email'] == '') {
            $error['confirm_email'] = 'blank';
        }
        if ($_POST['email'] != $_POST['confirm_email']) {
            $error['confirm_email'] = 'diff';
        }

        if (empty($error)) {
            $_SESSION['entry'] = $_POST;
            header('Location: ' . $home_url . 'entry/confirm/');
            exit();
        }
    }
}

if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == 'rewrite') {
        $_POST = $_SESSION['entry'];
    }
}

get_header(); ?>

<div class="pageTitle">
    <div class="title_inner">
        <div class="text-area">
            <h1 class="jp">エントリー</h1>
            <p class="eng">ENTRY</p>
        </div>
        <div class="sq_carat">
            <?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
            <svg id="layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 559 280">
                <g id="title_sq">
                    <rect id="_長方形_4" class="title_sq_1" x="519" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-2" class="title_sq_1" x="479" y="40" width="40" height="40"/>
                    <rect id="_長方形_4-3" class="title_sq_1" x="439" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-4" class="title_sq_1" x="359" y="0" width="40" height="40"/><rect id="_長方形_4-5" class="title_sq_1" x="319" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-6" class="title_sq_1" x="239" y="0" width="40" height="40"/><rect id="_長方形_4-7" class="title_sq_1" x="199" y="160" width="40" height="40"/><rect id="_長方形_4-8" class="title_sq_1" x="159" y="0" width="40" height="40"/><rect id="_長方形_4-9" class="title_sq_1" x="79" y="0" width="40" height="40"/><rect id="_長方形_4-10" class="title_sq_1" x="0" y="0" width="40" height="40"/><rect id="_長方形_4-11" class="title_sq_1" x="519" y="80" width="40" height="40"/><rect id="_長方形_4-13" class="title_sq_1" x="399" y="40" width="40" height="40"/><rect id="_長方形_4-14" class="title_sq_1" x="359" y="40" width="40" height="40"/><rect id="_長方形_4-15" class="title_sq_1" x="279" y="40" width="40" height="40"/><rect id="_長方形_4-16" class="title_sq_1" x="239" y="80" width="40" height="40"/><rect id="_長方形_4-17" class="title_sq_1" x="159" y="40" width="40" height="40"/><rect id="_長方形_4-18" class="title_sq_1" x="119" y="40" width="40" height="40"/><rect id="_長方形_4-19" class="title_sq_1" x="479" y="120" width="40" height="40"/><rect id="_長方形_4-20" class="title_sq_1" x="399" y="80" width="40" height="40"/><rect id="_長方形_4-21" class="title_sq_1" x="319" y="80" width="40" height="40"/><rect id="_長方形_4-22" class="title_sq_1" x="199" y="80" width="40" height="40"/><rect id="_長方形_4-23" class="title_sq_1" x="119" y="80" width="40" height="40"/><rect id="_長方形_4-24" class="title_sq_1" x="79" y="80" width="40" height="40"/><rect id="_長方形_4-25" class="title_sq_1" x="439" y="160" width="40" height="40"/><rect id="_長方形_4-26" class="title_sq_1" x="439" y="80" width="40" height="40"/><rect id="_長方形_4-27" class="title_sq_1" x="279" y="120" width="40" height="40"/><rect id="_長方形_4-28" class="title_sq_1" x="319" y="160" width="40" height="40"/><rect id="_長方形_4-29" class="title_sq_1" x="159" y="120" width="40" height="40"/><rect id="_長方形_4-30" class="title_sq_1" x="519" y="160" width="40" height="40"/><rect id="_長方形_4-31" class="title_sq_1" x="439" y="240" width="40" height="40"/><rect id="_長方形_4-32" class="title_sq_1" x="359" y="160" width="40" height="40"/><rect id="_長方形_4-33" class="title_sq_1" x="479" y="200" width="40" height="40"/><rect id="_長方形_4-34" class="title_sq_1" x="399" y="200" width="40" height="40"/><rect id="_長方形_4-35" class="title_sq_1" x="519" y="240" width="40" height="40"/>
                </g>
            </svg>
        </div>
    </div>

    <div class="breadcrumbs">
        <?php if(function_exists('bcn_display')){
            bcn_display();
        }?>
    </div>

    <div class="title_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/title/title_contact.jpg);"></div>
</div>



<main id="main_wrap" role="main">
    <div class="page_section page_section__pink">
        <div class="wrap">
            <div class="big-title center">
                <h2 class="jp">エントリフォーム</h2>
                <p class="eng">ENTRY FORM</p>
            </div>

            <div class="bg-white">
                <p class="mb20 text-center">必要事項をご記入の上、下記確認ボタンを押して下さい。</p>

                <form action="" method="post" enctype="multipart/form-data">
                    <table class="contact_table">
                        <tbody>
                            <tr>
                                <th>
                                    <div class="hissu_cell">お名前<span class="hissu">必須</span></div>
                                </th>
                                <td>
                                    <input type="text" name="namae" class="c-input w60p" placeholder="例）山田 太郎" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo htmlspecialchars($_POST['namae'], ENT_QUOTES, 'UTF-8'); } elseif (isset($_REQUEST['action'])) {
                                        if($_REQUEST['action'] == 'rewrite') {
                                            echo htmlspecialchars($_SESSION['entry']['namae'], ENT_QUOTES, 'UTF-8');
                                        }
                                    } ?>">
                                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        if ($error['namae'] == 'blank') {
                                            echo '<p class="help-block">お名前を入力してください。</p>';
                                        }
                                    } ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="hissu_cell">ふりがな<span class="hissu">必須</span></div>
                                </th>
                                <td>
                                    <input type="text" id="kana" name="kana" class="c-input" placeholder="例）やまだ たろう" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo htmlspecialchars($_POST['kana'], ENT_QUOTES, 'UTF-8'); } elseif (isset($_REQUEST['action'])) {
                                        if($_REQUEST['action'] == 'rewrite') {
                                            echo htmlspecialchars($_SESSION['entry']['kana'], ENT_QUOTES, 'UTF-8');
                                        }
                                    } ?>">
                                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        if ($error['kana'] == 'blank') {
                                            echo '<p class="help-block">ふりがなを入力してください。</p>';
                                        }
                                    } ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="hissu_cell">メールアドレス<span class="hissu">必須</span></div>
                                </th>
                                <td>
                                    <input type="email" data-type="email" name="email" class="c-input" placeholder="例）taro@domain.jp" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); } elseif (isset($_REQUEST['action'])) {
                                        if($_REQUEST['action'] == 'rewrite') {
                                            echo htmlspecialchars($_SESSION['entry']['email'], ENT_QUOTES, 'UTF-8');
                                        }
                                    } ?>">
                                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        if ($error['email'] == 'blank') {
                                            echo '<p class="help-block">メールアドレスを入力してください。</p>';
                                        }
                                    } ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="hissu_cell">メールアドレス（確認用）<span class="hissu">必須</span></div>
                                </th>
                                <td>
                                    <input type="email" data-type="email" name="confirm_email" class="c-input" placeholder="例）taro@domain.jp" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo htmlspecialchars($_POST['confirm_email'], ENT_QUOTES, 'UTF-8'); } elseif (isset($_REQUEST['action'])) {
                                        if($_REQUEST['action'] == 'rewrite') {
                                            echo htmlspecialchars($_SESSION['entry']['confirm_email'], ENT_QUOTES, 'UTF-8');
                                        }
                                    } ?>">
                                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        if ($error['confirm_email'] == 'blank') {
                                            echo '<p class="help-block">メールアドレス（確認用）を入力してください。</p>';
                                        } elseif ($error['confirm_email'] == 'diff') {
                                            echo '<p class="help-block">メールアドレスが一致しません。</p>';
                                        }
                                    } ?>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <div class="hissu_cell">電話番号<span class="hissu">必須</span></div>
                                </th>
                                <td>
                                    <input type="tel" name="tel" class="c-input w60p" placeholder="例）012-345-6789" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo htmlspecialchars($_POST['tel'], ENT_QUOTES, 'UTF-8'); } elseif (isset($_REQUEST['action'])) {
                                        if($_REQUEST['action'] == 'rewrite') {
                                            echo htmlspecialchars($_SESSION['entry']['tel'], ENT_QUOTES, 'UTF-8');
                                        }
                                    } ?>">
                                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        if ($error['tel'] == 'blank') {
                                            echo '<p class="help-block">電話番号を入力してください。</p>';
                                        }
                                    } ?>
                                </td>
                            </tr>

                            <tr>
                                <th>希望職種<br>※複数選択可</th>
                                <td>
                                    <div class="c-radio-list">
                                        <?php
                                        $terms = get_terms('recruitment_job');
                                        foreach ($terms as $term) {
                                            $job = $term->name;
                                            $job_item = '<div class="c-radio-list__item"><label>
                                                <input type="checkbox" name="job[]" class="c-checkbox" value="' . $job . '"';
                                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['job'])) {
                                                if(in_array($term->name, $_POST['job'])){
                                                    $job_item .= 'checked';
                                                }
                                            } elseif (isset($_REQUEST['action'])) {
                                                if($_REQUEST['action'] == 'rewrite' && isset($_SESSION['entry']['job'])) {
                                                    if(in_array($job, $_SESSION['entry']['job'])){
                                                        $job_item .= 'checked';
                                                    }
                                                }
                                            }
                                            $job_item .= '>';
                                            $job_item .= $job;
                                            $job_item .= '</label></div>';
                                            echo $job_item;
                                        }
                                        ?>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>希望事業部<br>※複数選択可</th>
                                <td>
                                    <div class="c-radio-list">
                                        <?php
                                        $terms = get_terms('recruitment_division');
                                        foreach ($terms as $term) {
                                            $division = $term->name;
                                            $division_item = '<div class="c-radio-list__item"><label>
                                                <input type="checkbox" name="division[]" class="c-checkbox" value="' . $division . '"';
                                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['division'])) {
                                                if(in_array($division, $_POST['division'])){
                                                    $division_item .= 'checked';
                                                }
                                            } elseif (isset($_REQUEST['action'])) {
                                                if($_REQUEST['action'] == 'rewrite' && isset($_SESSION['entry']['division'])) {
                                                    if(in_array($division, $_SESSION['entry']['division'])){
                                                        $division_item .= 'checked';
                                                    }
                                                }
                                            }
                                            $division_item .= '>';
                                            $division_item .= $division;
                                            $division_item .= '</label></div>';
                                            echo $division_item;
                                        }
                                        ?>
                                        <div class="c-radio-list__item">
                                            <label>
                                                <input type="checkbox" name="division[]" class="c-checkbox" value="後で考える" <?php
                                                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['division'])) {
                                                    if(in_array('後で考える', $_POST['division'])){
                                                        echo 'checked';
                                                    }
                                                } elseif (isset($_REQUEST['action'])) {
                                                    if($_REQUEST['action'] == 'rewrite' && isset($_SESSION['entry']['division'])) {
                                                        if(in_array('後で考える', ($_SESSION['entry']['division']))){
                                                            echo 'checked';
                                                        }
                                                    }
                                                } ?>>後で考える
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>メッセージ</th>
                                <td>
                                    <textarea class="c-textarea" id="message" rows="5" name="message"><?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        echo htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
                                    } elseif (isset($_REQUEST['action'])) {
                                        if($_REQUEST['action'] == 'rewrite') {
                                            echo htmlspecialchars($_SESSION['entry']['message'], ENT_QUOTES, 'UTF-8');
                                        }
                                    }
                                    ?></textarea>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="privacyCheck">
                        <h5>個人情報のお取り扱いについて</h5>
                        <p>本入力フォームおよびメールでご連絡頂きました、お客様の個人情報につきましては、厳重に管理を行っております。<br>
                        法令等に基づき正規の手続きによって司法捜査機関による開示要求が行われた場合を除き、第三者に開示もしくは提供することはございません。</p>
                        <div class="accept"><label><input type="checkbox" name="accept" id="accept" value="同意する" class="c-checkbox" <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accept'])) { echo 'checked'; } elseif (isset($_REQUEST['action'])) { if ($_REQUEST['action'] == 'rewrite' && isset($_SESSION['entry']['accept'])) { echo 'checked'; } } ?>><span>個人情報のお取り扱いに同意する</span></label></div>

                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['accept'])) {
                                echo '<p class="help-block">個人情報のお取り扱いへの同意は必須です。</p>';
                            }
                        ?>
                    </div>


                    <div class="form-group form-btn">
                        <div class="input-zone">
                            <input id="btn_confirm" type="submit" value="確認画面へ" class="btn-confirm">
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>

</main>


<script>
    $(window).on('load', function() {
        _confirmCheck();
    });
    $("#accept").change(function(){
        _confirmCheck();
    });
    function _confirmCheck(){
        if($("#accept").prop('checked')){
            $("#btn_confirm").prop("disabled", false);
            $("#btn_confirm").addClass("hoverOn");
        } else {
            $("#btn_confirm").prop("disabled", true);
            $("#btn_confirm").removeClass("hoverOn");
        }
    }
</script>

<?php get_footer(); ?>