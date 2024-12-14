# PHP Array Key Type Juggling Bug

This repository demonstrates a common yet subtle bug in PHP related to array key type juggling.  When using both string and integer keys that are numerically equivalent, PHP treats them as the same, leading to the last value overwriting the previous one.

The `bug.php` file illustrates the problem.  The solution, found in `bugSolution.php`, offers strategies to mitigate this issue.