
# TYPO3 Debugger Utility ALPHA

TYPO3 DebuggerUtility::var_dump() dependency free and running outside Typo3 itself.
This version accommodates PHP 8.0+ and basically any platform


## Installation

Install with composer

```bash
  composer require alexanderthegreat96/debugger-utility-alpha
```
    
## Usage/Examples

```php
<?php
require "vendor/autoload.php";

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

debugger_utility($cars, 'This is my cars Array');
```
or
```php
<?php
use Alexanderthegreat96\DebuggerUtilityAlpha;
require "vendor/autoload.php"

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

DebuggerUtility::var_dump($cars, 'This is my cars Array');

```



