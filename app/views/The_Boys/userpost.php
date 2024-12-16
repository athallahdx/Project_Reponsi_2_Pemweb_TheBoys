<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Post</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/userpost_theboys.css">
    <style>
        body{
            background-image: url('<?= ASSETSIMG?>The_Boys/home_background.png');
        }
    </style>
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
            <li><a href="<?= BASEURL ?>TheBoys/index">HOME</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/community" class="active">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/dashboard">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheBoys/userProfile" class="link-profile">
            <div class="profile-container">
                <img src="<?= BASEURL?>uploads/The_Boys/userprofile/<?= $data['user']['image'];?>" alt="Profile" class="profile-pic">
                <span class="username"><?= htmlspecialchars($data['user']['username']); ?></span>
            </div>
        </a>
    </nav>

    <section class="container-1">
        <!-- Sidebar kiri -->
        <div class="sidebar">
            <a href="<?= BASEURL ?>TheBoys/community" class="Home2">
                <img src="<?= ASSETSIMG ?>The_Boys/COMMUNITY/community2_logo3.png" alt="Home2">
                <span>Home</span>
            </a>
            <a href="<?= BASEURL ?>TheBoys/userPost" class="your-posts">
                <img src="<?= ASSETSIMG ?>The_Boys/COMMUNITY/community2_logo.png" alt="Your Posts">
                <span>Your Posts</span>
            </a>
        </div>

        <div class="main-content">          
            <div class="posts" id="posts-container">
                <?php if (!empty($data['post'])): ?>
                    <?php foreach ($data['post'] as $post): ?>
                        <div class="post" id="post-<?= htmlspecialchars($post['post_id']) ?>">
                            <!-- User Profile Image -->
                            <img src="<?= UPLOADS ?>The_Boys/userprofile/<?= htmlspecialchars($data['user']['image']) ?>" 
                                alt="Profile" class="profile-pic-2">

                            <!-- Post Actions (Edit/Delete) -->
                            <img src="<?= ASSETSIMG ?>The_Boys/COMMUNITY/hapus.png" alt="Hapus" 
                                class="hapus">
                            <img src="<?= ASSETSIMG ?>The_Boys/COMMUNITY/edit.png" alt="Edit" 
                                class="edit">

                            <!-- Post Content -->
                            <div class="post-content">
                                <span class="username"><?= htmlspecialchars($data['user']['username']) ?></span>
                                <span class="post-time"><?= date('M d, Y h:i A', strtotime($post['date_created'])) ?></span><br><br>

                                <!-- Display Post Content -->

                                <!-- Display Post Image (if exists) -->
                                <?php if (!empty($post['image_path'])): ?>
                                    <img src="<?= BASEURL ?>uploads/The_Boys/post/<?= htmlspecialchars($post['image_path']) ?>" 
                                        alt="Post Image" class="post-image">
                                <?php endif; ?>
                                <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="no-posts">You have not created any posts yet.</p>
                <?php endif; ?>
            </div>
        </div>
    

    <script src="<?= ASSETSJS ?>The_Boys/userpost.js"></script>
    
</body>
</html>
