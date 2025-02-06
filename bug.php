```php
function processData(array $data): array {
  // ... some processing logic ...
  return $processedData;
}

$myData = [1,2,3,4,5];
$result = processData($myData);

// Unexpected behavior if processData modifies $myData in place
// instead of returning a new array
print_r($myData); // Might be unexpectedly modified
```