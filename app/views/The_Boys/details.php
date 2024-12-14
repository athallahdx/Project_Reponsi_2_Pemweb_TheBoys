<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Who Are "The Seven"</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/details_theboys.css">
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
                <?php if (!isset($data['username'])): ?>
                    <img src="<?= BASEURL?>uploads/The_Boys/userprofile/<?= $data['user']['image'];?>" alt="Profile" class="profile-pic">
                    <span class="nickname">username</span>
                <?php else: ?>
                    <img src="<?= ASSETSIMG ?>The_Boys/home_profilnavbar.png" alt="Profile" class="profile-pic">
                    <span class="nickname"><?= htmlspecialchars($data['username']); ?></span>
                <?php endif; ?>
            </div>
        </a>
    </nav>


    <section class="container-1">
        <a href="TheBoys/Index" class="dashboard-link" >
            <img src="<?= ASSETSIMG ?>The_Boys/DASHBOARD/TEAM_MEMBERS/teammembers_panah.png" alt="Panah">
            <p>Home</p>
        </a>

        <div class="header">
            <img src="<?= ASSETSIMG ?>The_Boys/home_vector2.png" alt="The Seven Header" class="header-image">
        </div>

        <div class="news">
            <div class="text-section1">
                <h1 class="headline-1">The Dark History<br>of Vought International and The Seven</h1>
                <div class="content">
                    <div class="text">
                        <div class="text1">
                            <p>
                                Vought International’s origins trace back to the early 20th century, during a period of global unrest and rising technological innovation. 
                                Founded by Frederick Vought, the company initially presented itself as a beacon of progress and patriotism. Vought's groundbreaking invention, 
                                Compound V, promised to change the world by creating superhumans capable of unparalleled feats. This miracle substance was marketed as the 
                                ultimate defense against threats to national security, positioning Vought as a savior of the American dream.
                            </p>
                        </div>
                        <div class="text2">
                            <p>
                                However, beneath its shiny veneer of innovation lay a far darker reality. Vought's early years were steeped 
                                in wartime experiments that sacrificed ethics for results. Thousands were subjected to cruel trials in the name of science,
                                many of whom paid the ultimate price. Frederick Vought’s vision of a safer world quickly morphed into an insidious plan to
                                monopolize power and profit. By the mid-century, Vought had transitioned from a patriotic ally to a corporate empire focused 
                                solely on domination—economically, politically, and socially.
                            </p>
                        </div>
                    </div>
                    <div class="image-1">
                        <img src="<?= ASSETSIMG ?>The_Boys/home_pasutri.png" alt="The Seven Illustration">
                    </div>
                </div>
                

                <div class="text3">
                    <p>
                        Today, Vought International is more than just a company; it is a global titan whose influence extends into nearly every corner of modern life. 
                        From entertainment and consumer goods to private military contracts and media conglomerates, Vought operates as a shadow government, controlling narratives and shaping public opinion.
                    </p>
                </div>

                <h1 class="headline-2">The Seven: Icons of Justice or Instruments of Manipulation?</h1>

                <div class="text4">
                    <p>
                        At the heart of Vought’s empire lies its crown jewel, The Seven—a team of superheroes marketed as paragons of virtue and protectors of humanity. Each member of The Seven is carefully 
                        crafted to fit a specific archetype, appealing to public sentiment and ensuring maximum profitability. Their faces adorn billboards, their stories dominate cinema screens, and their 
                        heroic deeds captivate millions. But the truth behind these so-called heroes is far from the sanitized narrative that Vought presents to the world.
                    </p>
                </div>

                <div class="text5">
                    <p>
                        The Seven are not chosen for their moral integrity or commitment to justice but for their marketability and utility to Vought's broader goals. Each member is a product of Compound V, 
                        often injected into them as infants without consent. These superheroes are corporate assets, bound by contracts that prioritize public image over genuine heroism. Their powers are impressive
                        but come with unpredictable consequences, often resulting in collateral damage that Vought is quick to cover up.
                    </p>
                </div>

                <h1 class="headline-3">The Cost of Heroism: Collateral Damage and Cover-Ups</h1>
                <div class="content-row">
                    <div class="text6">
                        <p>
                            While The Seven’s public persona is one of heroism and selflessness, the reality is far grimmer. Their missions often result in widespread destruction, with civilian casualties brushed aside as unavoidable. 
                            From failed rescues to outright negligence, the actions of The Seven frequently cause more harm than good.
                        </p>
                    </div>
                    <div class="text7">
                        <p>
                            Yet, thanks to Vought’s media empire, these incidents rarely tarnish their reputation. News outlets under Vought’s control spin tragedies into triumphs, blaming external factors or rogue elements for 
                            the destruction caused by their heroes. Families of victims are silenced with financial settlements and non-disclosure agreements, ensuring that the truth remains hidden.
                        </p>
                    </div>
                </div>

                <div class="text8">
                    <p>
                        At its core, Vought International is not in the business of saving lives but in the business of making money. Every aspect of its operations is designed to maximize profitability, often at the expense of 
                        the very people it claims to protect. From merchandise sales and movie deals to defense contracts and political lobbying, Vought’s true allegiance is to its shareholders, not society.
                        The company’s influence extends deep into the political sphere, where it wields its financial power to shape legislation and silence opposition. Lawmakers who dare to challenge Vought often find themselves facing career-ending 
                        scandals or mysterious disappearances. Even governments are not immune to Vought’s manipulation, as the corporation leverages its superheroes as bargaining chips in international relations.
                    </p>
                </div>
            </div>
        </div>
    </section>


    
    <script src="<?= ASSETSJS ?>The_Boys/home_theboys.js" ></script>
</body>
</html>