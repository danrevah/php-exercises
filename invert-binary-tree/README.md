Here's some basic usage of the file you'll need to create:

```php
require('index.php'); // <-- create the function in the index.php file

// Tree data structure
class BinaryNode
{
    public $value = null; // node value
    public $left = null; // left child
    public $right = null; // right child

    public function __construct($value) {
        $this->value = $value;
    }
}
/**
 * In this exercises you'll invert a Binary tree
 * for example:
 *
 *      1
 *    /   \
 *   2     3
 *  / \   / \
 * 4   5 6   7
 *
 * Inverts to
 *
 *      1
 *    /   \
 *   3     2
 *  / \   / \
 * 7   6 5   4
 */

 // Basic usage
 $root = new BinaryNode(1);
 $rootLeftChild = new BinaryNode(2);
 $rootRightChild = new BinaryNode(3);

 $root->left = $rootLeftChild;
 $root->right = $rootRightChild;

 $invertedTree  = invertTree($root);

 echo $root->value; // 1
 echo $root->left->value; // 3
 echo $root->right->value; // 2
```

Read more: https://en.wikipedia.org/?title=Binary_tree

Inspired by Max Howell tweet (https://twitter.com/mxcl/status/608682016205344768):
> "Google: 90% of our engineers use the software you wrote (Homebrew), but you can’t invert a binary tree on a whiteboard so fuck off."


