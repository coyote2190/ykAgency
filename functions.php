<?php

require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";

// Fonction ajouter les fichiers JS
function yk_agency_enqueue_scripts()
{
    // Ajouter le fichier JS
    wp_enqueue_script(
        "yk_agency-script", // Handle unique
        get_template_directory_uri() . "/assets/js/script.js", // Chemin vers le fichier
        ["jquery"], // Dépendances (vide ici)
        "1.0", // Version du script
        true // Charger dans le footer
    );
}
add_action("wp_enqueue_scripts", "yk_agency_enqueue_scripts");

// Fonction pour inclure les styles CSS
function yk_agency_enqueue_styles()
{
    // Charger le style principal
    wp_enqueue_style(
        "yk_agency-style", // Handle unique
        get_template_directory_uri() . "/style.css", // Chemin vers le fichier CSS
        [], // Dépendances (exemple : Bootstrap)
        "1.0", // Version du fichier CSS
        "all" // Type de média (all, screen, print, etc.)
    );
}
add_action("wp_enqueue_scripts", "yk_agency_enqueue_styles");

// Fonction pour inclure les fonts
function ocean_therapist_enqueue_fonts()
{
    // Ajouter la police Roboto depuis Google Fonts
    wp_enqueue_style(
        "ocean-literata-font",
        "https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap",
        [],
        null
    );
    wp_enqueue_style(
        "ocean-roboto-font",
        "https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Syne:wght@400..800&display=swap",
        [],
        null
    );
}
add_action("wp_enqueue_scripts", "ocean_therapist_enqueue_fonts");

function enqueue_fontawesome()
{
    wp_enqueue_style(
        "fontawesome",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    );
}
add_action("wp_enqueue_scripts", "enqueue_fontawesome");

function add_theme_color_meta_tag()
{
    echo '<meta name="theme-color" content="#fcf7ee">';
}
add_action("wp_head", "add_theme_color_meta_tag");

function theme_setup()
{
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "theme_setup");

?>
