<div class="container">

    <h1>Register Product</h1>
    <?php
    if ($status ?? false) {
        ?>
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong>
                <?php
                echo $message ?? 'Product Creadeted';
                ?>
            </div>
        </div>
        <?php
    }
    ?>

</div>