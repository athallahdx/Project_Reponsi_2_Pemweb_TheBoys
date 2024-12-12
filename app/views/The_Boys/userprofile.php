<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/DASHBOARD/userprofile_theboys.css?v=1.0">
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
        <h1>USER PROFILE</h1>

        <div class="content">
            <h2>THE BOYS ID CARD</h2>
                <div class="image-container">
                    <div class="image-overlay">
                        <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/grid_theboys.png" alt="Overlay" class="image-top">
                    </div>
                    <div class="image-box">
                        <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/fotoprofile.png" alt="A-Train" class="image-main">
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
            
                            <dt>Gender</dt>
                            <dd>{gender}</dd>

                            <dt>Bio Description</dt>
                            <dd>{bio desc}</dd>
                        </dl>
                    </div>
                </div>

                <div class="button-container">
                    <a href="<?= BASEURL ?>TheBoys/editprofile">
                        <button class="edit-button">Edit Profile</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <script src="<?= ASSETSJS ?>The_Boys/userprofile_theboys.js"></script>
</body>
</html>
