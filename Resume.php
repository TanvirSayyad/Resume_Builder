<html>
<head>
    <style>
        h1 {
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            display: block;
            margin-top: 10px;
            padding: 10px;
        }

        #education,
        #experience {
            margin-bottom: 20px;
        }

        #education div,
        #experience div {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        #education h3,
        #experience h3 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Resume Builder</h1>
    <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>

        <h3>Education</h3>
        <div id="education">
            <div>
                <label for="institute">Institute/University:</label>
                <input type="text" id="institute" name="education[0][institute]" required>

                <label for="year">Year:</label>
                <input type="text" id="year" name="education[0][year]" required>

                <label for="degree">Degree:</label>
                <input type="text" id="degree" name="education[0][degree]" required>
            </div>
        </div>
        <button type="button" onclick="addEducation()">Add Education</button>

        <h3>Experience</h3>
        <div id="experience">
            <div>
                <label for="company">Company:</label>
                <input type="text" id="company" name="experience[0][company]" required>

                <label for="year">Year:</label>
                <input type="text" id="year" name="experience[0][year]" required>

                <label for="designation">Designation:</label>
                <input type="text" id="designation" name="experience[0][designation]" required>
            </div>
        </div>
        <button type="button" onclick="addExperience()">Add Experience</button>

        <input type="submit" value="Submit">
    </form>

    <script>
        function addEducation() {
            var educationDiv = document.getElementById('education');
            var newEducationDiv = document.createElement('div');
            newEducationDiv.innerHTML = `
                <label for="institute">Institute/University:</label>
