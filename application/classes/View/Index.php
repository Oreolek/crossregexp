<?php defined('SYSPATH') or die('No direct script access.');

class View_Index extends View_Message {
  public $_view = 'message';
  public $title = 'Кроссворды регулярных выражений (регэкспов)';
  public $message = <<<'EOF'
Тут будет много текста про то, что это КРУТО и ИНТЕРЕСНО.

Или нет?

### Как в это играть?
Тут будет картинка
EOF;
}
