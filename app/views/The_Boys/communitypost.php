<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Post</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/userpost_theboys.css">
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
            <li><a href="<?= BASEURL ?>TheBoys/Community" class="active">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Dashboard">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheBoys/UserProfile" class="link-profile">
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
    
        <!-- Form postingan dan daftar postingan -->
        <div class="main-content">
            <div class="post-form">
                <?php $image = $data['user']['image'] ?>
                <img src="<?= UPLOADS ?>The_Boys/userprofile/<?= $image ?>" alt="Profile" class="profile-pic-3">
                <form method="POST" action="<?= BASEURL ?>TheBoys/addPost" enctype="multipart/form-data">
                    <div class="input-container">

                        <textarea type="text" id="post-input" name="content" placeholder="What's in your mind?"></textarea>

                        <div class="input-footer">
                            <img src="<?= ASSETSIMG ?>The_Boys/COMMUNITY/community2_logo2.png" alt="Logo" class="image" id="image-trigger">
                            
                            <input type="file" id="file-input" name="postimage" accept="image/*">

                            <button type="submit" id="post-button">Post</button>
                        </div>                    
                    </div>
                </form>
            </div>
            
            <div class="posts" id="posts-container">
                <!-- Dummy Posts -->
                <div class="posts" id="posts-container">
                <?php $indexofpost=1; ?>
                <?php foreach ($data['posts'] as $post): ?>
                    <?php 
                        $userprofileimg = $data['userprofile']->getUserProfileById($post['user_creator_id']);
                        $image = $userprofileimg['image_path'];
                    ?>
                    <div class="post" id="post-<?= $indexofpost ?>">
                        <img src="<?= UPLOADS ?>The_Boys/userprofile/<?= $image ?>" alt="Profile" class="profile-pic-2">
                        <div class="post-content">
                            <!-- Display User Info -->
                            <?php $user = $data['user_model']->getUserById($post['user_creator_id']); ?>
                            <span class="username"><?= htmlspecialchars($user['username']) ?></span>
                            <span class="post-time"><?= date('M d, Y h:i A', strtotime($post['date_created'])) ?></span><br><br>
            
                            <!-- Check for Image -->
                            <?php if (!empty($post['image_path'])): ?>
                                <img src="<?= BASEURL ?>uploads/The_Boys/post/<?= htmlspecialchars($post['image_path']) ?>" alt="Post Image" class="post-image">
                            <?php endif; ?>
            
                            <!-- Display Post Content -->
                            <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
            
                            <!-- Placeholder for Comments -->
                            <!--<div class="comment-section" id="comments-">-->
                                <!-- Example Static Comment -->
                            <!--    <div class="comment">-->
                            <!--        <img src=The_Boys/COMMUNITY/community2_profile.png" alt="Profile" class="profile-pic-4">-->
                            <!--        <div class="comment-content">-->
                            <!--            <div>-->
                            <!--                <span class="username-2">Alex</span>-->
                            <!--                <span class="post-time-2">1h</span>-->
                            <!--            </div>-->
                            <!--            <p>Great post!</p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
            
                            <!-- Toggle Comments Button -->
                            <!--<button class="toggle-comments-btn" data-post-id="" onclick="toggleComments(this)">Selengkapnya</button>-->
            
                            <!-- Add Comment Input -->
                            <div class="input-container-2">
                                <input type="text" id="comment-input-<?= $post['post_id'] ?>" placeholder="Your comment....">
                                <div class="input-footer">
                                    <input type="file" id="file-input-<?= $post['post_id'] ?>" accept="image/png" style="display: none;">
                                    <button id="post-comment-button">Post</button>
                                </div>                    
                            </div>
                        </div>
                    </div>
                    <?php $indexofpost++; ?>
                <?php endforeach; ?>
                
            </div>

        </div>
    

    </section>
    

    <script src="<?= ASSETSJS ?>The_Boys/community_theboys.js"></script>
    
</body>
</html>
