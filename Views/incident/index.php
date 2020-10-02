<div class="container">

    <h1>Create Incident</h1>
    <br>

    <div class="row">

        <?php
        if ($_SESSION['error'] ?? false) {
            ?>
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Error!</strong>
                    <?php
                    echo $_SESSION['error']
                    ?>
                </div>
            </div>
            <?php
        }
        ?>

        <div class="col-md-12">
            <form
                method='POST'
                action='<?php WEBROOT ?>incident/index'
            >
                <div class="form-group">
                    <label for="email">Customer:</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="form-control"
                        placeholder="Enter Email Address"
                        required
                    >
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Get Customer
                </button>
            </form>
        </div>
    </div>

</div>