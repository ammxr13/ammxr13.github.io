<?php
// Define the data for Table 1
$table1Data = [
    ['A1', 41], ['A2', 18], ['A3', 21], ['A4', 63], ['A5', 2],
    ['A6', 53], ['A7', 5],  ['A8', 57], ['A9', 60], ['A10', 93],
    ['A11', 28], ['A12', 3], ['A13', 90], ['A14', 39], ['A15', 80],
    ['A16', 88], ['A17', 49], ['A18', 60], ['A19', 26], ['A20', 20]
];

// Function to get value by index
function getValue($index) {
    global $table1Data;
    foreach ($table1Data as $row) {
        if ($row[0] === $index) {
            return $row[1];
        }
    }
    return 0;
}

// Calculate values for Table 2
$table2Data = [
    ['Alpha', getValue('A5') + getValue('A20')],
    ['Beta', getValue('A15') / getValue('A7')],
    ['Charlie', getValue('A13') * getValue('A12')]
];

// HTML output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Table 1</h2>
    <table>
        <tr>
            <th>Index #</th>
            <th>Value</th>
        </tr>
        <?php foreach ($table1Data as $row): ?>
        <tr>
            <td><?php echo htmlspecialchars($row[0]); ?></td>
            <td><?php echo htmlspecialchars($row[1]); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Table 2</h2>
    <table>
        <tr>
            <th>Category</th>
            <th>Value</th>
        </tr>
        <?php foreach ($table2Data as $row): ?>
        <tr>
            <td><?php echo htmlspecialchars($row[0]); ?></td>
            <td><?php echo htmlspecialchars($row[1]); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>