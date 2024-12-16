<?php
    $firstMember = $data['members'][0];
    unset($data['members'][0]);

    $first_half = array_slice($data['members'], 0, count($data['members']) / 2);
    $second_half = array_slice($data['members'], count($data['members']) / 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Boys Members</title>
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
        <a href="<?= BASEURL ?>TheBoys/Dashboard" class="dashboard-link" >
            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/teammembers_panah.png" alt="Panah">
            <p>Dashboard</p>
        </a>

        <h1>THE BOYS<br>TEAM MEMBERS</h1>
        <p>LEADER</p>

        <div class="center-container">
            <a href="<?= BASEURL ?>TheBoys/memberdetail/<?= $firstMember['member_id']; ?>">
                <div class="image-container-1">
                    <div class="image-overlay-1">
                        <h1>WANTED</h1>
                        <h3>LIVE OR DEAD</h3>
                        <div class="memberImage">
                            <img src="<?= BASEURL ?>uploads/The_Boys/members/<?=$firstMember['image_path'];?>" alt="Billy Butcher">
                        </div>
                        <div class="text-overlay-1">     
                            <h2><?= $firstMember['nickname']; ?></h2>
                            <p><?= $firstMember['position']; ?></p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- First image row -->
        <div class="image-row">
            <?php $index=2; ?>
            <?php foreach ($first_half as $member): ?>
                <a href="<?= BASEURL ?>TheBoys/memberdetail/<?= $member['member_id']; ?>">
                    <div class="image-container-<?= $index; ?>">
                        <div class="image-overlay-<?= $index; ?>">
                            <h1>WANTED</h1>
                            <h3>LIVE OR DEAD</h3>
                            <div class="memberImage">
                                <img src="<?= UPLOADS ?>The_Boys/members/<?= $member['image_path']; ?>" alt="<?= $member['nickname']; ?>">
                            </div>
                            <div class="text-overlay-<?= $index; ?>">
                                <h2><?= $member['nickname']; ?></h2>
                                <p><?= $member['position']; ?></p>
                            </div>
                        </div>
                    </div>
                </a>
                <?php $index++; ?>
            <?php endforeach; ?>
        </div>

        <!-- Second image row -->
        <div class="image-row-2">
            <?php foreach ($second_half as $member): ?>
                <a href="<?= BASEURL ?>TheBoys/memberdetail/<?= $member['member_id']; ?>">
                    <div class="image-container-<?= $index; ?>">
                        <div class="image-overlay-<?= $index; ?>">
                            <h1>WANTED</h1>
                            <h3>LIVE OR DEAD</h3>
                            <div class="memberImage">
                                <img src="<?= UPLOADS ?>The_Boys/members/<?= $member['image_path']; ?>" alt="<?= $member['nickname']; ?>">
                            </div>
                            <div class="text-overlay-<?= $index; ?>">
                                <h2><?= $member['nickname']; ?></h2>
                                <p><?= $member['position']; ?></p>
                            </div>
                        </div>
                    </div>
                </a>
                <?php $index++; ?>
            <?php endforeach; ?>
        </div>


                         
    </section>


    <script src="<?= ASSETSJS ?>The_Boys/teammembers_theboys.js"></script>
</body>
</html>
