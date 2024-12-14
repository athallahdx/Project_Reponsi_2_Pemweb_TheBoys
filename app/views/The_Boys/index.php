<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who Are "The Seven"</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/home_theboys.css">
     <style>
        
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
            <li><a href="<?= BASEURL ?>TheBoys/Index" class="active">HOME</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Community">COMMUNITY</a></li>
            <li><a href="<?= BASEURL ?>TheBoys/Dashboard">DASHBOARD</a></li>
        </ul>
        <a href="<?= BASEURL ?>TheBoys/UserProfile" class="link-profile">
            <div class="profile-container">
            <?php if (isset($data['username'])): ?>
                    <img src="<?= BASEURL?>uploads/The_Boys/userprofile/<?= $data['image'];?>" alt="Profile" class="profile-pic">
                    <span class="nickname"><?= htmlspecialchars($data['username']); ?></span>
                <?php else: ?>
                    <img src="<?= ASSETSIMG ?>The_Boys/home_profilnavbar.png" alt="Profile" class="profile-pic">
                    <span class="nickname">username</span>
                <?php endif; ?>
            </div>
        </a>
    </nav>
    <section class="container-1">
        <div class="header">
            <img src="<?= ASSETSIMG ?>The_Boys/home_vector.png" alt="The Seven Header" class="header-image">
            <h1 class="headline">WHO ARE "THE SEVEN"</h1>
        </div>

        <div class="news">
            <div class="text-section1">
                <div class="text1">
                    <p>
                        The Seven are Vought International's golden ticket to power, fame, and profit. Marketed as Earth's mightiest protectors, they are the shining faces plastered across billboards, action figures, and cereal boxes.
                        But behind the carefully crafted heroism lies a darker truth: The Seven are not saviors—they’re a product. Every heroic act is a publicity stunt, every smile a corporate strategy, and every victory a scripted spectacle.
                    </p>
                </div>

                <div class="gabungan">
                    <div class="text2">
                        <p>
                            What happens when the cameras stop rolling? Behind the scenes, The Seven are plagued with scandals, abuses of power, and moral corruption. They operate not out of a sense of justice, but a hunger for control and validation. 
                            Their powers might be godlike, but their flaws are disturbingly human—egos unchecked, appetites insatiable, and consciences conveniently absent.
                        </p>
                    </div>
                    <div class="text3">
                        <p>
                            Vought has sold the world a dream: a world protected by invincible heroes. But that dream is a nightmare dressed in spandex and smiles.
                            The Seven are not here to save us; they’re here to save themselves—whether from irrelevance or their own inner demons.
                        </p>
                    </div>
                </div>

                <div class="text4">
                    <p>
                        Let’s pull back the curtain on The Seven and reveal the truth that Vought doesn’t want you to see: not all heroes wear capes.
                        And sometimes, the ones who do are the real villains.
                    </p>
                    <div class="read-more">
                        <a href="<?= BASEURL ?>TheBoys/Details" class="read-more-button">Read More</a>
                    </div>
                </div>
            </div>
            <div class="image-1">
                <img src="<?= ASSETSIMG ?>The_Boys/home_whiteblack.png" alt="The Seven Illustration" class="footer-image">
            </div>



        </div>
    </section>

    <section class="container-2">
        <div class="header-2">
            <h1>WHAT'VE THEY DONE</h1>
            <p>Leaked footage of some of the <span class="highlight-red">disgusting</span> things they've done.</p>
        </div>
        <div class="image-2">
            <div class="video-box">
                <video class="video-2" autoplay muted loop>
                    <source src="<?= ASSETSIMG ?>The_Boys/video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay">
                    <div class="zoom-effect"></div>
                </div>
            </div>            
            <div class="video-box">
                <video class="video-2" autoplay muted loop>
                    <source src="<?= ASSETSIMG ?>The_Boys/video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay">
                    <div class="zoom-effect"></div>
                </div>
            </div>     
            <div class="video-box">
                <video class="video-2" autoplay muted loop>
                    <source src="<?= ASSETSIMG ?>The_Boys/video3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay">
                    <div class="zoom-effect"></div>
                </div>
            </div>     
        </div>

        <div class="vaksin-2">
            <div class="vaksin-content">
                <div class="vaksin-text">
                    <h2>WHAT IS</h2>
                    <h3><span class="highlight-red">COMPOUND V</span>?</h3>
                    <h4>Heroes? Or just a science experiment gone wrong?</h4>
                    <div class="pisah">
                        <p>
                            Compound V, hailed as the miracle serum, is Vought International's crowning achievement—or is it?
                            Marketed as the key to superhuman strength and the salvation of humanity, the truth is far darker.
                            Developed in secret, Compound V isn’t about saving lives; it’s about creating a product. One that
                            profits from the destruction it leaves behind.
                        </p>
                        <p>
                            The serum's effects are far from predictable. While some gain godlike abilities, others are left
                            with horrific side effects or worse—irreparable damage. Vought won’t tell you about the failed
                            experiments or the lives ruined in pursuit of perfection. After all, you can’t put that on a
                            billboard, can you?
                        </p>
                    </div>
                </div>
                <div class="vaksin-image">
                    <img src="<?= ASSETSIMG ?>The_Boys/home_vaksin.png" alt="Vaccine">
                </div>
            </div>
        </div>        
        
    </section>

    <section class="container-3">
        <h2>LET'S PLAY A GAME</h2>
        <img class="brush-image" src="<?= ASSETSIMG ?>The_Boys/home_brush.png" alt="Brush Decoration">
        <h3>ELIMINATE ALL PIG ALL THE WAY TO HOMELANDER</h3>
        <div class="character-1">
            <img id="character-image" src="<?= ASSETSIMG ?>The_Boys/theseven_blacknoir.png" alt="Black Noir">
                <div class="character-text-1">
                    <p class="character-name">PIG #1 <br>Black Noir</p>
                    <button id="change-image-button" class="action-button">KILL</button>
                </div>
        </div>

        <div class="character-2">
            <img id="character-image-2" src="<?= ASSETSIMG ?>The_Boys/theseven_atrain.png" alt="A-Train">
            <div class="character-text-2">
                <p class="character-name-2">PIG #2 <br>A-Train</p>
                <button id="change-image-button-2" class="action-button">KILL</button>
            </div>
        </div>

        <div class="character-3">
            <img id="character-image-3" src="<?= ASSETSIMG ?>The_Boys/theseven_stormfront.png" alt="Strom Front">
                <div class="character-text-3">
                    <p class="character-name-3">PIG #3 <br>Stromfront</p>
                    <button id="change-image-button-3" class="action-button">KILL</button>
                </div>
        </div>

        <div class="character-4">
            <img id="character-image-4" src="<?= ASSETSIMG ?>The_Boys/theseven_thedeep.png" alt="The Deep">
            <div class="character-text-4">
                <p class="character-name-4">PIG #4 <br>The Deep</p>
                <button id="change-image-button-4" class="action-button">KILL</button>
            </div>
        </div>

        <div class="character-5">
            <img id="character-image-5" src="<?= ASSETSIMG ?>The_Boys/theseven_homelander.png" alt="Homelander">
            <div class="character-text-5">
                <p class="character-name-5">FINAL PIG <br>Homelander</p>
                <button id="change-image-button-5" class="action-button">KILL</button>
            </div>
        </div>        
    </section>

    <section class="container-4">
        <div class="header-4">
            <h2>GREAT, LOOK’S LIKE YOU’RE READY.</h2>
            <p>LET’S CHOP THESE F*CKERS HEAD OFF</p>
        </div>
        <div class="theboys-card-4">
            <img src="<?= ASSETSIMG ?>The_Boys/home_enroll.png" alt="The Boys" class="theboys-logo-4"> <!-- Logo Image -->
            <h3>THE BOYS</h3>
            <p>INVITATION CARD</p>
            <a href="<?= BASEURL ?>TheBoys/Register" class="enroll-button-4">ENROLL</a>
        </div>
    </section>
    

    
    <script src="<?= ASSETSJS ?>The_Boys/home_theboys.js" ></script>
</body>
</html>