<?php

function university_features(){
    add_theme_support('title-tag');
    register_nav_menu('headermenulocation', 'Header Menu');
    register_nav_menu('footerlocationone', 'First Footer Menu');
    register_nav_menu('footerlocationtwo', 'Second Footer Menu');
}