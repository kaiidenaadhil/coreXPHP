
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f6f8fa;
}

.container {
    display: flex;
    flex-direction: row;
    padding: 20px;
    background-color: #f6f8fa;
}

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    margin: 20px;
    width: 250px;
    background-color: #ffffff;
    padding: 20px;
    border-right: 1px solid #ddd;
    height: 100vh;
    overflow-y: auto;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Custom Scrollbar */
.sidebar::-webkit-scrollbar {
    width: 8px;
}

.sidebar::-webkit-scrollbar-thumb {
    background-color: #cccccc;
    border-radius: 8px;
}

.sidebar nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

/* General Styling for the Hamburger */
.hamburger {
    display: none;
    cursor: pointer;
    position: relative;
    width: 30px;
    height: 20px;
}

.hamburger span {
    background-color: #333;
    position: absolute;
    height: 3px;
    width: 100%;
    transition: all 0.3s ease;
    border-radius: 2px;
}

/* Position the spans */
.hamburger span:nth-child(1) {
    top: 0;
}

.hamburger span:nth-child(2) {
    top: 8px;
}

.hamburger span:nth-child(3) {
    top: 16px;
}

/* Transition for when the menu is active */
.hamburger.active span:nth-child(1) {
    transform: rotate(45deg);
    top: 8px;
}

.hamburger.active span:nth-child(2) {
    opacity: 0;
}

.hamburger.active span:nth-child(3) {
    transform: rotate(-45deg);
    top: 8px;
}

.logo-and-hamburger {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}

.logo img {
    width: 150px; /* Adjust the size of the logo as needed */
}

.menu-item {
    margin: 10px 0;
    font-weight: bold;
    cursor: pointer;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.menu-item:hover {
    background-color: #f0f0f0;
}

.menu-item.active {
    background-color: rgb(230, 247, 255);
    color: rgb(8, 126, 164);
}

.submenu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
    list-style-type: none;
    padding-left: 20px;
    margin: 0;
    line-height: 1.8; /* Adjusted line height for readability */
}

.submenu li {
    padding: 8px 0; /* Increased padding for better spacing */
    font-weight: normal;
}

.menu-item.active .submenu {
    max-height: 500px;
}

.menu-item span {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.menu-item span::after {
    content: '\25BC';
    transition: transform 0.3s ease;
}

.menu-item.active span::after {
    transform: rotate(-180deg);
}

.content {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    flex-grow: 1;
    margin-left: 310px; /* Increased margin-left to make space for the fixed sidebar */
    transition: all 0.3s ease;
}

.content h1, .content h2 {
    color: rgb(8, 126, 164);
}

.content p {
    line-height: 1.6;
    margin-bottom: 15px;
}

.content strong {
    font-weight: bold;
}

.content ul {
    margin-left: 20px;
    margin-bottom: 20px;
    line-height: 1.8; /* Increased line height for better readability */
}

.content li {
    margin-bottom: 8px; /* Added spacing between list items */
}

.pagination {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.pagination a {
    color: rgb(8, 126, 164);
    text-decoration: none;
    padding: 10px 15px;
    background-color: rgb(230, 247, 255);
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.pagination a:hover {
    background-color: rgb(8, 126, 164);
    color: white;
}

/* Responsive Styles */
@media screen and (max-width: 1024px) {
    .container {
        flex-direction: column;
    }
    
    .sidebar {
        position: relative; /* Change to relative for smaller screens */
        width: 100%;
        height: auto;
        border-right: none;
        margin: 0;
        padding: 0;
    }
    
    .content {
        margin-left: 0;
    }
}

@media screen and (max-width: 768px) {
    .container{
        padding:0px;
    }
    .sidebar {
        margin: 0;
        padding: 0;
        border-radius: 0px;
    }
    
    .content {
        padding: 15px;
    }
    
    .menu-item {
        font-size: 14px;
        padding: 8px;
    }
    
    .content h1, .content h2 {
        font-size: 20px;
    }

    #nav-menu {
        display: none; /* For mobile devices, the menu is hidden by default */
        position: fixed;
        top: 74px;
        left: 0;
        width: 100%;
        background-color: #ffffff;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    #nav-menu.open {
        display: block; /* When the hamburger is clicked, the menu will appear */
    }

    .hamburger {
        display: block;
    }
    .logo-and-hamburger {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    margin: 10px;
}
}

@media screen and (max-width: 480px) {
    .sidebar {
        display: none;
        margin: 0;
        padding: 0;
    }
    
    .content {
        padding: 10px;
    }
    
    .content h1, .content h2 {
        font-size: 18px;
    }
    
    .pagination a {
        padding: 8px 12px;
        font-size: 14px;
    }

    .logo img {
        width: 120px; /* Smaller logo size for mobile */
    }

    .logo-and-hamburger {
        padding: 10px;
        background-color: #f6f8fa; /* Background color for header on mobile */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Adding shadow for header */
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .hamburger {
        position: absolute;
        right: 10px;
    }

    .content {
        padding-top: 60px; /* Make room for fixed header */
    }
}

.breadcrumb {
    font-size: 14px;
    color: rgb(8, 126, 164);
    margin-bottom: 20px;
}

.breadcrumb a {
    color: rgb(8, 126, 164);
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

</style>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            const submenu = item.querySelector('.submenu');

            // Close all other submenus
            menuItems.forEach(i => {
                if (i !== item) {
                    i.classList.remove('active');
                    const sub = i.querySelector('.submenu');
                    if (sub) {
                        sub.style.maxHeight = null;
                    }
                }
            });

            // Toggle current submenu
            item.classList.toggle('active');
            if (submenu) {
                submenu.style.maxHeight = submenu.style.maxHeight ? null : submenu.scrollHeight + "px";
            }
        });
    });
});

</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.getElementById("nav-menu");
    const menuItems = document.querySelectorAll(".menu-item");

    // Toggle menu on hamburger click
    hamburger.addEventListener("click", function () {
        navMenu.classList.toggle("open");
        hamburger.classList.toggle("active");
    });

    // Close menu when a menu item or submenu item is clicked
    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener("click", function () {
            if (window.innerWidth <= 768) {
                navMenu.classList.remove("open");
                hamburger.classList.remove("active");
            }
        });
    });

    // Close the menu if clicked outside (optional, for better UX)
    document.addEventListener("click", function (event) {
        if (!navMenu.contains(event.target) && !hamburger.contains(event.target)) {
            navMenu.classList.remove("open");
            hamburger.classList.remove("active");
        }
    });
});

</script>
<div class="container">
    <aside class="sidebar">
    <div class="logo-and-hamburger">
    <div class="logo">
            <img src="assets/img/logo.svg" alt="Logo" />
        </div>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

        <nav id="nav-menu">
            <ul>
                <li class="menu-item">
                    <span>Get Started</span>
                </li>
                <li class="menu-item">
                    <span>Quick Start</span>
                </li>
                <li class="menu-item">
                    <span>Installation</span>
                </li>
                <li class="menu-item active">
                    <span>Learn React</span>
                    <ul class="submenu">
                        <li>Describing the UI</li>

                    </ul>
                </li>
                <!-- Add more links to enable scrolling -->
                <li class="menu-item"><span>Advanced Guides</span></li>
                <li class="menu-item"><span>API Reference</span></li>

            </ul>
        </nav>
    </aside>
    
    <main class="content">
    <div class="breadcrumb">
            <a href="#">Docs</a> > <a href="#">Intro</a> > Describing the UI
        </div>
        <h1>Describing the UI</h1>
        <h2>Introduction</h2>
        <p><strong>React</strong> is a JavaScript library for rendering user interfaces (UI). UI is built from small units like buttons, text, and images.</p>
        <p><strong>Key Points:</strong></p>
        <ul>
            <li>React allows for the creation of reusable components.</li>
            <li>Components can be nested within each other.</li>
            <li>Everything on the screen can be broken down into components.</li>
        </ul>

        <div class="pagination">
            <a href="#" class="prev-page">Previous Page</a>
            <a href="#" class="next-page">Next Page</a>
        </div>
    </main>
</div>
