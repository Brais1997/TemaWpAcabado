
<?php get_header(); ?>

 <?php get_sidebar("home_right_1"); ?>
 
 <div id="nudo">
 
<div id="e4">

 <?php 
if (have_posts()){
while (have_posts()) {
the_post(); ?>
<h2 id="post-<?php the_ID(); ?>"> 
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<small>Publicado el <?php the_time('j/m/Y') ?><!-- por <?php the_author_posts_link() ?>--> </small>
<?php
    the_content();
}
}
?>
</div>
 </div>


<?php get_footer();?>