Here's some basic usage of the file you'll need to create:

> Once() Creates a version of the function that can only be called one time. Repeated calls to the modified function will have no effect, returning the value from the original call.

```php
require('index.php'); // <-- create the function in the index.php file

$value = function ($ret) {
    echo 'This will be shown only once';
    return $ret;
};

$init = once($value);
echo $init(1); // echos 'This will be shown once' and '1'
echo $init(2); // will only echo '1'
echo $init(3); // will only echo '1'
```
