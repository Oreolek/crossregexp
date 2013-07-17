<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
  'title' => 'Кроссворд регулярных выражений',
  'page_size' => 20, // pagination
  'navigation' => array(
    'Как в это играть?' => 'riddle/index',
    'Напомнить выражения' => 'riddle/memo',
    'Обучение' => 'riddle/solve/excel',
    'Простые загадки' => 'riddle/solve/anykeytowin',
    'Продвинутые загадки' => 'riddle/solve/wargames',
    'Головоломки' => 'riddle/solve/headbangers',
    'Палиндромеда' => 'riddle/solve/programmer',
    'Подстава' => 'riddle/solve/perlgurus',
  )
);
