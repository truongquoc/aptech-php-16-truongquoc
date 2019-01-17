<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- CLASS ---
 *
 *
 */

echo "<h1>1. CLASS</h1>";

/*
 * EXERCISE 1 : Create class Project with __construct, set, get and display functions. Create an instance and display your project's name.
 *
 */


 


class hero
{
	protected $name;
	
	function __construct($name="underfine")
	{
		$this->name=$name;
		
	}
	
	function setname($name)
	{
		$this->name=$name;
		
	}
	function getname()
	{
		echo $this->name;
	}
	
	function __decstruct()
	{
		echo "end of class";
	}
	
	
}
$_newhero=new Hero('EarthShaker');
$_newhero->setName('ShadowFriend');
$_newhero->getName();echo"<br>";
$_newhero->__decstruct();