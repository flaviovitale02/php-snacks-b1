<?php
            $name = $_POST["name"];
            $mail = $_POST["mail"];
            $age = $_POST["age"];

            if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($age)) {
                $passed = "passed";
            } else {
                $passed = "deny";
            }
        ?>

<!DOCTYPE html>
<html>
<head>
    <title>Risultato Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container <?php echo $passed; ?>">
        <?php
            if ($passed === "passed") {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        ?>
    </div>
</body>
</html>