<div class="container">

    <h1>Products List</h1>
    <div class="row">
        <div class="col-md-12">
            <a
                href="<?php WEBROOT ?>product/create"
                class="btn btn-primary btn-xs float-right pull-right"
            >
                Add New Product
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
                        <th>Code</th>
                        <th>Name</th>
                        <th>Version</th>
                        <th>Release Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($products ?? [] as $product)
                    {
                        echo '<tr>';
                        echo "<td>" . $product['productCode'] . "</td>";
                        echo "<td>" . $product['name'] . "</td>";
                        echo "<td>" . $product['version'] . "</td>";
                        echo "<td>" . $product['releaseDate'] . "</td>";
                        echo "<td class='text-center'>
                                <a 
                                    class='btn btn-danger btn-sm' 
                                    href=". WEBROOT ."product/delete/" . $product["productCode"] . "
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