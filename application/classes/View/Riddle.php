<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Riddle view controller.
 **/
class View_Riddle extends View_Layout {
  public $riddle = array();
  public $scripts = array(
    'http://yandex.st/jquery/2.0.3/jquery.min.js',
    'check.js'
  );

  public function labels_vertical_top()
  {
    $output = '<div class="row">';
    $i = 0;
    foreach ($this->riddle['expressionsY'] as $expressions)
    {
      $i++;
      if (is_array($expressions))
      {
        $output .= '<label class="vertical l_top" data-column="col_'.$i.'">'.$expressions[0].'</label>';
      }
      else
      {
        $output .= '<label class="vertical l_top" data-column="col_'.$i.'">'.$expressions.'</label>';
      }
    }
    $output .= '</div>';
    return $output;
  }

  public function get_riddle()
  {
    $output = '';
    $i = 0;
    foreach($this->riddle['expressionsX'] as $expressions)
    {
      $i++;
      $output .= '<div class="row">';
      $label_left = $expressions;
      $label_right = '';
      if (is_array($expressions))
      {
        $label_left = $expressions[0];
        $label_right = $expressions[1];
      }
      $output .= '<label class="horizontal" data-row="row_'.$i.'">'.$label_left.'</label>';
      $j = 0;
      foreach ($this->riddle['expressionsY'] as $columns)
      {
        $j++;
        $output .= '<div class="cell row_'.$i.' col_'.$j.'"><div class="b_border b_top"></div><input type="text"><div class="b_border b_bottom"></div></div>';
      }
      $output .= '<label class="horizontal" data-row="row_'.$i.'">'.$label_right.'</label>';
      $output .= '</div>'."\n";
    }
    return $output;
  }

  public function labels_vertical_bottom()
  {
    $output = '<div class="row">';
    $i = 0;
    foreach ($this->riddle['expressionsY'] as $expressions)
    {
      $i++;
      if (is_array($expressions))
      {
        $output .= '<label class="vertical l_bottom data-column="col_'.$i.'">'.$expressions[1].'</label>';
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
    $difficulties = Kohana::$config->load('common')->get('difficulties');
    $difficulty_index = Arr::get($this->riddle, 'difficulty');
    return Arr::get($difficulties, $difficulty_index);
  }
}
