<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/register_theseven.css">
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
            <li><a href="<?= BASEURL ?>TheSeven/Index" class="active">HOME</a></li>
            <li><a href="<?= BASEURL ?>TheSeven/Community">COMMUNITY</a></li>
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
        <!-- Gambar Background -->
        <img src="<?= ASSETSIMG ?>The_Seven/LOGIN/login2_bglogin.png" alt="The Seven Header" class="header-image">
    
        <!-- Form Registrasi -->
        <div class="registration-form">
            <!-- Kotakan Gradasi -->

            <div class="gradient-box">
                <img src="<?= ASSETSIMG ?>The_Seven/LOGIN/login2_logo.png" alt="The Seven Logo" class="logo-image">
                <img src="<?= ASSETSIMG ?>The_Seven/LOGIN/login2_hero.png" alt="Hero" class="hero-image">
            </div>
    
            <!-- Konten Form -->
            <div class="registration-content">
                <h1>THE SEVEN</h1>
                <h2>REGISTRATION FORM</h2>
                <hr>
                <form>
                    <div class="input-container">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" class="fullname" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="nickname">Nickname</label>
                        <input type="text" id="nickname" name="nickname" class="nickname-2" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" class="age" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="superpower">Super Power</label>
                        <input type="text" id="superpower" name="superpower" class="superpower" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="password" required>
                    </div>
                    
                    <p class="login-link">
                        Already registered? <a href="<?= BASEURL ?>TheSeven/Login"><strong>Login</strong></a> now!
                    </p>
                    
                    <button type="submit" class="enroll-button">ENROLL</button>
                </form>
            </div>
        </div>
    </section>
    

    <script src="<?= ASSETSJS ?>The_Seven/home_theseven.js"></script>
</body>
</html>