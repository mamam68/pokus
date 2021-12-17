<?php 


 require_once('rekurzeClass.php'); 
 require_once('DateUtils.php');
//phpinfo();
$datum = new DateUtils;
echo $datum->dbNow();
echo $datum->prettyDate($datum->dbNow());
echo '***Toto je malá úprava*********';


$pole = new rekurzeClass;
$menu = array( // Presumed to have been coming from a SQL SELECT, populated for demo.
   array('id' => 1, 'title' => 'Menu 1', 'parent_id' => null),
   array('id' => 2, 'title' => 'Sub 1.1', 'parent_id' => 1),
   array('id' => 3, 'title' => 'Sub 1.2', 'parent_id' => 1),
   array('id' => 4, 'title' => 'Sub 1.3', 'parent_id' => 1),
   array('id' => 5, 'title' => 'Menu 2', 'parent_id' => 0),
   array('id' => 6, 'title' => 'Sub 2.1', 'parent_id' => 5),
   array('id' => 7, 'title' => 'Sub Sub 2.1.1', 'parent_id' => 6),
   array('id' => 8, 'title' => 'Sub 2.2', 'parent_id' => 5),
   array('id' => 9, 'title' => 'Menu 3', 'parent_id' => 0),
   array('id' => 10, 'title' => 'Menu 3', 'parent_id' => 0),
   array('id' => 11, 'title' => 'Menu 3', 'parent_id' => 0),
   array('id' => 12, 'title' => 'Menu 3', 'parent_id' => 0),
   array('id' => 13, 'title' => 'Menu 3', 'parent_id' => 0),
   array('id' => 14, 'title' => 'Menu 3', 'parent_id' => 0),
   array('id' => 15, 'title' => 'Menu xxx', 'parent_id' =>14),
   array('id' => 16, 'title' => 'Menu 3', 'parent_id' => 15),
   array('id' => 17, 'title' => 'Menu 3', 'parent_id' => 16),
   array('id' => 18, 'title' => 'Menu 3', 'parent_id' => 17),
   array('id' => 19, 'title' => 'Menu 3', 'parent_id' => 18),
   array('id' => 20, 'title' => 'Menu xxx', 'parent_id' =>19),
);

echo $pole->build_menu($menu);
