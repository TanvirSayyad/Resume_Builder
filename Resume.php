<!DOCTYPE html>
<html>
<head>
  <title>Resume Builder</title>
  <style>
    label {
      display: block;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <?php
  // Initialize variables
  $name = $email = $address = $phone = "";
  $education = $experience = $skills = "";

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $education = $_POST["education"];
    $experience = $_POST["experience"];
    $skills = $_POST["skills"];

    // TODO: Validate and process the form data
    // ...

    // Redirect to the preview page
    header("Location: view_resume.php");
    exit();
  }
  ?>

  <h1>Resume Builder</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $name; ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="<?php echo $address; ?>" required>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" required>

    <h2>Education</h2>
    <div id="education-container">
      <div>
        <label for="education-0">Institute/University:</label>
        <input type="text" name="education[]" id="education-0" required>

        <label for="education-year-0">Year:</label>
        <input type="text" name="education[]" id="education-year-0" required>

        <label for="education-degree-0">Degree:</label>
        <input type="text" name="education[]" id="education-degree-0" required>
      </div>
    </div>
    <button type="button" onclick="addEducationField()">Add Education</button>

    <h2>Experience</h2>
    <div id="experience-container">
      <div>
        <label for="experience-0">Company:</label>
        <input type="text" name="experience[]" id="experience-0" required>

        <label for="experience-year-0">Year:</label>
        <input type="text" name="experience[]" id="experience-year-0" required>

        <label for="experience-designation-0">Designation:</label>
        <input type="text" name="experience[]" id="experience-designation-0" required>
      </div>
    </div>
    <button type="button" onclick="addExperienceField()">Add Experience</button>

    <h2>Skills</h2>
    <input type="text" name="skills" id="skills" value="<?php echo $skills; ?>">

    <button type="submit">Preview Resume</button>
  </form>

  <script>
    var educationCount = 1;
    var experienceCount = 1
