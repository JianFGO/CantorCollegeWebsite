<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the range of courses offered at Cantor College, including computing, cyber security, graphic design, and more.">
    <title>Courses - Cantor College</title>
    <link rel="stylesheet" href="styles.css"> 
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
        <h1>Courses Offered</h1>
        <div class="table-container">
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
                    // Establish a connection to database 
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
    </main>

    <footer class="footer">
        <!-- Footer content -->
        <div class="contact-info">
            <p>Contact us: info@cantorcollege.ac.uk | Tel: (01321) 2340 235 | Fax: (01321) 2340 236</p>
        </div>
        <div class="quick-links">
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="how-to-find-us.html">How to Find Us</a></li>
                <li><a href="#">Courses</a></li>
                <!-- Add other quick links -->
            </ul>
        </div>
        <div class="social-media">
            <a href="#" class="icon">Facebook</a>
            <a href="#" class="icon">Twitter</a>
            <!-- Add other social media icons -->
        </div>
    </footer>
</body>
</html>
