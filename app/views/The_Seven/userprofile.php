<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/DASHBOARD/userprofile_theseven.css">
</head>
<body>
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
            <li><a href="<?= BASEURL ?>TheSeven/Community" Class="active">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheSeven/Dashboard">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheSeven/UserProfile" class="link-profile">
            <div class="profile-container">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_profilnavbar.png" alt="Profile" class="profile-pic">
                <span class="nickname">{Nickname}</span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <a href="<?= BASEURL ?>TheSeven/Dashboard" class="dashboard-link" >
            <img src="<?= ASSETSIMG ?>The_Seven/DASHBOARD/TEAM_MEMBERS/teammembers2_panah.png" alt="Panah">
            <p>Dashboard</p>
        </a>
        <h1>USER PROFILE</h1>

        <div class="content">
            <h2>THE SEVEN ID CARD</h2>
                <div class="image-container">
                    <div class="image-overlay">
                        <img src="<?= ASSETSIMG ?>The_Seven/DASHBOARD/TEAM_MEMBERS/grid_theseven.png" alt="Overlay" class="image-top">
                    </div>
                    <div class="image-box">
                        <img src="<?= ASSETSIMG ?>The_Seven/DASHBOARD/fotoprofile.png" alt="A-Train" class="image-main">
                    </div>
                </div>

                <div class="text-container">
                    <h3>{username}</h3>
                    <div class="details">
                        <dl>
                            <dt>Full Name</dt>
                            <dd>{full name}</dd>
            
                            <dt>Age</dt>
                            <dd>{age}</dd>
            
                            <dt>Ethnicity</dt>
                            <dd>{ethnicity}</dd>

                            <dt>Power</dt>
                            <dd>{power}</dd>
                        </dl>
                    </div>
                </div>

                <div class="button-container">
                    <a href="<?=BASEURL?>TheSeven/EditProfile">
                        <button class="edit-button">Edit Profile</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <script src="<?= ASSETSJS ?>The_Seven/home_theseven.js"></script>
</body>
</html>
