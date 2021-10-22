<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A digital solutions partner you can trust">
    <meta name=”robots” content=”index, follow”>
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
</head>
<body <?php body_class();?>>
    <header>
        <div class="container">
            <div class="header-logo">
                <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    
                    if ( has_custom_logo() ) {
                        echo '<a href="' . get_home_url() . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                ?>
            </div>
            <nav>
                <?php
                    wp_nav_menu(
                        array(
                            'menu_class' => 'header-menu',
                            'theme_location' => 'header-menu',
                        )
                    );
                ?>
            </nav>
        </div>
    </header>
    