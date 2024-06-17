<?php
/*
Template Name: エントリー入力内容確認ページ
*/
?>
<?php
session_start();

if (!isset($_SESSION['entry'])) {
    $home_url = esc_url( home_url( '/' ) );
    header('Location: ' . $home_url . 'entry/');
    exit();
}

if (isset($_SESSION['entry']['division'])) {
    $division = $_SESSION['entry']['division'];
}
if (isset($_SESSION['entry']['job'])) {
    $job = $_SESSION['entry']['job'];
}

function send() {
    $uri = get_template_directory_uri();
    if (isset($_SESSION['entry']['post_token']) && $_SESSION['entry']['post_token'] === $_SESSION['entry']['csrf_token']) {
        header('Location: ' . $uri . '/assets/mailform/mailsend.php');
        exit();
    } else {
        $home_url = esc_url( home_url( '/' ) );
        header('Location: ' . $home_url . 'entry/confirm/');
        exit();
    }
}
if (isset($_GET['send'])) {
    send();
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

                <table class="contact_table">
                    <tbody>
                        <tr>
                            <th>
                                <div class="hissu_cell">お名前<span class="hissu">必須</span></div>
                            </th>
                            <td>
                                <?php echo htmlspecialchars($_SESSION['entry']['namae'], ENT_QUOTES, 'UTF-8'); ?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <div class="hissu_cell">ふりがな<span class="hissu">必須</span></div>
                            </th>
                            <td>
                                <?php echo htmlspecialchars($_SESSION['entry']['kana'], ENT_QUOTES, 'UTF-8'); ?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <div class="hissu_cell">メールアドレス<span class="hissu">必須</span></div>
                            </th>
                            <td>
                                <?php echo htmlspecialchars($_SESSION['entry']['email'], ENT_QUOTES, 'UTF-8'); ?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <div class="hissu_cell">メールアドレス（確認用）<span class="hissu">必須</span></div>
                            </th>
                            <td>
                                <?php echo htmlspecialchars($_SESSION['entry']['confirm_email'], ENT_QUOTES, 'UTF-8'); ?>
                            </td>
                        </tr>

                        <tr>
                            <th>
                                <div class="hissu_cell">電話番号<span class="hissu">必須</span></div>
                            </th>
                            <td>
                                <?php echo htmlspecialchars($_SESSION['entry']['tel'], ENT_QUOTES, 'UTF-8'); ?>
                            </td>
                        </tr>

                        <tr>
                            <th>希望職種<br>※複数選択可</th>
                            <td>
                                <?php
                                if (isset($_SESSION['entry']['job'])) {
                                    foreach ($job as $index => $value) {
                                        if ($index != array_key_last($job)) {
                                            echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                                            echo "、";
                                        } else {
                                            echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                                        }
                                    }
                                } else {
                                    echo "特になし";
                                } ?>
                            </td>
                        </tr>

                        <tr>
                            <th>メッセージ</th>
                            <td>
                                <?php
                                if (isset($_SESSION['entry']['message'])) {
                                    echo htmlspecialchars($_SESSION['entry']['message'], ENT_QUOTES, 'UTF-8');
                                } else {
                                    echo "特になし";
                                } ?>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <p><?php echo htmlspecialchars($_SESSION['entry']['post_token'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p><?php echo htmlspecialchars($_SESSION['entry']['csrf_token'], ENT_QUOTES, 'UTF-8'); ?></p>

                <div class="form-btn">
                    <div class="form-btns">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>entry?action=rewrite" class="btn btn-conta">書き直す</a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>entry/confirm/?send=true" class="btn btn-info">送信する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
