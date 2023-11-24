<?php
include("config.php");
// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: skills.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM skills WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$skills = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan...");
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
        <h3>Edit Page</h3>
    </header>
    <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <p>
                <label for="skill_name">Skills Name: </label>
                <input type="text" name="skill_name" value="<?php echo $skills['skill_name'] ?>" />
            </p>
            <p>
                <label for="percent">Percent: </label>
                <input type="text" name="persen" value="<?php echo $skills['persen'] ?>" />
            </p>
            <p>
                <label for="image">Image: </label>
                <input type="file" name="image" value="<?php echo $skills['image'] ?>" />
            </p>
            <p>
                <label for="color">Color: </label>
                <input type="text" name="warna" value="<?php echo $skills['warna'] ?>" />
            </p>
        </fieldset>
        <p>
            <button type="submit" value="save" name="save">Save</button>
        </p>
    </form>
</body>

</html>