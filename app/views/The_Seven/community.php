<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/community_theseven.css">
</head>
<body data-assets-img="<?= ASSETSIMG ?>">
    <nav class="navbar">
        <div class="hamburger" onclick="toggleMenu()" onmouseover="hoverMenu()" onmouseleave="resetMenu()">
            &#9776; <!-- Simbol hamburger -->
        </div>
        <div class="logo-container">
            <img src="<?= ASSETSIMG ?>The_Seven/home2_logonavbar.png" alt="The Seven Logo" class="logo">
        </div>
        <div class="menu-overlay"></div>
        <ul class="nav-links">
            <li><a href="<?= BASEURL ?>TheSeven/Home">HOME</a></li>
            <li><a href="<?= BASEURL ?>TheSeven/Community" class="active">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheSeven/Dashboard">DASHBOARD</a></li>
        </ul>
        <div class="profile-container">
            <img src="<?= ASSETSIMG ?>The_Seven/home2_profilnavbar.png" alt="Profile" class="profile-pic">
            <span class="nickname">{Nickname}</span>
        </div>
    </nav>

    <section class="container-1">
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
            <div class="post-form">
                <img src="<?= ASSETSIMG ?>The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-3">
                <div class="input-container">
                    <input type="text" id="post-input" placeholder="What's in your mind?" >
                    <div class="input-footer">
                        <img src="<?= ASSETSIMG ?>The_Seven/COMMUNITY/community2_logo2.png" alt="Logo" class="image">
                        <button id="post-button">Post</button>
                    </div>
                </div>
            </div>
            
            <div class="posts" id="posts-container">
                <!-- Dummy Posts -->
                <div class="post">
                    <img src="<?= ASSETSIMG ?>The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <div class="post-content">
                        <span class="username">Athallah</span>
                        <span class="post-time">2h</span><br><br>
                        <p>HOMELANDER BAIK BANGET TADI AKU KETEMU BELIAU DI JALAN</p>
                    </div>
                </div>
                <div class="post">
                    <img src="<?= ASSETSIMG ?>The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <div class="post-content">
                        <span class="username">Irfan Romadhon</span>
                        <span class="post-time">5h</span><br><br>
                        <p>AKU SUKA THE SEVEN</p>
                        <p>AKU SUKA THE SEVEN</p>
                        <p>AKU SUKA THE SEVEN</p>
                        <p>AKU SUKA THE SEVEN</p>
                    </div>
                </div>
                <div class="post">
                    <img src="<?= ASSETSIMG ?>The_Seven/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <div class="post-content">
                        <span class="username">Arga</span>
                        <span class="post-time">9h</span><br><br>
                        <p>
                            "Sungguh menakjubkan perkaranya orang yang beriman, karena segala urusannya adalah baik baginya. 
                            Dan hal yang demikian itu tidak akan terdapat kecuali hanya pada orang mukmin; yaitu jika ia mendapatkan kebahagiaan, 
                            ia bersyukur, karena (ia mengetahui) bahwa hal tersebut merupakan hal yang terbaik untuknya. Dan jika ia tertimpa musibah, ia bersabar,
                            karena ia mengetahui bahwa hal tersebut merupakan hal terbaik bagi dirinya." (HR Muslim)
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
                <img src="<?= ASSETSIMG ?>The_Seven/COMMUNITY/community2_theseven.png" alt="The Seven" class="kindness-image">
            </div>
        </div>
    </section>
    
    
    <script src="<?= ASSETSJS ?>The_Seven/community_theseven.js"></script>
    
</body>
</html>
