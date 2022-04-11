<?php
    require "includes/header.php";
    require "includes/menu.php";
?>
    <h1>Create Course</h1>
    <form action="create_course_code.php" method="post" >
        <label>ID</label>  <br>
        <input name ="id" type="text" placeholder="Enter Course Id"> <br>
        <label>Department</label>  <br>
        <input name ="dept" type="text" placeholder="Enter Department"> <br>
        <label>Title</label>  <br>
        <input name ="title" type="text" placeholder="Enter Title"> <br>
        <label>Credit</label>  <br>
        <input name ="credit" type="text" placeholder="Enter Credit"> <br>
        <label>Syllabus</label> <br>
        <input name ="syllabus" type="text" placeholder="Enter Syllabus">  <br> <br>
        <button type="submit">Create Course</button>
    </form>
    <br>
    <a href="read_course.php">Read Course</a>
<?php
    require "includes/footer.php";
?>
