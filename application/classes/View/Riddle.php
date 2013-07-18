<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Riddle view controller.
 **/
class View_Riddle extends View_Layout {
  public $scripts = array(
    '//yandex.st/jquery/2.0.3/jquery.min.js',
  );
  public function get_message()
  {
    return Markdown::instance()->transform($this->message);
  }
}
