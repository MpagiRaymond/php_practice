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
    .table-container {
        max-height: 300px; /* Set your desired max height */
        overflow-y: scroll; /* Enable vertical scrolling */
    }
    .table th {
        background-color: #007bff;
        color: white;
    }
    .table-hover tbody tr:hover {
        background-color: #e9ecef;
    }
    main{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }
</style>
<article class="slide">

    <div class="table-container">
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
</div>

<!-- comments -->
<div class="comments-container">
    <h2>Comments</h2>
    <div class="comments-list">
        <?php
        require "backend/comm.php";

        $sql = "SELECT name, comment FROM personal_views ORDER BY name DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // print_r($row);
                echo "<div class='comment'>";
                echo "<p><strong>" . htmlspecialchars($row["name"]) . "</strong> (" . $row["name"] . ")</p>";
                echo "<p>" . nl2br(htmlspecialchars($row["comment"])) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No comments yet. Be the first to comment!</p>";
        }

        $conn->close();
        ?>
    </div>
</div>
