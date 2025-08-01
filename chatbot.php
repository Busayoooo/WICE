<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/materialize.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <title>ChatBot - Wisdom College of Excellence Fish</title>
</head>
<style>
  * {
    font-family: 'Poppins', sans-serif;
  }
  
  .section-heading {
    font-weight: 700;
    margin-bottom: 50px;
    position: relative;
  }

  .section-heading::after {
    content: "";
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(135deg, #2196f3, #e91e63);
    border-radius: 2px;
  }

  .bold-txt {
    font-weight: bold;
  }

  .button {
    border: none !important;
    border-radius: 50px !important;
    background: linear-gradient(135deg, #2196F3, #E91E63) !important;
    text-transform: none !important;
    font-weight: 600 !important;
    transition: all 0.3s ease !important;
    line-height: 0.2 !important;
    color: white !important;
    text-decoration: none !important;
  }

  .button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(33, 150, 243, 0.3);
  }

  .btn-small{
    padding: 25px 30px !important;
    font-size: 15px !important;
  }

  .btn-large{
    padding: 40px 30px !important;
    font-size: 20px !important;
  }

  .mb {
    margin-bottom: 30px;
  }
  
  .button-container {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .navbar {
    background: white !important;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }
</style>

<body>
  <header >
    <div class="navbar-fixed z-depth-2">
      <nav class="nav-wrapper navbar">
        <div class="container">
          <div class="row">
            <div class="col l2 s12 center-on-small-only">
              <a href="index.php" class="brand-logo bold-txt primary-text"><img src="./img/logo.png" alt=""
                  width="70px" /></a>
            </div>
            <div class="col l8 s12 center hide-on-med-and-down">
              <h5 href="index.php" class="blue-text nav-link bold-txt">ChatBot - WICE Fish Farm </h5>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <br>
  <section class="hide-on-med-and-down">
    <br> <br> <br> <br> <br> <br>
  </section>

  <section class="hide-on-large-only">
    <br> 
  </section>
  
  <h4 class="center-align section-heading hide-on-med-and-down">What do you want to find out today?</h4>
  <h5 class="center-align section-heading hide-on-large-only">What do you want to find out today?</h5>
  <br>

  <div class="row center">
    <div class="col s12 l3 mb">
      <div class="button-container">
        <a href="fish" class="btn btn-large button hide-on-med-and-down"> <!-- <i class="material-icons">opacity</i> --> About the Fish</a>
        <a href="fish" class="btn btn-small button hide-on-large-only"> <!-- <i class="material-icons">opacity</i> --> About the Fish</a>
      </div>
    </div>
    <div class="col s12 l3 mb">
      <div class="button-container">
        <a href="water" class="button btn btn-large hide-on-med-and-down"> <!-- <i class="material-icons">opacity</i> --> About the Water</a>
        <a href="water" class="button btn btn-small hide-on-large-only"> <!-- <i class="material-icons">opacity</i> --> About the Water</a>
      </div>
    </div>
    <div class="col s12 l3 mb">
      <div class="button-container">
        <a href="pricing&supply" class="button btn btn-large hide-on-med-and-down"> <!-- <i class="material-icons">attach_money --> </i>Pricing & Supply</a>
        <a href="pricing&supply" class="button btn btn-small hide-on-large-only"> <!-- <i class="material-icons">attach_money --> </i>Pricing & Supply</a>
      </div>
    </div>

    <div class="col s12 l3 mb">
      <div class="button-container">
        <a href="routines" class="button btn btn-large hide-on-med-and-down"> <!-- <i class="material-icons">attach_money --> </i>Farm Routines</a>
        <a href="routines" class="button btn btn-small hide-on-large-only"> <!-- <i class="material-icons">attach_money --> </i>Farm Routines</a>
      </div>
    </div>
  </div>

  <!-- <footer class="page-footer blue ">
    <div class="container">
      <div class="row">
        <div class="col l4 s12 center-on-small-only">
          <img src="./img/logo.png" alt="School Logo" width="230px" class="responsive-img brand-logo center">
        </div>
        <div class="col l4 s12 center-on-small-only">
          <p class="white-text">Wisdom College of Excellence Fish Farm</p>
        </div>
        <div class="col l4 s12 center-on-small-only">
          <p class="white-text">© <?php echo date("Y"); ?> Wisdom College of Excellence. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer> -->
  <script src="js/jquery.js"></script>
  <script src="js/materialize.js"></script>
  <script>
    $(document).ready(function () {
      $(".sidenav").sidenav();
      $(".slider").slider();
    });
  </script>
</body>

</html>