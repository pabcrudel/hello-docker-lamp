<?php
$connection = mysqli_connect(
  'database', 'pablocru', 'password', 'pablocru_database'
);
$query = 'SELECT * FROM blog';
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css" />
</head>

<body>
  <h1>Blog</h1>

  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="info.php">Server info</a></li>
    </ul>
  </nav>

  <?php
  while($record = mysqli_fetch_assoc($result)) {
    echo '<section>';
    echo '<h2>'.$record['title'].'</h2>';
    echo '<p>'.$record['content'].'</p>';
    echo '<p>Posted on: '.$record['date'].'</p>';
    echo '</section><hr>';
  }
  ?>
</body>

</html>