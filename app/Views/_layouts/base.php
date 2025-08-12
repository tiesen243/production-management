<!doctype html>
<html lang="en" class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link href="/css/globals.css" rel="stylesheet" />

    <title>
      <?php echo htmlspecialchars( !empty($title) ? $title . ' | Production
      Management' : 'Production Management', ); ?>
    </title>
    <meta
      name="description"
      content="<?php echo htmlspecialchars(
        $description ?? 'A modern PHP framework for building web applications.',
      ); ?>"
    />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  </head>

  <body>
    <?php echo $content; ?>
  </body>
</html>
