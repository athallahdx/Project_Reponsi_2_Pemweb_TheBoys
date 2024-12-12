<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/login2_theseven.css">
</head>
<body>
    <nav class="navbar">
        <div class="hamburger" onclick="toggleMenu()" onmouseover="hoverMenu()" onmouseleave="resetMenu()">
            &#9776; <!-- Simbol hamburger -->
        </div>
        <div class="logo-container">
            <img src="<?=ASSETSIMG?>The_Seven/home2_logonavbar.png" alt="The Seven Logo" class="logo">
        </div>
        <div class="menu-overlay"></div>
        <ul class="nav-links">
            <li><a href="home2_theseven.html">HOME</a></li>
            <li><a href="community2_theseven.html">COMMUNITY</a></li>
            <li><a href="dashboard2_theseven.html">DASHBOARD</a></li>
        </ul>
        <div class="profile-container">
            <img src="<?=ASSETSIMG?>The_Seven/home2_profilnavbar.png" alt="Profile" class="profile-pic">
            <span class="nickname">{Nickname}</span>
        </div>
    </nav>

    <section class="container-1">
        <!-- Gambar Background -->
        <img src="<?=ASSETSIMG?>The_Seven/LOGIN/login2_bglogin.png" alt="The Seven Header" class="header-image">
    
        <!-- Form Registrasi -->
        <div class="registration-form">
            <!-- Kotakan Gradasi -->

            <div class="gradient-box">
                <img src="<?=ASSETSIMG?>The_Seven/LOGIN/login2_logo.png" alt="The Seven Logo" class="logo-image">
                <img src="<?=ASSETSIMG?>The_Seven/LOGIN/login2_hero.png" alt="Hero" class="hero-image">
            </div>
    
            <!-- Konten Form -->
            <div class="registration-content">
                <h1>THE SEVEN</h1>
                <h2>REGISTRATION FORM</h2>
                <hr>
                <form>
                    <div class="input-container">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="nickname">Nickname</label>
                        <input type="text" id="nickname" name="nickname"  required>
                    </div>
                    
                    <div class="input-container">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age"  required>
                    </div>
                    
                    <div class="input-container">
                        <label for="superpower">Super Power</label>
                        <input type="text" id="superpower" name="superpower"  required>
                    </div>
                    
                    <div class="input-container">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    
                    
                    <button type="submit" class="enroll-button">ENROLL</button>
                </form>
            </div>
        </div>
    </section>
    

    <script src="../../JAVASCRIPT/home2_theseven.js"></script>
</body>
</html>
