<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the range of courses offered at Cantor College, including computing, cyber security, graphic design, and more.">
    <title>Courses - Cantor College</title>
    <link rel="stylesheet" href="toggle-table.css">
    <link rel="stylesheet" href="general.css"> 
    <link rel="stylesheet" href="main.css"> 
    <link rel="stylesheet" href="text-box.css">
    <link rel="stylesheet" href="table.css">  
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <header>
    <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="how-to-find-us.html">How to Find Us</a></li>
                <li><a href="courses.php">Course Table</a></li>
                <li><a href="info-for-students.html">Infomation for students</a></li>
                <li><a href="info-for-staff.html">Infomation for staff</a></li>
                <li><a href="learning-resources.html">Learning Resources</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <section class="page-description">
            <h1>Courses Offered at Cantor College</h1>
            <p>Welcome to Cantor College's courses page. Here, you'll find a comprehensive list of the courses we offer along with their details and descriptions.</p>
        </section>

        <form id="registrationForm" onsubmit="return validateForm()">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>
    <label for="course">Select Course:</label>
    <select id="course" name="course">
        <option value="">Select Course</option>
        <option value="Computing">Computing</option>
        <option value="Computer Networks">Computer Networks</option>
        <option value="Cyber Security with Forensics">Cyber Security with Forensics</option>
        <option value="Computer Science for Games">Computer Science for Games</option>
        <option value="Software Engineering">Software Engineering</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Computing and Informatics">Computing and Informatics</option>
        <option value="Cyber Security">Cyber Security</option>
        <option value="Graphic Design">Graphic Design</option>
        <option value="Interior Architecture and Design">Interior Architecture and Design</option>
        <option value="Jewellery, Materials and Design">Jewellery, Materials and Design</option>
        <option value="Game Design and Development">Game Design and Development</option>
        <option value="Product Design">Product Design</option>
        <option value="Digital Media Production">Digital Media Production</option>
    </select>
    <br>
    <input type="submit" value="Register">
</form>
<div id="errorMessages"></div>
<div id="successMessage" style="display: none; color: green;">Thanks for registering! Further instructions will be highlighted in the email.</div>

        
        <button id="toggleButton">Toggle Course Table</button>
        <div class="table-container" id="courseTable" style="display: none;">
            <table class="course-table">
                <thead>
                    <tr>
                    <th>Course Title</th>
                        <th>Course Type</th>
                        <th>Course Summary</th>
                        <th>Course Award Name</th>
                        <th>UCAS Code</th>
                        <th>UCAS Points</th>
                        <th>Year of Entry</th>
                        <th>Mode of Attendance</th>
                        <th>Study Length</th>
                        <th>Has Foundation Year</th>
                        <th>Course Subject</th>
                        <th>No Longer Recruiting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Establish a connection to database (Change this if needed)
                    $servername = "localhost";
                    $username = "root";
                    $password = "Aarmau4life";
                    $dbname = "cantor_college";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // SQL query to retrieve course data
                    $sql = "SELECT * FROM courses";

                    // Execute the query
                    $result = $conn->query($sql);

                    // Display data in table rows
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["course_title"] . "</td>";
                            echo "<td>" . $row["course_type"] . "</td>";
                            echo "<td>" . $row["course_summary"] . "</td>";
                            echo "<td>" . $row["course_award_name"] . "</td>";
                            echo "<td>" . $row["ucas_code"] . "</td>";
                            echo "<td>" . $row["ucas_points"] . "</td>";
                            echo "<td>" . $row["year_of_entry"] . "</td>";
                            echo "<td>" . $row["mode_of_attendance"] . "</td>";
                            echo "<td>" . $row["study_length"] . "</td>";
                            echo "<td>" . ($row["has_foundation_year"] ? "True" : "False") . "</td>";
                            echo "<td>" . $row["course_subject"] . "</td>";
                            echo "<td>" . ($row["no_longer_recruiting"] ? "True" : "False") . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    

                    // Close the connection
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>


        <h2>Sheffield Hallam Gallery</h2>
        <p class="gallery-description">A small look into our area.</p>
        <div class="gallery-container">
            <img src="assignment-package/website-images-assets/IMG_0523.jpeg" alt="Lab students pointing">
            <img src="assignment-package/website-images-assets/IMG_1005.jpeg" alt="Sheffield sign">
            <img src="assignment-package/website-images-assets/IMG_1087.jpeg" alt="Lab Lecture">
            <img src="assignment-package/website-images-assets/IMG_1439.jpeg" alt="Cantor Building">
            <img src="assignment-package/website-images-assets/IMG_0170.jpeg" alt="Pictures">
            <img src="assignment-package/website-images-assets/IMG_1099.jpeg" alt="Meeting">
            <img src="assignment-package/website-images-assets/IMG_1298.jpeg" alt="Gate">
            <img src="assignment-package/website-images-assets/IMG_1318.jpeg" alt="Wall Art">
        </div>


    </main>

    <footer class="footer">
        <div class="contact-info">
            <p>Contact us: info@cantorcollege.ac.uk | Tel: (01321) 2340 235 | Fax: (01321) 2340 236</p>
        </div>
        <div class="quick-links">
            <ul>
                <li><a href="home.html" class="icon">About Us</a></li>
                <li><a href="how-to-find-us.html" class="icon">How to Find Us</a></li>
                <li><a href="courses.php" class="icon">Courses</a></li>
            </ul>
        </div>
        <div class="social-media">
            <a href="#" class="icon">Facebook</a>
            <a href="#" class="icon">Twitter</a>
        </div>
    </footer>

    <script src="toggle.js"></script>
    <script src="validate.js"></script>
</body>
</html>
