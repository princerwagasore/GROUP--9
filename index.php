<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RWAGASORE Severance PHP</title>
    <style>
        body {
            font-family: monospace;
            background-color: #eef;
            padding: 20px;
        }
        pre {
            margin-left: 4ch; 
        }
    </style>
</head>
<body>
    <h1>RWAGASORE Severance PHP</h1>

<?php
$name = "RWAGASORE"; 
$firstLetter = strtoupper($name[0]);
$asciiArt = "";

// ASCII R with stars
if ($firstLetter == 'R') {
    $asciiArt =
        "    *****  \n" .
        "    *    * \n" .
        "    *    * \n" .
        "    *****  \n" .
        "    *  *   \n" .
        "    *   *  \n" .
        "    *    * ";
} else {
    $asciiArt = "    [ASCII star art for '$firstLetter' not defined]";
}

$hash = hash('sha256', $name);
?>

<pre><?php echo $asciiArt; ?></pre>

<p>SHA256 of <?php echo htmlspecialchars($name); ?>:<br>
<code><?php echo $hash; ?></code></p>

</body>
</html>