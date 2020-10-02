<div class="container">

    <h1>Create Incident</h1>
    <?php
    if ($status ?? false) {
        ?>
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong>
                <?php
                echo $message ?? 'Incident added';
                ?>
            </div>
        </div>
        <?php
    }
    ?>

</div>