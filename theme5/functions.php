<?php

/*add_theme_support('post-thumbnails') permet d'avoir accès aux images de mise en avant des
articles dans l'administrateur de WorPress */
add_theme_support('post-thumbnails');

/* add_theme_support('title-tag') permet d'avoir accès au titre du site dans l'administrateur de WordPress
via apparence -> personnaliser->Identité du site */
add_theme_support('title-tag');

//Permet d'avoir accès aux menu dans l'administrateur WorPress via apparence->menus
register_nav_menus(array('menu-principal'=>'Menu principal'));


?>