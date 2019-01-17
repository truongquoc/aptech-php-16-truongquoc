<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- CLASS ---
 *
 *
 */

echo "<h1>1. CLASS</h1>";


class Hero
{
protected $name;
private $skill; 

public function __construct($name = "Undefined",$skill="undefined")
{

$this->name = $name;
$this->skill=$skill;
}

public function setName($name)
{
$this->name = $name;
return $this;
}
public function setskill($skill)
{
	$this->skill=$skill;
	
}

public function display()
{
echo $this->name;
echo $this->skill;
}

public function __destruct()
{
echo "<br>End of class";
}

}

class Antimage extends Hero
{
public function __construct()
{
parent::__construct();
echo $this->name;
}

public function setName($name)
{
echo "You can not setName is $name for this hero.<br>";
return $this;
}
}

$newhero = new Antimage('Shadowfriend');

