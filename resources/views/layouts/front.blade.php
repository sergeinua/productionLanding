<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119111130-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119111130-1');
      </script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="fonts/font.css">
      <link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <title>RedRoom</title>
      <meta name="google-site-verification" content="defZAHTK6nquXU0BMeTmKd7HZf7uAGpvxquMAghoK-8" />
  </head>
  <body>
    <header>
      <div class="container">
        <div class="block-header">
          <div>
            <img class="img-responsive" src="img/main_pic.png" alt="">
          </div>
          <div class="navbar">
            <div class="nav-menu">
              <div class="left-prev">
                <img src="img/icons/left-prev.png" alt="" class="img-responsive">
              </div>
              <div class="menu_line">
                <ul>
                  <li><a href="#film">film</a></li>
                  <li><a href="#film">video</a></li>
                  <li><a href="#film">animation</a></li>
                </ul>
              </div>
              <div class="right-prev">
                <img src="img/icons/right-prev.png" alt="" class="img-responsive">
              </div>
            </div>
            <div class="line-buttom">
              <div class="left-buttom hovers btn-danger">
                <a href="#latest">view projects</a>
              </div>
              <div class="right-buttom hovers btn-danger">
                <a href="#form">hire us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('main-content')

    <footer>
      <div class="footer-block">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-xs-12">
              <div class="footer-text text-center">
                <p>So What's Next?</p>
                <h2>Let’s Work! <u>Just drop us a line.</u></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row no-gutters">
          <div class="col-xs-12">
            <div class="img-footer">
              <div class="form gradient">
                <form id="form">
                  <p>Hello, my name is
                    <input type="text" class="decorate" id="msgName" placeholder="first&last name">.</p>
                  <p> I need a
                    <input type="text" class="decorate" id="msgType" placeholder="films, video, animation,">.</p>
                  <p>approximate duration around
                    <input type="text" class="decorate" id="msgDuration" placeholder="xx:xx">.</p>
                  <p>My budget is,
                    <input type="text" class="decorate" id="msgBudget" placeholder="1000$">
                  </p>
                  <p>You can reach me on my phone at
                    <input type="text" class="decorate" id="msgTelephone" placeholder="xxx-xxx-xxx">
                  </p>
                  <p>Or via email at
                    <input type="text" class="decorate" id="msgEmail" placeholder="your@email.com">
                  </p>
                </form>
                <div class="send-btn">
                  <div class="sent-text hidden">
                    <span>Your request has been submitted successfully</span>
                  </div>
                  <div class="send-img" onclick="sendEmail()">
                    <img src="img/icons/air_send.png" alt="">
                  </div>
                </div>
                <div class="line-icons-footer">
                  <ul>
                    <li><a href="{{ $settings->insta_link }}"><img src="img/icons/instagram.png" alt=""></a></li>
                    <li><a href="{{ $settings->youtube_link }}"><img src="img/icons/youtube.png" alt=""></a></li>
                    <li><a href="{{ $settings->facebook_link }}"><img src="img/icons/facebook.png" alt=""></a></li>
                  </ul>
                  <div class="red-line"></div>
                  <div class="text-red-line">
                    <p>{{ $settings->tel_num }}</p>
                    <p>{{ $settings->email }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/script.js"></script>
    </footer>
  </body>
</html>
