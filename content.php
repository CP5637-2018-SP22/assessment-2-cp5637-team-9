 <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="<?php the_permalink(); ?>" /a></a> 
                <?php the_title(); ?>
                   </h2>
                
            <p class="blog-post-meta">
                <?php the_date(); ?>
                <a href="
                         <?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                   <?php the_author(); ?>
                   </a></p>
              <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>
        <?php the_excerpt(); ?>
           
          </div><!-- /.blog-post -->