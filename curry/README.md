Here's some basic usage of the file you'll need to create:

```php
require('index.php'); // <-- create the function in the index.php file

$add = function ($a, $b) {
    return $a + $b;
};

$curry = Curry($add);
$first = $curry(1);
echo $first(2); // 3

$initializedCurry = Curry($add, 1);
echo $initializedCurry(2); // 3
```

Read more: https://en.wikipedia.org/wiki/Currying