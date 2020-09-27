<!DOCTYPE html>
<html lang="en">

<!-- header-->
<?php require PARTIAL.'header.php'; ?>

<!-- the body section -->
<body>

<header>
    <h1>SportsPro Technical Support</h1>
    <p>Sports management software for the sports enthusiast</p>
    <nav>
        <ul>
            <li><a href="<?php WEBROOT ?>">Home</a></li>
        </ul>
    </nav>
</header>

<!-- body content-->
<?php
    echo $content_for_layout;
?>

<!-- footer-->
<?php require PARTIAL.'footer.php'; ?>

</body>
</html>
