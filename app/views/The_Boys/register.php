<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register The Boys</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/register_theboys.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo-container">
            <img src="<?= ASSETSIMG ?>The_Boys/home_logonavbar.png" alt="The BOYS Logo" class="logo">
            <a href="<?= BASEURL ?>Home/Index">
                <img src="<?= ASSETSIMG ?>The_Boys/home_beranda.png" alt="Beranda" class="logo-2">
            </a>
        </div>
        <div class="menu-overlay"></div>
        <ul class="nav-links">
            <li><a href="<?= BASEURL ?>TheBoys/Index" class="active">HOME</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Community">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Dashboard">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheBoys/UserProfile" class="link-profile">
            <div class="profile-container">
                <img src="<?= ASSETSIMG ?>The_Boys/home_profilnavbar.png" alt="Profile" class="profile-pic">
                <span class="nickname">username</span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <!-- Gambar Background -->
        <img src="<?= ASSETSIMG ?>The_Boys/LOGIN/login_bgutama.png" alt="The Boys Header" class="header-image">
    
        <!-- Form Registrasi -->
        <div class="registration-form">
            <!-- Kotakan Gradasi -->
            <div class="header-form">
                <img src="<?= ASSETSIMG ?>The_Boys/LOGIN/login_palahomelander.png" alt="Hero" class="hero-image">
                <img src="<?= ASSETSIMG ?>The_Boys/LOGIN/login_teks.png" alt="The Seven Teks" class="teks-image">
                <img src="<?= ASSETSIMG ?>The_Boys/LOGIN/login_teks2.png" alt="The Seven Teks" class="teks2-image">
            </div>
    
            <!-- Konten Form -->
            <div class="registration-content">
                <hr>
                <form method="POST" action="<?= BASEURL ?>TheBoys/register" id="registerForm">
                    
                    <div class="input-container">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" class="fullname" required>
                    </div>

                    <div class="input-container">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="username" required>
                    </div>

                    <div class="input-container">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="email" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="password1">Password</label>
                        <input type="password" id="password1" name="password1" class="password" required>
                    </div>

                    <div class="input-container">
                        <label for="password2">Confirm Password</label>
                        <input type="password" id="password2" name="password2" class="password" required>
                    </div>
                    
                    <p class="login-link">
                        Already registered? <a href="<?= BASEURL ?>TheBoys/Login"><strong>Login</strong></a> now!
                    </p>
                    
                    <button type="submit" class="enroll-button">ENROLL</button>
                </form>
            </div>
        </div>
    </section>

    <script src="<?= ASSETSJS ?>The_Boys/register_theboys.js"></script>
</body>
</html>
