<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>DelegateIt</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://nathanchapman.net/flex-grid/css/u-tilities.css">
  </head>
  <body>
    <div class="first-section">
      <div class="container">
        <!-- HEADER -->
        <header class="navbar navbar-static-top" role="banner" id="top">
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <a class="brand" href="#">
                <img src="./images/logo-delegateit-gradient.png" title="DelegateIt" style="margin-top: 12px">
              </a>
              <div class="navbar-collapse" id="menus">
                <a href="#" class="btn btn-lg btn-brand delegate-now">Sign up now</a>
              </div>
            </div>
          </nav>
        </header>
        <hr><br>
        <div class="row">
          <div class="first-paragraph col-md-7">
            <h1 class="type" data-text="Any Delivery."></h1>
            <h1 class="type2" data-text="Any Task."></h1>
            <div class="header-block">
              <p>DelegateIt allows you to delegate any task or delivery through a simple text conversation.</p>
              <p>Text us your request to get started.</p>
              <span class="phone-number"><a href="tel:5123563557">512-359-3557</a></span>
            </div>
          </div>
          <div class="second-paragraph col-md-5 desktop">
            <img src="./images/iphone.png" alt="">
          </div>
          <div class="down-arrow">
            <a href="#second-section"><i class="fa fa-chevron-down"></i></a>
          </div>
        </div>
      </div>
    </div>

      <!-- Second section -->
      <div class="container section second-section left-roll" id="second-section">
        <div class="row">
          <div class="col-sm-12 right-extra-padding">
            <h3>How it works</h3>
            <p>We provide a 24/7 concierge service that is simple and quick to use.</p>
            <p>Send us a text with your requests and one of our team members will reply with options. All billing is done through a secure Stripe link.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 right-extra-padding">

          </div>
        </div>
      </div>

      <!-- Third section -->
      <!-- <div class="third-section section">
        <div class="container">
          <div class="row right-roll">
            <div class="col-md-6 messages">
              <img src="./images/message1.jpg" alt="">
            </div> --><!--
         --><!-- <div class="col-md-6 tab-text">
              <img src="./images/giant-logo.png" class="giant-logo tablet">
              <div class="step-row">
                <div class="bubble">
                  <h2 class="tablet">1</h2>
                  <h3>First contact</h3>
                </div>
                <p>Send a text with the details of your request</p>
              </div>
              <div class="step-row">
                <div class="bubble">
                  <h2 class="tablet">2</h2>
                  <h3>Welcome</h3>
                </div>
                <p>You will receive a confirmation and quote from our team </p>
              </div>
              <div class="step-row">
                <div class="bubble">
                  <h2 class="tablet">3</h2>
                  <h3>Ok, go for it!</h3>
                </div>
                <p>You approve and we send you a secure invoice via SMS.</p>
              </div>
              <div class="yellow-delegate">
                <a href="#" class="btn btn-lg btn-brand-yellow pushdown delegate-now">Delegate Now</a>
              </div>
              <div class="pushdown">
                <h3 class="got-questions">Got any Questions? Check out our FAQ Page!</h3>
              </div>
            </div>
          </div>
        </div>
      </div> -->

  <!-- Fourth section -->
  <div class="aqua-box" id="delegate-form">
    <div class="container">
      <h2>delegate now</h2>
      <div>
        <hr>
        <div class="horizontal-center reduced-width">
          <p>Fill out the form and we will get back to you with a text message response. We look forward to helping you!</p>
        </div>
        <form action="form-submission.php" method="post" class="horizontal-center">
          <input type="text" name="first_name" placeholder="First Name">
          <input type="text" name="last_name" placeholder="Last Name">
          <input type="text" name="phone" placeholder="Phone">
          <input type="text" name="zip" placeholder="Zip Code">

          <input type="submit" value="Submit" class="submit" action="form-submission.php" id="formid">
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <a class="brand" href="#">
        <img src="./images/gray-logo.png" title="DelegateIt" style="margin-top: 12px">
      </a>
      <div class="pull-right links">
        <p><a href="docs/privacy-policy.pdf" style="padding: 0;" target="_blank">Privacy Policy</a> | <a href="mailto:Contact@DelegateIt.co">Contact@DelegateIt.co</a></p>
      </div>
    </div>
  </footer>

  <script src="js/site.min.js"></script>
  </body>
</html>
