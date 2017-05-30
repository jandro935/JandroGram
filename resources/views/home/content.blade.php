@extends ('home.layout')

@section ('content')
    <header>
        <!-- Start Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-full white bootsnav u-BorderLess">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="Icon Icon-align-left"></i>
                    </button>
                    <a class="navbar-brand" href="./index.html"><img src="assets/imgs/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="zoomIn" data-out="zoomOut">
                        <li><a href="#">Home</a></li>
                        {{-- @TODO: Quitar esto de aquí --}}
                        <li>Ponemos de momento aquí todas las URLs para enlazar con ellas...</li>
                        @if (!Auth::guest())
                            <li>{{ Auth::user()->username }}</li>
                        @endif

                        <li><a href="{{ route('home.upload') }}">Upload</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->

    <!--banner start-->
    <section class="container ImageBackground ImageBackground--overlay u-height500" data-overlay="2">
        <div class="ImageBackground__holder">
            <img src="assets/imgs/photography/cover.jpg" alt="...">
        </div>
        <div class="container u-vCenter">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="u-MarginTop0 u-MarginBottom10 text-uppercase u-FontSize75 u-xs-FontSize40 u-Weight800 text-white">Alien's</h1>
                    <div class="u-Block text-white">
                        <span class="text-lg text-uppercase u-LetterSpacing3">Click</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner end-->

    <!--portfolio start-->
    <div class="container">
        <div class="row u-MarginTop30">
            <div class="js-Portfolio portfolio-grid portfolio-gallery  grid-2 gutter">
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/01.jpg" class="portfolio-image popup-gallery" title="Blue Eye Girl">
                        <img src="assets/imgs/photography/01.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Blue Eye Girl</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/02.jpg" class="portfolio-image popup-gallery" title="Animal">
                        <img src="assets/imgs/photography/02.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Animal</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/03.jpg" class="portfolio-image popup-gallery" title="River Alone">
                        <img src="assets/imgs/photography/03.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>River Alone</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/04.jpg" class="portfolio-image popup-gallery" title="Rare">
                        <img src="assets/imgs/photography/04.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Rare</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/05.jpg" class="portfolio-image popup-gallery" title="Sea Way">
                        <img src="assets/imgs/photography/05.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Sea Way</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/06.jpg" class="portfolio-image popup-gallery" title="Man in Dark">
                        <img src="assets/imgs/photography/06.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Man in Dark</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/07.jpg" class="portfolio-image popup-gallery" title="Teen Girl">
                        <img src="assets/imgs/photography/07.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Teen Girl</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/08.jpg" class="portfolio-image popup-gallery" title="Old Man Smoking">
                        <img src="assets/imgs/photography/08.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Old Man Smoking</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/09.jpg" class="portfolio-image popup-gallery" title="Colorful Boy">
                        <img src="assets/imgs/photography/09.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Colorful Boy</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/10.jpg" class="portfolio-image popup-gallery" title="Cab">
                        <img src="assets/imgs/photography/10.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Cab</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item">
                    <a href="assets/imgs/photography/11.jpg" class="portfolio-image popup-gallery" title="Sit &amp; Read">
                        <img src="assets/imgs/photography/11.jpg" alt=""/>
                        <div class="portfolio-hover-title">
                            <div class="portfolio-content">
                                <h4>Sit &amp; Read</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row u-MarginTop60 u-MarginBottom100">
            <div class="col-md-12">
                <div class="u-FlexCenter">
                    <a href="#" class="btn btn-sm btn-creative btn-creative--prev text-uppercase"><span class="arrow arrow-left"></span>Previous</a>
                    <span class="u-PaddingRight50 u-PaddingLeft50 u-Weight800">01/12</span>
                    <a href="#" class="btn btn-sm btn-creative btn-creative--next text-uppercase">Next<span class="arrow arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!--portfolio end-->

    <!--blog start-->
    <section class="u-PaddingTop30 u-PaddingBottom30">
        <div class="container u-Padding30 u-BoxShadow40 u-MarginBottom100">
            <div class="row media">
                <div class="col-md-6 media-left media-middle u-sm-MarginBottom30">
                    <img class="img-responsive" src="assets/imgs/photography/12.jpg" alt="...">
                </div>
                <div class="col-md-6 media-body media-middle">
                    <div class="u-PaddingLeft50 u-PaddingRight50 u-xs-Padding0">
                        <h1 class="u-MarginTop0 u-MarginBottom10">Biography</h1>
                        <p class="u-MarginBottom30">By <a href="#">Jonathan Smith</a>   |   <a href="#">18 February 2017</a></p>
                        <p>You're ready to explore new worlds, engage in tense action. You need a headset that's well made, and engineered to fit better than ever before.</p>
                        <p class="u-MarginTop35 u-MarginBottom0">
                            <a class="btn-go" href="#" role="button">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog end-->

    <!--footer start-->
    <footer class="bg-darker u-PaddingTop45 u-PaddingBottom45">
        <div class="container">
            <div class="row text-sm u-MarginTop20">

                <div class="col-md-5">
                    <p class="u-LineHeight2 u-MarginBottom20"><img class="retina logo-v-center u-PaddingRight20" src="assets/imgs/logo-light.png" alt=""> Copyright © 2009–2017 Alien Template.</p>
                </div>
                <div class="col-md-2 text-center">
                    <div class="social-links sl-default light-link u-MarginTop10">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 text-right text-left--xs">
                    <ul class="list-inline text-paragraph u-LineHeight2 u-MarginBottom0 u-MarginTop5">
                        <li><span class="footer-dash-sign light"></span></li>
                        <li class="u-MarginRight10">Call <span class=" light-txt"> +123 456 789</span></li>

                        <li><span class="footer-dash-sign light"></span></li>
                        <li>Email <span class=" light-txt"> info@alienemial.cm</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
