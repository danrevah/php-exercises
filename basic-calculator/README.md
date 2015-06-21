Here's some basic usage of the file you'll need to create:

```php
require('index.php'); // <-- create the function in the index.php file

// Can contain only '+', '-', '(', ')', spaces, and integers
echo calc(' 1 + 1 '); // 2
echo calc('9-5 + 2'); // 6
echo calc('((5+3+(1+2)-9)+1) + (9+1)'); // 13
```
