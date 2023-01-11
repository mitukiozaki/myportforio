<?php get_header(); ?>

<?php if(have_posts()):?>
   <?php while(have_posts()):the_post();?>
   <div class="posts">
         <div class="post_title">
                <h1><?php the_title() ;?></h1>
        </div>
        <div class="post_date">
           <?php echo get_the_date(); ?>
        </div>
       <div class="post_image">
       <?php the_post_thumbnail(); ?>
       </div>
        <div class="post_content">
                <?php echo get_the_content();?>
        </div>
    </div>    
   <?php endwhile; ?>
<?php endif; ?>

   </div>

<?php get_footer(); ?>