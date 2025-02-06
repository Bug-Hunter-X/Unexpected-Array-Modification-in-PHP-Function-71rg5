# Unexpected Array Modification in PHP Function

This example demonstrates a common, yet subtle bug in PHP: functions unexpectedly modifying their input arrays in place rather than returning a new array. This can lead to hard-to-detect issues if the original array is used elsewhere.

The `bug.php` file showcases the problematic function and the unexpected side effect. The `bugSolution.php` file shows the corrected version, demonstrating how to return a new array and prevent modification of the original array.  This is vital for maintaining data integrity and predictability.