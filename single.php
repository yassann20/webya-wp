<?php get_header(); ?>

       <main>
            <div id="particles-js">
                <div id="#wrapper">
                </div>
            </div>
            <?php if(have_posts()):
                while(have_posts()): the_post(); ?>
           <section id="subpage" class="content">
             <h1><?php the_title(); ?></h1>
            <?php the_content();?>
           </section>
           <?php endwhile;
           endif; ?>
        </main>

        <?php get_footer(); ?>