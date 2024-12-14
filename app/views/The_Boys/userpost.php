<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Post</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/userpost_theboys.css">
</head>
<body data-assets-img="<?= ASSETSIMG ?>">
<nav class="navbar">
        <div class="logo-container">
            <img src="<?= ASSETSIMG ?>The_Boys/home_logonavbar.png" alt="The BOYS Logo" class="logo">
            <a href="<?= BASEURL ?>Home/Index">
                <img src="<?= ASSETSIMG ?>The_Boys/home_beranda.png" alt="Beranda" class="logo-2">
            </a>
        </div>
        <div class="menu-overlay"></div>
        <ul class="nav-links">
            <li><a href="<?= BASEURL ?>TheBoys/Index">HOME</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Community">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Dashboard" class="active">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheBoys/UserProfile" class="link-profile">
            <div class="profile-container">
                <img src="<?= BASEURL?>uploads/The_Boys/userprofile/<?= $data['user']['image'];?>" alt="Profile" class="profile-pic">
                <span class="username"><?= htmlspecialchars($data['username']); ?></span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <!-- Sidebar kiri -->
        <div class="sidebar">
            <a href="<?= BASEURL ?>TheBoys/Community" class="Home2">
                <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/community2_logo3.png" alt="Home2">
                <span>Home</span>
            </a>
            <a href="<?= BASEURL ?>TheBoys/userpost" class="your-posts">
                <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/community2_logo.png" alt="Your Posts">
                <span>Your Posts</span>
            </a>
        </div>
    
        <!-- Form postingan dan daftar postingan -->
        <div class="main-content">

            
            <div class="posts" id="posts-container">
                <!-- Dummy Posts -->
                <div class="post">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/hapus.png" alt = "Hapus" class="hapus">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/edit.png" alt = "Edit" class="edit">
                    <div class="post-content">
                        <span class="username">{Username}</span>
                        <span class="post-time">2h</span><br><br>
                        <p>HOMELANDER BAIK BANGET TADI AKU KETEMU BELIAU DI JALAN</p>
                    </div>
                </div>
                <div class="post">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/hapus.png" alt = "Hapus" class="hapus">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/edit.png" alt = "Edit" class="edit">
                    <div class="post-content">
                        <span class="username">{Username}</span>
                        <span class="post-time">4d</span><br><br>
                        <p>a train kenceng bgt.... </p>
                    </div>
                </div>
                <div class="post">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/hapus.png" alt = "Hapus" class="hapus">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/edit.png" alt = "Edit" class="edit">
                    <div class="post-content">
                        <span class="username">{Username}</span>
                        <span class="post-time">3w</span><br><br>
                        <p>
                            the seven berjasa bgt gila barusan nyelametin aku dr kecelakaan makasih bgt buat the seven
                        </p>
                    </div>
                </div>
                <div class="post">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-2">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/hapus.png" alt = "Hapus" class="hapus">
                    <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/edit.png" alt = "Edit" class="edit">
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
                <h4>Unmask The Seven. Speak the truth they <br>fear.</h4>
                <img src="<?= ASSETSIMG?>The_Boys/COMMUNITY/community2_theseven.png" alt="The Seven" class="kindness-image">
            </div>
        </div>
    </section>
    

    <script src="<?= ASSETSJS ?>The_Boys/userpost_theboys.js"></script>
    
</body>
</html>
