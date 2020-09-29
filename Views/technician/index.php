<div class="container">

    <h1>Technicians List</h1>
    <div class="row">
        <div class="col-md-12">
            <a
                href="<?php WEBROOT ?>technician/create"
                class="btn btn-primary btn-xs float-right pull-right"
            >
                Add New Technician
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($technicians ?? [] as $technician)
                    {
                        echo '<tr>';
                        echo "<td>" . $technician['firstName'] . "</td>";
                        echo "<td>" . $technician['lastName'] . "</td>";
                        echo "<td>" . $technician['email'] . "</td>";
                        echo "<td>" . $technician['phone'] . "</td>";
                        echo "<td>" . $technician['password'] . "</td>";
                        echo "<td class='text-center'>
                                <a 
                                    class='btn btn-danger btn-sm' 
                                    href=". WEBROOT ."technician/delete/" . $technician["techID"] . "
                                ><i class='fa fa-trash fa-fw'></i></a>
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