<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>

  <?php require_once __DIR__ . "/components/font.php" ?>
  <?php require_once __DIR__ . "/components/csp.php"; ?>

  <link rel="stylesheet" href="/assets/css/global.css">
  <link rel="stylesheet" href="/assets/css/api.css">
</head>

<body>
  <p class="<?php echo $error ? "message-error" : "message-success"; ?>">
    <?php echo $view; ?>
  </p>
  <?php if (isset($link)): ?>
    <a href="<?php echo $link["href"]; ?>">
      <?php echo $link["text"] ?>
    </a>
  <?php else: ?>
    <a href="/">Back to home</a>
  <?php endif; ?>
</body>

</html>