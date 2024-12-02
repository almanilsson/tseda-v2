<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$contentPath = "pages/$page.php";

if (!file_exists($contentPath)) {
    $contentPath = "pages/404.php"; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Modular Website</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'components/header.php'; ?>
    
    <?php include 'components/nav.php'; ?>

    <main>
        <?php include $contentPath; ?>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
</html>
