@extends('layouts.front')

@section('main-content')

    <main>
        <div class="block-photo-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="left-block-img">
                            <div class="picture-studio">
                                <img class="img-responsive" src="img/photo-studio.png" alt="">
                                <div class="film-strip"><img src="img/icons/film-strip.png" alt="" class="img-responsive"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="photo-text">
                            <h2>We are a creative film and video production company.</h2>
                            <div class="line-text"></div>
                            <p>{{ $settings->first_block_text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-block">
            <div class="main-block-icons">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="filming">
                                <h2 id="film">filming services</h2>
                                <div class="line-filming"></div>
                                <p>{{ $settings->second_block_text }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row no-gutters">
                        <div class="block-icons-top">
                            <div class="col-xs-12 col-md-6">
                                <div class="commercial">
                                    <div class="commercial-h2">
                                        <h2>commercial</h2>
                                    </div>
                                    <div class="img-commerc">
                                        <img src="img/icons/icons-commercial.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="music-animation">
                                    <div class="music-h2">
                                        <h2>music&animation</h2>
                                    </div>
                                    <div class="music-img">
                                        <img src="img/icons/icons-animation.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="block-icons-buttom">
                            <div class="col-xs-12 col-md-6">
                                <div class="corporate">
                                    <div class="corporate-h2">
                                        <h2>corporate</h2>
                                    </div>
                                    <div class="corporate-img">
                                        <img src="img/icons/icons-corporate.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="non-profit">
                                    <div class="non-profit-h2">
                                        <h2>non-profit</h2>
                                    </div>
                                    <div class="non-profit-img">
                                        <img src="img/icons/icons-nonprofit.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttom-main hovers">
                        <a href="#form">hire us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-conteiner">
            <h2>latest works</h2>
            <div class="container">
                <div class="row no-gutters">
                    <div class="block-photo">
                        <div class="col-md-7">
                            <div class="left-block-photo">
                                <div class="photo-cars">
                                    <img class="img-responsive" src="img/cars-photo.png" alt="">
                                </div>
                                <div class="picture-line">
                                    <div class="col-md-6">
                                        <div class="people-mask">
                                            <img class="img-responsive" src="img/peoples-mask.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wooman">
                                            <img class="img-responsive" src="img/woomen.png" alt="" class="responsive">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="right-block-photo">
                                <div class="sport-game">
                                    <div>
                                        <img class="img-responsive" src="img/sport-game_big.png" alt="">
                                    </div>
                                    <div class="sport-text">
                                        <h2>green gray</h2>
                                        <p>{{ $settings->third_block_text }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="owl-carousel owl-theme">
                <div class="item-video">
                  <a class="owl-video" href="https://www.youtube.com/watch?v=0EMowVnDrsU"></a>
                </div>
                <div class="item-video">
                  <a class="owl-video" href="https://www.youtube.com/watch?v=hnHz8ogAGpk"></a>
                </div>
                <div class="item-video">
                  <a class="owl-video" href="https://vimeo.com/146103933"></a>
                </div>
                <div class="item-video">
                  <a class="owl-video" href="https://vimeo.com/177937692"></a>
                </div>
                <div class="item-video">
                  <a class="owl-video" href="https://vimeo.com/179098094"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" onclick="hideModal()">Close</button>
          </div>
        </div>
      </div>
    </div>

@stop
