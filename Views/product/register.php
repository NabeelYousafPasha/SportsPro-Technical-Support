<div class="container">

    <h1>Register Product</h1>
    <br>

    <div class="row">
        <div class="col-md-12">
            <form
                method='POST'
                action='<?php WEBROOT ?>product/register'
            >
                <div class="form-group">
                    <label for="customerID">Customer:</label>
                    <input
                        id="customerID"
                        name="customerID"
                        type="hidden"
                        class="form-control"
                        value="<?php echo $customer['customerID'] ?? $_SESSION['user']['customerID'] ?? 0 ?>"
                        readonly
                    >
                    <input
                        id="customer"
                        name="customer"
                        type="text"
                        class="form-control"
                        placeholder="Customer"
                        value="<?php echo $customer['name'] ?? $_SESSION['user']['name'] ?? 'No Auth User' ?>"
                        readonly
                    >
                </div>

                <div class="form-group">
                    <label for="productCode">Product:</label>
                    <select
                        id="productCode"
                        name="productCode"
                        class="form-control"
                        required
                    >
                        <option value="">Select a Product</option>
                        <?php
                        foreach ($products ?? [] as $product) {
                            echo "
                            <option 
                                value='". $product['productCode'] ."'
                            >
                                    ". $product['name'] . ' ' .$product['version']."
                            </option>
                            ";
                        }
                        ?>
                    </select>
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Register
                </button>
            </form>
        </div>
    </div>

</div>