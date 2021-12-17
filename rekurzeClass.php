<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of rekurzeClass
 *
 * @author Miloš
 */
class rekurzeClass {
/**  
private $menu = array( // Presumed to have been coming from a SQL SELECT, populated for demo.
   array('id' => 1, 'title' => 'Menu 1', 'parent_id' => 0),
   array('id' => 2, 'title' => 'Sub 1.1', 'parent_id' => 1),
   array('id' => 3, 'title' => 'Sub 1.2', 'parent_id' => 1),
   array('id' => 4, 'title' => 'Sub 1.3', 'parent_id' => 1),
   array('id' => 5, 'title' => 'Menu 2', 'parent_id' => 0),
   array('id' => 6, 'title' => 'Sub 2.1', 'parent_id' => 5),
   array('id' => 7, 'title' => 'Sub Sub 2.1.1', 'parent_id' => 6),
   array('id' => 8, 'title' => 'Sub 2.2', 'parent_id' => 5),
   array('id' => 9, 'title' => 'Menu 3', 'parent_id' => 0),
);
 * 
 */

private function has_children($rows,$id) {
  foreach ($rows as $row) {
    if ($row['parent_id'] == $id)
      return true;
  }
  return false;
}
function build_menu($rows,$parent=0)
{  
  $result = "<ul>";
  foreach ($rows as $row)
  {
    if ($row['parent_id'] == $parent){
      $result.= "<li>{$row['title']}";
      if ($this->has_children($rows,$row['id']))
        $result.= $this->build_menu($rows,$row['id']);
      $result.= "</li>";
    }
  }
  $result.= "</ul>";

  return $result;
}
//echo build_menu($menu);
}
