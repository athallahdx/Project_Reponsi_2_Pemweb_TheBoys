<?php
    $abilities = explode(';', $member['ability']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The BOYS</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/DASHBOARD/memberdetail.css">
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
            <li><a href="<?= BASEURL ?>TheBoys/Index">HOME</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Community">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Dashboard" class="active">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheBoys/UserProfile" class="link-profile">
            <div class="profile-container">
                <img src="<?= BASEURL?>uploads/The_Boys/userprofile/<?= $data['user']['image'];?>" alt="Profile" class="profile-pic">
                <span class="username"><?= htmlspecialchars($data['user']['username']); ?></span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <a href="<?= BASEURL ?>TheBoys/TeamMembers" class="dashboard-link">
            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/teammembers_panah.png" alt="Panah">
            <p>Team Member</p>
        </a>
        <h1>Team Member Detail</h1>
    
        <div class="content">
            <!-- Left Section: Image with White Box -->
            <div class="combined-container">
                <!-- Image Section -->
                <div class="image-container">
                    <div class="image-overlay">
                        <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/grid_theboys.png" alt="Overlay" class="image-top">
                    </div>
                    <div class="image-box">
                        <img src="<?= BASEURL ?>uploads/The_Boys/members/<?= $member['image_path']; ?>" alt="Billy Butcher" class="image-main">
                    </div>
                </div>
            
                <!-- Text Section -->
                <div class="text-container">
                    <h2><?= $member['nickname']; ?></h2>
                    <div class="details">
                        <dl>
                            <dt>Full Name</dt>
                            <dd><?= $member['full_name']; ?></dd>
            
                            <dt>Position</dt>
                            <dd><?= $member['position']; ?></dd>
            
                            <dt>Ethnicity</dt>
                            <dd><?= $member['ethnicity']; ?></dd>
            
                            <dt>Abilty</dt>
                            <dd>
                                <ul>
                                    <?php foreach($abilities as $ability): ?>
                                        <li><span class="power-symbol">></span> <?= htmlspecialchars($ability, ENT_QUOTES, 'UTF-8'); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            
            <div class="paragraph-container">
                <?php if (!empty($member['description'])): ?>
                    <?php 
                        $paragraphs = explode("\n", trim($member['description'])); 
                    ?>
                    <?php foreach ($paragraphs as $paragraph): ?>
                        <p>
                            <?= htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                        <br>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No description available.</p>
                <?php endif; ?>
            </div>

        </div>
    </section>
    
    <script src="<?= ASSETSJS ?>The_Boys/memberdetail_theboys.js"></script>
</body>
</html>
