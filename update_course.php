<h1>Update Course</h1>
<?php
require_once "includes/dbcon.php";
$id = $_GET['id'];
$query = "SELECT * FROM course WHERE id = $id";
$result = mysqli_query($conn, $query);
?>
<form action="update_course_code.php" method="post">
    <?php
    foreach ($result as $course) {
    ?>
        <label>Course Id</label> <br>
        <input name="id" value=<?=$course['id']?>> <br>
        <label>Department</label> <br>
        <input name="dept" value=<?=$course['dept']?> type="text" placeholder="Enter Department" name="dept"> <br>
        <label>Title</label> <br>
        <input name="title" value=<?=$course['title']?> type="text" placeholder="Enter Title" name="title"> <br>
        <label>Credit</label> <br>
        <input name="credit" value=<?=$course['credit']?> type="text" placeholder="Enter Credit" name="credit"> <br>
        <label>Syllabus</label> <br>
        <input name="syllabus" value=<?=$course['syllabus']?> type="text" placeholder="Enter Syllabus" name="syllabus"> <br> <br>
        <button type="submit">Update</button>
</form>
<?php
    }
?>