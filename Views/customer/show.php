<div class="container">

    <h1>View / Update Customer</h1>
    <div class="row">
        <div class="col-md-12">
            <a
                href="<?php WEBROOT ?>customer/index"
                class="btn btn-primary btn-xs float-right pull-right"
            >
                Search Customer
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form
                method="POST"
                action="<?php WEBROOT ?>customer/update/<?php echo $customer['customerID'] ?? '' ?>"
            >
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input
                        id="firstName"
                        name="firstName"
                        type="text"
                        class="form-control"
                        placeholder="Enter First Name"
                        value="<?php echo $customer['firstName'] ?? '' ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input
                        id="lastName"
                        name="lastName"
                        type="text"
                        class="form-control"
                        placeholder="Enter Last Name"
                        value="<?php echo $customer['lastName'] ?? '' ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea
                        id="address"
                        name="address"
                        class="form-control"
                        placeholder="Enter Last Name"
                        required
                    ><?php echo $customer['address'] ?? '' ?></textarea>
                </div>

                <div class="form-group">
                    <label for="city">City:</label>
                    <input
                        id="city"
                        name="city"
                        type="text"
                        class="form-control"
                        placeholder="Enter Email"
                        value="<?php echo $customer['city'] ?? '' ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="state">State:</label>
                    <input
                        id="state"
                        name="state"
                        type="text"
                        class="form-control"
                        placeholder="Enter Email"
                        value="<?php echo $customer['state'] ?? '' ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="postalCode">Postal Code:</label>
                    <input
                        id="postalCode"
                        name="postalCode"
                        type="text"
                        class="form-control"
                        placeholder="Enter Email"
                        value="<?php echo $customer['postalCode'] ?? '' ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="countryCode">Country Code:</label>
                    <input
                        id="countryCode"
                        name="countryCode"
                        type="text"
                        class="form-control"
                        placeholder="Enter Email"
                        value="<?php echo $customer['countryCode'] ?? '' ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input
                        id="phone"
                        name="phone"
                        type="text"
                        class="form-control"
                        placeholder="Enter Phone"
                        value="<?php echo $customer['phone'] ?? '' ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        class="form-control"
                        placeholder="Enter Email"
                        value="<?php echo $customer['email'] ?? '' ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="form-control"
                        placeholder="Enter Password"
                        value="<?php echo $customer['password'] ?? '' ?>"
                        required
                    >
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>

</div>