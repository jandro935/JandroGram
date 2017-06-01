@extends ('home.layout')

@section ('content')

    @include ('home.partials.header')

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

                @foreach ($photos as $photo)
                    <div class="portfolio-item">
                        <a href="/img/ups/{{ $photo->name }}" class="portfolio-image popup-gallery" title="{{ $photo->name }}">
                            <img src="/img/ups/{{ $photo->name }}" alt="{{ $photo->name }}" />
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h4>{{ $photo->description }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

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

    @include ('home.partials.footer')
@endsection
