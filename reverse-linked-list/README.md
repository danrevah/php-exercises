Here's some basic usage of the file you'll need to create:

```php
require('index.php'); // <-- create the function in the index.php file

// Linked list data structure
class LinkedList {
    public $val;
    public $next = null;

    public function __construct($val) {
        $this->val = $val;
    }
}

/**
 * In this exercises you'll need to reverse a linked list
 * 
 * For example: 
 * 1 -> 2 -> 3 -> 4 -> 5 -> null
 *
 * Will be reversed to:
 * 5 -> 4 -> 3 -> 2 -> 1 -> null
 */

$head = new LinkedList(1);
$head->next = new LinkedList(2);
$head->next->next = new LinkedList(3);

// Current list:  1 -> 2 -> 3 -> null
$reversedHead = reverse($head);

// Reversed to: 3 -> 2 -> 1 -> null
echo $head->val; // echos 3 
echo $head->next->val; // echos 2
echo $head->next->val; // echos 1

```


Read more: https://en.wikipedia.org/?title=Linked_list
