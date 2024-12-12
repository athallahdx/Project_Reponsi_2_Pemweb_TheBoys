<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/home_theseven.css">
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
        <img src="<?= ASSETSIMG ?>The_Seven/home2_bgheader.png" alt="The Seven Header" class="header-image">
        <div class="content-text">
            <img src="<?= ASSETSIMG ?>The_Seven/home2_thevought.png" alt="The Vought" class="vought-logo">
            <h1>Shaping Heroes, Saving Lives</h1>
            <p>Since our humble beginnings during World War II, we've pioneered the development, management and service of Superheroes.</p>
        </div>
    </section>

    <section class="container-2">
        <img src="<?= ASSETSIMG ?>The_Seven/home2_logovought.png" alt="The Vought" class="vought-logo-2">
        <div class="content-wrapper">
            <img src="<?= ASSETSIMG ?>The_Seven/home2_aplose.png" alt="Background Image" class="background-image-2">
            <div class="content-text-2">
                <h1>Your<br>smile<br> is ours<br> too.</h1>
                <img src="<?= ASSETSIMG ?>The_Seven/home2_family.png" alt="Family Image" class="family-image-2">
                <p>“Our mission is to create a <br>safer world for all by pushing<br> the boundaries of superhuman<br> development through<br>innovation and excellence.”</p>
            </div>
        </div>
    
        <!-- Info Section Dipisah -->
        <div class="info-section">
            <div class="info-item-1">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_scam1.png" alt="Building a Better World">
                <div class="gabungan1">
                    <h2>BUILDING A BETTER WORLD</h2>
                    <p>
                        At Vought International, we’re committed to uplifting communities and improving lives worldwide. 
                        Through innovation and dedication, we strive to create peace, prosperity, and a brighter future for all.
                    </p>
                </div>
            </div>
            <div class="info-item-2">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_scam2.png" alt="Sustainable in Action">
                <div class="gabungan2">
                    <h2>SUSTAINABLE IN ACTION</h2>
                    <p>
                        Our annual report highlights our commitment to building a cleaner, 
                        greener, and more sustainable future for generations to come.
                    </p>
                </div>
            </div>
            <div class="info-item-3">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_scam3.png" alt="Spreading Love">
                <div class="gabungan1">
                    <h2>SPREADING LOVE</h2>
                    <p>
                        At Vought International, we believe love has the power to unite communities and transform lives. 
                        With compassion at our core, we aim to create a world full of care, hope, and limitless possibilities for all.
                    </p>
                </div>
            </div>
            <div class="info-item-4">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_scam4.png" alt="Building Trust">
                <div class="gabungan2">
                    <h2>BUILDING TRUST</h2>
                    <p>
                        We build trust through integrity and innovation. 
                        Committed to transparency and positive change, we strive for a future where everyone can thrive.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-3">
        <h2>BY THE <br>NUMBERS</h2>
        <div class="circle-container">
            <!-- Lingkaran Pertama -->
            <div class="circle circle-1">
                <span data-target="289">0</span>
                <p>LIVE SAVING MISSION <br>HAD BEEN DONE</p>
            </div>
            <!-- Baris untuk Lingkaran Kedua dan Ketiga -->
            <div class="circle-row">
                <!-- Lingkaran Kedua -->
                <div class="circle circle-2">
                    <h3>OVER</h3>
                    <span data-target="13854" data-suffix="">0</span> <!-- Tidak ada suffix untuk angka ini -->
                    <p>LIVES SAVED<br>LAST YEAR</p>
                </div>
                
                <div class="circle circle-3">
                    <div class="circle-content-3">
                        <img src="<?= ASSETSIMG ?>The_Seven/home2_panah.png" alt="Icon" />
                        <span data-target="60" data-suffix="%">0</span> <!-- Tambahkan % sebagai suffix -->
                    </div>
                    <p>OVERALL CRIME <br>REDUCTION RATE</p>
                </div>
            </div>

            <div class="seven">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_theseven.png" alt="The Seven" class="seven-image">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_3anggota.png" alt="Lamp" class="anggota-image">

            </div>
        </div>
    </section>
    <div class="seven-text-end">
        <h1>DO YOU HAVE WHAT IT TAKES TO <br> JOIN THE SEVEN</h1>
    </div>
    

    <section class="container-4">
        <div class="invitation-card-4">
            <div class="logo-section-4">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_logovector.png" alt="Logo" class="logo-4">
            </div>
            <div class="text-section-4">
                <h2>THE SEVEN</h2>
                <p>INVITATION CARD</p>
            </div>
            <a href="<?= BASEURL ?>TheSeven/Register">
                <button class="enroll-button-4">ENROLL</button>
            </a>
        </div>
    </section>
    

    <script src="<?= ASSETSJS ?>The_Seven/home_theseven.js"></script>
</body>
</html>
