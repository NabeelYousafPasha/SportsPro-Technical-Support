<div class="container">

    <h1>Create Technician</h1>
    <div class="row">
        <div class="col-md-12">
            <a
                href="<?php WEBROOT ?>technician/index"
                class="btn btn-primary btn-xs float-right pull-right"
            >
                View Technician List
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form
                method="POST"
                action="<?php WEBROOT ?>technician/create"
            >
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input
                        id="firstName"
                        name="firstName"
                        type="text"
                        class="form-control"
                        placeholder="Enter First Name"
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