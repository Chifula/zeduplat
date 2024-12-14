<?php
include 'database_php.php';

// Get program ID from URL
$program_id = $_GET['program_id'];

// Fetch program information
$program_stmt = $conn->prepare("SELECT * FROM programs WHERE id = ?");
$program_stmt->execute([$program_id]);
$program = $program_stmt->fetch();

// Fetch courses for the program
$courses_stmt = $conn->prepare("SELECT * FROM courses WHERE program_id = ? ORDER BY year, semester");
$courses_stmt->execute([$program_id]);
$courses = $courses_stmt->fetchAll();
?>

<!-- HTML Display for Program and Courses -->
<h2><?php echo $program['name']; ?></h2>
<p><?php echo $program['description']; ?></p>

<?php
$currentYear = 0;
foreach ($courses as $course) {
    // Group by Year
    if ($course['year'] != $currentYear) {
        if ($currentYear != 0) echo '</ul>';
        $currentYear = $course['year'];
        echo "<h3>Year $currentYear</h3><ul>";
    }
    echo "<li><strong>{$course['semester']}:</strong> {$course['name']}</li>";
}
echo '</ul>';
