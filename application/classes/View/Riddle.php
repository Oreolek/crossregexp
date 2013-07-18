<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Riddle view controller.
 **/
class View_Riddle extends View_Layout {
  public $riddle = array();
  public $scripts = array(
    '//yandex.st/jquery/2.0.3/jquery.min.js',
  );

  public function labels_vertical_top()
  {
    $output = '<div class="row">';
    foreach ($this->riddle['expressionsY'] as $expressions)
    {
      if (is_array($expressions))
      {
        $output .= '<label class="vertical l_top">'.$expressions[0].'</label>';
      }
      else
      {
        $output .= '<label class="vertical l_top">'.$expressions.'</label>';
      }
    }
    $output .= '</div>';
    return $output;
  }

  public function get_riddle()
  {
    $output = '';
    foreach($this->riddle['expressionsX'] as $expressions)
    {
      $output .= '<div class="row">';
      $label_left = $expressions;
      $label_right = '';
      if (is_array($expressions))
      {
        $label_left = $expressions[0];
        $label_right = $expressions[1];
      }
      $output .= '<label class="horizontal">'.$label_left.'</label>';
      foreach ($this->riddle['expressionsY'] as $columns)
      {
        $output .= '<div class="cell"><div class="b_border b_top"></div><input type="text"><div class="b_border b_bottom"></div></div>';
      }
      $output .= '<label class="horizontal">'.$label_right.'</label>';
      $output .= '</div>'."\n";
    }
    return $output;
  }

  public function labels_vertical_bottom()
  {
    $output = '<div class="row">';
    foreach ($this->riddle['expressionsY'] as $expressions)
    {
      if (is_array($expressions))
      {
        $output .= '<label class="vertical l_top">'.$expressions[1].'</label>';
      }
    }
    $output .= '</div>';
    return $output;
  }

  public function get_title()
  {
    return Arr::get($this->riddle, 'title');
  }
  
  public function get_difficulty()
  {
    return Arr::get($this->riddle, 'difficulty');
  }
}
