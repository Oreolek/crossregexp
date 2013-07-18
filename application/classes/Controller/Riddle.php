<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Riddle extends Controller_Layout {
  /**
   * Index page.
   **/
  public function action_index()
  {
    $this->template = new View_Index;
  }

  public function action_memo()
  {
    $this->template = new View_Memo;
  }

  public function action_solve()
  {
    $this->template = new View_Riddle;
    $level = $this->request->param('level');
    $riddles = $navigation = Kohana::$config->load('riddles')->get($level);
    if (empty($level))
    {
      return $this->request->redirect('error/404');
    }

  }
}
