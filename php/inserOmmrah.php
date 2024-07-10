<?php
// Establish connection to the database
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "manasekdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to insert tasks and descriptions into the database
$stmt = $conn->prepare("INSERT INTO Manasek (Name, DateDay, Description) VALUES (?, 'العمرة', ?)");

// Array of tasks with their descriptions
$tasks = array(
    "الإحرام" => "اغتسل وتوضأ وارتدِ ملابس الإحرام.",
    "الوصول إلى مكة" => "ادخل المسجد الحرام برجلك اليمنى وقل: 'بسم الله والصلاة والسلام على رسول الله...'.",
    "الطواف" => "ابدأ الطواف من الحجر الأسود. طُف حول الكعبة سبعة أشواط مع التكبير عند الحجر الأسود.",
    "صلاة ركعتي الطواف" => "صلِّ ركعتين خلف مقام إبراهيم أو في أي مكان من المسجد الحرام.",
    "السعي بين الصفا والمروة" => "ابدأ السعي من الصفا. سَعَ بين الصفا والمروة سبعة أشواط.",
    "الحلق أو التقصير" => "احلق رأسك أو قصر شعرك (الحلق أفضل للرجال، والنساء يقصِّرن جزءاً من شعرهن)."
);

// Iterate over tasks and descriptions and bind parameters for the prepared statement
foreach ($tasks as $taskName => $description) {
    $stmt->bind_param("ss", $taskName, $description);
    $stmt->execute();
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();

echo "Tasks inserted successfully!";
?>
