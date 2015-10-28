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
    <script src="js/site.min.js"></script>
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
            <div class="header-block shown">
            <h1 class="type">Any Delivery.<br>Any Task.</h1>
              <p>We're your personal concierge and we'll get anything for you. Text this number with your request to get started:</p>
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
    <div class="container section second-section" id="second-section">
      <div class="row">
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

    <!-- Fourth section -->
    <div class="aqua-box" id="delegate-form">
      <div class="container">
        <h2>delegate now</h2>
        <div>
          <hr>
          <div class="horizontal-center reduced-width">
            <p>DelegateIt web form is your first step to getting what you want as soon as possible. Fill out the form and we will get back to you with a texted response. We look forward to hearing from you!</p>
          </div>
          <form action="form-submission.php" method="post" class="horizontal-center">
            <input type="text" id="first_name" name="first_name" placeholder="First Name">
            <input type="text" id="last_name" name="last_name" placeholder="Last Name">
            <input type="text" id="phone" name="phone" placeholder="Phone">
            <input type="text" id="zip" name="zip" placeholder="Zip Code">

            <!-- Using test URL temporarly -->
            <input type="submit" value="Submit" class="submit" action="http://test-gator-api.elasticbeanstalk.com/" id="formid">
            <!-- <input type="submit" value="Submit" class="submit" action="http://backend-lb-125133299.us-west-2.elb.amazonaws.com/core/customer?sendtext=true" id="formid"> -->
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
          <p><a href="docs/privacy-policy.pdf" style="padding: 0;" target="_blank">Privacy Policy</a> | Any questions contact us at <a href="mailto:Contact@DelegateIt.co">Contact@DelegateIt.co</a></p>
        </div>
      </div>
    </footer>

  </body>
</html>