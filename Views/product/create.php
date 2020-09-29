<div class="container">

    <h1>Create Product</h1>
    <div class="row">
        <div class="col-md-12">
            <a
                href="<?php WEBROOT ?>product/index"
                class="btn btn-primary btn-xs float-right pull-right"
            >
                View Product List
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form
                method='POST'
                action='#'
            >
                <div class="form-group">
                    <label for="productCode">Code:</label>
                    <input
                        id="productCode"
                        name="productCode"
                        type="text"
                        class="form-control"
                        placeholder="Enter Code"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        class="form-control"
                        placeholder="Enter Name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="version">Version:</label>
                    <input
                        id="version"
                        name="version"
                        type="text"
                        class="form-control"
                        placeholder="Enter Version"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="releaseDate">Release Date:</label>
                    <input
                        id="releaseDate"
                        name="releaseDate"
                        type="date"
                        class="form-control"
                        placeholder="Enter Release Date"
                        required
                    >
                    <span class="help-text">
                        Use 'yyyy-mm-dd' format for date
                    </span>
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