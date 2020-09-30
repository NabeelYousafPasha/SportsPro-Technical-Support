<div class="container">

    <h1>Customers Search</h1>
    <div class="row">
        <div class="col-md-12">
            <form
                action="<?php WEBROOT ?>customer/index"
                method="POST"
            >
                <div class="form-group">
                    <label for="lastName"></label>
                    <input
                        id="lastName"
                        name="lastName"
                        placeholder="Search via Last Name"
                        class="form-control"
                        value="<?php echo $searchedLastName ?? '' ?>"
                        required
                    >
                </div>
                <button
                    type="submit"
                    class="btn btn-primary btn-xs float-right pull-right"
                >
                    Search
                </button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($customers ?? [] as $customer)
                        {
                            echo '<tr>';
                            echo "<td>" . $customer['firstName'] .' '. $customer['lastName'] . "</td>";
                            echo "<td>" . $customer['email'] . "</td>";
                            echo "<td>" . $customer['city'] . "</td>";
                            echo "<td class='text-center'>
                                    <a 
                                        class='btn btn-success btn-sm' 
                                        href=". WEBROOT ."customer/show/" . $customer["customerID"] . "
                                    ><i class='fa fa-caret-right fa-fw'></i></a>
                                </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>