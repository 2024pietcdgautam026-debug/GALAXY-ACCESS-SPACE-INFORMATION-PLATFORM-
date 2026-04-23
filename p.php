<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Access | Space Training</title>
    <link rel="stylesheet" href="p.css">
</head>
<body>


 <div class="main_header">
    <div class="logo_wrapper">
        <img src="images/logo2.png" width="100" alt="Space Research Logo" />
    </div>

    <div class="navigation_wrapper">
        <a href="dashboard1.php"> Home </a>
        <a href="About.html"> About </a>
        <a href="p.php"> Programmes </a>
        <a href="Exclusive Content.html"> Exclusive Content </a>
        <a href="Space Facts.html"> Space Facts </a>


        <a href="logout.php">Logout</a>
    </div>
</div>

    <main class="training-section">
        <h1 class="main-title">
            <span class="rocket-icon">🚀</span> 
            <span class="title-text">Space Training Programmes</span>
        </h1>
        <p class="sub-title">Select a mission and upgrade your skills</p>

        <div class="card-grid">
            <div class="program-card">
                <span class="ref-code">REF: GA-1</span>
                <h2>AI Workshop</h2>
                <p class="desc">Learn basics of AI</p>
                <div class="stats-row">
                    <div class="stat-box"><label>START DATE</label><span>2026-05-01</span></div>
                    <div class="stat-box"><label>DURATION</label><span>5 DAYS</span></div>
                </div>
                <div class="stats-row">
                    <div class="stat-box"><label>LEVEL</label><span>BEGINNER</span></div>
                    <div class="stat-box"><label>STATUS</label><span class="status-active">● ACTIVE</span></div>
                </div>
                <form action="enroll.php" method="POST">
                    <input type="hidden" name="prog_id" value="GA-1">
                    <input type="hidden" name="prog_name" value="AI Workshop">
                    <input type="email" name="user_email" placeholder="Enter email to enroll" class="enroll-email-input" required>
                    <button type="submit" class="enroll-btn">🚀 ENROLL NOW</button>
                </form>
            </div>

            <div class="program-card featured">
                <span class="ref-code">REF: GA-2</span>
                <h2>Web Development Bootcamp</h2>
                <p class="desc">Full stack training</p>
                <div class="stats-row">
                    <div class="stat-box"><label>START DATE</label><span>2026-05-10</span></div>
                    <div class="stat-box"><label>DURATION</label><span>5 DAYS</span></div>
                </div>
                <div class="stats-row">
                    <div class="stat-box"><label>LEVEL</label><span>BEGINNER</span></div>
                    <div class="stat-box"><label>STATUS</label><span class="status-active">● ACTIVE</span></div>
                </div>
                <form action="enroll.php" method="POST">
                    <input type="hidden" name="prog_id" value="GA-2">
                    <input type="hidden" name="prog_name" value="Web Development Bootcamp">
                    <input type="email" name="user_email" placeholder="Enter email to enroll" class="enroll-email-input" required>
                    <button type="submit" class="enroll-btn">🚀 ENROLL NOW</button>
                </form>
            </div>

            <div class="program-card">
                <span class="ref-code">REF: GA-3</span>
                <h2>IoT Training</h2>
                <p class="desc">ESP8266 & Sensors</p>
                <div class="stats-row">
                    <div class="stat-box"><label>START DATE</label><span>2026-05-15</span></div>
                    <div class="stat-box"><label>DURATION</label><span>5 DAYS</span></div>
                </div>
                <div class="stats-row">
                    <div class="stat-box"><label>LEVEL</label><span>BEGINNER</span></div>
                    <div class="stat-box"><label>STATUS</label><span class="status-active">● ACTIVE</span></div>
                </div>
                <form action="enroll.php" method="POST">
                    <input type="hidden" name="prog_id" value="GA-3">
                    <input type="hidden" name="prog_name" value="IoT Training">
                    <input type="email" name="user_email" placeholder="Enter email to enroll" class="enroll-email-input" required>
                    <button type="submit" class="enroll-btn">🚀 ENROLL NOW</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        © 2026 Galaxy Access | Secure Space Research Portal
    </footer>

</body>
</html>