<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Boys</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/DASHBOARD/teammembers_theboys.css">
</head>
<body data-assets-img="<?= ASSETSIMG ?>">
    <nav class="navbar">
        <div class="logo-container">
            <img src="<?= ASSETSIMG ?>The_Boys/home_logonavbar.png" alt="The BOYS Logo" class="logo">
            <a href="../../index.html">
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
                <span class="nickname">{Nickname}</span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <a href="<?= BASEURL ?>TheBoys/Dashboard" class="dashboard-link" >
            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/teammembers_panah.png" alt="Panah">
            <p>Dashboard</p>
        </a>

        <h1>THE BOYS<br>TEAM MEMBERS</h1>
        <p>LEADER</p>

        <div class="center-container">
            <a href="TEAMMEMBERS/billybutcher.html">
                <div class="image-container-1">
                    <div class="image-overlay-1">
                        <h1>WANTED</h1>
                        <h3>LIVE OR DEAD</h3>
                        <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/Billy_Butcher.png" alt="Billy Butcher">
                        <div class="text-overlay-1">
                            <h2>Billy Butcher</h2>
                            <p>Leader</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        
            <!-- New images -->
            <div class="image-row">
                <a href="TEAMMEMBERS/hunghiecampbell.html">
                    <div class="image-container-2">
                        <div class="image-overlay-2">
                            <h1>WANTED</h1>
                            <h3>LIVE OR DEAD</h3>
                            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/Hunghie_Campbell.png" alt="Hunghie Campbell">
                            <div class="text-overlay-2">
                                <h2>Hunghie Campbell</h2>
                                <p>Tech and Computer</p>
                            </div>
                        </div>
                    </div>
                </a>                
                <a href="TEAMMEMBERS/mothersmilk.html">
                    <div class="image-container-3">
                        <div class="image-overlay-3">
                            <h1>WANTED</h1>
                            <h3>LIVE OR DEAD</h3>
                            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/Mother’s_Milk.png" alt="Mother's Milk">
                            <div class="text-overlay-3">
                                <h2>Mother's Milk</h2>
                                <p>Investigator and Medic</p>
                            </div>
                        </div>
                    </div>
                </a>
                
            </div>      

            <div class="image-row-2">
                <a href="TEAMMEMBERS/frenchie.html">
                    <div class="image-container-4">
                        <div class="image-overlay-4">
                            <h1>WANTED</h1>
                            <h3>LIVE OR DEAD</h3>
                            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/Frenchie.png" alt="Frenchie">
                            <div class="text-overlay-4">
                                <h2>Frenchie</h2>
                                <p>Weapons and Explosives</p>
                            </div>
                        </div>
                    </div>
                </a>    
                <a href="TEAMMEMBERS/kimikomiyashiro.html">
                    <div class="image-container-5">
                        <div class="image-overlay-5">
                            <h1>WANTED</h1>
                            <h3>LIVE OR DEAD</h3>
                            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/Kimiko_Miyashiro.png" alt="Kimiko Miyashiro">
                            <div class="text-overlay-5">
                                <h2>Kimiko Miyashiro</h2>
                                <p>Muscle</p>
                            </div>
                        </div>
                    </div>
                </a>                            
    </section>


    <script src="<?= ASSETSJS ?>The_Boys/teammembers_theboys.js"></script>
</body>
</html>
