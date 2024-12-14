In PHP, a common yet subtle error arises when dealing with array keys.  Consider this scenario:

```php
$myArray = [];
$myArray["1"] = "apple";
$myArray[1] = "banana";

echo count($myArray); // Outputs 1
print_r($myArray); // Outputs Array ( [1] => banana ) 
```

Notice that assigning values to both a string key ("1") and an integer key (1) results in only one key-value pair being stored. PHP treats these keys as equivalent due to type juggling.  This can lead to unexpected behavior and data loss if not carefully handled.