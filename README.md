
# Debugger Utility Alpha

Typo3 Debugger Utility var dumper ported to php 8 and for all platforms


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

