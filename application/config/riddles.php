<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
  'tutorial1' => array(
    'difficulty' => 'trivial',
    'description' => 'Вертикальная черта -- это символ ИЛИ. Выражение `А|Б` означает "А ИЛИ Б".<br>Скобки объединяют символы в группы.',
    'title' => 'ИЛИ',
    'expressionsX' => array(
      'А|Б',
    ),
    'expressionsY' => array(
      '(А|Г)|Д',
    )
  ),
  'tutorial2' => array(
    'difficulty' => 'trivial',
    'title' => 'Квадратные скобки',
    'expressionsX' => array(
      '[АБВ]',
      '[^А-Г]',
    ),
    'expressionsY' => array(
      '[ВГД]+',
    )
  ),
  'battle1' => array(
    'difficulty' => 'anykeytowin',
    'title' => 'Первый бой',
    'expressionsX' => array(
      '[СУШКА].',
      '[ЦЕНА]Э|(АЯ|АД|КУ)',
    ),
    'expressionsY' => array(
      '[Ф-Ы]+',
      'Ы[ГРУША]?Э'
    )
  ),
);
