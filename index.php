<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Classmates' Resumes</title>
    

</head>
<body>
    <header>
        <h1>Classmates' Resumes</h1>
        <a href="upload.php">Upload Resume</a>
    </header>
    <main>
    <section class="resume-list">
    

        <?php
        for ($i = 1; $i <= 9; $i++) {
            $rollNumber = '21B91A620' . $i;?>
            <div class="resume">
            <h2> <?php echo $rollNumber ?></h2>
            <p>Field of Study: Computer Science</p>
            <a href="resumes/roll<?php echo $rollNumber ?>.pdf" target="_parent">View Resume</a>
            <div class="pdf-container" id="21B91A6206-pdf"></div>
            </div><?php
        }
        for ($i = 10; $i <= 70; $i++) {
            $rollNumber = '21B91A62' . $i;?>
            <div class="resume">
            <h2> <?php echo $rollNumber ?></h2>
            <p>Field of Study: Computer Science</p>
            <a href="resumes/roll<?php echo $rollNumber ?>.pdf" target="_parent">View Resume</a>
            <div class="pdf-container" id="21B91A6206-pdf"></div>
            </div><?php
        }

        ?>
    </section>
    </main>
    <footer>
        <p>&copy; 2023 Your Name</p>
    </footer>
    <a href="resumes/roll21B91A0<?php echo $rollNumber; ?>.pdf" target="_blank">View Resume</a>
    <script>
        // JavaScript to dynamically embed PDF files when clicking "View Resume" links
        // ... (other JavaScript code) ...

document.addEventListener("DOMContentLoaded", function () {
    const resumeLinks = document.querySelectorAll(".resume a[target='_blank']");
   
    
    resumeLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const rollNumber = this.getAttribute("href").split("/").pop().split(".")[0];
            const pdfContainer = document.getElementById(rollNumber + "-pdf"); // Add '-pdf' suffix
            if (pdfContainer) {
                pdfContainer.innerHTML = `<embed src="${this.getAttribute("href")}" width="100%" height="800px" type="application/pdf">`;
            }
        });
    });
});

    </script>
</body>
</html>





