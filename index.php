       <?php get_header(); ?>

       <main>

            <div id="particles-js">
                <div id="#wrapper">

                </div>
            </div>
            <section class="content">
                <div id="leftcontent">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/Mask group.png">
                </div>
                <div id="rightcontent">
                    <h1>WELLCOME !</h1>
                    <h2>プロフィール</h2>
                    <div class="right-text">
                    <p class="c1-left-text">氏名<br><br>年齢<br><br>職業</p>
                    <p class="c1-right-text">安崎 海星<br><br>23歳<br><br>ウェブデザイナー<br class="SP">・ウェブプログラマー</p>
                    </div>
                    <h2>初めまして</h2>
                    <p class="right-bottom-text">初めまして、私は札幌市を中心にウェブ制作のお仕事をしています。
                        webデザイン、webプログラミング、バナーやロゴなど幅広いお仕
                        事をさせていただいております。現在個人でお仕事をさせていただ
                        いており、リーズナブルな価格帯で迅速な対応をお約束いたします。</p>
                </div>
            </section>
            <section class="content">
                <div id="topcontent">
                    <div id="topleft">
                        <img class="PC" src="<?php echo get_template_directory_uri(); ?>/photos/leftimg.png">
                         <img class="TB" src="<?php echo get_template_directory_uri(); ?>/photos/SP-photos/c1-top-img.png">
                        <img class="SP" src="<?php echo get_template_directory_uri(); ?>/photos/SP-photos/c1-top-img.png">
                    </div>
                    <div id="topright">
                    <h2>リーズナブルな価格</h2>
                    <p>当方ではデザインからプログラミング、その後の保守といった一貫して行う作業から
                        デザインのみ、プログラミングのみ、ウェブサイトの一部補修、サーバー管理などの
                        個別の作業まで幅広くご対応しています。</p>
                    </div>
                </div>
                <div id="bottomcontent">
                     <img class="TB" src="<?php echo get_template_directory_uri(); ?>/photos/SP-photos/c1-bottom-img.png">
                    <img class="SP" src="<?php echo get_template_directory_uri(); ?>/photos/SP-photos/c1-bottom-img.png">
                     <div id="bottomleft">
                         <h2>スピーディな対応</h2>
                         <p>
                            当方ではお客様から伺った要件に関して迅速な返答、ご対応が可能です。お客様の普段使用しているご連絡手段をお伝えください。

                            例　スカイプ、チャットワーク、クラウドワークス等
                         </p>
                     </div>
                      <div id="bottomright">
                          <img class="PC"src="<?php echo get_template_directory_uri(); ?>/photos/rightimg.png">
                      </div>
                </div>
            </section>
            <section class="content">
                <h2 id="c2-h2-1">保有スキル・扱えるソフトウェア</h2>
                <p>ウェブサイトを一から構築するにはプログラミングスキルが必須となり、それも一つの言語のみを
                    習得するのではなく、複数の言語を組み合わせて構築していきます。また、昨今のweb制作業界の
                    技術革新に対応するため仕事をしながら日々、新しい技術の習得のために勉強を重ねています。</p>
                <h2 id="c2-h2-2">プログラミングスキル</h2>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/html.png">
                        <h3>HTML</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/css.png">
                        <h3>CSS</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/js.png">
                        <h3>JavaScript</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/php.png">
                        <h3>PHP</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/mysql.png">
                        <h3>Mysql</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/jquery.png">
                        <h3>Jquery</h3>
                    </li>
                </ul>
            </section>
            <section class="content">
                <h2>ソフトウェア</h2>
                <p>web制作ではウェブサイトのデザイン、画像の加工、軽量化、ロゴの制作などには必ずそれらに適したソフトウェアを利用する必要が出てきます</p>
                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/ps.png">
                        <h3>PhotoShop</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/ai.png">
                        <h3>Illustrator</h3>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/skill/dw.png">
                        <h3>DreamWesver</h3>
                    </li>
                </ul>
            </section>
            <section class="content">
                <h2>ブログ更新情報</h2>
                <div id="blogs">

       <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>
             
                    <dl>
                        <a href="<?php echo get_permalink(); ?>">
                             <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail',['class'=>'blogimg']); ?>
                            <?php else : ?>
                                <img class="blogimg" src="<?php echo get_template_directory_uri(); ?>/photos/noimage 1.png">
                            <?php endif ; ?>
                            <div id="blogright">
                            <dt class="PC"><?php the_title(); ?></dt>
                             <dt class="TB">
                            <?php
                            if(mb_strlen($post->post_title)>25) {
                             $title= mb_substr($post->post_title,0,25) ;
                                echo $title . '...';
                              } else {
                                echo $post->post_title;
                              }
                            ?>
                            </dt>
                            <dt class="SP">
                            <?php
                            if(mb_strlen($post->post_title)>10) {
                             $title= mb_substr($post->post_title,0,10) ;
                                echo $title . '...';
                              } else {
                                echo $post->post_title;
                              }
                            ?>
                            </dt>
                            <dd id="blog-dd1" class="PC"><?php
                                    if ( mb_strlen( $post->post_content, 'UTF-8' ) > 450 ) {
                                        $content = mb_substr( strip_tags( $post->post_content ), 0, 450, 'UTF-8' );
                                        echo $content . '…';
                                    } else {
                                          echo strip_tags( $post->post_content );
                                    }
                                    ?></dd>
                                       <dd id="blog-dd1" class="TB"><?php
                                    if ( mb_strlen( $post->post_content, 'UTF-8' ) > 140 ) {
                                        $content = mb_substr( strip_tags( $post->post_content ), 0, 140, 'UTF-8' );
                                          echo $content . '…';
                                    } else {
                                     echo strip_tags( $post->post_content );
                                    }
                                    ?></dd>
                                      <dd id="blog-dd1" class="SP"><?php
                                    if ( mb_strlen( $post->post_content, 'UTF-8' ) > 28 ) {
                                        $content = mb_substr( strip_tags( $post->post_content ), 0, 28, 'UTF-8' );
                                          echo $content . '…';
                                    } else {
                                     echo strip_tags( $post->post_content );
                                    }
                                    ?></dd>
                            <dd id="blog-dd2"><img src="<?php echo get_template_directory_uri(); ?>/photos/time 1.png">作成日時：<?php the_time('Y年n月j日'); ?></dd>
                            </div>
                        </a>
                    </dl>
      <?php 
          endwhile;
      endif;
      ?>
                </div>
            </section>
            <section class="content">
                <h2>お問い合わせ</h2>
                <form action="<?php echo home_url('/action'); ?>" method="post">
                    <label for="nam">
                        <span>必須</span>
                        <h3>お名前</h3>
                        <input type="text" name="nam">
                    </label>
                     <label for="kana">
                        <span>必須</span>
                         <h3>お名前(かな)</h3>
                         <input type="text" name="kana">
                     </label>
                      <label for="email">
                        <span>必須</span>
                          <h3>メールアドレス</h3>
                          <input type="email" name="email">
                      </label>
                       <label id="textlabel" for="text">
                           <h3>お問い合わせ内容</h3>
                           <textarea name="text"></textarea>
                       </label>
                       <button type="submit">送信</button>
                </form>
            </section>
        </main>

        <?php get_footer(); ?>