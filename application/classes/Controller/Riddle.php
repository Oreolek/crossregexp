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
    $riddle = $this->request->param('riddle');
    if (empty($riddle))
    {
      $riddle = Kohana::$config->load('riddles')->get('tutorial1');
    }
    else {
      $riddle = Kohana::$config->load('riddles')->get($riddle);
    }
    if (empty($riddle))
    {
      return $this->request->redirect('error/404');
    }
    $this->template->riddle = $riddle;
  }
}
