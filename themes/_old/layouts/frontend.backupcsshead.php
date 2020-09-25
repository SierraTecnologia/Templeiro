
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            #view-source {
                position: fixed;
                display: block;
                right: 0;
                bottom: 0;
                margin-right: 40px;
                margin-bottom: 40px;
                z-index: 900;
            }

            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
            }


            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
            margin-bottom: 4rem;
            }
            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
            bottom: 3rem;
            z-index: 10;
            }

            /* Declare heights because of positioning of img element */
            .carousel-item {
            height: 32rem;
            }
            .carousel-item > img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
            }


            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Center align the text within the three columns below the carousel */
            .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
            }
            .marketing h2 {
            font-weight: 400;
            }
            .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
            }


            /* Featurettes
            ------------------------- */

            .featurette-divider {
            margin: 5rem 0; /* Space out the Bootstrap <hr> more */
            }

            /* Thin out the marketing headings */
            .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
            }


            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (min-width: 40em) {
            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
            }

            @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
            }

        </style>




            <!-- Footer -->
            <footer class="py-5 bg-dark">
                <div class="container">
                <p class="float-left">&copy; {{ date('Y') }} - <a href="{{ url('pages') }}">{!! trans('features.pageDirectory') !!}</a></p>
                @can('siravel')
                    <a class="btn btn-xs btn-secondary float-right" href="{{ url('admin/dashboard') }}">Siravel</a>
                    @yield('siravel')
                @else
                    <a class="btn btn-xs btn-secondary float-right" href="{{ url('login') }}">{!! trans('features.login') !!}</a>
                @endcan
                <p class="m-0 text-center text-white">Desenvolvido por <a href="http://www.sierratecnologia.com.br" target="_BLANK">SierraTecnologia</a></p>
                </div>
                <!-- /.container -->
            </footer>
        </main>


