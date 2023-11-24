<?php
include("config.php");
if (isset($_GET["add"])) {
}
?>

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<head>
    <title>Edit Skills Form</title>
</head>

<body>

    <style>
        .saveButton {
            left: -4rem1;
        }
    </style>

    <header>
        <h3>Add Skill Page</h3>
    </header>
    <form action="proses-daftar.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <input type="hidden" name="id">
            <p>
                <label for="skill_name">Skills Name: </label>
                <input type="text" name="skill_name" />
            </p>
            <p>
                <label for="percent">Percent: </label>
                <input type="text" name="persen" />
            </p>
            <p>
                <label for="color">Color: </label>
                <input type="text" name="warna" />
            </p>
            <p>
                <label for="image">Image: </label>
                <input type="file" name="image" />
            </p>
        </fieldset>
        <p>
            <button type="submit" value="save" name="save">Save</button>
        </p>
    </form>
</body>

</html>