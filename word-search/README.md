Here's some basic usage of the file you'll need to create:

```php
require('index.php'); // <-- create the function in the index.php file

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

// Word can be constructed form letters of sequentially adjacent cell,
// where 'adjacent' cells are those horizontally or vertically neighboring.
searchWord($board, 'abcd'); // true
searchWord($board, 'abcl'); // true
searchWord($board, 'admfbl'); // true

// It's not allowed to use the same letter twice
searchWord($board, 'abcc'); // false
searchWord($board, 'abcdc'); // false
searchWord($board, 'dklml'); // false
```
