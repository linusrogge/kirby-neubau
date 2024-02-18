<?php

use Kirby\Cms\App as Kirby;
use Kirby\Data\Yaml;
use Kirby\Filesystem\Dir;
use Kirby\Filesystem\F;
use Kirby\Toolkit\A;

Kirby::plugin('project/extended', [
  'translations' => A::keyBy(A::map(
    Dir::read($dir = dirname(__DIR__, 2) . '/translations'),
    fn ($file) => A::merge(['lang' => F::name($file)], Yaml::decode(F::read($dir . '/' . $file)))
	), 'lang')
]);