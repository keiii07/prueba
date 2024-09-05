<?php include('header.php'); ?>

    <div class="container">
        <h1>Servicios</h1>
        <div class="service-list">
            <?php
            include('db_connect.php');
            $result = $conn->query("SELECT * FROM services");
            while($row = $result->fetch_assoc()) {
                echo "<div class='service-item'>";
                echo "<img src='images/" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "<h2>" . $row['name'] . "</h2>";
                echo "<p>" . $row['description'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

<?php include('footer.php'); ?>
