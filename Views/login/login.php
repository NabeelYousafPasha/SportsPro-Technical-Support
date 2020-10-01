<div class="container">

    <h1>Customer Login</h1>
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
            <p>
                You must login before you can register a product.
            </p>
            <form
                method='POST'
                action='<?php WEBROOT ?>login/auth/customer'
            >
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="form-control"
                        placeholder="Enter Customer Email"
                        required
                    >
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Login
                </button>
            </form>
        </div>
    </div>

</div>