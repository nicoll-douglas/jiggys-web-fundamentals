<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/global.css">
  <title><?php echo $title; ?></title>
  <?php
  if (isset($css_hrefs)):
    foreach ($css_hrefs as $css_href):
  ?>
      <link rel="stylesheet" href="<?php echo $css_href; ?>">
  <?php endforeach;
  endif; ?>

  <?php
  if (isset($script_srcs)):
    foreach ($script_srcs as $script_src):
  ?>
      <script src="<?php echo $script_src ?>" type="module"></script>
  <?php endforeach;
  endif; ?>
</head>

<body>
  <div id="container">
    <?php require_once __DIR__ . "/components/header.php"; ?>
    <div id="content">
      <?php require_once $content_file; ?>
    </div>
    <?php require_once __DIR__ . "/components/footer.php"; ?>
  </div>
</body>

</html>