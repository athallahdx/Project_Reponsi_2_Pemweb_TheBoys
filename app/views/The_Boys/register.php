<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login The Boys</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>The_Boys/login_theboys.css">
</head>
<body data-assets-img="<?= ASSETSIMG ?>>
    <section class="container-1">
        <!-- Gambar Background -->
        <img src="<?= ASSETSIMG ?>The_Boys/LOGIN/login_bgutama.png" alt="The Boys Header" class="header-image">
        <div class="overlay"></div>
    
        <!-- Form Registrasi -->
        <div class="registration-form">
            <!-- Kotakan Gradasi -->

            <div class="header-form">
                <img src="<?= ASSETSIMG ?>The_Boys/LOGIN/login_palahomelander.png" alt="Hero" class="hero-image">
                <img src="<?= ASSETSIMG ?>The_Boys/LOGIN/login_teks.png" alt="The Seven Teks" class="teks-image">
                <img src="<?= ASSETSIMG ?>The_Boys/LOGIN/login_teks2.png" alt="The Seven Teks" class="teks2-image">
            </div>
    
            <!-- Konten Form -->
            <div class="registration-content">
                <hr>
                <form>
                    <div class="input-container">
                        <label for="fullname">What's your real name</label>
                        <input type="text" id="fullname" name="fullname" required>
                    </div>
                    
                    <div class="input-container">
                        <label for="nickname">What's should we call you</label>
                        <input type="text" id="nickname" name="nickname"  required>
                    </div>
                    
                    <div class="input-container">
                        <label for="age">Your Age</label>
                        <input type="number" id="age" name="age"  required>
                    </div>
                    
                    <div class="input-container">
                        <label for="superpower">Target</label>
                        <input type="text" id="target" name="target"  required>
                    </div>
                    
                    <div class="input-container">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    
                    
                    <button type="submit" class="enroll-button">ENROLL</button>
                </form>
            </div>
        </div>
    </section>
    
    

    <script src="<?= ASSETSJS ?>The_Boys/home2_theseven.js"></script>
</body>
</html>
