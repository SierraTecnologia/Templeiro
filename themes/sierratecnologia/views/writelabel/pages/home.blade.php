
    @include('partials.status-panel')

<?php /* START ABOUT US DESIGN AREA */ ?>
<section id="about" class="about-us-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>{{ trans('homepage.about_title') }}</h2>
                    <p>{{ trans('homepage.about_description') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php /* START ABOUT IMAGE DESIGN AREA */ ?>
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                <div class="about-image">
                    <img src="images/about.png" alt="" class="img-responsive">
                </div>
            </div>
            <?php /* / END ABOUT IMAGE DESIGN AREA */ ?>
            <?php /* START ABOUT US TEXT DESIGN AREA */ ?>
            <div class="col-md-6">
                <div class="about-text wow fadeInUp" data-wow-delay=".2s">
                    <h2>{{ trans('homepage.about_company_title') }}</h2>
                    <p>{{ trans('homepage.about_company_title_description') }}</p>
                </div>
            </div>
            <?php /* / END ABOUT US TEXT DESIGN AREA */ ?>
        </div>
    </div>
</section>
<?php /* / END ABOUT US DESIGN AREA */ ?>

<?php /* START SERVICES DESIGN AREA */ ?>
<section id="service" class="service-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>{{ trans('homepage.service_title') }}</h2>
                    <p>{{ trans('homepage.service_description') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php /* START SINGLE SERVICES DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="single-service">
                    <span class="lnr lnr-rocket"></span>
                    <h4>{{ trans('homepage.service_item1_title') }}</h4>
                    <p>{{ trans('homepage.service_item1_description') }}</p>
                </div>
            </div>
            <?php /* / END SINGLE SERVICES DESIGN AREA */ ?>
            <?php /* START SINGLE SERVICES DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="single-service">
                    <span class="lnr lnr-layers"></span>
                    <h4>{{ trans('homepage.service_item2_title') }}</h4>
                    <p>{{ trans('homepage.service_item2_description') }}</p>
                </div>
            </div>
            <?php /* / END SINGLE SERVICES DESIGN AREA */ ?>
            <?php /* START SINGLE SERVICES DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="single-service">
                    <span class="lnr lnr-laptop"></span>
                    <h4>{{ trans('homepage.service_item3_title') }}</h4>
                    <p>{{ trans('homepage.service_item3_description') }}</p>
                </div>
            </div>
            <?php /* / END SINGLE SERVICES DESIGN AREA */ ?>
            <?php /* START SINGLE SERVICES DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="single-service">
                    <span class="lnr lnr-database"></span>
                    <h4>{{ trans('homepage.service_item4_title') }}</h4>
                    <p>{{ trans('homepage.service_item4_description') }}</p>
                </div>
            </div>
            <?php /* / END SINGLE SERVICES DESIGN AREA */ ?>
            <?php /* START SINGLE SERVICES DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                <div class="single-service">
                    <span class="lnr lnr-earth"></span>
                    <h4>{{ trans('homepage.service_item5_title') }}</h4>
                    <p>{{ trans('homepage.service_item5_description') }}</p>
                </div>
            </div>
            <?php /* / END SINGLE SERVICES DESIGN AREA */ ?>
            <?php /* START SINGLE SERVICES DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                <div class="single-service">
                    <span class="lnr lnr-bug"></span>
                    <h4>{{ trans('homepage.service_item6_title') }}</h4>
                    <p>{{ trans('homepage.service_item6_description') }}</p>
                </div>
            </div>
            <?php /* / END SIx  NGLE SERVICES DESIGN AREA */ ?>
        </div>
    </div>
</section>
<?php /* / END SERVICES DESIGN AREA */ ?>

<?php /* START TEAM DESIGN AREA */ ?>
<section id="team" class="team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>{{ trans('homepage.team_title')}}</h2>
                    <p>{{ trans('homepage.team_description')}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php /* START SINGLE TEAM DESIGN AREA */ ?>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="single-team">
                    <img src="https://www.gravatar.com/avatar/{{ md5('alessandrobm1988@gmail.com') }}?s=500&d=mm" alt="{!! trans('homepage.team_alt_img', [
                        'name' => 'Alessandro'
                    ]) !!}">
                    <div class="team-description">
                        <h4>Alessandro</h4>
                        <h6 class="text-muted">{{ trans('homepage.team_item1_work')}}</h6>
                        <div class="team-social">
                            <ul>
                                <li><a href="https://alessandromelo.com.br/" target="_BLANK"><i class="fa fa-user"></i></a>
                                </li>
                                <?php /*<li><a href="https://www.facebook.com/matheusfaroni" target="_BLANK"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://twitter.com/faroniii" target="_BLANK"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/faroniii" target="_BLANK"><i class="fa fa-instagram"></i></a>
                                </li>*/ ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php /* / END SINGLE TEAM DESIGN AREA */ ?>
            <?php /* START SINGLE TEAM DESIGN AREA */ ?>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="single-team">
                    <img src="https://www.gravatar.com/avatar/{{ md5('ana@sierratecnologia.com.br') }}?s=500&d=mm" alt="{!! trans('homepage.team_alt_img', [
                        'name' => 'Ana Clara Nogueira'
                    ]) !!}">
                    <div class="team-description">
                        <h4>Ana Clara Nogueira</h4>
                        <h6 class="text-muted">{{ trans('homepage.team_item2_work')}}</h6>
                        <div class="team-social">
                            <ul>
                            <?php /*<li><a href="https://www.facebook.com/rafilkmp3" target="_BLANK"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://github.com/rafilkmp3" target="_BLANK"><i class="fa fa-github"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/rafilkmp3/" target="_BLANK"><i class="fa fa-instagram"></i></a>
                                </li>*/ ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php /* / END SINGLE TEAM DESIGN AREA */ ?>
            <?php /* START SINGLE TEAM DESIGN AREA */ ?>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="single-team">
                    <img src="https://www.gravatar.com/avatar/{{ md5('teixeira@sierratecnologia.com.br') }}?s=500&d=mm" alt="{!! trans('homepage.team_alt_img', [
                        'name' => 'Rodrigo Teixeira'
                    ]) !!}">
                    <div class="team-description">
                        <h4>Rodrigo Teixeira</h4>
                        <h6 class="text-muted">{{ trans('homepage.team_item5_work')}}</h6>
                        <div class="team-social">
                            <ul><?php /*
                                <li><a href="https://twitter.com/cryprogramador" target="_BLANK"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://github.com/charleycesar" target="_BLANK"><i class="fa fa-github"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/charleycesar/" target="_BLANK"><i class="fa fa-instagram"></i></a>
                                </li>*/ ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php /* / END SINGLE TEAM DESIGN AREA */ ?>
            <?php /* START SINGLE TEAM DESIGN AREA */ ?>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="single-team">
                    <img src="https://www.gravatar.com/avatar/{{ md5('ricardo@sierratecnologia.com.br') }}?s=500&d=mm" alt="{!! trans('homepage.team_alt_img', [
                        'name' => 'Ricardo Sierra'
                    ]) !!}"> <?php /* 500x700 */ ?>
                    <div class="team-description">
                        <h4>Ricardo Sierra</h4>
                        <h6 class="text-muted">{{ trans('homepage.team_item4_work')}}</h6>
                        <div class="team-social">
                            <ul>
                                <li><a href="http://ricardosierra.com.br" target="_BLANK"><i class="fa fa-user"></i></a>
                                </li>
                                <li><a href="https://twitter.com/sierra91jb" target="_BLANK"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://github.com/ricardorsierra" target="_BLANK"><i class="fa fa-github"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/ricardorsierra/" target="_BLANK"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php /* / END SINGLE TEAM DESIGN AREA */ ?>
            <?php /* / END SINGLE TEAM DESIGN AREA */ ?>
            <?php /* START SINGLE TEAM DESIGN AREA
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="single-team">
                    <img src="https://www.gravatar.com/avatar/{{ md5('ricardo@sierratecnologia.com.br') }}?s=500&d=mm" alt="{!! trans('homepage.team_alt_img', [
                        'name' => 'Aline do Valle'
                    ]) !!}"> <?php /* 500x700
                    <div class="team-description">
                        <h4>Aline do Valle</h4>
                        <h6 class="text-muted">{{ trans('homepage.team_item1_work')}}</h6>
                        <div class="team-social">
                            <ul>
                                <li><a href="https://twitter.com/sierra91jb" target="_BLANK"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="https://github.com/ricardorsierra" target="_BLANK"><i class="fa fa-github"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/ricardorsierra/" target="_BLANK"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php /* / END SINGLE TEAM DESIGN AREA */ ?>
        </div>
    </div>
</section>
<?php /* / END TEAM DESIGN AREA */ ?>

<?php /* START PRICING DESIGN AREA */ ?>
<section id="pricing" class="pricing-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>{{ trans('homepage.pricing_title') }}</h2>
                    <p>{{ trans('homepage.pricing_description') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php /* START SINGLE PRICING DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="pricing-box">
                    <div class="pricing-header">
                        <div class="plan-title">
                            <h4>{{ trans('homepage.pricing_item1_title') }}</h4>
                        </div>
                        <div class="plan-price">
                            {{ trans('homepage.pricing_item1_price') }}
                        </div>
                        <div class="plan-month text-muted">
                            {{ trans('homepage.pricing_item1_pricedescription') }}
                        </div>
                    </div>
                    <ul class="list-unstyled plan-features">
                        <li>{{ trans('homepage.pricing_item1_description_1') }}</li>
                        <li>{{ trans('homepage.pricing_item1_description_2') }}</li>
                        <li>{{ trans('homepage.pricing_item1_description_3') }}</li>
                        <li>{{ trans('homepage.pricing_item1_description_4') }}</li>
                    </ul>
                    <a class="read-more" href="index.php#contact">{{ trans('homepage.service_budget') }}</a>
                </div>
            </div>
            <?php /* / END SINGLE PRICING DESIGN AREA */ ?>
            <?php /* START SINGLE PRICING DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="pricing-box price-active">
                    <div class="pricing-header">
                        <div class="plan-title">
                            <h4>{{ trans('homepage.pricing_item2_title') }}</h4>
                        </div>
                        <div class="plan-price">
                            {{ trans('homepage.pricing_item2_price') }}
                        </div>
                        <div class="plan-month text-muted">
                            {{ trans('homepage.pricing_item2_pricedescription') }}
                        </div>
                    </div>
                    <ul class="list-unstyled plan-features">
                        <li>{{ trans('homepage.pricing_item2_description_1') }}</li>
                        <li>{{ trans('homepage.pricing_item2_description_2') }}</li>
                        <li>{{ trans('homepage.pricing_item2_description_3') }}</li>
                        <li>{{ trans('homepage.pricing_item2_description_4') }}</li>
                    </ul>
                    <a class="read-more" href="index.php#contact">{{ trans('homepage.service_budget') }}</a>
                </div>
            </div>
            <?php /* / END SINGLE PRICING DESIGN AREA */ ?>
            <?php /* START SINGLE PRICING DESIGN AREA */ ?>
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="pricing-box">
                    <div class="pricing-header">
                        <div class="plan-title">
                            <h4>{{ trans('homepage.pricing_item3_title') }}</h4>
                        </div>
                        <div class="plan-price">
                            {{ trans('homepage.pricing_item3_price') }}
                        </div>
                        <div class="plan-month text-muted">
                            {{ trans('homepage.pricing_item3_pricedescription') }}
                        </div>
                    </div>
                    <ul class="list-unstyled plan-features">
                        <li>{{ trans('homepage.pricing_item3_description_1') }}</li>
                        <li>{{ trans('homepage.pricing_item3_description_2') }}</li>
                        <li>{{ trans('homepage.pricing_item3_description_3') }}</li>
                        <li>{{ trans('homepage.pricing_item3_description_4') }}</li>
                    </ul>
                    <a class="read-more" href="index.php#contact">{{ trans('homepage.service_budget') }}</a>
                </div>
            </div>
            <?php /* / END SINGLE PRICING DESIGN AREA */ ?>
        </div>
    </div>
</section>
<?php /* / END PRICING DESIGN AREA */ ?>

<?php /* START CONTACT DESIGN AREA */ ?>
<section id="contact" class="contact-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>{{ trans('homepage.contact_title') }}</h2>
                    <p>{{ trans('homepage.contact_description') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php /* START CONTACT DETAILS DESIGN AREA */ ?>
            <div class="contact-details-area wow fadeInUp" data-wow-delay=".2s">
                <div class="col-md-4 col-sm-6">
                    <div class="single-contact-details">
                        <span class="lnr lnr-phone-handset"></span>
                        <h4>{{ trans('homepage.contact_phone') }}</h4>
                        <p class="text-muted">+55 21 24283883</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-contact-details">
                        <span class="lnr lnr-envelope"></span>
                        <h4>{{ trans('homepage.contact_email') }}</h4>
                        <p class="text-muted">contato@sierratecnologia.com.br</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-contact-details">
                        <span class="lnr lnr-map-marker"></span>
                        <h4>{{ trans('homepage.contact_address') }}</h4>
                        <p class="text-muted">Rua Barata Ribeiro, 348, Copacabana, Rio de Janeiro, Brasil</p>
                    </div>
                </div>
            </div>
            <?php /* / END CONTACT DETAILS DESIGN AREA */ ?>
        </div>
        <div class="row contact-form-design-area wow fadeInUp">
            <?php /* START CONTACT FORM DESIGN AREA */ ?>
            <div class="col-md-12">
                @include('components.contact')
            </div>
            <?php /* /END  CONTACT DETAILS DESIGN AREA */ ?>
        </div>
    </div>
</section>
<?php /* / END CONTACT DESIGN AREA */ ?>