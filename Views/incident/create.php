<div class="container">

    <h1>Create Incident</h1>
    <br>

    <div class="row">
        <div class="col-md-12">
            <form
                method='POST'
                action='<?php WEBROOT ?>incident/create'
            >
                <div class="form-group">
                    <label for="customerID">Customer:</label>
                    <input
                        id="customerID"
                        name="customerID"
                        type="hidden"
                        class="form-control"
                        value="<?php echo $customer['customerID'] ?? 0 ?>"
                        readonly
                    >
                    <input
                        id="customer"
                        name="customer"
                        type="text"
                        class="form-control"
                        placeholder="Customer"
                        value="<?php echo $customer['firstName'] . ' ' . $customer['lastName'] ?? 'No customer' ?>"
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
                                    ". $product['productCode']."
                            </option>
                            ";
                        }
                        ?>
                    </select>
                    <span class="help-block">
                        Product Registered By Customer selected
                    </span>
                </div>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input
                        id="title"
                        name="title"
                        type="text"
                        class="form-control"
                        placeholder="Title for Incident"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea
                        id="description"
                        name="description"
                        class="form-control"
                        placeholder="Description of Incident"
                        required
                    ></textarea>
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Create Incident
                </button>
            </form>
        </div>
    </div>

</div>