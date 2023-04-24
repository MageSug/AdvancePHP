<?php
	
require __DIR__ . '/vendor/autoload.php';

use Name\First;
use Name\Second;
use Inter\Interfac;
use Trt\traitexample;
use MM\MagicMethods;
use SE\SingletonExample;
use SE\SingletonChild;
use Ab\AbstractImplementation;
use It\IteratorImplementation;
use It\FilterArray;
use GI\GeneratorImplementation;
use CE\ClosureExampleWithScope;
use FIE\TextFileService;
use FIE\CsvFileService;
use FIE\FileHandling;
use In\TestClassChild;
use In\TestClassParent;
use DIC\Container;
use DIC\User;
use Sp\Client;

error_reporting(E_ALL);

// echo "1. Namespace";
// echo "2. Interface";
// echo "3. Traits";
// echo "4. ConstructDestruct";
// echo "5. Singleton";
// echo "6. AbstractImplementation";
// echo "7. IteratorImplementation";
// echo "8. GeneratorImplementation";
// echo "9. ClosureExample";
// echo "10. Filehandling";
// echo "11. Inheritance";
// echo "Default";

$options = 13;

switch($options){

	case 1:
		// Namespace
		First::hello();
		Second::hello();
		break;
	case 2:
		// Interface
		$in = new Interfac;
		$in->getInter();
		$in->setInter();
		// echo $in->count() . "<br>";
		break;

	case 3:	
		// Traits
		$t = new traitexample;
		$t->save();
		break;

	case 4:
		// MagicMethods
		$mm = new MagicMethods("object");
		$mm->process1(1,2,3);
		$mm::process2(4,5,6);
		break;

	case 5:
		// static properties are shared with both parent and child
		// self -- current class object i.e. child class have parent object
		// static -- class having their own object and overwrite the parent properties with their own property

		// Singleton
		$obj = SingletonExample::getInstance();
		var_dump($obj);
		echo "<br>";
		var_dump($obj === SingletonExample::getInstance());
		echo "<br>";
		$anotherObj = SingletonChild::getInstance();
		var_dump($anotherObj);
		echo "<br>";
		var_dump($anotherObj === SingletonExample::getInstance());
		echo "<br>";
		var_dump($anotherObj === SingletonChild::getInstance());
		break;

	case 6:
		// Abstraction
		$abstractObj = new AbstractImplementation;
		$abstractObj->abstractMethod();
		$abstractObj->normalMethod();
		break;

	case 7:
		// Iterators
		$arrayExample = array(array('a1', 'a2', 'a3'),
					 array('a4', 'a5', 'a6'),
					);

		$ai = new \ArrayIterator($arrayExample);
		echo $ai->count();
		$b = serialize($ai);
		var_dump($b);
		var_dump(unserialize($b));
		var_dump($ai);

		$ii = new IteratorImplementation;
		$ii->arrayImplementation($arrayExample);
		// $ii = new FilterArray($ii);
		var_dump($ii); 
		break;

	case 8:
		// Generator Example Implementation
		$gi = new GeneratorImplementation;
		foreach($gi->count_down(3) as $key => &$val) {
			echo $val."<br>";
			$val--;	
		}
		echo "<br>";
		foreach($gi->fizzbuzz(25) as $key => $val) {
			echo "{$key} => {$val}<br>";
			$val--;
		}

		$array = array('Ruby', 'PHP', 'JavaScript', 'HTML');
		array_walk($array, function(&$v) {
		       $v = $v . ' - Programming Language';
		});
		var_dump($array);
		break;

	case 9:
		// Closure Example Implementation using reference 
		$close = new ClosureExampleWithScope;
		$close->classicClosure();
		$close->shortClosure();
		$close->closureFunc([$close, "shortClosure"], "World");
		break;

	case 10:
		// File handling
		$f1 = new TextFileService("Files/file1.txt");
		$f2 = new CsvFileService("Files/file2.csv");
		$file1 = new FileHandling($f1);
		$file2 = new FileHandling($f2);
		$file1->readFile();
		echo PHP_EOL;
		$file2->readFile();
		// $file->copy("Files/file1.txt", "FileHandling/file.txt");
		// $file->delete("FileHandling/file.txt");
		break;

	case 11:
		//Inheritance
		// $parent = new TestClassParent(null);
		$child = new TestClassChild(50, 100);
		$child->printVariable();
		$child->printVariable1();
		break;

	case 12:
		//Dependency Injection Container
		$container = new Container();
		$user = $container->get(User::class);
		$user->setLanguage('English');
		$user->getLanguage();
		break;

	case 13:
		$client = new Client;
		$client->sortData();
		$client->searchDatum();
		break;

	default:
		// PHP Request Handling 
		// var_dump($_SERVER);
		var_dump($_SERVER['REQUEST_METHOD']);
		var_dump($_SERVER['REQUEST_URI']);
		var_dump($_SERVER['SERVER_PROTOCOL']);

		// header("Content-Type: application/json");
		$data = [
			"response1" => "Hello World",
			"response2" => "Hello Nepal"	
			];

		echo '<pre>';
		echo json_encode($data);
		echo '</pre>';

		// Looping by value
		foreach($data as $key => $value) {
			if($key === "response1") {
				$data["response1"] = "Hello Earth";
			}
			echo "$key => $value <br>";
		}

		// Looping by reference
		foreach($data as $key => &$value) {
			if($key === "response1") {
				$data["response1"] = "hello";
			}
			echo $key . "=>" . $value . "<br>";
		}

		$a = 1;
		$b = 2;
		var_dump(compact("a", "b"));
		if(!empty($a)){
			echo "AA<br>";
		}

		$arr = ['A', 'B', 'C'];
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
		foreach($arr as $k=>&$v){
			var_dump($k);
		}
		unset($v);
		foreach($arr as $k=>$v){
			var_dump($k);
		}
		echo '<pre>';
		print_r($arr);
		echo '</pre>';

		$dir = scandir(__DIR__);
		var_dump($dir);
}

// Inheritance
// class Paarent{
// public function __construct(){
// 	echo get_class();
// }
// }
// class Child extends Paarent
// {
// 	public function __construct(){
// 		echo get_class() . "<br>";
// 	}
// }

// $p = new Paarent;
// $c = new Child;