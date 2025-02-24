# Subtle Bug in PHP Range Check Function

This repository demonstrates a subtle bug in a PHP function designed to check if a number falls within a specified range. The bug arises when the minimum value is greater than the maximum value, causing the function to always return `false` regardless of the input number.

The `bug.php` file contains the buggy function, while `bugSolution.php` provides a corrected version that addresses the issue.