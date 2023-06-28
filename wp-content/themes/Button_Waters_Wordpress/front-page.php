    <?php 
        get_header();

        // ACF including images

        // Hero_Section
        // $Hero_Bg_Image= get_field('Hero_Bg_Image'); 
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
        // $facilities_bottom_left= get_field('facilities_bottom_left');
        // $facilities_bottom_right= get_field('facilities_bottom_right'); 

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

    <?php
        // ACF image (ID) as background - with size 
        $hero_bg_image = get_field( 'hero_bg_image' );
        
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
                        <h2 class="padbot15">Ipswich Marina</h2>
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
                        <h2 class="padbot25">Ipswich Mooring Facilities</h2>
                        <h6>
                            The utter joy of Burton Waters Marina is the variety of services
                            all in one place. There’s a slipway available for assisted or
                            self-launch, a hoist able to handle cruisers up to 40ft, and
                            narrow boats up to 60 ft. In addition, there’s full pump-out
                            facilities, diesel, petrol, visitor berths and secure dry
                            berthing ashore. All moorings (over 200) have individual access
                            to free water and chargeable electricity, with access to
                            toilets, washrooms, showers and laundry facilities. There is
                            also 24-hour security with pontoon access via a security fob.
                        </h6>
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
                            <!-- ================================ -->        

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

                            <!-- ================================ -->

                                <!-- <ul>
                                    <li>
                                        Diesel<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #00547a;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M2.5,0A.481.481,0,0,1,3,.5v1a.481.481,0,0,1-.5.5h-10a.487.487,0,0,1-.359-.141A.487.487,0,0,1-8,1.5V.5A.487.487,0,0,1-7.859.141.487.487,0,0,1-7.5,0ZM7.406-10.656A1.958,1.958,0,0,1,8-9.219V-2.25A2.173,2.173,0,0,1,7.266-.578,2.164,2.164,0,0,1,5.531,0,2.134,2.134,0,0,1,4.078-.781,2.4,2.4,0,0,1,3.5-2.375V-3.25a1.209,1.209,0,0,0-.359-.891A1.209,1.209,0,0,0,2.25-4.5H2V-1H-7V-12a1.922,1.922,0,0,1,.594-1.406A1.922,1.922,0,0,1-5-14H0a1.922,1.922,0,0,1,1.406.594A1.922,1.922,0,0,1,2-12v6h.25a2.645,2.645,0,0,1,1.937.812A2.645,2.645,0,0,1,5-3.25v1a.723.723,0,0,0,.219.531A.723.723,0,0,0,5.75-1.5a.723.723,0,0,0,.531-.219A.723.723,0,0,0,6.5-2.25V-7.281a1.745,1.745,0,0,1-1.062-.578A1.646,1.646,0,0,1,5-9v-1.937L3.812-12.125a.465.465,0,0,1-.125-.344.465.465,0,0,1,.125-.344l.375-.375a.465.465,0,0,1,.344-.125.465.465,0,0,1,.344.125ZM0-8v-4H-5v4Z"
                                                transform="translate(8 14)" />
                                        </svg>
                                    </li>
                                    <li>
                                        Petrol<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #00547a;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M2.5,0A.481.481,0,0,1,3,.5v1a.481.481,0,0,1-.5.5h-10a.487.487,0,0,1-.359-.141A.487.487,0,0,1-8,1.5V.5A.487.487,0,0,1-7.859.141.487.487,0,0,1-7.5,0ZM7.406-10.656A1.958,1.958,0,0,1,8-9.219V-2.25A2.173,2.173,0,0,1,7.266-.578,2.164,2.164,0,0,1,5.531,0,2.134,2.134,0,0,1,4.078-.781,2.4,2.4,0,0,1,3.5-2.375V-3.25a1.209,1.209,0,0,0-.359-.891A1.209,1.209,0,0,0,2.25-4.5H2V-1H-7V-12a1.922,1.922,0,0,1,.594-1.406A1.922,1.922,0,0,1-5-14H0a1.922,1.922,0,0,1,1.406.594A1.922,1.922,0,0,1,2-12v6h.25a2.645,2.645,0,0,1,1.937.812A2.645,2.645,0,0,1,5-3.25v1a.723.723,0,0,0,.219.531A.723.723,0,0,0,5.75-1.5a.723.723,0,0,0,.531-.219A.723.723,0,0,0,6.5-2.25V-7.281a1.745,1.745,0,0,1-1.062-.578A1.646,1.646,0,0,1,5-9v-1.937L3.812-12.125a.465.465,0,0,1-.125-.344.465.465,0,0,1,.125-.344l.375-.375a.465.465,0,0,1,.344-.125.465.465,0,0,1,.344.125ZM0-8v-4H-5v4Z"
                                                transform="translate(8 14)" />
                                        </svg>
                                    </li>
                                    <li>Washroom & shower facilities<svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="14" viewBox="0 0 16 14">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #00547a;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M4.187-9.75a.723.723,0,0,0,.219-.531.723.723,0,0,0-.219-.531l-.375-.375a.723.723,0,0,0-.531-.219.723.723,0,0,0-.531.219,3.5,3.5,0,0,0-1.578-.734,3.611,3.611,0,0,0-1.734.078,5.121,5.121,0,0,0-1.391-.844A4.218,4.218,0,0,0-3.563-13a4.347,4.347,0,0,0-2.234.594A4.416,4.416,0,0,0-7.406-10.8,4.347,4.347,0,0,0-8-8.562V1h2V-8.562a2.345,2.345,0,0,1,.719-1.719A2.345,2.345,0,0,1-3.563-11a2.355,2.355,0,0,1,1.281.375A3.357,3.357,0,0,0-3-8.422,3.435,3.435,0,0,0-2.188-6.25a.723.723,0,0,0-.219.531.723.723,0,0,0,.219.531l.375.375a.723.723,0,0,0,.531.219A.723.723,0,0,0-.75-4.812ZM4-7.5a.487.487,0,0,0-.141-.359A.487.487,0,0,0,3.5-8a.487.487,0,0,0-.359.141A.487.487,0,0,0,3-7.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,3.5-7a.487.487,0,0,0,.359-.141A.487.487,0,0,0,4-7.5Zm1,0a.487.487,0,0,0,.141.359A.487.487,0,0,0,5.5-7a.487.487,0,0,0,.359-.141A.487.487,0,0,0,6-7.5a.487.487,0,0,0-.141-.359A.487.487,0,0,0,5.5-8a.487.487,0,0,0-.359.141A.487.487,0,0,0,5-7.5Zm3,0a.487.487,0,0,0-.141-.359A.487.487,0,0,0,7.5-8a.487.487,0,0,0-.359.141A.487.487,0,0,0,7-7.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,7.5-7a.487.487,0,0,0,.359-.141A.487.487,0,0,0,8-7.5Zm-5,1a.487.487,0,0,0-.141-.359A.487.487,0,0,0,2.5-7a.487.487,0,0,0-.359.141A.487.487,0,0,0,2-6.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,2.5-6a.487.487,0,0,0,.359-.141A.487.487,0,0,0,3-6.5ZM4.5-7a.487.487,0,0,0-.359.141A.487.487,0,0,0,4-6.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,4.5-6a.487.487,0,0,0,.359-.141A.487.487,0,0,0,5-6.5a.487.487,0,0,0-.141-.359A.487.487,0,0,0,4.5-7ZM7-6.5a.487.487,0,0,0-.141-.359A.487.487,0,0,0,6.5-7a.487.487,0,0,0-.359.141A.487.487,0,0,0,6-6.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,6.5-6a.487.487,0,0,0,.359-.141A.487.487,0,0,0,7-6.5Zm-5,1a.487.487,0,0,0-.141-.359A.487.487,0,0,0,1.5-6a.487.487,0,0,0-.359.141A.487.487,0,0,0,1-5.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,1.5-5a.487.487,0,0,0,.359-.141A.487.487,0,0,0,2-5.5Zm1,0a.487.487,0,0,0,.141.359A.487.487,0,0,0,3.5-5a.487.487,0,0,0,.359-.141A.487.487,0,0,0,4-5.5a.487.487,0,0,0-.141-.359A.487.487,0,0,0,3.5-6a.487.487,0,0,0-.359.141A.487.487,0,0,0,3-5.5Zm3,0a.487.487,0,0,0-.141-.359A.487.487,0,0,0,5.5-6a.487.487,0,0,0-.359.141A.487.487,0,0,0,5-5.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,5.5-5a.487.487,0,0,0,.359-.141A.487.487,0,0,0,6-5.5Zm-4,1a.487.487,0,0,0,.141.359A.487.487,0,0,0,2.5-4a.487.487,0,0,0,.359-.141A.487.487,0,0,0,3-4.5a.487.487,0,0,0-.141-.359A.487.487,0,0,0,2.5-5a.487.487,0,0,0-.359.141A.487.487,0,0,0,2-4.5Zm3,0a.487.487,0,0,0-.141-.359A.487.487,0,0,0,4.5-5a.487.487,0,0,0-.359.141A.487.487,0,0,0,4-4.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,4.5-4a.487.487,0,0,0,.359-.141A.487.487,0,0,0,5-4.5Zm-3,1a.487.487,0,0,0-.141-.359A.487.487,0,0,0,1.5-4a.487.487,0,0,0-.359.141A.487.487,0,0,0,1-3.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,1.5-3a.487.487,0,0,0,.359-.141A.487.487,0,0,0,2-3.5Zm2,0a.487.487,0,0,0-.141-.359A.487.487,0,0,0,3.5-4a.487.487,0,0,0-.359.141A.487.487,0,0,0,3-3.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,3.5-3a.487.487,0,0,0,.359-.141A.487.487,0,0,0,4-3.5Zm-1,1a.487.487,0,0,0-.141-.359A.487.487,0,0,0,2.5-3a.487.487,0,0,0-.359.141A.487.487,0,0,0,2-2.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,2.5-2a.487.487,0,0,0,.359-.141A.487.487,0,0,0,3-2.5Zm-1,1a.487.487,0,0,0-.141-.359A.487.487,0,0,0,1.5-2a.487.487,0,0,0-.359.141A.487.487,0,0,0,1-1.5a.487.487,0,0,0,.141.359A.487.487,0,0,0,1.5-1a.487.487,0,0,0,.359-.141A.487.487,0,0,0,2-1.5Z"
                                                transform="translate(8 13)" />
                                        </svg></li>
                                    <li>Overnight moorings to annual contracts<svg xmlns="http://www.w3.org/2000/svg"
                                            width="14.306" height="16" viewBox="0 0 14.306 16">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #00547a;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M.844,2a7.786,7.786,0,0,1-4-1.078A8.058,8.058,0,0,1-6.078-1.984,7.761,7.761,0,0,1-7.156-6a7.761,7.761,0,0,1,1.078-4.016,8.058,8.058,0,0,1,2.922-2.906A7.786,7.786,0,0,1,.844-14a8.556,8.556,0,0,1,1.469.125.371.371,0,0,1,.3.312.381.381,0,0,1-.172.406A6.046,6.046,0,0,0,.109-10.875,6.145,6.145,0,0,0-.75-7.719,6.1,6.1,0,0,0,.3-4.25,6.094,6.094,0,0,0,3.062-1.969a6.265,6.265,0,0,0,3.656.406.3.3,0,0,1,.375.172.35.35,0,0,1-.031.422,7.814,7.814,0,0,1-2.75,2.187A7.9,7.9,0,0,1,.844,2Z"
                                                transform="translate(7.156 14)" />
                                        </svg></li>
                                    <li>Metered power and water for every mooring <svg xmlns="http://www.w3.org/2000/svg"
                                            width="15.5" height="15.75" viewBox="0 0 15.5 15.75">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #00547a;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M4.5-12.312A7.635,7.635,0,0,1,6.875-9.578,7.6,7.6,0,0,1,7.75-6,7.513,7.513,0,0,1,6.7-2.125,7.87,7.87,0,0,1,3.891.7,7.459,7.459,0,0,1,.016,1.75,7.541,7.541,0,0,1-3.875.7,7.87,7.87,0,0,1-6.7-2.109,7.487,7.487,0,0,1-7.75-6a7.513,7.513,0,0,1,.875-3.562A7.958,7.958,0,0,1-4.5-12.312a.744.744,0,0,1,.609-.109.718.718,0,0,1,.484.359l.5.875a.777.777,0,0,1,.062.531.7.7,0,0,1-.281.437A5.322,5.322,0,0,0-4.688-8.375,5.117,5.117,0,0,0-5.25-6a5.165,5.165,0,0,0,.7,2.625A5.192,5.192,0,0,0-2.641-1.453a5.11,5.11,0,0,0,2.625.7,5.194,5.194,0,0,0,2.641-.7A5.156,5.156,0,0,0,4.547-3.375a5.223,5.223,0,0,0,.7-2.656,5.082,5.082,0,0,0-.562-2.328,5.28,5.28,0,0,0-1.562-1.859.7.7,0,0,1-.281-.437.777.777,0,0,1,.063-.531l.5-.875a.718.718,0,0,1,.484-.359A.744.744,0,0,1,4.5-12.312ZM1.25-5.75a.723.723,0,0,1-.219.531A.723.723,0,0,1,.5-5h-1a.723.723,0,0,1-.531-.219A.723.723,0,0,1-1.25-5.75v-7.5a.723.723,0,0,1,.219-.531A.723.723,0,0,1-.5-14h1a.723.723,0,0,1,.531.219.723.723,0,0,1,.219.531Z"
                                                transform="translate(7.75 14)" />
                                        </svg></li>
                                    <li>WiFi through ineedbroadband.co.uk<svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="14" viewBox="0 0 20 14">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #00547a;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M9.844-9.156A.416.416,0,0,1,10-8.812a.511.511,0,0,1-.156.375L8.781-7.375a.641.641,0,0,1-.359.141.361.361,0,0,1-.328-.141,11.665,11.665,0,0,0-5.219-2.781,11.68,11.68,0,0,0-5.75,0A11.665,11.665,0,0,0-8.094-7.375a.361.361,0,0,1-.328.141.641.641,0,0,1-.359-.141L-9.844-8.437A.511.511,0,0,1-10-8.812a.416.416,0,0,1,.156-.344A13.967,13.967,0,0,1-3.5-12.562a14.219,14.219,0,0,1,7,0A13.967,13.967,0,0,1,9.844-9.156ZM0-3a1.933,1.933,0,0,1,1.422.578A1.933,1.933,0,0,1,2-1,1.933,1.933,0,0,1,1.422.422,1.933,1.933,0,0,1,0,1,1.933,1.933,0,0,1-1.422.422,1.933,1.933,0,0,1-2-1a1.933,1.933,0,0,1,.578-1.422A1.933,1.933,0,0,1,0-3ZM6.344-5.625A.511.511,0,0,1,6.5-5.25a.511.511,0,0,1-.156.375L5.281-3.812a.538.538,0,0,1-.344.125.538.538,0,0,1-.344-.125A7.139,7.139,0,0,0,1.641-5.3a6.988,6.988,0,0,0-3.281,0A7.139,7.139,0,0,0-4.594-3.812a.538.538,0,0,1-.344.125.538.538,0,0,1-.344-.125L-6.344-4.875A.511.511,0,0,1-6.5-5.25a.511.511,0,0,1,.156-.375A9.4,9.4,0,0,1-2.281-7.734a9.653,9.653,0,0,1,4.562,0A9.4,9.4,0,0,1,6.344-5.625Z"
                                                transform="translate(10 13)" />
                                        </svg></li>
                                    <li>Canal & River Licence Applications<svg xmlns="http://www.w3.org/2000/svg"
                                            width="12.008" height="15.99" viewBox="0 0 12.008 15.99">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #00547a;
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M-2.969-2.656A2.275,2.275,0,0,0-1.344-2,2.131,2.131,0,0,0-.25-2.312l-1.625,4a.442.442,0,0,1-.359.3.487.487,0,0,1-.453-.141L-3.844.656-5.469.719A.507.507,0,0,1-5.906.5.475.475,0,0,1-5.969.031l1.437-3.5a2.261,2.261,0,0,0,.781.437l.281.063a1.3,1.3,0,0,1,.266.094,1.092,1.092,0,0,1,.141.125ZM5.969.031A.475.475,0,0,1,5.906.5a.507.507,0,0,1-.437.219L3.844.656,2.687,1.844a.487.487,0,0,1-.453.141.442.442,0,0,1-.359-.3l-1.625-4A2.131,2.131,0,0,0,1.344-2a2.275,2.275,0,0,0,1.625-.656l.094-.094A1.092,1.092,0,0,1,3.2-2.875a1.3,1.3,0,0,1,.266-.094l.281-.062a2.261,2.261,0,0,0,.781-.437ZM2.219-3.375a1.215,1.215,0,0,1-.75.359,1.3,1.3,0,0,1-.812-.172A1.155,1.155,0,0,0,0-3.375a1.155,1.155,0,0,0-.656.187,1.3,1.3,0,0,1-.812.172A1.15,1.15,0,0,1-2.2-3.375a2,2,0,0,0-.453-.391,2.857,2.857,0,0,0-.562-.172L-3.438-4a1.221,1.221,0,0,1-.547-.344,1.405,1.405,0,0,1-.328-.562l-.062-.156a3.292,3.292,0,0,0-.2-.641A3.623,3.623,0,0,0-5-6.219l-.125-.125a1.2,1.2,0,0,1-.328-.578,1.482,1.482,0,0,1-.016-.641l.063-.187a3.546,3.546,0,0,0,.125-.656,3.546,3.546,0,0,0-.125-.656l-.062-.156a1.62,1.62,0,0,1,.016-.672,1.2,1.2,0,0,1,.328-.578L-5-10.594a2.893,2.893,0,0,0,.422-.484,3.293,3.293,0,0,0,.2-.641l.063-.187a1.405,1.405,0,0,1,.328-.562,1.221,1.221,0,0,1,.547-.344l.156-.031a2.482,2.482,0,0,0,.641-.219,4.065,4.065,0,0,0,.484-.437l.125-.125a1.2,1.2,0,0,1,.578-.328,1.482,1.482,0,0,1,.641-.016l.156.063A3.546,3.546,0,0,0,0-13.781a3.546,3.546,0,0,0,.656-.125l.156-.062a1.482,1.482,0,0,1,.641.016,1.2,1.2,0,0,1,.578.328l.125.125a4.065,4.065,0,0,0,.484.437,2.482,2.482,0,0,0,.641.219l.156.031a1.221,1.221,0,0,1,.547.344,1.405,1.405,0,0,1,.328.562l.063.187a3.292,3.292,0,0,0,.2.641A2.893,2.893,0,0,0,5-10.594l.125.125a1.2,1.2,0,0,1,.328.578,1.62,1.62,0,0,1,.016.672l-.062.156a3.546,3.546,0,0,0-.125.656,3.546,3.546,0,0,0,.125.656l.063.187a1.482,1.482,0,0,1-.016.641,1.2,1.2,0,0,1-.328.578L5-6.219a3.623,3.623,0,0,0-.422.516,3.292,3.292,0,0,0-.2.641l-.062.156a1.405,1.405,0,0,1-.328.562A1.221,1.221,0,0,1,3.437-4l-.25.062a2.87,2.87,0,0,0-.531.172A1.806,1.806,0,0,0,2.219-3.375ZM-2.938-8.5a2.92,2.92,0,0,0,.859,2.125A2.806,2.806,0,0,0,0-5.5a2.806,2.806,0,0,0,2.078-.875A2.92,2.92,0,0,0,2.937-8.5a2.92,2.92,0,0,0-.859-2.125A2.806,2.806,0,0,0,0-11.5a2.806,2.806,0,0,0-2.078.875A2.92,2.92,0,0,0-2.938-8.5Z"
                                                transform="translate(6.004 13.997)" />
                                        </svg></li>
                                </ul> -->
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




