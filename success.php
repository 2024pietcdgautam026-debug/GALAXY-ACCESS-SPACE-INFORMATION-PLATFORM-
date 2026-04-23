<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission Confirmed | Galaxy Access</title>
    <link rel="stylesheet" href="success.css">
</head>
<body>

    <div class="page-wrapper">
        <div class="checkmark-section">
            <div class="icon-circle">✓</div>
            <h1>Enrolled Successfully!</h1>
        </div>

        <div class="success-card">
            <p class="main-msg">
                Your mission to the 
                <span class="program-highlight">
                    <?php echo isset($_GET['program']) ? htmlspecialchars($_GET['program']) : 'Selected Program'; ?>
                </span> 
                has been confirmed.
            </p>
            
            <p class="sub-msg">A confirmation email has been sent to your registered ID. Prepare for liftoff!</p>
            
            <div class="button-area">
                <a href="p.php" class="btn-home">Return to Dashboard</a>
            </div>
        </div>
    </div>

</body>
</html>