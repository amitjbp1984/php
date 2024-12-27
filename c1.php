<?php
class sc
{
    public $no1,$no2;
    public function display($num1,$num2)
    {
       $no1=$num1;
       $no2=$num2;
       echo $no1 + $no2;
    }
}
  $obj=new sc();
  $obj->display(2,4);
?>
 


