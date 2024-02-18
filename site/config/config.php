<?php

use tobimori\Spielzeug\Menu;

require_once __DIR__ . '/../plugins/kirby3-dotenv/global.php';
loadenv([
  'dir' => realpath(__DIR__ . '/../../'),
  'file' => '.env'
]);

return [
  'debug' => json_decode(env('KIRBY_DEBUG')),
  'yaml.handler' => 'symfony',
  'date.handler' => 'intl',

  # Panel
  'panel' => [
    'css' => 'public/assets/css/panel.css',
    'menu' => fn () => [
      'site' => Menu::site(),
      '-',
      'languages',
      'users',
      'system'
    ]
  ],

  # Authentication
  'auth' => [
		'methods' => ['password', 'password-reset'],
		'challenge' => [
			'email' => [
				'from' => env("KIRBY_MAIL_FROM"),
				'subject' => 'Login code'
			]
		]
	]
];