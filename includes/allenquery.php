<?php
require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Csubmit'])) {
    // Get the form data and sanitize it
    $CProject = mysqli_real_escape_string($conn, $_POST['CProject']);
    $CName = mysqli_real_escape_string($conn, $_POST['CName']);
    $CNumber = mysqli_real_escape_string($conn, $_POST['CNumber']);
    $CEmail = mysqli_real_escape_string($conn, $_POST['CEmail']);
    $CMessage = mysqli_real_escape_string($conn, $_POST['CMessage']);

    // Prepare the SQL statement
    $sql = "INSERT INTO  contact_data (CProject, CName, CNumber, CEmail, CMessage) VALUES ('$CProject', '$CName', '$CNumber', '$CEmail', '$CMessage')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('We will contact you as soon as possible!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Form for contacting
?>


<form action="index.php" method="POST">
    <select class="field" name="CProject" required>
        <option disabled selected>Please select the project</option>
        <option value="Urban Height">Urban Height</option>
        <option value="Sky Height">Sky Height</option>
        <option value="Godhuli">Godhuli</option>
        <option value="Pushpanjali">Pushpanjali</option>
        <option value="Ichchedana">Ichchedana</option>
        <option value="Anandamoyee">Anandamoyee</option>
        <option value="Anandamoyee Phase-II">Anandamoyee Phase-II</option>
    </select>
    <input type="text" class="field" placeholder="Enter Your Name*" name="CName" required>
    <input type="text" class="field" placeholder="Enter Your Number*" name="CNumber" required>
    <input type="email" class="field" placeholder="Enter Your Email*" name="CEmail" required>
    <textarea placeholder="Message" class="field" name="CMessage" required></textarea>
    <button type="submit" class="cbtn" name="Csubmit">Send</button>
</form>