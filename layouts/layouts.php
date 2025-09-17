<?php
class layouts {
    public function header($conf) {
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?php echo $conf['site_name'];?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo $conf['base_url'];?>/css/bootstrap.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>
<?php
    }
    public function navbar($conf) {
    ?>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><?php echo $conf['site_name'];?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
          <li class="nav-item"><a class="nav-link" href="signin.php">Sign In</a></li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div> -->
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <?php
    }
    public function banner($conf) {
    ?>
    <main role="main">
      <div class="jumbotron py-1 my-0">
        <div class="container-fluid py-1">
          <h1 class="display-1">Tech School, welcome!</h1>
          <p>Here, we are going to learn fundermental coding skills necessary in creating apps and websites. Enroll and build your own coding empire today!</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
    <?php
    }
    public function content($conf) {
    ?>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Learn, Connect and Grow!</h2>
            <p>At ICS Academy, our online portal gives you easy access to courses, learning materials, and academic updates. Here you can manage your studies, stay informed with the latest announcements, and explore resources designed to support your academic journey. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Your Gateway to Success!</h2>
            <p>Use the portal to register for classes, check your grades, and track your academic progress. Everything you need to succeed is organized in one place, making your learning experience smooth and efficient.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Stay Informed, Stay Ahead</h2>
            <p>Get instant notifications about deadlines, lecturer announcements, and new opportunities. The portal helps you stay updated so you never miss important information in your academic journey.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->
    <?php
    }
    public function form_frame($conf, $ObjForm) {
    ?>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-8">
    <?php
    $page = basename($_SERVER['PHP_SELF']); 
     if ($page === 'signup.php') {
        $ObjForm->signup(); 
     }else{
        $ObjForm->signin();}?>
          </div>
          <div class="col-md-4">
            <h2>Learn, Connect and Grow!</h2>
            <p>At ICS Academy, our online portal gives you easy access to courses, learning materials, and academic updates. Here you can manage your studies, stay informed with the latest announcements, and explore resources designed to support your academic journey.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->
    <?php
    }
    public function footer($conf) {
?>
    </main>

    <footer class="container">
      <p>Copyright &copy; - <?php print $conf['site_name'] . " " . date("Y"); ?></p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <!-- <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->



<script src="<?php $conf['site_url'];?>js/bootstrap.min.js" crossorigin="anonymous"></script>

  </body>
</html>

<?php
    }
}