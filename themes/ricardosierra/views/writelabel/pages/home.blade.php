
@include('partials.status-panel')
    
<?php /* Main Content
================================================== */ ?>
<section id="body" class="">

    <div class="container">

        <?php /* MAIN MENU */ ?>
        <div class="main-menu" id="main-menu">
            <ul class="main-menu-list">
                <li><a href="index.html#page-resume" page="page-resume" class="link-home">{{ trans('menu.home') }}</a></li>
                <?php /**<li><a href="index.html#page-resume" page="page-resume" class="link-page">{{ trans('menu.resume') }}</a></li>**/ ?>
                <li><a href="index.html#page-skills" page="page-skills" class="link-page">{{ trans('menu.skills') }}</a></li>
                <li><a href="index.html#page-contact" page="page-contact" class="link-page">{{ trans('menu.contact') }}</a></li>
            </ul>
        </div>
        <?php /* /MAIN MENU */ ?>

        <?php /* SECTION: vCard Body  */ ?>
        <div class="section-vcardbody section-home" id="section-home">
            <?php /* Profile pic*/ ?>
            <div class="vcard-profile-pic">
                <?php echo '<img src="https://www.gravatar.com/avatar/'.md5('sierra.csi@gmail.com').'" id="profile2" alt="">'; ?>
                <?php echo '<img src="https://www.gravatar.com/avatar/'.md5('sierra.csi@gmail.com').'" id="profile1" class="profileActive" alt="">'; ?>
            </div>
            <?php /* /Profile pic */ ?>
            <?php /* Description */ ?>
            <div class="vcard-profile-description">
                <?php /* Profile title */ ?>
                <h1 class="profile-title">
                    <?php echo trans('welcome.welcome',
                        [
                            'name' => '<span class="color1">Ricardo Sierra!</span>',
                        ]
                    ); ?></h1>
                <h2 class="profile-subtitle">{{ trans('welcome.work') }}</h2>
                <?php /* /Profile Title */ ?>
                <?php /* Description Text */ ?>
                <hr class="hr1">
                <div class="vcard-profile-description-text">
                    <p>{{ trans('welcome.work_description') }}</p>
                </div>
                <?php /*/ Description Text */ ?>
                <?php /* Description feature */ ?>
                <div class="vcard-profile-description-feature">
                    <?php /* item */ ?>
                    <div class="vcard-profile-description-ft-item">
                        <p>
                            {{ trans('welcome.contacts',
                                [
                                    'email' => 'contato@ricardosierra.com.br',
                                    'telefone' => '+21 9 99193898',
                                ]
                            ) }}</p>
                    </div>
                    <?php /* item */ ?>
                </div>
                <?php /* /Description feature */ ?>
            </div>
            <?php /* /Description */ ?>
            <?php /* Footer */ ?>
            <div class="vcard-footer">
                <?php /* Social Icons */ ?>
                <div class="footer-social-icons">
                    <a href="https://www.instagram.com/ricardorsierra/" target="_BLANK"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/ricardorebellosierra" target="_BLANK"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/sierra91jb" target="_BLANK"><i class="fa fa-twitter"></i></a>
                    <a href="https://br.linkedin.com/in/ricardorsierra" target="_BLANK"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/channel/UCRkolqgLcGQjfQPl0iKEKzg" target="_BLANK"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.ricardosierra.com.br" target="_BLANK"><i class="fa fa-anchor"></i></a>
                </div>
                <?php /* /Social Icons */ ?>
            </div>
        </div>
        <?php /* /SECTION: vCard Body  */ ?>

        <?php /* PAGE: RESUME *//* ?>
        <div class="section-vcardbody section-page" id="page-resume">

            <?php /* SECTION: Education *//* ?>
            <div class="section-education">
            <h2 class="section-title">{{ trans('resume.resume') }}</h2>

            <div class="resume-buttons header-page-buttons">
            <?php /* /Download CV button *//* ?>
            <a href="index.html#" class="btn btn-default btn-default2"><i class="fa fa-download"></i>&nbsp; {{ trans('resume.download') }}</a>
            <?php /* Get in Touch button *//* ?>
            <a href="index.html#page-contact" class="btn btn-default btn-default2 link-page"><i class="fa fa-download"></i>&nbsp;  Get in Touch</a>
            </div>

            <h2 class="section-title2"><i class="fa fa-flag"></i>&nbsp; {!! trans('vcard.workExperience') !!}</h2>

            <div class="resume-item">
            <h3 class="section-item-title-1">Fidelize</h3>
            <h4 class="job">Lead Designer - <span class="job-date">June 2012 - Current</span></h4>
            <div class="graduation-description">
            <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book.</p>
            </div>
            </div>

            <div class="resume-item">
            <h3 class="section-item-title-1">Bilo</h3>
            <h4 class="job">Front-end Developer - <span class="job-date">Jan 2010 - Apr 2012</span></h4>
            <div class="graduation-description">
            <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book.</p>
            </div>
            </div>

            <div class="resume-item">
            <h3 class="section-item-title-1">SierraTecnologia</h3>
            <h4 class="job">Designer - <span class="job-date">Jan 2010 - Apr 2012</span></h4>
            <div class="graduation-description">
            <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book.</p>
            </div>
            </div>

            <div class="resume-item">
            <h3 class="section-item-title-1">Fenix Digital</h3>
            <h4 class="job">Web Designer - <span class="job-date">Jan 2010 - Apr 2012</span></h4>
            <div class="graduation-description">
            <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book.</p>
            </div>
            </div>
            </div>

            <?php /* SECTION: Education *//* ?>
            <div class="section-education">

            <h2 class="section-title2"><i class="fa fa-university"></i>&nbsp; {!! trans('vcard.education') !!}</h2>

            <div class="resume-item">
            <h3 class="section-item-title-1">Engenharia de Computação</h3>
            <h4 class="graduation-time">St. Patrick University (2 Years Course) - <span class="graduation-date">Graduation May 2013</span></h4>
            <div class="graduation-description">
            <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book.</p>
            </div>
            </div>

            <div class="resume-item">
            <h3 class="section-item-title-1">Colégio Santo Inacio</h3>
            <h4 class="graduation-time">St. Patrick University (2 Years Course) - Graduation May 2013</h4>
            <div class="graduation-description">
            <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book.</p>
            </div>
            </div>
            </div>

            <div class="page-footer">
            <div class="resume-buttons">
            <?php /* Download CV button *//* ?>
            <a href="index.html#" class="btn btn-default btn-default2"><i class="fa fa-download"></i>&nbsp; {{ trans('resume.download') }}</a>
            <?php /* Get in Touch button *//* ?>
            <a href="index.html#page-contact" class="btn btn-default btn-default2 link-page"><i class="fa fa-download"></i>&nbsp;  Get in Touch</a>
            </div>
            <?php /* Quote *//* ?>
            <p class="footer-quote">"The best way to predict the future is to create it" <br/><i>Peter Drucker</i></p>
            <?php /* /Quote *//* ?>
            </div>

        </div>
    <?php /* /PAGE: RESUME  */ ?>

    <?php /* SECTION: SKILLS*/ ?>
        <div class="section-vcardbody section-page" id="page-skills">
            <div class="section-skills">

                <?php /* Section title */ ?>
                <h2 class="section-title">{{ trans('welcome.skills') }}</h2>
                <?php /* /Section title */ ?>


                <?php /* Subtitle */ ?>
                <h3 class="section-item-title-2"><i class="fa fa-users"></i>&nbsp;&nbsp; {{ trans('skills.professional') }}</h3>
                <?php /* /Subtitle */ ?>

                <?php /* Skils List */ ?>
                <ul class="skills-list">
                    <?php /* item-list */ ?>
                    <li>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" data-percent="70%" style="width: 70%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'70']) }}</span>
                            </div>
                            <span class="progress-type">{{ trans('skills.comunication') }}</span>
                            <span class="progress-completed">70%</span>
                        </div>
                    </li>
                    <?php /* /item list */ ?>
                    <?php /* item-list */ ?>
                    <li>
                        <div class="progress">
                            <div class="progress-bar progress-bar-2" role="progressbar" data-percent="85%" style="width: 85%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'85']) }}</span>
                            </div>
                            <span class="progress-type">{{ trans('skills.leadership') }}</span>
                            <span class="progress-completed">85%</span>
                        </div>
                    </li>
                    <?php /* /item list */ ?>
                    <?php /* item-list */ ?>
                    <li>
                        <div class="progress" title="Doing my best!">
                            <div class="progress-bar progress-bar-3" role="progressbar" data-percent="85%" style="width: 85%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'85']) }}</span>
                            </div>
                            <span class="progress-type">{{ trans('skills.confidence') }}</span>
                            <span class="progress-completed">85%</span>
                        </div>
                    </li>
                    <?php /* /item list */ ?>
                </ul>
                <?php /* /Skils List */ ?>

                <?php /* Subtitle */ ?>
                <h3 class="section-item-title-2"><i class="fa fa-laptop"></i>&nbsp;&nbsp; {{ trans('skills.software') }}</h3>
                <?php /* /Subtitle */ ?>

                <?php /* Skils List */ ?>
                <ul class="skills-list">
                    <?php /* item-list */ ?>
                    <li>
                        <div class="progress">
                            <div class="progress-bar" data-percent="70%" role="progressbar" style="width: 70%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'70']) }}</span>
                            </div>
                            <span class="progress-type">Docker</span>
                            <span class="progress-completed">75%</span>
                        </div>
                    </li>
                    <?php /* /item list */ ?>
                    <?php /* item-list */ ?>
                    <li>
                        <div class="progress">
                            <div class="progress-bar progress-bar-2" data-percent="95%" role="progressbar" style="width: 95%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'95']) }}</span>
                            </div>
                            <span class="progress-type">Git</span>
                            <span class="progress-completed">95%</span>
                        </div>
                    </li>
                    <?php /* /item list */ ?>
                    <?php /* item-list */ ?>
                    <li>
                        <div class="progress">
                            <div class="progress-bar progress-bar-3" data-percent="85%" role="progressbar" style="width: 85%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'85']) }}</span>
                            </div>
                            <span class="progress-type">Linux</span>
                            <span class="progress-completed">85%</span>
                        </div>
                    </li>
                    <?php /* /item list */ ?>
                </ul>
                <?php /* /Skils List */ ?>

                <?php /* Subtitle */ ?>
                <h3 class="section-item-title-2"><i class="fa fa-code"></i>&nbsp;&nbsp; {{ trans('skills.code') }}</h3>
                <?php /* /Subtitle */ ?>

                <?php /* Skils List */ ?>
                <ul class="skills-list">
                    <li>
                        <div class="progress">
                            <div class="progress-bar progress-bar-3" data-percent="95%" role="progressbar" style="width: 95%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'95']) }}</span>
                            </div>
                            <span class="progress-type">PHP</span>
                            <span class="progress-completed">95%</span>
                        </div>
                    </li>
                    <li>
                        <div class="progress">
                            <div class="progress-bar progress-bar-2" data-percent="85%" role="progressbar" style="width: 85%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'85']) }}</span>
                            </div>
                            <span class="progress-type">Nodejs / Javascript</span>
                            <span class="progress-completed">75%</span>
                        </div>
                    </li>
                    <li>
                        <div class="progress">
                            <div class="progress-bar" data-percent="65%" role="progressbar" style="width: 65%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'65']) }}</span>
                            </div>
                            <span class="progress-type">Python</span>
                            <span class="progress-completed">65%</span>
                        </div>
                    </li>
                    <li>
                        <div class="progress">
                            <div class="progress-bar progress-bar-3" data-percent="95%" role="progressbar" style="width: 95%;">
                                <span class="sr-only">{{ trans('welcome.complete', ['porc'=>'95']) }}</span>
                            </div>
                            <span class="progress-type">Ruby</span>
                            <span class="progress-completed">70%</span>
                        </div>
                    </li>
                </ul>
                <?php /* /Skils List */ ?>

            </div>
        </div>
        <?php /* /SECTION: SKILLS  */ ?>

        <?php /* SECTION: CONTACT*/ ?>
        <div class="section-vcardbody section-page" id="page-contact">
            <div class="section-contact">

                <?php /* Section title */ ?>
                <h2 class="section-title">{{ trans('welcome.contact') }}</h2>
                <?php /* /Section title */ ?>

                <div class="map">
                    <div class="map-overlay"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d470410.46871772193!2d-43.72922397996991!3d-22.91035400504567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sus!4v1480901110322" height="250" style="border:0" allowfullscreen></iframe>
                </div>

                <?php /* Contact infos */ ?>
                <div class="contact-infos">
                    <h4 class="contact-subtitle-1"><i class="fa fa-map"></i>&nbsp;   {{ trans('contact.address') }}</h4>
                    <p>Estrada do Morgado, Vargem Grande</p>
                    <h4 class="contact-subtitle-1"><i class="fa fa-phone-square"></i>&nbsp; {{ trans('contact.phone') }}</h4>
                    <p>+55 21 999193898</p>
                    <h4 class="contact-subtitle-1"><i class="fa fa-envelope"></i>&nbsp; {{ trans('contact.mail') }}</h4>
                    <p>contato@ricardosierra.com.br</p>
                </div>
                <?php /* /Contact infos */ ?>

                <?php /* Contact form */ ?>
                <h4 class="contact-subtitle-1"><i class="fa fa-paper-plane-o"></i>&nbsp;  {{ trans('contact.send-me-a-message') }}</h4>
            {{
                Form:: open(
                    [
                        'url' => 'contact', 
                        'id' => 'contactForm',
                        'class' => 'form'
                    ]
                )
            }}

            <?php /* Form Field */ ?>
                <div class="form-group">
                    <input class="form-control required" id="name" name="name" placeholder="{{ trans('contact.name') }}" type="text" required />
                </div>
                <?php /* /Form Field */ ?>
                <?php /* Form Field */ ?>
                <div class="form-group">
                    <input class="form-control required" id="email" name="email" placeholder="{{ trans('contact.mail') }}" type="email" required />
                </div>
                <?php /* /Form Field */ ?>
                <?php /* Form Field */ ?>
                <div class="form-group">
                    <input class="form-control required" id="subject" type="text" name="subject" placeholder="{{ trans('contact.subject') }}" required>
                </div>
                <?php /* /Form Field */ ?>
                <?php /* Form Field */ ?>
                <div class="form-group">
                    <textarea class="form-control required" id="message" name="message" placeholder="{{ trans('contact.message') }}" rows="5" required></textarea>
                </div>
                <?php /* /Form Field */ ?>
                <?php /* Form Field */ ?>
                <div class="form-group">
                    <input type="submit" class="btn btn-default form-send" value="{{ trans('contact.send') }}">
                </div>
                <?php /* /Form Field */ ?>
            {{ Form:: close() }}
            <?php /* /Contact Form */ ?>

            </div>
        </div>
        <?php /* /SECTION: CONTACT  */ ?>
    </div>

</section>
