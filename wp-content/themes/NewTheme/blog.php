<?php /* Template Name: blogPost */

get_header();

?>
<div class="header__text-box">
    <h1 class="text-box--header-primary header-singleText">Blog</h1>
</div>

<main>
    <section class="section-blog">
        <div class="row">
            <div class="story">
                <div class="img-div">
                    <img src=" <?php echo get_template_directory_uri() . '/images/kolmården.jpg'   ?>" alt="park" class="story__img">
                </div>
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">Kolmården!! The best week ever with my family</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                    <a href="#popup" class="btn btn--white moreInfo " onclick="functionReadMore()">Read more...</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="story">

                <img src="<?php echo get_template_directory_uri() . '/images/wildfire.jpg'   ?>" alt="rollercoaster-ride" class="story__img">

                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">WOW! A rollercoaster ride i took</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="story">

                <img src=" <?php echo get_template_directory_uri() . '/images/delfin.jpg'   ?>" alt="dolphin" class="story__img">

                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">Amazing! The animal we enjoyed watching</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.

                    </p>

                </div>
            </div>
        </div>

    </section>


</main>
<?php get_footer(); ?>