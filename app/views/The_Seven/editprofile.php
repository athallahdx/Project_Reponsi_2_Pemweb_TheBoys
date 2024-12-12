<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/DASHBOARD/editprofile_theseven.css">
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
            <li><a href="<?= BASEURL ?>TheSeven/Community">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheSeven/Dashboard" class="active">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheSeven/UserProfile" class="link-profile">
            <div class="profile-container">
                <img src="<?= ASSETSIMG ?>The_Seven/home2_profilnavbar.png" alt="Profile" class="profile-pic">
                <span class="nickname">{Nickname}</span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <a href="<?= BASEURL ?>TheSeven/Dashboard" class="dashboard-link">
            <img src="<?= ASSETSIMG ?>The_Seven/DASHBOARD/TEAM_MEMBERS/teammembers2_panah.png" alt="Panah">
            <p>Dashboard</p>
        </a>
        <h1>Edit Profile</h1>

        <div class="content">
            <div class="form-container">
                <div class="image-container">
                    <div class="image-overlay">
                        <img src="<?= ASSETSIMG ?>The_Seven/DASHBOARD/TEAM_MEMBERS/grid_theseven.png" alt="Overlay" class="image-top">
                    </div>
                    <div class="image-box">
                        <img id="avatar-preview" src="<?= ASSETSIMG ?>The_Seven/DASHBOARD/fotoprofile.png" alt="Profile" class="image-main">
                    </div>
                </div>

                <div class="avatar-container">
                    <label for="avatar" id="choose-file-label">Choose File</label>
                    <input type="file" id="avatar" name="avatar" accept="image/*">
                </div>
                

                <div class="input-fields">
                    <div class="form-row">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>

                    <div class="form-row">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname">
                    </div>

                    <div class="form-row">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age">
                    </div>

                    <div class="form-row">
                        <label for="ethnicity">Ethnicity</label>
                        <input type="text" id="ethnicity" name="ethnicity">
                    </div>

                    <div class="form-row">
                        <label for="power">Power</label>
                        <input type="text" id="power" name="power">
                    </div>
                </div>

                <div class="button-container">
                    <button class="edit-button" onclick="saveProfile()">Save</button>
                </div>
            </div>

            <!-- Success Message -->
            <div id="success-message">
                <p>Profile updated successfully!</p>
            </div>
            
        </div>
    </section>

    <script src="<?= ASSETSJS ?>The_Seven/editprofile_theseven.js"></script>
</body>
</html>
