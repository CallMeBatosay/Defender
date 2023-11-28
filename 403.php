<html>
<head>
    <title>403 Forbidden</title>
</head>
<body>
    <h1>Forbidden</h1>
    <?php
    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $url_parts = pathinfo($url_path);
    
    echo '<p>You don\'t have permission to access ' . $url_parts['dirname'] . '/' . $url_parts['basename'] . ' on this server.</p>';
    ?>
    <hr>
</body>
</html>
