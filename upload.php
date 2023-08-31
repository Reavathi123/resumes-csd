<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Upload Resume</title>
</head>
<body>
    <header>
        <h1>Upload Your Resume</h1>
        <a href="index.php">View Resumes</a>
    </header>
    <main>
        <section class="upload-form">

            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="rollNumber">Roll Number:</label>
                <input type="text" name="rollNumber" id="rollNumber" required>
                <label for="resume">Choose a PDF file:</label>
                <input type="file" name="resume" id="resume" accept=".pdf" required>
                <input type="submit" value="Upload">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Your Name</p><?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rollNumber = $_POST['rollNumber'];
    $targetDir = 'resumes/';
    $targetFile = $targetDir . 'roll' . $rollNumber . '.pdf';
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, this file already exists.";
        $uploadOk = 0;
    }

    // Allow only PDF files
    if ($fileType !== 'pdf') {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES['resume']['tmp_name'], $targetFile)) {
            echo "Your resume has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Your resume was not uploaded.";
    }
}
?>

    </footer>
    
</body>
</html>



