<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Boys Dashboard</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/dashboard_theboys.css">
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
                <img src="<?= BASEURL?>uploads/The_Boys/userprofile/<?= $data['image'];?>" alt="Profile" class="profile-pic">
                <span class="username"><?= htmlspecialchars($data['username']); ?></span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <!-- Header -->
        <header class="dashboard-header">
            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/dashboard_logo.png" alt="Logo" class="dashboard-logo">
            <h1>WELCOME TO THE BOYS</h1>
            <h2>Your mission begins here. Access all the tools to dismantle the system.</h2>
            <p>Hello, <?= htmlspecialchars($data['username']); ?>! Welcome to the dirtiest fight of your life..<br>
                All the tools, intel, and resources you need to expose the truth and fight back are right here.</p>
        </header>
    
        <!-- Dashboard Cards -->
        <div class="dashboard-cards">
            <!-- Card 1 -->
            <a href="<?= BASEURL ?>TheBoys/teammembers" class="card">
                <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/dashboard_image1.png" alt="Team Members">
                <div class="overlay"></div>
                <div class="content">
                    <div class="text-content">
                        <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/dashboard_item1.png" alt="Icon" class="card-icon">
                        <h3>TEAM MEMBERS</h3>
                    </div>
                    <p>See The Boys Detail Team Members</p>
                </div>
            </a>
    
            <!-- Card 2 -->
            <a href="<?= BASEURL ?>TheBoys/missions" class="card">
                <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/dashboard_image2.png" alt="Missions">
                <div class="overlay"></div>
                <div class="content">
                    <div class="text-content">
                        <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/dashboard_item2.png" alt="Icon" class="card-icon">
                        <h3>MISSIONS</h3>
                    </div>
                    <p>View Ongoing and Available Missions</p>
                </div>
            </a>
    
            <!-- Card 3 -->
            <a href="<?= BASEURL ?>TheBoys/UserProfile" class="card">
                <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/dashboard_image3.png" alt="User">
                <div class="overlay"></div>
                <div class="content">
                    <div class="text-content">
                        <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/dashboard_item3.png" alt="Icon" class="card-icon">
                        <h3>USER</h3>
                    </div>
                    <p>View Your Own Detail Information</p>
                </div>
            </a>
            
        </div>
    </section>

    <script src="<?= ASSETSJS ?>The_Boys/dashboard_theboys.js"></script>
</body>
</html>
