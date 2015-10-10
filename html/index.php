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
  </head>
  <body>
    <div class="first-section">
      <div class="container">
        <!-- HEADER -->
        <header class="navbar navbar-static-top" role="banner">
          <nav class="navbar navbar-default">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menus">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button> -->
                <a class="brand" href="#">
                  <img src="./images/logo-delegateit-gradient.png" title="DelegateIt" style="margin-top: 12px">
                </a>
                <div class="navbar-collapse" id="menus">
                  <a href="#" class="btn btn-lg btn-brand delegate-now">Delegate Now</a>
                </div>
              </div>
            </nav>
          </header>
          <hr><br>
          <div class="row">
            <div class="first-paragraph col-md-7">
              <h1>Need Something On Vacation?</h1>
              <p>Whether on vacation or at home send a text to this number and we will get you any item or service you might need:</p>
              <div class="header-block">
                <span class="phone-number">512-359-3557</span>
              </div>
            </div>
            <div class="second-paragraph col-md-5 desktop">
              <img src="./images/iphone.png" alt="">
            </div>
          </div>
        </div>
      </div>

      <!-- Second section -->
      <div class="container section">
        <div class="row left-roll">
          <div class="col-sm-6 right-extra-padding">
            <div class="round-border">
              ?
            </div>
            <h3>If you could get whatever you want, as soon as possible, would you do it?</h3>
            <p>We provide a concierge service that is the epitome of simplicity. Send a text with a need and we make it happen with little effort and worry on your part. We stand by at all hours of the day to await your requests!</p>
          </div>
          <div class="col-sm-6 push-far-down">
            <div class="balloon">
              <p>No way.</p>
            </div>
            <h3>Yes way! How do we do it? We’re glad you asked!</h3>
          </div>
        </div>
      </div>

      <!-- Third section -->
      <div class="third-section section">
        <div class="container">
          <div class="row right-roll">
            <div class="col-md-6 messages">
              <img src="./images/message1.jpg" alt="">
            </div><!--
          --><div class="col-md-6 tab-text">
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
  </div>

  <!-- Fourth section -->
  <div class="aqua-box blured" id="delegate-form">
    <div class="container">
      <h2>delegate now</h2>
      <div>
        <hr>
        <div class="horizontal-center reduced-width">
          <p>DelegateIt web form is your first step to getting what you want as soon as possible. Fill out the form and we will get back to you with a texted response. We look forward to hearing from you!</p>
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
        <p>Any questions contact us at <a href="mailto:Contact@DelegateIt.co">Contact@DelegateIt.co</a></p>
      </div>
    </div>
  </footer>

  <script src="js/site.min.js"></script>
  </body>
</html>