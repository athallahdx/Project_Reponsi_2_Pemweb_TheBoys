<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/dashboard_theseven.css">
</head>
<body data-assets-img="<?= ASSETSIMG ?>">
    <nav class="navbar">
        <div class="hamburger" onclick="toggleMenu()" onmouseover="hoverMenu()" onmouseleave="resetMenu()">
            &#9776; 
        </div>
        <div class="logo-container">
            <img src="<?= ASSETSIMG ?>The_Seven/home2_logonavbar.png" alt="The Seven Logo" class="logo">
            <a href="<?= BASEURL ?>Home/Index">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_beranda.png" alt="Beranda" class="logo-2">
            </a>
        </div>
        <div class="menu-overlay"></div>
        <ul class="nav-links">
            <li><a href="<?= BASEURL ?>TheSeven/Index">HOME</a></li>
            <li><a href="<?= BASEURL ?>TheSeven/Community">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheSeven/Dashboard" class="active">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheSeven/UserProfile" class="link-profile">
            <div class="profile-container">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_profilnavbar.png" alt="Profile" class="profile-pic">
                <span class="nickname">{Nickname}</span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <!-- Header -->
        <header class="dashboard-header">
            <img src="<?= ASSETSIMG?>The_Seven/DASHBOARD/dashboard2_logo.png" alt="Logo" class="dashboard-logo">
            <h1>WELCOME TO THE SEVEN</h1>
            <h2>Your journey as a hero begins here, powered by Vought International.</h2>
            <p>Hello, [nickname]! You are now part of the most powerful team in the world.<br> You can access your superhero needs here.</p>
        </header>
    
        <!-- Dashboard Cards -->
        <div class="dashboard-cards">
            <!-- Card 1 -->
            <a href="<?= BASEURL ?>TheSeven/TeamMembers" class="card">
                <img src="<?= ASSETSIMG?>The_Seven/DASHBOARD/dashboard2_image1.png" alt="Team Members">
                <div class="overlay"></div>
                <div class="content">
                    <div class="text-content">
                        <img src="<?= ASSETSIMG?>The_Seven/DASHBOARD/dashboard2_item1.png" alt="Icon" class="card-icon">
                        <h3>TEAM MEMBERS</h3>
                    </div>
                    <p>See The Seven Detail Team Members</p>
                </div>
            </a>
    
            <!-- Card 2 -->
            <a href="<?= BASEURL ?>TheSeven/Missions" class="card">
                <img src="<?= ASSETSIMG?>The_Seven/DASHBOARD/dashboard2_image2.png" alt="Missions">
                <div class="overlay"></div>
                <div class="content">
                    <div class="text-content">
                        <img src="<?= ASSETSIMG?>The_Seven/DASHBOARD/dashboard2_item2.png" alt="Icon" class="card-icon">
                        <h3>MISSIONS</h3>
                    </div>
                    <p>View Ongoing and Available Missions</p>
                </div>
            </a>
    
            <!-- Card 3 -->
            <a href="<?= BASEURL ?>TheSeven/UserProfile" class="card">
                <img src="<?= ASSETSIMG?>The_Seven/DASHBOARD/dashboard2_image3.png" alt="User">
                <div class="overlay"></div>
                <div class="content">
                    <div class="text-content">
                        <img src="<?= ASSETSIMG?>The_Seven/DASHBOARD/dashboard2_item3.png" alt="Icon" class="card-icon">
                        <h3>USER</h3>
                    </div>
                    <p>View Your Own Detail Information</p>
                </div>
            </a>
            
        </div>
    </section>
    

    <script src="<?= ASSETSJS ?>The_Seven/dashboard_theseven.js"></script>
</body>
</html>