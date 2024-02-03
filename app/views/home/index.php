<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MVC App</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div div class="container">
            <h1>Padrão MVC - Fabio Garbato</h1>
            <?php if (isset($users) && is_array($users)): ?>
                <form action="" method="post">
                    <label for="userSelect">Name:</label>
                    <select id="userSelect" name="user" onchange="updateFormFields()">
                        <option value="">Selecione um usuário</option>
                        <?php foreach ($users as $user): ?>
                            <option value="<?php echo $user['id']; ?>">
                                <?php echo htmlspecialchars($user['name']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <input type="submit" value="Save Changes">
                </form>
            <?php else: ?>
                <p>No users found.</p>
            <?php endif; ?>
        </div>
        <script>
            const users = <?php echo json_encode($users); ?>;
            const emailField = document.getElementById('email');
            const userSelect = document.getElementById('userSelect');

            function updateFormFields() {
                const selectedId = userSelect.value;
                const user = users.find(u => u.id == selectedId);
                if (user) {
                    emailField.value = user.email;
                } else {
                    emailField.value = ''; 
                }
            }
        </script>
    </body>
</html>
