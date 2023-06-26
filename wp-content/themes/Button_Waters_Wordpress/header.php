<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burton Waters</title>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
        integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script src="https://kit.fontawesome.com/4576560a6b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Assets/Fonts/font_stylesheet.css" />
    <link rel="stylesheet" href="Styles/global_style.css" />
    <link rel="stylesheet" href="Styles/style.css" />
    <script src="Scripts/script.js"></script> -->
    <?php wp_head();?>
</head>

<body>
<?php   $my_header_logo_name= get_field('my_header_logo_name', 'option'); 
        $my_hero_bottom_image1_name= get_field('my_hero_bottom_image1_name', 'option'); 
        $my_hero_bottom_image2_name= get_field('my_hero_bottom_image2_name', 'option'); 
        $my_hero_bottom_image3_name= get_field('my_hero_bottom_image3_name', 'option'); 
        $my_hero_bottom_image4_name= get_field('my_hero_bottom_image4_name', 'option'); 
?>
    <header class="header padtop20 padbot20 absolute">
        <div class="header_outer relative">
            <div class="wrapper">
                <div class="header_logo">
                    <a href="#"><img src="<?php  echo  $my_header_logo_name;?>" alt="Header_Logo" /></a>
                </div>
                <div class="header_inner flex space_between align_center">
                    <nav class="nav nav1 underline">
                        <ul>
                            <li>
                                <i class="fa-solid fa-magnifying-glass r_none" style="color: #ffffff"></i>
                            </li>
                            <li><a href="#">BUY A BOAT</a></li>
                            <li>
                                <a href="#">SELL YOUR BOAT</a><i class="fa-solid fa-angle-down nav_small_dropdown"
                                    style="color: #ffffff"></i>
                                <ul class="dropdown">
                                    <li><a href="#">SELL YOUR BOAT</a></li>
                                    <li><a href="#">BROKERAGE</a></li>
                                    <li><a href="#">PART EXCHANGE</a></li>
                                </ul>
                            </li>
                            <li><a href="#">MARINA</a></li>
                        </ul>
                    </nav>
                    <nav class="nav nav2 underline">
                        <ul>
                            <li><a href="#">SERVICES</a></li>
                            <li><a href="#">BOAT LIFE</a></li>
                            <li><a href="#">CONTACT US</a></li>
                            <li><a href="#">SHOP</a></li>
                            <li>
                                <i class="fa-regular fa-star r_none" style="color: #ffffff"></i>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="hamburger">
                    <i class="fa-solid fa-bars fa-2xl" style="color: #ffffff"></i>
                </div>
            </div>
        </div>
    </header>
