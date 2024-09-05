<?php
include('db_connect.php');
$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$result = $conn->query("SELECT * FROM blog_posts WHERE id = $post_id");
$post = $result->fetch_assoc();
include('header.php');
?>
    <div class="container">
        <?php if ($post): ?>
            <h1><?php echo htmlspecialchars($post['title']); ?></h1>
            <?php if ($post['image']): ?>
                <img src="images/<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
            <?php endif; ?>
            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
        <?php else: ?>
            <p>Publicación no encontrada.</p>
        <?php endif; ?>
    </div>
<?php include('footer.php'); ?>
