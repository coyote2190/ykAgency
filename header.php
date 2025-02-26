<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yklic_logo.png" alt="Yklic" />
                </div>
            </div>
        </div>
    </header>
