<!DOCTYPE html>
<html lang="<?= $kirby->currentLanguage() ?? 'en' ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?></title>

  <?php if ($favicon = $site->favicon()->toFile()): ?>
    <link rel="icon" type="<?= $favicon->mime() ?>" href="<?= $favicon->url() ?>">
  <?php endif; ?>

  <?= css('assets/css/styles.css') ?>
</head>
<body>
  <?= snippet('core/nav') ?>
  <main id="main">
    <?= $slot ?>
  </main>
  <?= snippet('core/footer') ?>

  <?= js('assets/js/scripts.js') ?>
</body>
</html>