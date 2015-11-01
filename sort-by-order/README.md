Here's some basic usage of the file you'll need to create:

> Sort an array by moving all of the zero elements (0 or '0') to the end
> also make sure to keep the order of the zeros.

```php
require('index.php'); // <-- create the function in the index.php file

var_dump(sortZeros([5,0,6,1,0,8]) == [5,6,1,8,0,0]); // outputs: `bool(true)`
var_dump(sortZeros([5,6,'0',1,0,'0',8,'0']) == [5,6,1,8,'0',0,'0','0']); // outputs: `bool(true)`
```

