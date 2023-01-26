 <?php

 /*
 Template Name: action
 */ 

  mb_language("japanese");
mb_internal_encoding("UTF-8");
 
 $_SESSION["nam"] = htmlspecialchars($_POST["nam"], ENT_QUOTES, "UTF-8");
 $_SESSION["kana"] = htmlspecialchars($_POST["kana"], ENT_QUOTES, "UTF-8");
 $_SESSION["email"] = htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");
 $_SESSION["text"] = htmlspecialchars($_POST["text"], ENT_QUOTES, "UTF-8");

 $_SESSION["error"] = false;

 if( isset($_SESSION["nam"]) == true && $_SESSION["nam"] == "" ){
    $_SESSION["error"] = true;
 }else{
 }
 if( isset($_SESSION["kana"]) == true && $_SESSION["kana"] == "" ){
    $_SESSION["error"] = true;
 }else{
 }
 if( isset($_SESSION["email"]) == true && $_SESSION["email"] == "" ){
    $_SESSION["error"] = true;
 }else{
 }

 
 ?>

 <?php get_header(); ?>

       <main>
            <div id="particles-js">
                <div id="#wrapper">

                </div>
            </div>
            <section id="contactpage" class="content">
                  <?php if( $_SESSION["error"] == true ):?>
                     <h1>入力に誤りがあります</h1>
                <form action="<?php echo home_url('/action'); ?>" method="post">
                    <label for="nam">
                        <span>必須</span>
                        <h3><?php if(isset($_SESSION["nam"]) && $_SESSION["nam"] == "" ):?><p id="error" style="width:100%; color:red; font-size:12px; text-align:center; ">入力されていません</p><?php endif; ?>お名前</h3>
                        <input type="text" name="nam">
                    </label>
                     <label for="kana">
                        <span>必須</span>
                         <h3><?php if(isset($_SESSION["kana"]) && $_SESSION["kana"] == "" ):?><p id="error" style="width:100%; color:red; font-size:12px; text-align:center; ">入力されていません</p><?php endif; ?>お名前(かな)</h3>
                         <input type="text" name="kana">
                     </label>
                      <label for="email">
                        <span>必須</span>
                          <h3><?php if(isset($_SESSION["email"]) && $_SESSION["email"] == "" ):?><p id="error" style="width:100%; color:red; font-size:12px; text-align:center; ">入力されていません</p><?php endif; ?>メールアドレス</h3>
                          <input type="email" name="email">
                      </label>
                       <label id="textlabel" for="text">
                           <h3>お問い合わせ内容</h3>
                           <textarea name="text"></textarea>
                       </label>
                       <button id="semdbutton" type="submit">送信</button>
                </form>
                <?php else: ?>
                <h1>内容確認</h1>
                <p>下記の内容の通りお問い合わせを送信いたします。お間違いがなければ送信ボタンを押してください。</p>
                <form action="<?php echo home_url('/semdmail'); ?>" method="post">
                    <label for="nam">
                        <span>必須</span>
                        <h3>お名前</h3>
                        <p><?php echo $_SESSION["nam"]; ?></p>
                    </label>
                     <label for="kana">
                        <span>必須</span>
                         <h3>お名前(かな)</h3>
                         <p><?php echo $_SESSION["kana"]; ?></p>
                     </label>
                      <label for="email">
                        <span>必須</span>
                          <h3>メールアドレス</h3>
                          <p><?php echo $_SESSION["email"]; ?></p>
                      </label>
                       <label id="textlabel" for="text">
                           <h3>お問い合わせ内容</h3>
                           <p><?php if(isset($_SESSION["text"]) == true && $_SESSION["text"] ==""):?>なし<?php else: ?><?PHP echo $_SESSION["text"]; ?>
                            <?php endif;?></p>
                       </label>
                       <button id="semdbutton" type="submit">送信</button>
                </form>
                <?php endif; ?>
            </section>
        </main>

        <?php get_footer(); ?>