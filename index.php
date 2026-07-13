<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Records System</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Patient Records System</h1>

    <!-- Form -->
    <form id="patientForm">

        <input
            type="text"
            id="name"
            placeholder="Patient Name"
            required
        >

        <input
            type="number"
            id="age"
            placeholder="Age"
            required
        >

        <button type="submit">
            Add Patient
        </button>

    </form>

    <!-- Table -->

    <table>

        <thead>

            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

        </thead>

        <tbody id="patientTable">

        </tbody>

    </table>

</div>

<script src="script.js"></script>

</body>
</html>