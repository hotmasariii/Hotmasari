<?php
// Define the number of rows and columns
$rows = 10;
$columns = 10;

// Start the HTML table with borders for clarity
echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: center;'>";

// Generate the header row
echo "<tr style='background-color: #f2f2f2;'>";
echo "<th>x</th>"; // Top-left cell
for ($j = 1; $j <= $columns; $j++) {
    echo "<th style='padding: 10px;'>$j</th>"; // Column headers
}
echo "</tr>";

// Generate rows of the table
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    echo "<th style='background-color: #f2f2f2;'>$i</th>"; // Row header
    // Generate columns within the row
    for ($j = 1; $j <= $columns; $j++) {
        $product = $i * $j;
        echo "<td style='padding: 10px; border: 1px solid #ddd;'>$product</td>"; // Calculate and display the product
    }
    echo "</tr>"; // End the row
}
echo "</table>"; // Close the table
?>