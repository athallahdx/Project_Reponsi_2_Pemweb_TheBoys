<?php
class TheBoys extends Controller {
    public $data=[];
    // Helper function to load session data
    private function loadSessionData() {
        if (Session::exists('user_id')) {
            $userProfile = $this->model("The_Boys/userprofile_model")->getUserProfileById(Session::get('user_id'));

            return [
                'user_id' => Session::get('user_id'),
                'username' => Session::get('username'),
                'fullname' => Session::get('fullname'),
                'role' => Session::get('role'),
                'email' => Session::get('email'),
                'image' => $userProfile['image_path']
            ];
        }
        return [];
    }

    public function index() {
        $data = $this->loadSessionData();
        $this->view('The_Boys/index', $data);
    }

    public function details() {
        $data = $this->loadSessionData();
        $this->view('The_Boys/details', $data);
    }

    public function validateRegistration($data) {
        $errors = [];

        if ($data['password'] !== $data['confirm_password']) {
            $errors[] = 'Passwords do not match.';
        }

        $userModel = $this->model('The_Boys/User_model');
        if ($userModel->checkEmailExists($data['email'])) {
            $errors[] = 'Email is already taken.';
        }

        if ($userModel->checkUsernameExists($data['username'])) {
            $errors[] = 'Username is already taken.';
        }

        return $errors;
    }

    public function register() {
        if (Session::exists('user_id')) {
            header('Location:' . BASEURL . 'TheBoys/Dashboard');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'fullname' => htmlspecialchars($_POST['fullname']),
                'username' => htmlspecialchars($_POST['username']),
                'email' => htmlspecialchars($_POST['email']),
                'password' => $_POST['password1'],
                'confirm_password' => $_POST['password2'],
                'errors' => []
            ];

            $errors = $this->validateRegistration($data);

            if (empty($errors)) {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                $userModel = $this->model('The_Boys/User_model');

                if ($userModel->registerUser($data)) {
                    ob_flush();
                    ob_clean();
                    header('Location: ' . BASEURL . 'TheBoys/Login');
                    exit();
                } else {
                    $data['errors'][] = 'Registration failed.';
                }
            }

            $data['errors'] = $errors;
            $this->view('The_Boys/register', $data);
        } else {
            $this->view('The_Boys/register');
        }
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'username' => htmlspecialchars(trim($_POST['username'])),
                'password' => $_POST['password'],
                'errors' => []
            ];

            if (empty($data['username'])) {
                $data['errors'][] = 'Username or email is required.';
            }
            if (empty($data['password'])) {
                $data['errors'][] = 'Password is required.';
            }

            if (empty($data['errors'])) {
                $userModel = $this->model('The_Boys/User_model');
                $user = $userModel->getUserByUsername($data['username']);

                if ($user) {
                    if (password_verify($data['password'], $user['password'])) {
                        Session::set('user_id', $user['user_id']);
                        Session::set('fullname', $user['fullname']);
                        Session::set('username', $user['username']);
                        Session::set('email', $user['email']);
                        Session::set('role', $user['role']);
                        Session::set('date_created', $user['date_created']);

                        header('Location: ' . BASEURL . 'TheBoys/dashboard');
                        exit();
                    } else {
                        $data['errors'][] = 'Invalid username or password.';
                    }
                } else {
                    $data['errors'][] = 'Invalid username or password.';
                }
            }

            $this->view('The_Boys/login', $data);
        } else {
            $this->view('The_Boys/login');
        }
    }

    public function community() {
        if (!Session::exists('user_id')) {
            header('Location:' . BASEURL . 'TheBoys/login');
            exit();
        }

        $data['user'] = $this->loadSessionData();
        $this->view('The_Boys/community', $data);
    }

    public function dashboard() {
        if (!Session::exists('user_id')) {
            header('Location:' . BASEURL . 'TheBoys/login');
            exit();
        }

        $data = $this->loadSessionData();
        $this->view('The_Boys/dashboard', $data);
    }

    public function teammembers() {
        if (!Session::exists('user_id')) {
            header('Location:' . BASEURL . 'TheBoys/login');
            exit();
        }

        $data['user'] = $this->loadSessionData();
        $data['members'] = $this->model('The_Boys/Member_model')->getAllMembers();    
        $this->view('The_Boys/teammembers', $data);
    }

    public function missions() {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'TheBoys/login');
            exit();
        }

        $data['user'] = $this->loadSessionData();
        $data['mission'] = $this->model('The_Boys/Mission_model')->getAllMissions();
        $this->view('The_Boys/missions', $data);
    }

    public function editMission() {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'TheBoys/login');
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Access the mission data from the POST data
            $data = [
                'mission_id'=> $_POST['mission_id'],
                'mission_title' => $_POST['mission_title'],
                'mission_description' => $_POST['mission_description'],
                'date_time' => $_POST['date_time'],
                'location' => $_POST['location']
            ];
            
            // var_dump($data);
            // Call the model to update the mission
            $this->model('The_Boys/Mission_model')->updateMission($data);
            header('Location: ' . BASEURL . 'TheBoys/missions');
        }
    }

    public function joinMission() {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'TheBoys/login');
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Access the mission_id from the POST data
            $missionId = $_POST['mission_id'];
            $userId = $_SESSION['user_id'];
    
            // Verify if the participant already exists for the given mission
            $participantExists = $this->model('The_Boys/Mission_model')->isParticipantExists($missionId, $userId);
    
            if ($participantExists) {
                // Redirect back with an error message (optional)
                $_SESSION['error_message'] = 'You have already joined this mission.';
                header('Location: ' . BASEURL . 'TheBoys/missions');
                exit();
            }
    
            // Call the model to join the mission
            $this->model('The_Boys/Mission_model')->addParticipant($missionId, $userId);
            header('Location: ' . BASEURL . 'TheBoys/missions');
        }
    }
    

    public function deleteMission() {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'TheBoys/login');
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Access the mission_id from the POST data
            $missionId = $_POST['mission_id'];
    
            // Call the model to delete the mission
            $this->model('The_Boys/Mission_model')->deleteMission($missionId);
            header('Location: ' . BASEURL . 'TheBoys/missions');
        }
    }
    
    public function addMission() {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'TheBoys/login');
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Access the mission data from the POST data
            $data = [
                'mission_title' => $_POST['mission_title'],
                'mission_description' => $_POST['mission_description'],
                'date_time' => $_POST['date_time'],
                'location' => $_POST['location']
            ];
            
            var_dump($data);
            // Call the model to add the mission
            $this->model('The_Boys/Mission_model')->addMission($data);
            header('Location: ' . BASEURL . 'TheBoys/missions');
        }
    }

    public function userprofile() {
        if (!Session::exists('user_id')) {
            header('Location:' . BASEURL . 'TheBoys/login');
            exit();
        }
        $data=[];
        $data['user'] = $this->loadSessionData();
        $data['userprofile'] = $this->model('The_Boys/Userprofile_model')->getUserProfileById($data['user']['user_id']);

        $this->view('The_Boys/userprofile', $data);
    }

    public function editprofile($profile_id) {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'TheBoys/login');
            exit();
        }

        $data['user'] = $this->loadSessionData();
        $data['userprofile'] = $this->model('The_Boys/Userprofile_model')->getUserProfileById($data['user']['user_id']);
        $this->view('The_Boys/editprofile',$data);
    }

    public function userpost($post_id) {
        if (!Session::exists('user_id')) {
            header('Location: ' . BASEURL . 'TheBoys/login');
            exit();
        }

        $this->view('The_Boys/userpost', $post_id);
    }

    public function memberdetail($member_id) {
        if (!Session::exists('user_id')) {
            header('Location:' . BASEURL . 'TheBoys/login');
            exit();
        }

        $data['user'] = $this->loadSessionData();
        $data['member'] = $this->model('The_Boys/Member_model')->getMemberById($member_id);
        $this->view('The_Boys/memberdetail', $data);
    }

    public function updateProfile() {
        if (!Session::exists('user_id')) {
            header('Location:' . BASEURL . 'TheBoys/login');
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_SESSION['user_id']; // Ensure the user is logged in
        
            // Get the form data
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $age = $_POST['age'];
            $ethnicity = $_POST['ethnicity'];
            $profileBio = $_POST['profile_bio'];
    
            // Check if there is an uploaded file
            if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                // If there is a file, update with the image
                $file = $_FILES['avatar'];
                try {
                    $this->model('The_Boys/Userprofile_model')->updateProfileWithImage($userId, $file, $username, $fullname, $age, $ethnicity, $profileBio);
                    
                    // Update session data with the new user information
                    $updatedUser = $this->model('The_Boys/User_model')->getUserById($userId);
    
                    $_SESSION = [
                        'user_id' => $updatedUser['user_id'],
                        'username' => $updatedUser['username'],
                        'fullname' => $updatedUser['fullname'],
                        'email' => $updatedUser['email'],
                        'role' => $updatedUser['role'],
                    ];
    
                    ob_flush();
                    ob_clean();
                    header('Location: ' . BASEURL . 'TheBoys/UserProfile');
                    exit();
                } catch (\Exception $e) {
                    echo $e->getMessage(); // Display any error messages
                }
            } else {
                // If no image is uploaded, update only the profile details
                try {
                    $this->model('The_Boys/Userprofile_model')->updateUserProfileWithoutImage($userId, $username, $fullname, $age, $ethnicity, $profileBio);
                    
                    // Update session data with the new user information
                    $updatedUser = $this->model('The_Boys/User_model')->getUserById($userId);
    
                    $_SESSION = [
                        'user_id' => $updatedUser['user_id'],
                        'username' => $updatedUser['username'],
                        'fullname' => $updatedUser['fullname'],
                        'email' => $updatedUser['email'],
                        'role' => $updatedUser['role'],
                    ];
    
                    ob_flush();
                    ob_clean();
                    header('Location: ' . BASEURL . 'TheBoys/UserProfile');
                    exit();
                } catch (\Exception $e) {
                    echo $e->getMessage(); // Display any error messages
                }
            }
        }
    }
    
    
}
