<?php
session_start();

if (!isset($_SESSION['entry'])) {
    $home_url = esc_url( home_url( '/' ) );
    header('Location: ' . $home_url . 'entry/');
    exit();
}

if( $_SESSION["entry"]["token"] != $_SESSION["entry"]["token2"] ){
    $_SESSION = array();
    header('Location: ' . $home_url . 'entry/error/');
}

$job = $_SESSION['entry']['job'];
$division = $_SESSION['entry']['division'];

$mailto = "recruit@i-freek.co.jp";
$mailfrom = "From:" .mb_encode_mimeheader("株式会社アイフリークモバイル"). "<recruit@i-freek.co.jp>";

$content = "本メールは株式会社アイフリークモバイルの採用サイトのエントリーフォームよりご連絡いただいた方へ自動送信しております。

この度はエントリーいただき誠にありがとうございました。以下の内容が送信されました。

----------------------------------------------------------------------

【お名前】
".$_SESSION['entry']['namae']."

【ふりがな】
".$_SESSION['entry']['kana']."

【メールアドレス】
".$_SESSION['entry']['email']."

【電話番号】
".$_SESSION['entry']['tel']."

【希望職種】\n";

foreach ($job as $index => $value) {
    $content .= $value;
    $content .= "\n";
}
$content .= "\n";
$content .= "【メッセージ】
".$_SESSION['entry']['message']."


----------------------------------------------------------------------

内容を確認の上、ご返信先メールアドレスまたは電話へご連絡いたしますので、
しばらくお待ちくださいますようお願いいたします。


なお、エントリーから1週間程度経過しましても回答がない場合、
担当者にてメールが受信できていない可能性がございます。

大変お手数ですが、下記の連絡先まで
再度お問い合わせくださいますようお願いいたします。


※本メールに心当たりのない場合は大変お手数ですが下記までご連絡ください。

■□■――――――――――――――――――
株式会社アイフリークモバイル
採用担当
東京都新宿区新宿二丁目1番11号
御苑スカイビル10階
Email：recruit@i-freek.co.jp
――――――――――――――――――■□■";

function funcManagerAddress($mailto, $mailfrom, $content){
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    extract($_SESSION);
    $mailto = $mailto;
    $mailfrom = $mailfrom;
    $subject = "エントリーフォームから";
    $content = $content;


    if(mb_send_mail($mailto, $subject, $content, $mailfrom)){
        $managerFlag = "○";
    } else {
        $managerFlag = "×";
    }
    return $managerFlag;
};


function funcContactAddress($mailfrom, $content){
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $mailto2 = $_SESSION['entry']['email'];
    $mailfrom = $mailfrom;

    $subject2="【株式会社アイフリークモバイル】エントリーありがとうございました";
    $content = $content;



if(mb_send_mail($mailto2, $subject2, $content, $mailfrom)){
    $contactFlag = "○";
} else {
    $contactFlag = "×";
}
    return $contactFlag;
};


$managerAddress = funcManagerAddress($mailto, $mailfrom, $content);
$contactAddress = funcContactAddress($mailfrom, $content);
if($managerAddress === "○" && $contactAddress === "○" ){
    header('Location: ' . $home_url . 'entry/thanks/');
} else {
    header('Location: ' . $home_url . 'entry/error/');
}
