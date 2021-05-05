<!DOCTYPE html>
<!-- la fonction language_attributes() remplace lang="fr", c'est la langue spécifiée 
dans l'administrateur de WordPress qui sera alors pris en compte 
 -->

<html <?php language_attributes(); ?>>
    <head>
        <!-- La fonction bloginfo('charset') remplace charset="UTF-8" habituellement utilisé, par défaut, la valeur est également utf-8 
        Au niveau de la base de donnéés de WordPress, cette valeur est contenue dans la table _option avec option_name='blog_charset'
        -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        
        <!-- La fonction bloginfo('stylesheet_url') donne l'accès au fichier style.css
        Au niveau de la base de donnéés de WordPress, cette valeur est contenue dans la table _option avec option_name='stylesheet' -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
        
        <!-- La fonction wp_head fera apparaître l'entête -->
        <?php wp_head(); ?>
    </head>
    
    <!-- La fonction body_class() nous permettra d'avoir accès aux différentes classes
    utilisée par WordPress sur la partie <body> de la page 
    -->
    <body <?php body_class(); ?>>        
        <header>
            <!-- La fonction wp_nav_menu(array('theme-location'=>'menu-principal')) affiche le menu tel qu'il a été construit dans l'administrateur de WorPress dans Apparence -> menus 
            -->
            <?php wp_nav_menu(array('theme-location'=>'menu-principal')); ?>
          
           <!-- Bloc qui permet d'afficher un icone cliquable de retour à la page d'accueil : pour que cela fonctionne, il faut créer un sous-dossier 'img' dans lequel on ira placer l'icone 'monlogo.png'-->
            <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/monlogo.png" alt="Logo">
            </a> 
        </header>

           <!-- La fonction wp_body_open(); permet l'affichage de la partie <body> de la page appelée. -->
            <?php wp_body_open(); ?>