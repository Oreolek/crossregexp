<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Layout extends Controller {
  public $auto_render = TRUE;
  public $template = '';

  public function after()
  {
    if ($this->auto_render)
    {
      $renderer = Kostache_Layout::factory('layout');
      $this->response->body($renderer->render($this->template, $this->template->_view));
    }
  }
}
