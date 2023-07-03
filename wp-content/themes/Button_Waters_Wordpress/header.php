<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burton Waters</title>

    <?php wp_head();?>
</head>

<body>
<?php
    echo 'PHP version: ' . phpversion();
?>
<?php   
    $my_header_logo_name= get_field('my_header_logo_name', 'option');
    $magnify_glass = get_field('magnify_glass', 'option');
    $star = get_field("star", 'option');
?>

    <header class="header padtop20 padbot20 absolute">
        <div class="header_outer relative">
            <div class="wrapper">
                <div class="header_logo">
                    <a href="#"><img src="<?php  echo  $my_header_logo_name;?>" alt="Header_Logo" /></a>
                </div>
                <div class="header_inner flex space_between align_center">
                    <!-- Left menu -->    

                    <div class="white flex align_center gap20">
                        <?php echo $magnify_glass; ?>                                                   
                        <?php
                            $left_nav = array(
                            'theme_location' => 'primary-menu',                
                            'container_class'=> 'nav nav1 underline',
                            'container'      => 'nav',
                            );
                            wp_nav_menu( $left_nav );
                        ?>
                    </div>  

                    <!-- Right menu -->
                    <div class="white flex align_center gap20"> 
                        <?php
                            $right_nav = array(
                            'theme_location' => 'secondary-menu',                
                            'container_class'=> 'nav nav2 underline',
                            'container'      => 'nav',
                            );
                            wp_nav_menu( $right_nav );
                        ?>                                           
                        <?php echo $star;?>                
                    </div> 
                </div>
                <div class="hamburger">
                    <i class="fa-solid fa-bars fa-2xl" style="color: #ffffff"></i>
                </div>
            </div>
        </div>
    </header>