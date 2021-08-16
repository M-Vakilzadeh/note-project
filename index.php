<html>
  <head>
    <meta charset="UTF-8">
</head>
<body>
    
    <?php
    require_once('main.php');
    $db = Db::getInstance();
    $records = $db->query("SELECT * FROM x_note");
    dump($records);
  ?>
</body>
</html>