<?php
/**
 * @file
 * Implementation to display a single Backdrop page while offline.
 */
?>

<!DOCTYPE html>
<html<?php print backdrop_attributes($html_attributes); ?>>
<head>

  <?php print backdrop_get_html_head(); ?>
  <title><?php print $head_title; ?></title>
  <?php print backdrop_get_css(); ?>

</head>
<body class="<?php print implode(' ', $classes); ?>">

  <main role="main" class="<?php print implode(' ', $main_classes); ?>">
    <?php if (!empty($title)): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>

    <?php print $content; ?>
  </main>

</body>
</html>

