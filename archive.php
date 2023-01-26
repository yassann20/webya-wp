<?php get_header(); ?>
<!-- 上記が追記するコード -->
 
  <main>
    <div id="particles-js">
        <div id="#wrapper">
        </div>
    </div>
<section id="subpage" class="content">
    <h1>記事一覧</h1>
     <div id="blogs" class="margin-bottom">
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
 	</main>
 <!-- 下記が追記するコード -->
<?php get_footer(); ?>