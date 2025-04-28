<?php 
declare(strict_types=1);

include "Filter.php";

$fil = new Filter();

// переменные для теста
$testsValue = [
  1,
  1.1,
  "string",
  true,
  [1, 2],
  null,
  new Filter()  // тип object
];

// вывод проверки
foreach ($testsValue as $value) {
  try {
    $fil->filter($value);
  } catch (IntException $e) {
    echo $e->getMessage() . PHP_EOL;
  } catch (FloatException $e) {
    echo $e->getMessage() . PHP_EOL;
  } catch (StringException $e) {
    echo $e->getMessage() . PHP_EOL;
  } catch (BoolException $e) {
    echo $e->getMessage() . PHP_EOL;
  } catch (ArrayException $e) {
    echo $e->getMessage() . PHP_EOL;
  } catch (NullException $e) {
    echo $e->getMessage() . PHP_EOL;
  } catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
  }
}