<?php
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $results = [
        "Result 1",
        "Result 2",
        "Result 3",
    ];
    // Output search results.
    echo '<ul>';
    foreach ($results as $result) {
        echo '<li>' . $result . '</li>';
    }
    echo '</ul>';
}
?>
