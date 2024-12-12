<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/userpost_theseven.css">
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
            <li><a href="<?= BASEURL ?>TheSeven/Community" class="active">COMMUNITY</a></li>
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
        <!-- Sidebar kiri -->
        <div class="sidebar">
            <a href="<?= BASEURL ?>TheSeven/Community" class="Home2">
                <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/community2_logo3.png" alt="Home2">
                <span>Home</span>
            </a>
            <a href="<?= BASEURL ?>TheSeven/UserPost" class="your-posts">
                <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/community2_logo.png" alt="Your Posts">
                <span>Your Posts</span>
            </a>
        </div>
    
        <!-- Form postingan dan daftar postingan -->
        <div class="main-content">

            
            <div class="posts" id="posts-container">
                <!-- Dummy Posts -->
                <div class="post">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/hapus.png" alt = "Hapus" class="hapus">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/edit.png" alt = "Edit" class="edit">
                    <div class="post-content">
                        <span class="username">{Username}</span>
                        <span class="post-time">2h</span><br><br>
                        <p>HOMELANDER BAIK BANGET TADI AKU KETEMU BELIAU DI JALAN</p>
                    </div>
                </div>
                <div class="post">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/hapus.png" alt = "Hapus" class="hapus">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/edit.png" alt = "Edit" class="edit">
                    <div class="post-content">
                        <span class="username">{Username}</span>
                        <span class="post-time">4d</span><br><br>
                        <p>a train kenceng bgt.... </p>
                    </div>
                </div>
                <div class="post">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/hapus.png" alt = "Hapus" class="hapus">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/edit.png" alt = "Edit" class="edit">
                    <div class="post-content">
                        <span class="username">{Username}</span>
                        <span class="post-time">3w</span><br><br>
                        <p>
                            the seven berjasa bgt gila barusan nyelametin aku dr kecelakaan makasih bgt buat the seven
                        </p>
                    </div>
                </div>
                <div class="post">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/hapus.png" alt = "Hapus" class="hapus">
                    <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/edit.png" alt = "Edit" class="edit">
                    <div class="post-content">
                        <span class="username">{Username}</span>
                        <span class="post-time">5m</span><br><br>
                        <p>
                            hello world tes tes tes
                        </p>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Sidebar kanan -->
        <div class="right-sidebar">
            <div class="kindness-card">
                <h4>Have you spread any kindness today?</h4>
                <p>Start spread some<br>kindness today!</p>
                <img src="<?= ASSETSIMG?>The_Seven/COMMUNITY/community2_theseven.png" alt="The Seven" class="kindness-image">
            </div>
        </div>
    </section>
    

    <script src="../../JAVASCRIPT/yourpost2_theseven.js"></script>
    
</body>
</html>
