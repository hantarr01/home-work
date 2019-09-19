<?php 

class ClassName {
	
	public function func1(){
		echo "nothing";
	}
}

interface InterfaceName{

	public function func2();
}

trait TraitName{

	public function func3(){
		echo "matter";
	}
}

var_dump(new class(1) extends ClassName implements InterfaceName
	{

	private $exit;
	public function func2(){
		echo "else";
	}

	public function __construct($exit){
		$this->exit = $exit;
		$this->func1();
		echo "_";
		$this->func2();
		echo "_";
		$this->func3();
		echo "<br/>";
		echo "<br/>";
	}
	use TraitName;
});

echo "<br/>";
echo "<br/>";
echo "<br/>";



class lass 
{
	
	private $value1 = 1;
	protected $value2 = 2;

	protected function func1(){

		return 10;
	}

	public function func2(){

		return new class($this->value1) extends lass{

			private $value3;

			public function __construct($value1){

				$this->value3 = $value1;
			}

			public function func3(){

				return $this->value2 + $this->value3 + $this->func1();
			}
		};
		
	}
}

echo (new lass)->func2()->func3();

?>