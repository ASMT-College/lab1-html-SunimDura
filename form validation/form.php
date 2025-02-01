<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <?php
    $nameError = $ageError = $descError = "";
    $name = $age = $desc = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;
        
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);
        $desc = trim($_POST['desc']);

        if ($name == '') {
            $nameError = "Name is required";
            $isValid = false;
        } elseif (strlen($name) < 4) {
            $nameError = "Name must be at least 4 characters";
            $isValid = false;
        }

        if ($age == '') {
            $ageError = "Age is required";
            $isValid = false;
        } elseif (!is_numeric($age) || $age < 18) {
            $ageError = "Age must to 18 or more";
            $isValid = false;
        }

        if ($desc == '') {
            $descError = "Description is required";
            $isValid = false;
        }

        if ($isValid) {
            echo "<p class='success'>Form submitted successfully!</p>";
        }
    }
    ?>
    <h1> Form Validation</h1>
    <form action="" method="post" onsubmit="return validateForm()">
        <label for="name">Name</label> <br>
        <input type="text" name="name" id="name" > <br>
        <span class="error" id="nameError"><?php echo $nameError; ?></span> <br><br>

        <label for="age">Age</label> <br>
        <input type="number" name="age" id="age"> <br>
        <span class="error" id="ageError"><?php echo $ageError; ?></span> <br><br>

        <label for="desc">Description</label> <br>
        <input type="text" name="desc" id="desc"> <br>
        <span class="error" id="descError"><?php echo $descError; ?></span> <br><br>

        <button type="submit">Submit Form</button>
    </form>

    <script>
        function validateForm() {
            let isValid = true;

            document.getElementById('nameError').textContent = '';
            document.getElementById('ageError').textContent = '';
            document.getElementById('descError').textContent = '';

            const name = document.getElementById('name').value.trim();
            const age = parseInt(document.getElementById('age').value);
            const desc = document.getElementById('desc').value.trim();

            if (name === '') {
                document.getElementById('nameError').textContent = 'Name is required';
                isValid = false;
            } else if (name.length < 4) {
                document.getElementById('nameError').textContent = 'Name must be at least 4 characters';
                isValid = false;
            }

            if (isNaN(age) || document.getElementById('age').value === '') {
                document.getElementById('ageError').textContent = 'Age is required';
                isValid = false;
            } else if (age < 18) {
                document.getElementById('ageError').textContent = 'Age must be 18 or more';
                isValid = false;
            }

            if (desc === '') {
                document.getElementById('descError').textContent = 'Description is required';
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>
</html>
