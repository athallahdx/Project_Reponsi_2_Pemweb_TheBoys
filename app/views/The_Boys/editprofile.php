<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Boys</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/DASHBOARD/editprofile_theboys.css?v=1.0">
</head>
<body data-assets-img="<?= ASSETSIMG ?>" data-base-url="<?= BASEURL ?>">
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
                <img src="<?= ASSETSIMG ?>The_Boys/home_profilnavbar.png" alt="Profile" class="profile-pic">
                <span class="username"><?= htmlspecialchars($data['user']['username']); ?></span>
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
            <div class="form-container">
                <!-- Begin Form -->
                <form action="<?= BASEURL ?>TheBoys/updateProfile" method="POST" enctype="multipart/form-data">
                    <div class="image-container">
                        <div class="image-overlay">
                            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/grid_theboys.png" alt="Overlay" class="image-top">
                        </div>
                        <div class="image-box">
                            <img id="avatar-preview" src="<?= BASEURL . "uploads/The_Boys/userprofile/" . $data['userprofile']['image_path'] ?>" alt="Profile" class="image-main">
                        </div>
                    </div>

                    <div class="avatar-container">
                        <label for="avatar" id="choose-file-label">Choose File</label>
                        <input type="file" id="avatar" name="avatar" accept="image/*">
                    </div>

                    <div class="input-fields">
                        <div class="form-row">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" value="<?= $data['user']['username'] ?>">
                        </div>

                        <div class="form-row">
                            <label for="fullname">Full Name</label>
                            <input type="text" id="fullname" name="fullname" value="<?= $data['user']['fullname'] ?>">
                        </div>

                        <div class="form-row">
                            <label for="age">Age</label>
                            <input type="number" id="age" name="age" value="<?= $data['userprofile']['age'] ?>">
                        </div>

                        <div class="form-row">
                            <label for="ethnicity">Ethnicity</label>
                            <input type="text" id="ethnicity" name="ethnicity" value="<?= $data['userprofile']['ethnicity'] ?>">
                        </div>

                        <div class="form-row">
                            <label for="profile_bio">Bio Description</label>
                            <input type="text" id="profile_bio" name="profile_bio" value="<?= $data['userprofile']['profile_bio'] ?>">
                        </div>
                    </div>

                    <div class="button-container">
                        <button type="submit" class="edit-button">Save</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>


            <!-- Success Message -->
            <div id="success-message">
                <p>Profile updated successfully!</p>
            </div>
            
        </div>
    </section>

    <script src="<?= ASSETSJS ?>The_Boys/editprofile_theboys.js"></script>
</body>
</html>
