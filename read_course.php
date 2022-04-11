<?php
require "includes/header.php";
require "includes/menu.php";
require_once "includes/dbcon.php";
$query = "SELECT * FROM course";
$result = mysqli_query($conn, $query);
?>
<br><br>
<h1>All Course</h1>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>dept</th>
            <th>title</th>
            <th>credit</th>
            <th>syllabus</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $course) {
        ?>
            <tr>
                <td><?= $course['id'] ?></td>
                <td><?= $course['dept'] ?></td>
                <td><?= $course['title'] ?></td>
                <td><?= $course['credit'] ?></td>
                <td><?= $course['syllabus'] ?></td>
                <td><a href="update_course.php?id=<?=$course['id']?>">Update</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
require "includes/footer.php";
?>