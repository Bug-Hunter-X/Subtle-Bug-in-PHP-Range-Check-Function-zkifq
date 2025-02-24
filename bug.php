function myFunction() {
  // This function is supposed to check if a number is within a range.
  // However, it has a subtle bug that can lead to incorrect results.

  $min = 10;
  $max = 20;
  $num = 15;

  if ($num >= $min && $num <= $max) {
    return true;
  } else {
    return false;
  }
}

// The bug is that it doesn't handle the case where $min is greater than $max.
// If $min is greater than $max, the condition will always be false, even if the number is within the intended range.

// Example:
$min = 20;
$max = 10;
$num = 15;
var_dump(myFunction()); // Output: bool(false) - Incorrect