<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Page Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="account">
                <a class="navbar-brand" href="adminpage.php"><i class="fa fa-user" aria-hidden="true"></i> Niu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="admin" href="adminpage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="comment-page.php">Comment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="skills.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin-out.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>

        <form class="d-flex" role="search" method="post">
            <input id="search-input" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                name="search">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const searchInput = document.getElementById("search-input");
                    const tableBody = document.getElementById("table-body");
                    const rows = tableBody.getElementsByTagName("tr");

                    searchInput.addEventListener("input", function () {
                        const searchTerm = searchInput.value.toLowerCase();

                        Array.from(rows).forEach(function (row) {
                            const nameCell = row.querySelector("td:nth-child(2)");
                            let rowContainsSearchTerm = false;

                            if (nameCell.textContent.toLowerCase().includes(searchTerm)) {
                                rowContainsSearchTerm = true;
                            }

                            if (rowContainsSearchTerm) {
                                row.style.display = "";
                            } else {
                                row.style.display = "none";
                            }
                        });
                    });
                });
            </script>
        </form>
        </div>
        </div>
    </nav>
    <div style="padding: 30px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Percent</th>
                    <th scope="col">Level</th>
                    <th scope="col">Image</th>
                    <th scope="col">Color</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="table-body">

                <?php
                $sql = "SELECT * FROM skills";
                $query = mysqli_query($conn, $sql);

                while ($skills = mysqli_fetch_array($query)) {
                    $level = "Beginner";
                    if ($skills["persen"] > 33) {
                        $level = "Intermediate";
                    } else if ($skills["persen"] > 66) {
                        $level = "Advanced";
                    }
                    echo "<tr>";
                    echo "<td>" . $skills['id'] . "</td>";
                    echo "<td>" . $skills['skill_name'] . "</td>";
                    echo "<td>" . $skills['persen'] . "</td>";
                    echo "<td>" . $level . "</td>";
                    echo "<td>" . $skills['image'] . "</td>";
                    echo "<td>" . $skills['warna'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit-skills.php?id=" . $skills['id'] . "'class='btn btn-primary''>Edit</a> | ";
                    echo "<a href='delete-skills.php?id=" . $skills['id'] . "'class='btn btn-danger'' onclick='return dialogHapus()'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div style="padding-left: 10px;">
        <a href="add-skills.php"><button type="button" name="add" class="btn btn-success">Add Skill</button></a>
    </div>
    <!-- <p>Total:
        <?php echo mysqli_num_rows($query) ?>
    </p> -->

    <script src="script.js"></script>
</body>

</html>