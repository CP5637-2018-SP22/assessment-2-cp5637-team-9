<?php get_header(); ?>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
            
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?> 
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">

                <?php the_title(); ?>
                   </h2>
                
           
        <?php the_content(); ?>
           
          </div><!-- /.blog-post -->
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php  __('No Page Found'); ?></p>
            
         <?php endif; ?>
            
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          

        <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
            
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

   <?php get_footer(); ?>