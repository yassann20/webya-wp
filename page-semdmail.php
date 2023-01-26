<?php

 /*
 Template Name: semdmail
 */ 
 
 mb_language("japanese");
mb_internal_encoding("UTF-8");

$headers ="from: kaiseif4e@gmail.com";
$from="kaiseif4e@gmail.com";
$to = $_SESSION["email"];
$title = "お問い合わせ内容の確認";
$message = "※このメールはシステムからの自動返信です\r\n";
$message .= $_SESSION["nam"]." 様\r\n";
$message .="お世話になっております。この度はWEBYAYASUへのお問い合わせありがとうございました。\r\n";
$message .="以下の内容でお問い合わせを受け付けいたしました。\r\n";
$message .="2営業日以内に、担当者 安崎 (やすざき) よりご連絡いたしますので\r\n今しばらくお待ちくださいませ。\r\n";
$message .="------------------------------※お問い合わせ内容※-----------------------------\r\n\r\n";
$message .="お名前: ".$_SESSION["nam"]."\r\n";
$message .="お名前(かな): ".$_SESSION["kana"]."\r\n";
$message .="メールアドレス: ".$_SESSION["email"]."\r\n";
$message .="詳細な内容: ".$_SESSION["text"]."\r\n\r\n";
/*ここからはファイルを添付するための処理*/
/*ここまで*/
$message .="----------------------------------------------------------------------------------------\r\n\r\n";
$message .="送り主:WEBYAYASU\r\n";
$message .="担当: 安崎 海星\r\n";
$message .="メールアドレス:".$from;
/*--------------------------------------------------------------------------------管理者向けのメールを送信----------------------------------------------------------------------------------------*/
$masterheaders ="from: お客様";
$masterfrom= $_SESSION["email"];
$masterto = $from;
$mastertitle = "お客様よりお問い合わせをいただきました。2営業日以内に返信してください。\r\n";
$mastermessage = "※このメールはシステムからの自動返信です\r\n";
$mastermessage .="------------------------------※お問い合わせ内容※-----------------------------\r\n\r\n";
$mastermessage .="お名前: ".$_SESSION["nam"]."\r\n";
$mastermessage .="お名前(かな): ".$_SESSION["kana"]."\r\n";
$mastermessage .="メールアドレス: ".$_SESSION["email"]."\r\n";
$mastermessage .="詳細な内容: ".$_SESSION["text"]."\r\n\r\n";
/*ここからはファイルを添付するための処理*/
/*ここまで*/
$mastermessage .="----------------------------------------------------------------------------------------\r\n\r\n";
 
?>

 <?php get_header(); ?>

       <main>
            <div id="particles-js">
                <div id="#wrapper">

                </div>
            </div>
            <section id="contactpage" class="content flexbody">
             <?php if(mb_send_mail($to, $title, $message, $headers) && mb_send_mail($masterto, $mastertitle, $mastermessage, $masterheaders)): ?>
                <h1>送信完了</h1>
                <p>お問い合わせ内容の送信が完了いたしました。<br>ご確認用のメールを送信しておりますのでお問い合わせ内容についてはそちらよりご確認ください。<br>お問い合わせ内容について確認の上、担当者よりご連絡いたしますので今しばらくお待ちください。</p>
                <p>※メールの設定によっては迷惑メールの方に送信される場合がございます。メールが届かない場合はそちらの方もご確認ください。</p>
                <button id="semdbutton" onclick="location.href='<?php echo home_url(); ?>'">トップ</button>
            <?php else: ?>
                 <h1>送信失敗</h1>
                <p>予期せぬ事情によりメールの送信に失敗しました。お手数ですがもう一度お試しください。</p>
                <button id="semdbutton" onclick="location.href='<?php echo home_url(); ?>'">トップ</button>
            <?php endif; ?>
            </section>
        </main>

        <?php get_footer(); ?>