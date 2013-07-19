<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
  'title' => 'Кроссворд регулярных выражений',
  'page_size' => 20, // pagination
  'navigation' => array(
    'Как в это играть?' => 'riddle/index',
    'Напомнить выражения' => 'riddle/memo',
    'Обучение: |' => 'riddle/solve/tutorial1',
    'Обучение: []' => 'riddle/solve/tutorial2',
    'Учебный бой' => 'riddle/solve/battle1'
  ),
  'difficulties' => array(
    'trivial' => 'Простейшее',
    'anykeytowin' => 'Пара извилин',
    'wargame' => 'Настольная игра',
    'headbanger' => 'Головоломка',
    'programmer' => 'Высокое напряжение',
    'perlguru' => 'Собеседование на программиста Perl'
  )
);
