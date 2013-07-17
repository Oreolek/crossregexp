<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Riddle extends Controller_Layout {
  /**
   * Index page.
   **/
  public function action_index()
  {
    $this->template = new View_Message;
    $this->template->title = 'Кроссворды регулярных выражений (регэкспов)';
    $this->template->message = <<<EOF
Добро пожаловать в мир новой головоломки!
### Как в это играть?
EOF;
  }

  public function action_memo()
  {
    $this->template = new View_Message;
    $this->template->title = 'Напоминалка: регулярные выражения и как их читать';
    $this->template->message = <<<'EOF'
Для простоты мы не используем никаких модификаторов. В строке и столбце кроссворда используются одинарные строки, поэтому можете не заботиться о символах вроде `\n`.

* `n*` ноль или больше `n`
* `n+` один или больше `n`
* `n?` ровно один или ноль `n`
* `n{2}` ровно два `n`
* `n{2,}` два или больше `n`
* `n{2,4}` два, три или четыре `n`
* `.` (точка) любой символ в строке
* `(...)`	скобки объединяют символы в группу
* `\1` первая группа
* `\2` вторая группа
* `(A|B)` A или B
* `[ABC]` A, B или C
* `[^ABC]` Любой символ, кроме A, B или C
* `[A-Z]` Все буквы от A до Z в верхнем регистре
* `[0-9]` Цифра от 0 до 9
* `[A-Z0-9]` Все буквы от A до Z и цифры от 0 до 9
* `\d` любая цифра
* `\s` пробел
* `\w` любая буква
* `\D` любой символ кроме цифр
* `\S` любой символ кроме пробелов
* `\W` любой символ кроме букв
EOF;
  }

  public function action_solve()
  {
    $this->template = new View_Message;
    $level = $this->request->param('level');
    $riddles = $navigation = Kohana::$config->load('riddles')->get($level);
    if (empty($level))
    {
      return $this->request->redirect('error/404');
    }
  }
}
