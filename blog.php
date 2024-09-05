<?php include('header.php'); ?>
    <div class="container">
        <h1>Blog</h1>
        <div class="blog-list">
            <?php
            include('db_connect.php');
            $result = $conn->query("SELECT * FROM blog_posts ORDER BY created_at DESC");
            while($row = $result->fetch_assoc()) {
                echo "<div class='blog-post'>";
                if ($row['image']) {
                    echo "<img src='images/" . $row['image'] . "' alt='" . $row['title'] . "'>";
                }
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p>" . substr($row['content'], 0, 150) . "...</p>"; // Show a preview of the content
                echo "<a href='blog_post.php?id=" . $row['id'] . "' class='btn-primary'>Leer más</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
<?php include('footer.php'); ?>
