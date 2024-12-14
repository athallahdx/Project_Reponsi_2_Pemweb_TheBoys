<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/DASHBOARD/missions_theboys.css?v=1.0">
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
                <img src="<?= BASEURL?>uploads/The_Boys/userprofile/<?= $data['user']['image'];?>" alt="Profile" class="profile-pic">
                <span class="nickname"><?= htmlspecialchars($data['user']['username']); ?></span>
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
    <?php if ($data['user']['role'] == 'admin'): ?>
        <button id="addMissionBtn">Add Mission</button>
    <?php endif; ?>
        <table id="missionTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mission Name</th>
                    <th>Description</th>
                    <th>Date & Time</th>
                    <th>Location</th> 
                    <th>Participants</th>
                    <th>Occurence</th>
                    <?php if($data['user']['role'] == 'admin'): ?>
                        <th>Action</th>
                        <th>Participate</th>
                    <?php elseif($data['user']['role'] == 'user'): ?>
                        <th>Participate</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $index=1; ?>
                <?php foreach($data['mission'] as $mission): ?>
                    <tr>
                        <td><?= $index ?></td>
                        <td><?= $mission['mission_title']; ?></td>
                        <td><?= $mission['mission_description']; ?></td>
                        <td><?= $mission['date_time']; ?></td>
                        <td><?= $mission['location']; ?></td>
                        <td><?= $mission['participants']; ?></td>
                        <td><?= $mission['occurence']; ?></td>
                        <?php if($data['user']['role'] == 'admin'): ?>
                            <td>
                            
                            <button class="edit-btn" data-id="<?= $mission['id']; ?>" 
                            data-title="<?= $mission['mission_title']; ?>" 
                            data-description="<?= $mission['mission_description']; ?>" 
                            data-datetime="<?= $mission['date_time']; ?>" 
                            data-location="<?= $mission['location']; ?>">
                                Edit
                            </button>

                                <span class="divider">|</span>

                                <form method="POST" action="<?= BASEURL?>TheBoys/DeleteMission">
                                    <input type="hidden" name="mission_id" value="<?= $mission['id']; ?>">
                                    <button name="deleteBtn" class="delete-btn">Delete</button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="<?= BASEURL?>TheBoys/JoinMission">
                                    <input type="hidden" name="mission_id" value="<?= $mission['id']; ?>">
                                    <button name="joinBtn" class="join-btn">Join</button>
                                </form>
                            </td>
                        <?php elseif($data['user']['role'] == 'user'):?>
                            <td>
                                <form method="POST" action="<?= BASEURL?>TheBoys/JoinMission">
                                    <input type="hidden" name="mission_id" value="<?= $mission['id']; ?>">
                                    <button name="joinBtn" class="join-btn">Join</button>
                                </form>
                            </td>
                        <?php endif; ?>
                        <?php $index++;  ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    
    <?php if ($data['user']['role'] == 'admin'): ?>
    <div id="modal" class="modal hidden">
        <div class="modal-content">
            <h2 id="modalTitle">Add Mission</h2>
            <form id="missionForm" method="POST" action="<?= BASEURL ?>TheBoys/AddMission">
                <label for="missionTitle">Mission Title:</label>
                <input type="text" id="missionTitle" name="mission_title" required>

                <label for="missionDescription">Mission Description:</label>
                <textarea id="missionDescription" name="mission_description" required></textarea>

                <label for="dateTime">Date and Time:</label>
                <input type="datetime-local" id="dateTime" name="date_time" required>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>

                <button type="submit" id="saveBtn">Add</button>
                <button type="button" id="cancelBtn">Cancel</button>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($data['user']['role'] == 'admin'): ?>
    <div id="editModal" class="modal hidden">
    <div class="modal-content">
            <h2 id="editModalTitle">Edit Mission</h2>
            <form id="editMissionForm" method="POST" action="<?= BASEURL ?>TheBoys/EditMission">
                <input type="hidden" id="editMissionId" name="mission_id" value="">

                <label for="editMissionTitle">Mission Title:</label>
                <input type="text" id="editMissionTitle" name="mission_title" required>

                <label for="editMissionDescription">Mission Description:</label>
                <textarea id="editMissionDescription" name="mission_description" required></textarea>

                <label for="editDateTime">Date and Time:</label>
                <input type="datetime-local" id="editDateTime" name="date_time" required>

                <label for="editLocation">Location:</label>
                <input type="text" id="editLocation" name="location" required>

                <button type="submit" id="saveEditBtn">Save</button>
                <button type="button" id="cancelEditBtn">Cancel</button>
            </form>
        </div>
    </div>
    <?php endif; ?>
                            


    


    <script src="<?= ASSETSJS ?>The_Boys/missions_theboys.js"></script>
</body>
</html>
