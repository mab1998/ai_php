<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'speech_to_text') {
    $title = $_POST['title'] ?? '';
    $file = $_FILES['file'] ?? null;
    $description = $_POST['description'] ?? '';

    // Process the file and other data here
    $data = [
        ['id' => 1, 'name' => 'Example 1', 'value' => 'Value 1'],
        ['id' => 2, 'name' => 'Example 2', 'value' => 'Value 2'],
        ['id' => 3, 'name' => 'Example 3', 'value' => 'Value 3'],
        ['id' => 4, 'name' => 'Example 4', 'value' => 'Value 4'],
        ['id' => 5, 'name' => 'Example 5', 'value' => 'Value 5'],
    ];

    // Return the data as JSON
    header('Content-Type: application/json');
    echo json_encode(['title' => $title, 'data' => $data]);
    exit();
}
?>