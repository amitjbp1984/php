<?php
class sc
{
   
    public $no1,$no2;
    public function display($num1,$num2)
    {
       $no1=$num1;
       $no2=$num2;
       echo $num1 + $num2;
    }
}
class abc extends sc
{
	public function result($num1,$num2)
	{
		$no1=$num1;
		$no2=$num2;
		echo $num1 * $num2;
	}
}
  $obj=new sc();
  $obj->display(2,4);
  $obj1=new abc();
  $obj1->result(5,5);		

?>
