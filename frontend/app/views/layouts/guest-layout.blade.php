<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/header-sidewide-meta')

    <!-- [[ HTML::style('css/bootstrap.min.css', array(), (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) ]] -->
    <!-- [[ HTML::style('css/bootstrap-theme.min.css', array(), (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) ]] -->

    [[ HTML::style('css/themes/paperwork-v1.min.css', array(), (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) ]]

  </head>
  <body class="paperwork-guest">

    <div class="container">
      <div class="guest-logo">
        <img class="guest-logo-img" src="/images/paperwork-logo.png">
      </div>
      @yield("content")
    </div> <!-- /container -->

    <div class="footer [[ Config::get('paperwork.showIssueReportingLink') ? '' : 'hide' ]]">
      <div class="container">
        <div class="alert alert-warning" role="alert">
          <p>[[Lang::get('messages.found_bug')]]</p>
        </div>
      </div>
    </div>

  [[ HTML::script('js/jquery.min.js', array(), (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) ]]

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    [[ HTML::script('js/ltie9compat.min.js', array(), (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) ]]
  <![endif]-->
  <!--[if lt IE 11]>
    [[ HTML::script('js/ltie11compat.js', array(), (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) ]]
  <![endif]-->
  [[ HTML::script('js/libraries.min.js', array(), (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)) ]]
  </body>
</html>
