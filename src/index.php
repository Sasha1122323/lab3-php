<?php
require 'vendor/autoload.php';

use App\MagicClass;
use App\Point;
use App\Vector;

$magic = new MagicClass();

// Вызов конструктора
// __toString
echo $magic . "\n";

// __invoke
$magic();

// __set и __get
$magic->property = "value";
echo $magic->property . "\n";

// __call и __callStatic
$magic->someMethod();
MagicClass::someStaticMethod();

// __clone
$magic2 = clone $magic;

// __destruct вызывается автоматически при завершении скрипта

// Создаем точку T1
$T1 = new Point(2, 3);

// Создаем векторы
$V1 = new Vector(4, 1);      // произвольный
$V2 = new Vector(0, 0);      // нулевой
$V3 = new Vector(-0.25, 1);  // перпендикулярный V1

// Выводим длины векторов
echo "Длина V1: " . $V1->length() . "\n";
echo "Длина V2: " . $V2->length() . "\n";
echo "Длина V3: " . $V3->length() . "\n";

// Проверяем перпендикулярность V1 и V3
echo "V1 и V3 перпендикулярны? " . ($V3->isPerpendicular($V1) ? "Да" : "Нет") . "\n";

// Переносим точку T1 на вектор V1
$T1->moveX($V1->x);
$T1->moveY($V1->y);

// Вывод новой координаты точки
echo "Новая координата точки T1: $T1\n";
