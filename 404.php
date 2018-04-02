<?php
    get_template_part('head');
    if (!is_singular()) {
        get_template_part('header');
    } else {
        get_template_part("headerBurger");
    }
?>

<div class="page-content-title-wrapper">

    <div class="wrap_1280">

        <h2 class="not-found-title">404 Error: Page not Found!</h2>

    <div class="clearfix"></div>

    </div>

</div>

<div class="wrap_1280">

    <div class="main-content">

        <div class="left-page-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <h2 class='not-found-alert'>Something went a little wrong. Let's find you a solution!</h2>

            <p class="not-found-paragraph">To help you find what you are looking for simply use the navigation above or search for what you are looking for below.

            <div class="search-form-404"> <?php get_search_form(); ?></div>

        </div>

    </div><!-- END MAIN-CONTENT -->

</div><!-- END wrap_1280 -->

<div class="clearfix"></div>

<?php
    get_template_part('footer');
?>
