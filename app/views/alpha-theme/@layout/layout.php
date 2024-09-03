<!DOCTYPE html>
<html lang="en" color-scheme="light">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="<?= ROOT ?>" />
  <meta name="theme-color" content="#127fb1" />
  <link rel="icon" type="image/png" href="<?= ASSETS ?>/favicon.png">
  <?php if (isset($params['meta'])) { ?>

    <meta name="description" content="<?= $params['meta']['description'] ?>">
    <meta name="keywords" content="<?= $params['meta']['keywords'] ?>">
    <meta name="author" content="<?= $params['meta']['author'] ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $params['meta']['title']; ?>">
    <meta property="og:description" content="<?php echo $params['meta']['description']; ?>">
    <meta property="og:image" content="<?php echo $params['meta']['image']; ?>">
    <meta property="og:url" content="<?php echo $params['meta']['url']; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $params['meta']['title']; ?>">
    <meta name="twitter:description" content="<?php echo $params['meta']['description']; ?>">
    <meta name="twitter:image" content="<?php echo $params['meta']['image']; ?>">
<meta name="google-adsense-account" content="ca-pub-1299431623082662">
    <title><?= $params['meta']['title'] ?></title>

  <?php } ?>
  <link rel="stylesheet" href="<?= ASSETS ?>/css/social.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/css/item.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/css/product.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/css/question.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/css/help.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/css/job.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/css/video.css">
  <link rel="stylesheet" href="<?= ASSETS ?>/css/collection.css">
  <link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://accounts.google.com/gsi/client" async defer></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1299431623082662"
     crossorigin="anonymous"></script>

  <script src="<?=ASSETS?>/js/action.js"></script>
  <script>
    function generateUniqueId(length = 16) {
      const chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      let result = '';
      for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * chars.length);
        result += chars.charAt(randomIndex);
      }
      return result;
    }
  </script>

  <script>
    $(document).ready(function() {
      $('.burger').click(function() {
        $('.mobile-menu').toggleClass('open');
        $('.burger').toggleClass('toggle');
      });

      $('.has-submenu > a').click(function(e) {
        e.preventDefault();
        $(this).siblings('.submenu').slideToggle();
        $(this).find('i').toggleClass('uil-angle-up uil-angle-down');
      });
    });
  </script>
</head>

<body>
  <header>
    <div class="header">
      <nav id="secondary">
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <div class="logo">
          <a href="<?= ROOT ?>"><img src="<?= ASSETS ?>/img/logo.svg" alt=""></a>
        </div>
        <div class="searching">
          <i class="uil uil-search"></i>
        </div>
        <ul>

            <li>
              <a href="<?= ROOT ?>" class="<?= isLinkActive('') ?>">
                <i class="uil uil-estate"></i> <span> Home</span> </a>
            </li>

          <li class="not-mobile-item">
            <a href="<?= ROOT ?>/explore/" class="<?= isLinkActive('/explore') ?>"> <i class="uil uil-exclude"></i> <span> Explore</span> </a>
          </li>
          <li>
            <a href="<?= ROOT ?>/communities/" class="<?= isLinkActive('/communities') ?>"><i class="uil uil-layer-group"></i><span> Communities</span> </a>
          </li>
          <li>
            <a href="<?= ROOT ?>/pages/" class="<?= isLinkActive('/pages') ?>"><i class="uil uil-compress-arrows"></i><span> Pages</span> </a>
          </li>
          <li class="not-mobile-item">
            <a href="<?= ROOT ?>/collections/" class="<?= isLinkActive('/collections') ?>"><i class="uil uil-server"></i><span> Collections</span> </a>
          </li>
          <li>
            <a href="<?= ROOT ?>/notifications/" class="<?= isLinkActive('/notifications') ?>"><i class="uil uil-bell"></i><span> Notifications</span> </a>
          </li>
          <?php if (isset($_SESSION['userAltName'])) : ?>
            <li>
              <a onclick="handleLogout();" href="<?= ROOT ?>/logout/" class="<?= isLinkActive('/logout') ?>"><i class="uil uil-sign-out-alt"></i><span> Logout</span> </a>
            </li>
          <?php else : ?>
            <li>
              <a href="<?= ROOT ?>/login/" class="<?= isLinkActive('/login') ?>"><i class="uil uil-user"></i><span> Join</span> </a>
            </li>
          <?php endif; ?>

        </ul>
        <a id="multi-action-button" href="<?= ROOT ?>/action/" class="action-button">
          <i class="uil uil-plus"></i>
        </a>
      </nav>
    </div>
  </header>


  <div class="mobile-menu">
    <ul>
      <li><a href="#">Home</a></li>
      <li class="has-submenu">
        <a href="#">About Us <i class="uil uil-angle-down"></i></a>
        <ul class="submenu">
          <li><a href="<?= ROOT ?>/about-us/">About the Platform</a></li>
        </ul>
      </li>
      <li><a href="<?= ROOT ?>/how-it-work">How It Works</a></li>
      <li><a href="<?= ROOT ?>/mission">Mission</a></li>
      <li class="has-submenu">
        <a href="<?= ROOT ?>/get-involved/">Get Involved <i class="uil uil-angle-down"></i></a>
        <ul class="submenu">
          <li><a href="<?= ROOT ?>/volunteer-Opportunities/">Volunteer Opportunities</a></li>
          <li><a href="<?= ROOT ?>/collaborative-projects">Collaborative Projects</a></li>
          <li><a href="<?= ROOT ?>/impact-stories/">Impact Stories</a></li>
        </ul>
      </li>
      <li class="has-submenu">
        <a href="#">Leadership and Governance <i class="uil uil-angle-down"></i></a>
        <ul class="submenu">

          <li><a href="<?= ROOT ?>/guiding-values/">Leadership and Governance</a></li>
          <li><a href="<?= ROOT ?>/directors/">Board of Directors</a></li>
          <li><a href="<?= ROOT ?>/advisory-council/">Advisory Council</a></li>
          <li><a href="<?= ROOT ?>/investor/">Investor</a></li>
        </ul>
      </li>

      <li class="has-submenu">
        <a href="#">Resources and Help Center <i class="uil uil-angle-down"></i></a>
        <ul class="submenu">
          <li><a href="#">Articles and Blogs</a></li>
          <li><a href="#">Videos and Tutorials</a></li>
          <li><a href="#">Community Guidelines</a></li>
        </ul>
      </li>

      <li><a href="<?= ROOT ?>/ads-marketing/">Ads & Marketing</a></li>
      <?php
      if (isset($_SESSION['userAltName'])) {
        echo '<li><a href="' . ROOT . '/logout/">Logout</a></li>';
      } else {
        echo '<li><a href="' . ROOT . '/login/">LogIn</a></li>
          <li><a href="' . ROOT . '/register/">SignUp</a></li>';
      }
      ?>

      <li>
        <div id="theme-toggle" style="padding: 0.5rem;color:#726f6f;"><i class="uil uil-sun"></i> <i class="uil uil-moon"></i></div>
      </li>

    </ul>

    <div class="mobile-menu-footer">
      <div style="display: flex;justify-content: space-around;">
        <a href="<?= ROOT ?>/terms-of-service/">Terms of Service</a>
        <a href="<?= ROOT ?>/privacy-policy/">Privacy Policy</a>
      </div>
      <p>&copy; 2023 Mornstar. All rights reserved.</p>
    </div>
  </div>

  <main>

    {{content}}

    <div class="margin-bottom"></div>
    <!---To Open Model html -->
    <div class="overlay" id="modalOverlay">
      <div class="modal-wrapper">
        <div class="modal">
          <div class="close" id="closeModal">&times;</div>
          <div class="modal-content" id="modalContent">
          </div>
        </div>
      </div>
    </div>
    <!---End of To Open Model Html-->

    <div class="picModal" id="imageModal">
      <span class="close" id="closePicModal"><i class="uil uil-times"></i></span>
      <img class="modal-content" id="modalImage">
      <div id="imageNumber" class="image-number"></div>
      <button id="prevBtn" class="modal-btn prev-btn"> <i class="uil uil-arrow-left"></i></button>
      <button id="nextBtn" class="modal-btn next-btn"> <i class="uil uil-arrow-right"></i></button>
    </div>


  </main>

  <footer>
    <div class="footer">
      <div class="search-container">
        <form class="search-form" action="<?= ROOT ?>/search/top/" method="get">
          <input type="text" name="q" placeholder="Search..">
        </form>
      </div>
      <?php if (!isset($_SESSION['userAltName'])) { ?>
        <div id="g_id_onload" data-client_id="349167856898-tgba8nm61ra1ltjbk2lt6ntjntcn7o28.apps.googleusercontent.com" data-context="signin" data-ux_mode="popup" data-callback="handleLogin" data-auto_select="true" data-itp_support="true">
        </div>
      <?php } ?>

      <?php
      if (isset($params['panels']) && $params['panels'] == "collectionPanel") {
        include('../app/views/alpha-theme/layout/panels/collectionPanel.php');
      } else {
        // include('../app/views/alpha-theme/@layout/panels/followPanel.php');
        include('../app/views/alpha-theme/@layout/panels/trendPanel.php');
      }
      ?>
      <div class="footer-menu">
        <ul>
          <li>

          </li>
          <li>
            <a href="">Terms of Service</a>
          </li>
          <li>
            <a href="">Privacy Policy</a>
          </li>
          <li>
            <a href="">Cookie Policy</a>
          </li>
          <br>
          <li>
            <a href="">Ads info</a>
          </li>
          <li>
            <a href="">More...</a>
          </li>
          <li>
            <span>© 2023 Mornstar Inc.</span>
          </li>

        </ul>
      </div>
    </div>
  </footer>
</body>

<script src="<?= ASSETS ?>/js/main.js"></script>
<script src="<?= ASSETS ?>/js/video.js"></script>
<script src="<?= ASSETS ?>/js/collection.js"></script>
<script>
  function handleLogin(response) {
    if (response.credential) {
      let jwt = response.credential;
      let user = JSON.parse(atob(jwt.split(".")[1]));

      // Send the user data to the server using Ajax
      $.ajax({
        url: '<?= ROOT ?>/login/google',
        type: 'POST',
        data: {
          userFirstName: user.given_name,
          userLastName: user.family_name,
          userEmail: user.email,
          userAvatar: user.picture
        },
        success: function(response) {
          // Handle the server response
          console.log(response);
          // Refresh the page
          location.reload();
        },
        error: function(xhr, status, error) {
          // Handle errors
          console.log(error);
        }
      });

    } else {
      console.log('User not signed in');
    }
  }

  function handleLogout() {
    google.accounts.id.disableAutoSelect();
    google.accounts.id.prompt();

  }
</script>
<script>
  // Wait for the document to be fully loaded
  $(document).ready(function() {
    $(document).on("mousedown", ".pursuers-container", function(e) {
      let isDragging = true,
        startX = e.pageX - $(this).offset().left,
        scrollLeft = this.scrollLeft;
      $(this).css("cursor", "grabbing");

      $(document).on("mouseup", function() {
        isDragging = false;
        $(".pursuers-container").css("cursor", "grab");
      });

      $(document).on("mouseleave", function() {
        isDragging = false;
        $(".pursuers-container").css("cursor", "grab");
      });

      $(document).on("mousemove", function(e) {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.pageX - $(".pursuers-container").offset().left;
        const walk = (x - startX) * 2; // Adjust the dragging sensitivity
        $(".pursuers-container")[0].scrollLeft = scrollLeft - walk;
      });
    });

    // Touch events for mobile
    $(document).on("touchstart", ".pursuers-container", function(e) {
      let isDragging = true,
        startX = e.touches[0].pageX - $(this).offset().left,
        scrollLeft = this.scrollLeft;
      $(this).css("cursor", "grabbing");

      $(document).on("touchend", function() {
        isDragging = false;
        $(".pursuers-container").css("cursor", "grab");
      });

      $(document).on("touchcancel", function() {
        isDragging = false;
        $(".pursuers-container").css("cursor", "grab");
      });

      $(document).on("touchmove", function(e) {
        if (!isDragging) return;
        e.preventDefault();
        const x = e.touches[0].pageX - $(".pursuers-container").offset().left;
        const walk = (x - startX) * 3; // Adjust the dragging sensitivity
        $(".pursuers-container")[0].scrollLeft = scrollLeft - walk;
      });
    });
  });
</script>


</html>