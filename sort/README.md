Here's some basic usage of the file you'll need to create:

> sorts an array of integers, using the native array sort functions would be considered cheating.
> Can you make it sort better than n^2 ?

```php
require('index.php'); // <-- create the function in the index.php file

$arr = [5, 1, 3, 2, 4];
sortArray($arr);
var_dump($arr === [1, 2, 3, 4, 5]); // outputs: `bool(true)`
```

More info: http://en.wikipedia.org/wiki/Sorting_algorithm
