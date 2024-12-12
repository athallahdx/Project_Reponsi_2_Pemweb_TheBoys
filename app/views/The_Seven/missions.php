<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Seven/DASHBOARD/missions_theseven.css">
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
        <a href="<?= BASEURL ?>TheSeven/Dashboard" class="dashboard-link" >
            <img src="<?= ASSETSIMG ?>The_Seven/DASHBOARD/TEAM_MEMBERS/teammembers2_panah.png" alt="Panah">
            <p>Dashboard</p>
        </a>
        <h1>MISSIONS</h1>
        <p>View available missions and join us in protecting the world. Together,<br> we’ll uphold justice, inspire hope, and secure a brighter future.</p>
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
    
    <script src="<?= ASSETSJS ?>The_Seven/missions_theseven.js"></script>
</body>
</html>
