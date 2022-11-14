<?php 
namespace SE;
use SE\SingletonExample;
class SingletonChild extends SingletonExample
{
	protected static $singleInstance;
}