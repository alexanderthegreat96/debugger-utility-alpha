
# Debugger Utility

TYPO3 DebuggerUtility::var_dump() dependency free and running outside Typo3 itself.
This version accomodates PHP 8.0+ and basically any platform


## Installation

Install with composer

```bash
  composer require alexanderthegreat96/debugger-utility-alpha
```
    
## Usage/Examples

```php
<?php
use Alexanderthegreat96\DebuggerUtilityAlpha;
require "debugger-utility-alpha/vendor/autoload.php"

$array = [
    'this-key => 'Is for multidimensional array'
];

DebuggerUtility::var_dump('my-array',$array);

```
or

```php
<?php
require "vendor/autoload";

debugger_utility(my-array);
```

