<?php
// Sample text
$text = "The quick brown fox jumps over the lazy dog. PHP is powerful and popular.";

// Pattern to search for (case-insensitive search for 'PHP')
$pattern = "/php/i"; // 'i' means case-insensitive

// Perform pattern matching
if (preg_match($pattern, $text)) {
    echo "Pattern found in the text.";
} else {
    echo "Pattern not found.";
}
?>
