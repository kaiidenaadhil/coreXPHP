<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= ASSETS ?>/img/favicon.png">
    <title>Admin Panel</title>
    <meta name="description" content="ucomfort Admin Panel">
    <link rel="stylesheet" href="<?= ASSETS ?>/css/admin-styles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.action-menu .dots').click(function(e) {
                e.stopPropagation(); // Prevent document click event from closing menu

                // Close all other menus
                $('.action-menu.active').not($(this).parent()).removeClass('active');

                // Toggle the current menu
                $(this).parent().toggleClass('active');
            });

            $(document).click(function(e) {
                // Close all menus
                if (!$('.action-menu').is(e.target) && $('.action-menu').has(e.target).length === 0) {
                    $('.action-menu.active').removeClass('active');
                }
            });
        });
    </script>

    <style>
        .notification-circle {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background-color: #d9d9d9;
            color: black;
            font-size: 10px;
            text-align: center;
            line-height: 20px;
            right: 55px;
            position: absolute;
            margin: -9px -7px;
        }

        .batch {
            width: 10px;
            position: absolute;
            bottom: 10px;
            left: 26px;
            z-index: 10;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="navigation">
            <!-- left panel content here -->
            <div style="padding:1rem;color: white;">
           <img src="<?= ASSETS ?>/img/logo.svg" alt="" style="width:width: 175px;">
           <h3 style="text-align:center;">ADMIN PANEL</h3>
            </div>
            <nav class="vertical-menu">


                <a href="<?= ROOT ?>/admin/" class="active">
                    <span class="icon"><i class="uil uil-create-dashboard"></i></span>

                    Dashboard</a>
                <a href="<?= ROOT ?>/admin/posts/" class="">
                <span class="icon"><i class="uil uil-sliders-v-alt"></i></span>
                Posts</a>
                <a href="<?= ROOT ?>/admin/pages/" class="">
                <span class="icon"><i class="uil uil-shopping-bag"></i></span>
                Pages</a>
                <a href="<?= ROOT ?>/admin/communities/" class="">
                <span class="icon">   <i class="uil uil-file-medical"></i> </span>
                Communities
            </a>
                <a href="<?= ROOT ?>/admin/collection/" class="">
                <span class="icon"><i class="uil uil-channel"></i> </span>
            Collections
            </a>
                <a style="position:relative;" href="<?= ROOT ?>/admin/notification/">
                    <div class="notification-circle">0</div><img class="batch" src="http://localhost/lms/public/assets//img/icons/batch.svg" alt="">
                        <span class="icon"> <i class="uil uil-document-layout-left"></i> </span>
                         Notifications
                </a>
                <a href="<?= ROOT ?>/admin/faqs" class=""><span class="icon"><i class="uil uil-question-circle"></i></span> FAQs</a>
                <a href="<?= ROOT ?>/admin/users" class=""><span class="icon"><i class="uil uil-user-circle"></i></span> Users</a>
                <a href="<?= ROOT ?>/logout" class=""><span class="icon"><i class="uil uil-sign-out-alt"></i></span> Logout</a>
            </nav>

        </div>
        <div class="main">
            <header>
                <div class="toggle">
                    <i class="uil uil-bars"></i>
                </div>
                <div class="">
                    <b>Hello, </b>
                    <p class="user_i"><?php echo date('F j, Y l g.i A');?></p>
                </div>
                <div class="user">
                    <div style="padding: 0 1rem;">

                        <b> Jon Doe</b>
                        <p class="user_i">  Admin</p>
                    </div>
                    <div class="profile-image">A</div>
                </div>

            </header>
            {{content}}

        </div>
    </div>
    <script>
        // add hovered class to selected list item
        let list = document.querySelectorAll(".navigation li");

        function activeLink() {
            list.forEach((item) => {
                item.classList.remove("hovered");
            });
            this.classList.add("hovered");
        }

        list.forEach((item) => item.addEventListener("mouseover", activeLink));

        // Menu Toggle
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function() {
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        };
    </script>
</body>

</html>