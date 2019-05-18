<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_Landing_Page
 */
   
 /*

     Template Name: Home Page
*/





get_header();
?>
   <?php get_template_part('content','hero'); ?>
   <?php get_template_part('content','intro'); ?>
   <?php get_template_part('content','blog'); ?>
   <?php get_template_part('content','about'); ?>
   <?php get_template_part('content','stage'); ?>
   <?php get_template_part('content','competRencontre'); ?>

    <section class="section-primary slogan" id="slogan">
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-9 u-text-center my-5">
                  <h2 class="text-white heading-secondary">Rencontres</h2>
                  <p class="my-5 lead">
                      Les enfants peuvent participer à un inter-club organisé par Dominique Delétoile (SMOC St Jean de Braye), Valéry Boucher (ESDO Orléans) et Fabien Poullin (KSM). 
                      C'est une compétition tournée vers la rencontre, le respect et l'amitié.
                  </p>

               
              </div>
            </div>
        </div>
     </section><!-- Le Karate -->


     <!-- LES Telethon -->
   

  <!-- Section Les Stage -->

  <?php get_template_part('content','assocari'); ?>


  <?php get_template_part('content','remerciment'); ?>
  
  <?php get_template_part('content','charite');?>

  <!-- NOS PRINCIPE -->
  <section class="section-primary slogan" id="slogan">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 u-text-center my-5">
          <h2 class="text-white">Nos Principe</h2>
          <p class="my-5 lead">Chaque Karatéka et chaque club de karaté doit respecter sur le tatamis, comme dans la vie quotidienne un certain code d'honneur. Ce code d'honneur est un ensemble de valeurs et de principes (politesse, sincérité, honneur, respect, contrôle de soi, modestie, amitié, volonté…) 
            Vaste apprentissage qui ne peut que nous aider à vivre mieux sur le tatamis et au quotidien</p>
           
        </div>
      </div>
    </div>
  </section><!-- Nos Principe -->

  <?php get_template_part('content', 'homeGallery');?>

 <?php get_template_part('content', 'teamMember'); ?>

 <?php get_template_part('content', 'clientLink'); ?>

 <?php get_template_part('content','contactUs'); ?>

<?php

get_footer();
