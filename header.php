<!DOCTYPE html>

<html>
    <head>
        <title>long-charis</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/my_portfolio.css" />
        <?php wp_head(); ?>
    </head>
    <body>

        <header>
                <div class="logo">
                    <a href="/"><img class="logo_img" src="<?php echo get_template_directory_uri(); ?>/images/long.png" alt="logo"></a>
                </div>

                <div class="global_menu">

                    <ul>
                       
                            <li class="about1"><a href=<?php echo esc_url(home_url());?>/#target>About</a></li>
                            <li class="work2"><a href=<?php echo esc_url(home_url());?>/#target2>work</a></li>
                            <li class="blog3"><a href=<?php echo esc_url(home_url());?>/#target3>blog</a></li>
                    </ul>

                </div>
            </header>
