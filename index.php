<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
include './includes/header.php';
if (file_exists("./pages/$page.php")) {
    include "./pages/$page.php";
} else {
    echo "<h1>Page Not Found</h1>";
}
include './includes/footer.php';
?>
