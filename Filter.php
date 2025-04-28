<?php 
declare(strict_types=1);

// Создание кастомных исключений  
class IntException extends Exception {}  
class FloatException extends Exception {}  
class StringException extends Exception {}  
class BoolException extends Exception {}  
class ArrayException extends Exception {}  
class NullException extends Exception {}  

class Filter 
{
  function filter ($value):mixed
  {
    if (is_int($value)) {  
        throw new IntException("Содержит целое число");  
    } elseif (is_float($value)) {  
        throw new FloatException("Содержит число с плавающей точкой");  
    } elseif (is_string($value)) {  
        throw new StringException("Содержит строку");  
    } elseif (is_bool($value)) {  
        throw new BoolException("Содержит булево значение");  
    } elseif (is_array($value)) {  
        throw new ArrayException("Содержит массив");  
    } elseif (is_null($value)) {  
        throw new NullException("Содержит null");  
    } else {  
        throw new Exception("Тип не определен");  
    } 
  }
}
