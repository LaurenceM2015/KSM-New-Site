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

$course_url				= get_post_meta( 11, 'course_url', true );
$button_text			= get_post_meta( 11, 'button_text', true );

// ADVANCED CUSTOMER FIELD

// Section Introduction
$introduction_section_title         = get_field('introduction_section_title');
$introduction_section_description   = get_field('introduction_section_description');
$introduction_section_button        = get_field('introduction_section_button');

get_header();
?>
      <!-- main Header -->
    <header class="header text-white" id="paralaxBkgimgJS">
      <div class="header__jumbotron jumbotron-fluid">
        <div class="container header__container h-100">
          <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-7">
              <div class="header__text hero-text animated fadeInLeft">
                  <h1 class="text-left"><?php bloginfo('name'); ?></h1>
                  <div class="">
                    <p class="lead my-5"><?php bloginfo('description'); ?></p>
                    <a class="js-scroll-trigger btn btn--orange" href="#<?php echo $course_url; ?>"><?php echo $button_text; ?></a>
                  </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="header__img animated fadeInUp text-right">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/shin.jpg" alt="KSM shine">
            </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    
        <!-- Slogan with primary color -->
    <section class="section-primary slogan slogan--img" id="slogan">
      <div class="container">
          <div class="row">
            <div class="col-md-12 mt-5">
              <h2 class="text-white heading-secondary"><?php echo $introduction_section_title; ?></h2>
            </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-9 u-text-center my-5">
                
                  <p class="lead">
                      <?php echo $introduction_section_description; ?>
                  </p>
                  <a class="btn btn--white js-scroll-trigger" href="#apropodenous"><?php echo $introduction_section_button; ?></a>
              </div>
          </div>
      </div>
    </section><!-- Le Karate -->

       <!-- Blog Section -->
    <section class="section-features page-section" id="blogNews">
      <div class="container">
        <div class="row">
          <div class="col-md-12 pb-5">
            <h2 class="mb-5 heading-secondary heading-secondary--1">Les Dernière Informations</h2>
          </div>
        </div>
  
        <div class="row">
            
          <div class="col-lg-4 my-4">
            <div class="feature-box card">
              <div class="card-img-top feature-box__img-box">
                <img class="feature-box__img"  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/StKarateOuverts-min.jpg" alt="Un stage était organisé pour aider le jeune garçon">
              </div>
              <div class="card-body">
                  <h4 class="card-title feature-box__text">Un stage était organisé pour aider le jeune garçon</h4>
                  <p class="card-text">Un stage de karaté, ouvert à tous, s'est déroulé, vendredi soir, salle France-Routy. La séance s'est déroulée sous l'égide de Fabien Poullin, membre du
                 KSM, directeur technique départemental et cinquième dan de sa discipline.</p>
                      <a href="https://www.larep.fr/mardie-45430/actualites/un-stage-etait-organise-pour-aider-le-jeune-garcon_13121702/#refresh" target="_blank" class="btn-text">Lise l'article &rarr;</a>
                </div>
            </div>
          </div> <!-- feature box 1 -->
  
          <div class="col-lg-4 my-4">
            <div class="feature-box card">
              <div class="card-img-top feature-box__img-box">
                <img class="feature-box__img"  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/LassoSportive-min.jpg" alt="L’association sportive a plus de vingt ans">
              </div>
              <div class="card-body">
                  <h4 class="card-title feature-box__text">L’association sportive a plus de vingt ans</h4>
                  <p class="card-text">Professeurs diplômés au sein du club de karaté avec Fabien Poullin - qui intervient aussi au club de Mardié - Antonio Trindade et Serge Leprovost, 
                    encadrent une centaine de personnes à Olivet, dont environ 60 % d'enfants et ados.</p>
                      <a href="https://www.larep.fr/olivet-45160/loisirs/lassociation-sportive-a-plus-de-vingt-ans_12844162/" target="_blank" class="btn-text">Lise l'article &rarr;</a>
                </div>
            </div>
          </div><!-- feature box 2-->
  
          <div class="col-lg-4 my-4">
            <div class="feature-box card">
              <div class="card-img-top feature-box__img-box">
                <img class="feature-box__img"  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/stageMemorial-min.jpg" alt="Un stage mémorable pour les 20 ans du KSM">
              </div>
              <div class="card-body">
                  <h4 class="card-title feature-box__text">Un stage mémorable pour les 20 ans du KSM</h4>
                  <p class="card-text">Serge Chouraqui est passé par le club de Mardié afin d’animer un stage auquel une cinquantaine de combattants a participé.
                      «On n'a pas tous les jours 20 ans » chantait Berthe Sylva dans les années 1930.</p>
                      <a href="https://www.larep.fr/mardie-45430/sports/un-stage-memorable-pour-les-20-ans-du-karate-shotokan_12674567/" target="_blank" class="btn-text">Lise l'article &rarr;</a>
                </div>
            </div>
          </div><!-- feature box 3 -->

        </div><!-- row -->
  
      </div> <!-- container -->   
            
    </section>


    <!-- apropo de nous -->
    <section id="apropodenous" class="page-section projects-section bg-light">
      
      <div class="container">
        <div class="row">
          <div class="col-md-12 pb-5">
            <h2 class="mb-5 heading-secondary heading-secondary--1">A Propos De Nous</h2>
          </div>
        </div>

          <div class="row align-items-center no-gutters mb-4 mb-lg-5">
              <div class="col-xl-5 col-lg-7">
                <div class="text-center wow fadeInLeft">
                  <img class="img-fluid mb-3 mb-lg-0" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/profs3.jpg" alt="Les Professeurs de KSM, Valerie Mabilleau et Fabien Poulin">
                </div>
               
              </div>
              <div class="col-xl-7 col-lg-5 wow fadeInRight">
                <div class="featured-text text-center text-lg-left">
                  <h3>Depuis Le Debut</h3>
                  <p class="text-black-50 ">
                      Le club de karaté de Mardié (KSM) à été crée en 1998 et compte aujourd'hui quelques 50 licenciés 
                      dont une trentaine d'enfants (pour qui les cours sont départagés selon qu'ils sont gradés ou débutants).
                  </p>

                  <p class="text-black-50">
                      C'est un club de proximité qui permet aux adultes et aux parents d'enfants des communes environnantes (Bou, Donnery, Fay aux Loges…) de ne pas être obligé de se déplacer plus loin. 
                      Tout au long de l'année scolaire les licenciés peuvent avoir accès à de nombreux stages.
                  </p>

                 
                </div>
              </div>
            </div>
          </div><!-- container -->

    </section><!-- a propos de nous -->

    <!-- Section Les Stage bg image -->
    <section class="section-stage page-section h-100 parallax-BkgImg-jg" id="stage">
      <div class="stage parallax">
        <div class="container stage__container">
          <div class="row">
            <div class="col-md-12 mb-5">
              <h2 class="heading-secondary heading-secondary--2">Les Stage de KSM</h2>
            </div>
          </div>
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 u-text-center ">
              <div class="stage__box lead wow fadeIn">
                  
                <p class="">
                  Au long de l'année, le club vous proposera plusieurs stages, soit avec Fabien, soit avec des experts. 
                </p>
                <p class="">
                  Nous organisons également des stages communs avec 
                  la SMOC de St Jean de Braye (Professeur : D. Delétoile 4ème Dan) et un stage aux Sables d'Olonne à chaque fin de saison.
                </p>
                <p>
                  De plus tout au long de l’année les licenciés et professeurs participents à des stages à travers toute la France.
                </p>
              </div>
            </div>

            <div class="col-lg-3 text-center my-5 animated fadeInUp parallax">
              <div>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/KarateDoIdeogamme.jpg" class="img-fluid">
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- LES COMPETITION-->
    <section class="page-section projects-section" id="competition">
      <div class="wow fadeIn">
        <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <h2 class="heading-secondary heading-secondary--1 mb-5 pb-4">Compétition et Rencontres </h2>
              </div>
          </div>

              <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <div class="">
                <img class="img-fluid w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/compRenc-min.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 align-items-center">
            <div class="bg-black text-center project h-100 section-primary">
              <div class="d-flex">
                <div class="project-text w-100 h-100 text-center text-lg-left">
                  <h4 class="text-white page-header page-header--1 mt-0">Competition et Interclub</h4>
                  <p class="mb-0">
                      Des compétitions et interclubs sont organisées chaque année afin de permettre à nos élèves de s'affronter 
                      dans un bon esprit de compétition et de bonne humeur.

                      
                  </p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

           <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/valerie-min.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project section-primary">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white page-header page-header--1 mt-0">Stage aux Sable d'Olonne</h4>
                  <p class="mb-0 text-white">
                      Nous vous proposons également tous les ans un stage aux Sables d'Olonne avec Fabien. Si vous souhaitez vous exercer à cet art martial qu'est le karaté dans l'effort, 
                      le bien être et la convivialité, venez nous rejoindre.
                  </p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        </div> <!-- container -->
      </div>
    </section><!-- Competition -->

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
    <!-- Portfolio -->
  <section class="page-section bg-light" id="assocari">
      <div class="container">
        <div class="content-section-heading text-center pb-5 my-5">
          <h2 class="heading-secondary heading-secondary--1">Association Caritative</h2>
          <h3 class="text-secondary">Téléthon</h3>
          
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <div class="gallery">
              <div class="gallery__item" href="#">
                  <span class="caption">
                    <span class="caption-content">
                      <h4>Téléthon</h4>
                      <p class="mb-0"></p>
                    </span>
                  </span>
                  <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/telethon2008-min1.jpg" alt="Téléthon 2008">
                </div>

            </div>
          </div>
          <div class="col-lg-6">
            <div class="gallery">
              <div class="gallery__item" href="#">
                  <span class="caption">
                    <span class="caption-content">
                        <h4>Téléthon</h4>
                      <p class="mb-0"></p>
                    </span>
                  </span>
                  <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/telethon2008-min2.jpg" alt="Téléthon 2008">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="gallery">
              <div class="gallery__item">
                <span class="caption">
                    <span class="caption-content">
                      <h4>Téléthon</h4>
                      <p class="mb-0"></p>
                    </span>
                </span>
                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Telethon2007-min1.jpg" alt="Téléthon 2007">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="gallery">
              <div class="gallery__item">
                <span class="caption">
                    <span class="caption-content">
                      <h4>Téléthon</h4>
                      <p class="mb-0"></p>
                    </span>
                </span>
                <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Telethon2007-min2.jpg" alt="Téléthon 2007">
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Section Les Stage -->
  
    <section class="section-bkg__img section-bkg__img--1 page-section h-100 parallax-window" 
    data-z-index="1" data-parallax="scroll" data-image-src="<?php bloginfo('stylesheet_directory'); ?>/assets/css/img/remerciment-min.jpg">
      <div class="container info">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-white heading-secondary heading-secondary--1">Remerciment</h2>
        </div>
      </div><!-- row 1 -->
        
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center my-5">
          <div class="stage__box wow fadeIn h-100">
              
              <p class="lead text-center">
                  Nous tenons à remercier l'ensemble des enfants qui chaque année font preuve de sérieux, 
                  de courage et de respect dans leur pratique et pendant les différentes manifestations et compétitions.
              </p>
              
          </div>
        
        </div>
      </div>
    </div><!-- container -->
  </section>


  <!-- Section Les Charite -->
  <section class="section-charite page-section" id="charite">
        
    <div class="container">
          
      <div class="row">
        <div class="col-md-12">
          <h2 class="heading-secondary heading-secondary--1 mb-5 pb-5 text-center">Les Charite que nous Parrainents</h2>
        </div>
      </div>
          
      <div class="row wow fadeIn align-items-center section-primary no-gutters">

        <div class="col-lg-4">
          <div class="article h-100 wow fadeInLeft">
            <div class="article__left h-100 w-100">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/terredesenfant1.jpg" alt="Stage" class="img-fluid w-100 article__img">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/terredesenfant2.jpg" alt="Stage" class="img-fluid w-100 article__img">
            </div>
          </div>
        </div>
           
        <div class="col-lg-8">
          <div class="article h-100 wow fadeInRight px-5">
            <div class="article__right h-100">
                <div class="">
                    <h3 class="heading-tertiary text-white text-center pt-4">Terre Des Enfant</h3>
                </div>
                <p class="article__text lead">
                    Au cours de cette journée qui a vu passer près de 100 personnes dans notre petite salle polyvalente qui nous tient lieu de dojo, et grâce à votre contribution à tous, nous avons pu réunir 1840 € qui sont intégralement transférés à Terre des enfants qui se chargera elle-même d'approvisionner le compte de Démiséyélé. Fabien Poullin, professeur du KSM et ses assistants envoient également un très grand merci aux enfants du KSM 
                    qui se sont mobilisés et nous ont proposé une démonstration après le stage qui était déjà intensif. Merci à tous
                </p>
            </div>
          </div>

        </div>

      </div><!-- row -->
          
    </div><!-- container -->
      
  </section>

  <!-- div gallery -->

  <section class="section-gallery">
    <div class="row no-gutters galleryShowcase">

        <div class="col-md-2 col-md-4">
        <div class="parent" onclick="">
            <div class="child bg-three">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Afrique/Bamako-Mali-afrique1-min.jpg" alt="">
            <span>Bamako, Mali</span>
            </div>
        </div>
        </div><!-- ./ box 1 -->

        <div class="col-md-2 col-md-4">
        <div class="parent right" onclick="">
            <div class="child bg-four">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Afrique/Bamako-Mali-afrique2-min.jpg" alt="">
            <span>Bamako, Mali</span>
            </div>
        </div>
        </div> <!-- ./ box 2 -->

        <div class="col-md-2 col-md-4">
        <div class="parent" onclick="">
            <div class="child bg-five">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Afrique/Senegal-Dakar-affique-min.jpg" alt="">
            <span>Dakar, Senegal</span>
            </div>
        </div>
        </div><!-- ./ box 3 -->
        
        <div class="col-md-2 col-md-4">
        <div class="parent right" onclick="">
            <div class="child bg-six">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Afrique/cote-ivoire-afrique-min.jpg" alt="">
            <span>Cote d'Ivoire, Afrique</span>
            </div>
        </div>
        </div> <!-- ./ box 4-->


        <div class="col-md-2 col-md-4">
        <div class="parent" onclick="">
            <div class="child bg-one">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Afrique/fabien-min.jpg" alt="">
            <span>Fabien En Afrique</span>
            </div>
        </div>
        </div><!-- ./ box 5 -->

        <div class="col-md-2 col-md-4">
        <div class="parent right" onclick="">
            <div class="child bg-two">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Afrique/fabien1-min.jpg" alt="">
            <span>Fabien En Afrique</span>
            </div>
        </div>
        </div>
        
    </div>
  </section>


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

  <!-- Team Sections -->
  <section class="bg-light page-section section-team" id="team">
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="heading-secondary heading-secondary--1 mb-5 pb-5 text-center">Nos professeur</h2>
          </div>
        </div>
        <div class="row text-center">
              
          <div class="col-sm-4">
            <div class="team h-100">
              <div class="team__member">
                <img class="mx-auto rounded-circle team__img" src="assets/img/fabien.jpg" alt="">
                <h4 class="team__heading team__name">Fabien Poullin</h4>
                <p class="text-muted team__title">
                  <span class="team__title--main">
                      Entraîneur
                  </span>
                  <span class="team__title--sub">
                    <i class="fa fa-trophy fa-color"></i>
                    5 dan
                  </span>
                  
                </p>
              </div>
            </div> 
          </div> <!-- team-box 1-->

          <div class="col-sm-4">
            <div class="team h-100">
              <div class="team__member">
                <img class="mx-auto rounded-circle team__img" src="assets/img/valery.jpg" alt="">
                <h4 class="team__heading team__name">Valérie Mabilleau </h4>
                <p class="text-muted team__title">
                  <span class="team__title--main">
                      Présidente
                  </span>
                  <span class="team__title--sub">
                      <i class="fa fa-trophy fa-color"></i> 
                      4 dan   
                  </span>
                  </p>
              </div>
            </div>
          </div><!-- team-box 2 -->

          <div class="col-sm-4">
            <div class="team h-100">
              <div class="team-member">
                <img class="mx-auto rounded-circle team__img" src="assets/img/Annick.jpg" alt="">
                <h4 class="team__heading team__name">Annick Diquelou </h4>
                <p class="text-muted team__title">
                  <span class="team__title--main">
                      Présidente départementale
                  </span>
                  <span class="team__title--sub">
                    <i class="fa fa-trophy fa-color"></i> 4 dan
                  </span>
                  </p>
              </div>
            </div>
          </div> <!-- team-box 3 -->
        </div> <!-- row -->
         
    </div><!-- container -->
  </section>

  <!-- no lien -->
  <section class="section-lien py-5">
    <div class="row">

            <div class="col-md-2 col-sm-4 col-xs-6">
              <a href="#">
                <img class="img-fluid d-block mx-auto" src="assets/img/lien/DTDSLIDE.jpg">
              </a>
            </div>
    
            <div class="col-md-2 col-sm-4 col-xs-6">
              <a href="#">
                <img class="img-fluid d-block mx-auto" src="assets/img/lien/KarateMartial.jpg">
              </a>
            </div>
    
            <div class="col-md-2 col-sm-4 col-xs-6">
              <a href="#">
                <img class="img-fluid d-block mx-auto" src="assets/img/lien/Logo-Sourires-denfants.jpg">
              </a>
            </div>
    
            <div class="col-md-2 col-sm-4 col-xs-6">
              <a href="#">
                <img class="img-fluid d-block mx-auto" src="assets/img/lien/ffkda_logo.png">
              </a>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
              <img class="img-fluid d-block mx-auto" src="assets/img/lien/terredesenfant.jpg">
            </div>
    
            <div class="col-md-2 col-sm-4 col-xs-6">
              <a href="#">
                  <img class="img-fluid d-block mx-auto" src="assets/img/lien/ligueTBO.png">
              </a>
            </div>
    
    </div>
  </section>

  <section id="contact" class="page-section section-dark page-contact">
    <div class="container">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-md-12 mb-3 text-center text-white">
            <h2 class="heading-secondary heading-secondary--2">Contact Nous</h2>
          </div>
        </div>
              
        <div class="row my-5">
          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="text-black-50">
                  <address>
                    <p>2 Rue Anthelme Flatet</p>
                    <p>à Fleury Les Aubrais</p>
                    <p>45400</p>
                  </address>
                </div>
              </div>
            </div>
          </div><!-- contact-box 1-->

          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt mb-2"></i>
                <h4 class="text-uppercase m-0">Téléphone</h4>
                <hr class="my-4">
                <div class="text-black-50">
                  <p>
                    Fabien <abbr title="Phone"></abbr>: (33) 06 75 48 97 70
                  </p>
                  <p> 
                    valerie
                    <abbr title="Phone"></abbr>: (33) 06 76 75 50 98
                  </p>
                </div>
              </div>
            </div>
          </div><!-- contact-box 2 -->

          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="text-black-50">
                  <abbr title="Email"></abbr><a href="mailto:valerie.mabilleau@sfr.fr">valerie.mabilleau@sfr.fr</a>
                </div>
              </div>
            </div>
          </div><!-- contact-box 3 -->

          <div class="col-lg-3 col-md-6 mb-3">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-tags mb-2"></i>
                <h4 class="text-uppercase m-0">Nos Tarif</h4>
                <hr class="my-4">
                <div class="text-black-50">
                  <ul class="list-unstyled list-social-icons">
                    <li>Adultes: 189 <i class="fas fa-euro-sign"></i></li>
                    <li>Enfants de 6 à 14 ans: 139 <i class="fas fa-euro-sign"></i></li>
                    <li>Enfants de 15 à 18 ans: 159 <i class="fas fa-euro-sign"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- conctact-box 4 -->

        </div> <!-- row --> 
                   
      </div><!-- fade in -->
 
    </div><!-- container -->
  </section><!-- Nos Principe -->

<?php

get_footer();
