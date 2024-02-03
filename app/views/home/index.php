<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MVC App</title>
    </head>
    <body>
        <h1>Padrão MVC - Fabio Garbato</h1>
        <?php if (isset($user)): ?>
            <form action="/path/to/your/form/handler" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

                <input type="submit" value="Save Changes">
            </form>
        <?php else: ?>
            <p>User not found.</p>
        <?php endif; ?>
    </body>
</html>
