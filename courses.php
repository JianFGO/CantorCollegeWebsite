<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <!-- Add other quick links -->
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

    <footer>
        <!-- Footer content -->
    </footer>

    <!-- Add your JavaScript links or scripts if needed -->
    <script src="script.js"></script>
</body>
</html>