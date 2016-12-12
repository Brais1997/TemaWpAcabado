<!DOCTYPE html>
<html>
     <head>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri ();?>"/>
    </head>
<body>
  
 <div id="foto">
   <center><a href="https://www.youtube.com/watch?v=X_tKzZiSJY4"><img  src="<?php echo get_template_directory_uri() . '/img/b.gif'?>" weigth="200px" height="175px"/></a></center>
</div>
<div id="cabecera">
        
       <?php wp_nav_menu(
           array(
            'menu' => 'MenuDoMenu'
        ) ); ?>
        
 

</div>

