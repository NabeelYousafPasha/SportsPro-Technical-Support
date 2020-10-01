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

    <?php if ($_SESSION['user'] ?? false) { ?>
    <a
        href="<?php WEBROOT ?>login/auth/logout"
        class="btn btn-link btn-xs float-right pull-right"
    >
        Logout
    </a>
    <?php } ?>
    <br>
</header>

<!-- body content-->
<div class="body">
<?php
    echo $content_for_layout;
?>
</div>

<!-- footer-->
<?php require PARTIAL.'footer.php'; ?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
