<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mapping of scores
    $scoreMapping = [
        5 => 7,  // Outstanding
        4 => 5,  // Very Satisfactory
        3 => 3,  // Satisfactory
        2 => 1,  // Needs Improvement
        1 => 0   // Unacceptable
    ];

    // List of submitted criteria scores
    $criteria = [
        "quality1" => $_POST["quality1"] ?? 0,
        "quality2" => $_POST["quality2"] ?? 0,
        "quality3" => $_POST["quality3"] ?? 0,
        "productivity1" => $_POST["productivity1"] ?? 0,
        "productivity2" => $_POST["productivity2"] ?? 0,
        "productivity3" => $_POST["productivity3"] ?? 0,
        "productivity4" => $_POST["productivity4"] ?? 0,
        "habits1" => $_POST["habits1"] ?? 0,
        "habits2" => $_POST["habits2"] ?? 0,
        "habits3" => $_POST["habits3"] ?? 0,
        "habits4" => $_POST["habits4"] ?? 0,
        "habits5" => $_POST["habits5"] ?? 0,
        "habits6" => $_POST["habits6"] ?? 0,
        "habits7" => $_POST["habits7"] ?? 0,
        "relationship1" => $_POST["relationship1"] ?? 0,
        "relationship2" => $_POST["relationship2"] ?? 0,
        "relationship3" => $_POST["relationship3"] ?? 0,
        "relationship4" => $_POST["relationship4"] ?? 0
    ];

    // Calculate total raw score
    $totalRawScore = 0;
    foreach ($criteria as $key => $value) {
        $totalRawScore += $scoreMapping[$value] ?? 0;
    }

    // Calculate final score (70% weight)
    $weightedScore = $totalRawScore * 0.7;

    // Display the results
    echo "<h3>Evaluation Results</h3>";
    echo "<p>Total Raw Score: $totalRawScore</p>";
    echo "<p>Weighted Score (70%): $weightedScore</p>";
}
?>
