<?php
session_start();
include '../connection/dbconnection.php';
include './AdminHeader.php';
?>
<!-- Reports -->
<div class="col-12" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body" style="background-color: #ee244b;">
            <h4 class="h1-txt">Organizers Details</h4>
        </div>
    </div>
</div><!-- End Reports -->

<!-- <div class="container"> -->
    <section>
        <table class="table table-dark table-hover" style="margin-top: 0px;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Company Name</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $qry = "SELECT * FROM `user_login` JOIN `vendor_registration` ON `user_login`.`vendor_id`= `vendor_registration`.`vendor_id` WHERE `status` = 'approved' ";
                // echo $qry;
                $result = mysqli_query($con, $qry);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['vendor_id'];

                        echo "<tr>";

                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["company_name"] . "</td>";
                        echo "<td>" . $row["category"] . "</td>";
                        echo "<td> <a class='btn btn-outline-danger' href='./DeleteUser.php? id={$id}&status=rejected'> Remove </a> </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'> No Data Available</td> </tr>";
                }
                ?>
            </tbody>
        </table>
<!-- </div> -->

<?php
include './AdminFooter.php';
?>