@extends('layouts.front')

@section('main-content')

<main>
  <div class="container">
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
  <div class="container">
    <div id="latest" class="main-conteiner">
      <h2>latest works</h2>
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
          <div class="item-video">
            <a class="owl-video" href="https://vimeo.com/284517387"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@stop
