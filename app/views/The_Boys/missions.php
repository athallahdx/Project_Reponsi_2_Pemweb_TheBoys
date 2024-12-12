<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/DASHBOARD/missions_theboys.css">
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
        <h1>MISSIONS</h1>
        <p>View the missions and get ready to take down Vought, expose their lies,<br> and make them pay for the damage they've done.</p>
    </section>

    <section class="container-2">
        <button id="addMissionBtn">Add Mission</button>
        <table id="missionTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mission Name</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </section>
    
    <div id="modal" class="modal hidden">
        <div class="modal-content">
            <h2 id="modalTitle">Add Mission</h2>
            <form id="missionForm">
                <label for="missionName">Mission Name:</label>
                <input type="text" id="missionName" required>
                <label for="missionLocation">Location:</label>
                <input type="text" id="missionLocation" required>
                <button type="submit" id="saveBtn">Save</button>
                <button type="button" id="cancelBtn">Cancel</button>
            </form>
        </div>
    </div>
    
    <script src="<?= ASSETSJS ?>The_Boys/missions_theboys.js"></script>
</body>
</html>
