<?php

class A
{
	const NAME = 'A';
	public static function test() {
		echo static::NAME, "\n";
	}
}

class B extends A
{
	const NAME = 'B';

	public static function test() {
		echo self::NAME, "\n";
		forward_static_call(array('B', 'test'));
	}
}

A::test();
echo "-\n";
B::test();
echo "-\n";
C::test();

?>
