```php
function processData(array $data): array {
  $processedData = []; // Initialize a new array
  // ... some processing logic...
  foreach ($data as $value) {
    $processedData[] = $value * 2; // Example processing
  }
  return $processedData; // Return the new, processed array
}

$myData = [1,2,3,4,5];
$result = processData($myData);

print_r($myData); // Remains unchanged [1, 2, 3, 4, 5]
print_r($result); // Correctly processed [2, 4, 6, 8, 10]
```