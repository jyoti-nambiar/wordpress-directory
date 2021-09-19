<?php
//silence


get_header();

?>


<div class="header__text-box">

    <h1 class="text-box--header-primary">I´m Jyoti</h1>
    <div class="text-box--typewriter">
        <h2 class="typewriter--header-sub"> A <span class="header-sub--pro">Web</span>developer Student </h2>
    </div>

    <!-- <p>Its a website to share my personal interest and make contact with people who shares the same interests as me.  </p> -->

</div>


<main>

    <section class="section-about">

        <h2 class="heading-secondary">
            About this website
        </h2>


        <div class="description">

            <div class="description__text">


                <h3 class="heading_tertiary">My hobbies and interest</h3>

                <p class="paragraph">
                    The best past time for me has to be traveling. All of those amazing places to see the world, make fabulous memories.
                    Walking the old cobbled streets of Europe and wondering how many millions of people have walked these same steps. Seeing amazing architecture, world treasures, national monuments and parks, eating the fabulous foods. It is a dream come true!!!

                </p>
                <h3 class="heading_tertiary">My blog</h3>

                <p class="paragraph">
                    I hope this site gives you some inspiration (and handy tips) to go and chase your own adventures. Travel is the best kind of education so go get lost, even if it’s just outside your own doorstep!


                </p>


            </div>

            <div class="composition">
                <img src="<?php echo get_template_directory_uri() . '/images/gavle.jpg'   ?>" alt="gavle_city" class="composition__photo photo--p1">
                <img src="<?php echo get_template_directory_uri() . '/images/norkoping.jpg'   ?>" alt="norkoping_city" class="composition__photo photo--p2">
                <img src="<?php echo get_template_directory_uri() . '/images/Skara.jpg'   ?>" alt="skara_city" class="composition__photo photo--p3">
            </div>

        </div>
    </section>





</main>
<?php

get_footer();
