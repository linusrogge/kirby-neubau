<!DOCTYPE html>
<html lang="<?= $kirby->currentLanguage() ?? 'en' ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $site->title() ?></title>

  <?= css('assets/css/styles.css') ?>
</head>
<body>
  <?= snippet('core/nav') ?>
  <main id="main">
    <?= $slot ?>
  </main>
  <?= snippet('core/footer') ?>
</body>
</html>