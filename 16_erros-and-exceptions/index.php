<?php
try {
    // Code that may throw an exception
    $number = 0;

    if ($number === 0) {
        throw new Exception("Division by zero is not allowed.");
    }

    $result = 10 / $number;
    echo "Result: $result";
} catch (Exception $e) {
    // Handle the exception
    echo "Caught exception: " . $e->getMessage();
}
?>
