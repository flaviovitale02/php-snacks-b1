<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
</head>
<body>
    <div class="container">
        <h2>Accedi al tuo account</h2>
        <form method="POST" action= "./server.php">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="mail">Email:</label>
                <input type="text" name="mail" id="mail" required>
            </div>
            <div class="form-group">
                <label for="age">Età:</label>
                <input type="text" name="age" id="age" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Accedi">
            </div>
        </form>
    </div>
</body>
</html>
