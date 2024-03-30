<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dr. purushottam landing page" content="landing page" >
    <title>Dr Purushottam About</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/our-locations.css">
    <link rel="stylesheet" href="./styles/operates-hospital.css">
    <link rel="stylesheet" href="./styles/reusable.css">
    <link rel="stylesheet" href="./styles/our-team.css">
    <script src="./javaScript/index.js" defer></script>
</head>
<body>
<?php include "./components/connectDB.php"; ?>
    <div class="main-app">
        <?php include "./components/operatesHospital.php"; ?>
        <?php include "./components/ourLocations.php"; ?>
        <?php include "./components/ourTeam.php"; ?>
    </div>
</body>
</html>