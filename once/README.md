Here's some basic usage of the file you'll need to create:

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
