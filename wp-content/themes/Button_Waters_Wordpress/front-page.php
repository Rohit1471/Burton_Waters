    <?php 
        get_header();

        // ACF including images

        // Hero_Section
        // $Hero_Bg_Image= get_field('Hero_Bg_Image'); 
        $hero_bg_image = get_field( 'hero_bg_image' );
        $my_hero_h1_name= get_field('my_hero_h1_name'); 
        $my_hero_h4_name= get_field('my_hero_h4_name'); 
        $myhero_bottom_links= get_field('myhero_bottom_links');
        

        // banner_footer section
        $banner_footer_h2= get_field('banner_footer_h2'); 
        $banner_footer_h2_span= get_field('banner_footer_h2_span'); 
        $banner_footer_button= get_field('banner_footer_button'); 
        $banner_footer_p= get_field('banner_footer_p'); 
        $banner_footer_star_repeater= get_field('banner_footer_star_repeater'); 
        

        // icons_section
        // Adding this to check whether changes are reflecting or not        
        $my_hero_bottom_image1_name= get_field('my_hero_bottom_image1_name'); 
        $my_hero_bottom_image2_name= get_field('my_hero_bottom_image2_name'); 
        $my_hero_bottom_image3_name= get_field('my_hero_bottom_image3_name'); 
        $my_hero_bottom_image4_name= get_field('my_hero_bottom_image4_name'); 
        $my_hero_bottom_image1_content= get_field('my_hero_bottom_image1_content'); 
        $my_hero_bottom_image2_content= get_field('my_hero_bottom_image2_content'); 
        $my_hero_bottom_image3_content= get_field('my_hero_bottom_image3_content'); 
        $my_hero_bottom_image4_content= get_field('my_hero_bottom_image4_content'); 
        $my_hero_bottom_repeater= get_field('my_hero_bottom_repeater'); 

        // marina
        $marina_top= get_field('marina_top'); 
        $marina_bottom= get_field('marina_bottom'); 
        $marina_heading= get_field('marina_bottom');
        $marina_sub_heading1= get_field('marina_sub_heading1');
        $marina_sub_heading2= get_field('marina_sub_heading2');
        $marina_top_content= get_field('marina_top_content');
        $marina_bottom_content= get_field('marina_bottom_content');

        // Facilities
        $facilities_heading= get_field('facilities_heading');
        $facilities_sub_heading= get_field('facilities_sub_heading'); 

        // Book section
        $book_heading_top_h2= get_field('book_heading_top_h2');
        $book_heading_bottom_h2= get_field('book_heading_bottom_h2');
        $book_heading_pre= get_field('book_heading_pre');
        $book_heading_post= get_field('book_heading_post');
        $book_links= get_field('book_links');
        $book_address_top_h6= get_field('book_address_top_h6');
        $book_address_bottom_h6= get_field('book_address_bottom_h6');
        $book_button= get_field('book_button');
        $book_right_arrow= get_field('book_right_arrow');

        // Photo grid section
        $photo_grid_title= get_field('photo_grid_title');
        $photo_grid_grid1_image= get_field('photo_grid_grid1_image');
        $photo_grid_grid2_text= get_field('photo_grid_grid2_text');
        $photo_grid_grid3_image= get_field('photo_grid_grid3_image');
        $photo_grid_grid4_text= get_field('photo_grid_grid4_text');
        $photo_grid_grid5_text= get_field('photo_grid_grid5_text');
        $photo_grid_grid6_image= get_field('photo_grid_grid6_image');
        $photo_grid_grid7_image= get_field('photo_grid_grid7_image');
        $photo_grid_grid8_image= get_field('photo_grid_grid8_image');
        $photo_grid_grid9_text= get_field('photo_grid_grid9_text');
        $photo_grid_grid10_image= get_field('photo_grid_grid10_image');
        $photo_grid_grid11_image= get_field('photo_grid_grid13_image');
        $photo_grid_grid12_text= get_field('photo_grid_grid12_text');
        $photo_grid_grid13_image= get_field('photo_grid_grid11_image');
        $photo_grid_grid14_text= get_field('photo_grid_grid14_text');

        // Gallery slider section
        $gallery_slider= get_field('gallery_slider');
        $gallery_title= get_field('gallery_title');
        $gallery_sub_heading= get_field('gallery_sub_heading');
     
    ?>


    <section class="hero" style="background-image:url('<?php echo $hero_bg_image; ?>');"> 
        <div class="hero_outer">
            <div class="wrapper">
                <div class="hero_inner">
                    <div class="title text_center white">
                        <h1><?php echo $my_hero_h1_name;?></h1>
                        <h4><?php echo $my_hero_h4_name;?></h4>
                    </div>
                    <div class="bottom_content">
                        <div class="top"></div>
                        <div class="bottom">
                            <ul>
                                <?php 
                                    if( $myhero_bottom_links) {
                                        foreach( $myhero_bottom_links as $row ) {
                                            $image = $row['links'];
                                            ?>                            
                                            <li><a href="#"><?php echo $image ?></a></li>                
                                        <?php                            
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner_footer padtop65 padbot90">
        <div class="banner_footer_outer">
            <div class="wrapper">
                <div class="banner_footer_inner flex space_between">
                    <div class="left">
                        <div class="content white padbot45">
                            <h2>
                            <?php echo $banner_footer_h2;?>
                                <span class="p"><?php echo $banner_footer_h2_span;?></span>
                            </h2>
                        </div>
                        <div>
                            <a href="#" class="button"><?php echo $banner_footer_button;?><i class="fa-sharp fa-solid fa-chevron-right fa-2xs" style="color: #ffffff"></i></a>
                        </div>
                    </div>
                    <hr class="hr">
                    <div class="right flex_column justify_center">
                        <div class="stars padbot20 white fa_2x">
                            <?php
                                if($banner_footer_star_repeater){
                                    foreach($banner_footer_star_repeater as $row){
                                        $icon = $row["star"];
                                        echo $icon;
                                    }
                                }
                            ?>
                        </div>
                        <div class="white">
                            <p><?php echo $banner_footer_p;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="icons_section padtop60 padbot60">
        <div class="icons_outer">
            <div class="wrapper">
                <div class="icons_inner flex space_between">    
                    <?php
                        if($my_hero_bottom_repeater){
                            foreach($my_hero_bottom_repeater as $row){
                                $image= $row['image'];
                                $below_text= $row['below_text'];
                                ?> 
                                <div class="box">
                                    <div class="image">
                                        <img src="<?php echo $image;?>" alt="Ship">
                                    </div>
                                    <h6><?php echo $below_text; ?></h6>
                                </div>
                                <?php
                            }
                        }
                    ?>                  
                </div>
            </div>
        </div>
    </section>

    <section id="marina" class="marina padtop65 padbot45">
        <div class="outer_marina">
            <div class="wrapper">
                <div class="inner_wrapper">
                    <div class="title text_center pad15 padbot65">
                        <h2 class="padbot15">Ipswich Marina<?php  ?></h2>
                        <h6>
                            Burton Waters Marina, Burton Lane End, Burton Waters, Lincoln
                            LN1 2WN
                        </h6>
                        <h6 class="italic_font regular">
                            Lincoln: Latitude: 53° 14' 56.36″ N &nbsp; | &nbsp; Longtitude: 0° 35' 48.41″
                            W
                        </h6>
                    </div>
                    <div class="top">
                        <div class="left content">
                            <p>
                                Burton Waters Marina in Lincoln is a wonderfully unique marina
                                development set in the midst of beautiful Lincolnshire
                                countryside, adjacent to the Fossdyke Navigation Canal, and
                                just two miles by water from the center of the historic City
                                of Lincoln. There are fifteen acres of water space here, with
                                easy access to the sea through Boston and the inland waterways
                                system via the Trent.
                            </p>
                        </div>
                        <div class="right">
                            <img src="<?php echo $marina_top;?>" alt="Image1" />
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <img src="<?php echo $marina_bottom;?>" alt="Image2" />
                        </div>
                        <div class="right content">
                            <p>
                                Burton Waters Marina in Lincoln is a wonderfully unique marina
                                development set in the midst of beautiful Lincolnshire
                                countryside, adjacent to the Fossdyke Navigation Canal, and
                                just two miles by water from the center of the historic City
                                of Lincoln. There are fifteen acres of water space here, with
                                easy access to the sea through Boston and the inland waterways
                                system via the Trent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="facilities" class="facilities padtop45 padbot100"> 
        <div class="facilities_outer">
            <div class="wrapper">
                <div class="facilities_inner text_center">
                    <div class="top padbot50">
                        <h2 class="padbot25"><?php echo $facilities_heading ?></h2>
                        <h6><?php echo $facilities_sub_heading ?></h6>                            
                    </div>
                    <div class="bottom flex justify_center gap50">
                        <div class="left">
                            <?php    
                            $facilities_bottom_left= get_field('facilities_bottom_left');
                            // Check if the repeater field has values
                            if ($facilities_bottom_left) {
                                // Loop through the repeater field values
                                echo '<ul>';
                                foreach ($facilities_bottom_left as $item) {
                                    // Get the sub-field values
                                    $content = $item['Content'];
                                    $imageIcone = $item['Icon'];
                                    ?>               
                                        <li>
                                            <?php echo $content; ?>
                                            <?php echo $imageIcone ; ?>                                           
                                        </li>
                     
                                    <?php
                                }
                                echo '</ul>';
                            }
                            ?>
                        </div>
                        <div class="right">    
                            <?php    
                            $facilities_bottom_right= get_field('facilities_bottom_right');
                            // Check if the repeater field has values
                            if ($facilities_bottom_right) {
                                // Loop through the repeater field values
                                echo '<ul>';
                                foreach ($facilities_bottom_right as $item) {
                                    // Get the sub-field values
                                    $content = $item['Content'];
                                    $imageIcone = $item['Icon'];
                                    ?>               
                                        <li>
                                            <?php echo $content; ?>
                                            <?php echo $imageIcone ; ?>                                           
                                        </li>
                     
                                    <?php
                                }
                                echo '</ul>';
                            }
                            ?>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="book padtop50 padbot60">
        <div class="book_outer">
            <div class="wrapper">
                <div class="book_inner margin">
                    <div class="top">
                        <div class="content white padbot45 text_center">
                            <h2 class="padbot30">
                                <?php echo $book_heading_top_h2 ?>
                            </h2>
                            <h2>
                                <span class="pre"><?php echo $book_heading_pre ?></span>
                                <?php echo $book_heading_bottom_h2 ?>
                                <span class="post">$<?php echo $book_heading_post ?></span>
                            </h2>
                        </div>
                        <div class="links padbot25 text_center">                            
                            <?php
                                // Check if the repeater field has values
                                if ($book_links) {
                                    // Loop through the repeater field values
                                    echo "<ul class='flex gap20 justify_center align_center white'>";
                                    foreach ($book_links as $item) {
                                        // Get the sub-field values
                                        $icon = $item['font_awesome_icon'];
                                        $links = $item['links'];
                                        ?>                                 
                                            <li>
                                                <i class="<?php echo $icon; ?>"></i>                           
                                                <a href="#"><?php echo $links;?></a>

                                            </li>
                                        <?php
                                    }
                                    echo '</ul>';
                                }
                            ?>                                           
                        </div>
                        <div class="address white thin text_center padbot35">
                            <h6><?php echo $book_address_top_h6 ?></h6>
                            <h6><?php echo $book_address_bottom_h6 ?></h6>
                        </div>
                        <div class="flex justify_center">
                            <a href="#" class="button"><?php echo $book_button ?><?php echo $book_right_arrow ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="photo_grid" class="photo_grid padtop95 padbot50">
        <div class="photo_grid_outer">
            <div class="wrapper">
                <div class="title text_center">
                    <h2><?php echo $photo_grid_title?></h2>
                </div>
                <div class="photo_grid_inner">
                    <div class="grid grid1">
                        <img src="<?php echo $photo_grid_grid1_image ?>" alt="#">                        
                    </div>
                    <div class="grid extraPad grid2">
                        <h3><?php echo $photo_grid_grid2_text ?></h3>
                    </div>
                    <div class="grid grid3">
                        <img src="<?php echo $photo_grid_grid3_image ?>" alt="#">
                    </div>
                    <div class="grid extraPad grid4">
                        <h3><?php echo $photo_grid_grid4_text ?></h3>
                    </div>
                    <div class="grid extraPad grid5">
                        <h5><?php echo $photo_grid_grid5_text ?></h5>
                    </div>
                    <div class="grid grid6">
                        <img src="<?php echo $photo_grid_grid6_image ?>" alt="#">
                    </div>
                    <div class="grid grid7">
                        <img src="<?php echo $photo_grid_grid7_image ?>" alt="#">
                    </div>
                    <div class="grid grid8">
                        <img src="<?php echo $photo_grid_grid8_image ?>" alt="#">
                    </div>
                    <div class="grid extraPad grid9">
                        <h5><?php echo $photo_grid_grid9_text ?></h5>
                    </div>
                    <div class="grid grid10">
                        <img src="<?php echo $photo_grid_grid10_image ?>" alt="#">
                    </div>
                    <div class="grid grid11">
                        <img src="<?php echo $photo_grid_grid11_image ?>" alt="#">
                    </div>
                    <div class="grid extraPad grid12">
                        <h3><?php echo $photo_grid_grid12_text ?></h3>
                    </div>
                    <div class="grid grid13">
                        <img src="<?php echo $photo_grid_grid13_image ?>" alt="#">
                    </div>
                    <div class="grid extraPad grid14">
                        <h3><?php echo $photo_grid_grid14_text ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery_slider" class="gallery_slider padtop45 padbot55">
        <div class="gallery_slider_outer">
            <div class="wrapper">
                <div class="gallery_slider_inner">
                    <div class="title padbot65 text_center">
                        <h2 class="padbot25"><?php echo $gallery_title ?></h2>
                        <h6><?php echo $gallery_sub_heading ?></h6>
                    </div>
                </div>
                <div class="slider slider-single">
                <?php 
                    $rows = get_field('gallery_slider');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                            $image = $row['images'];
                            ?>                            
                            <img src="<?php echo $image;?>" alt="Image Gallery">                   
                        <?php                            
                        }
                    }
                ?>
                </div>
                <div class="slider slider-nav">                    
                    <?php 
                        $rows = get_field('gallery_slider');
                        if( $rows ) {
                            foreach( $rows as $row ) {
                                $image = $row['images'];
                                ?>                            
                                <img src="<?php echo $image;?>" alt="Image Gallery">                   
                            <?php                            
                            }
                        }
                    ?>                
                </div>
            </div>
        </div>
    </section>

    <section class="book padtop50 padbot60">
        <div class="book_outer">
            <div class="wrapper">
                <div class="book_inner margin">
                    <div class="top">
                        <div class="content white padbot45 text_center">
                            <h2 class="padbot30">
                                <?php echo $book_heading_top_h2 ?>
                            </h2>
                            <h2>
                                <span class="pre"><?php echo $book_heading_pre ?></span>
                                <?php echo $book_heading_bottom_h2 ?>
                                <span class="post">$<?php echo $book_heading_post ?></span>
                            </h2>
                        </div>
                        <div class="links padbot25 text_center">                            
                            <?php
                                // Check if the repeater field has values
                                if ($book_links) {
                                    // Loop through the repeater field values
                                    echo "<ul class='flex gap20 justify_center align_center white'>";
                                    foreach ($book_links as $item) {
                                        // Get the sub-field values
                                        $icon = $item['font_awesome_icon'];
                                        $links = $item['links'];
                                        ?>                                 
                                            <li>
                                                <i class="<?php echo $icon; ?>"></i>                           
                                                <a href="#"><?php echo $links;?></a>

                                            </li>
                                        <?php
                                    }
                                    echo '</ul>';
                                }
                            ?>                                           
                        </div>
                        <div class="address white thin text_center padbot35">
                            <h6><?php echo $book_address_top_h6 ?></h6>
                            <h6><?php echo $book_address_bottom_h6 ?></h6>
                        </div>
                        <div class="flex justify_center">
                            <a href="#" class="button"><?php echo $book_button ?><?php echo $book_right_arrow ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company_slider padtop80 padbot80">
        <div class="company_slider_outer">
            <div class="wrapper">
                <div class="company_slider_inner flex space_between align_center gap50">
                <?php 
                    $rows = get_field('company_slider');
                    if( $rows ) {
                        foreach( $rows as $row ) {
                            $image = $row['images'];
                            ?>                            
                            <img src="<?php echo $image;?>" alt="Image Gallery">                   
                        <?php                            
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </section>

    <?php 
        get_footer();
    ?>