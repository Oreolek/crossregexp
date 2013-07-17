<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Simple message view controller.
 * Contains a single text message to print.
 **/
class View_Message extends View_Layout {
  public $message;
  public function get_message()
  {
    return Markdown::instance()->transform($this->message);
  }
}
