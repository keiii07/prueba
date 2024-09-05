<?php include('header.php'); ?>
    <div class="container">
        <h1>Contáctanos</h1>
        <form action="contact.php" method="post">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required></textarea>
            
            <input type="submit" value="Enviar">
        </form>
    </div>


<?php include('footer.php'); ?>
