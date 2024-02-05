<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Movies</title>

    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px;
        }

        li {
            background-color: #fff;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }
    </style>

    <?php
    include_once 'Models/Movie.php';
    include_once 'db.php';
    ?>
</head>

<body>
    <h1>List of Movies</h1>

    <ul>
        <?php
        foreach ($movies as $movie) {
            echo '<li>';
            $movie->displayInfo();
            echo '</li>';
        }
        ?>
    </ul>
</body>

</html>