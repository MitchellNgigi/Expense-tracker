<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <h1>Receipt</h1>
    <div id="imageContainer">
        <?php
        // Path to the uploads folder
        $path = 'uploads/';

        // Get all files in the uploads folder
        $files = glob($path . '*');

        // Display each image
        foreach ($files as $file) {
            echo '<img src="' . $file . '" alt="Receipt Image">';
        }
        ?>
    </div>
</body>
</html>





