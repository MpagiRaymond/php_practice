<?php
require "backend/conn.php";
$query = "SELECT * FROM details";
$result = mysqli_query($conn, $query);
?>
<style>
<?php require "css/sliders.css"; ?>
    .table {
        margin-top: 20px;
        background-color: #f9f9f9;
    }
    .table th {
        background-color: #007bff;
        color: white;
    }
    .table-hover tbody tr:hover {
        background-color: #e9ecef;
    }
</style>
<article class="slide">
<table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>INFORMATION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if($result -> num_rows > 0){
            while ($rows = $result -> fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $rows["ID"]; ?></td>
                        <td><?php echo $rows["NAME"]; ?></td>
                        <td><?php echo $rows["EMAIL"]; ?></td>
                        <td><?php echo $rows["INFORMATION"]; ?></td>
                    </tr>
                    <?php
            }
        }else{
            ?>
            <tr align="center">
                <td colspan=4>No data found</td>
            </tr>
            <?php
        }
            ?>
        </tbody>
    </table>
</article>
