<?php
    require_once "vendor/autoload.php";
    use App\Classes\Student;

    $student = new Student();
    $result = $student->viewStudent();

    if(isset($_GET['status'])){
    	$id = $_GET['id'];
    	$student = new Student();
    	$student->deleteStudent($id);
    }

    if(isset($_POST['btn'])){
    	$result = $student->searchStudent();
    }
    
?>

<table>
    <tr>
        <td><a href="addStudent.php">Add Student</a></td>
        <td><a href="viewStudent.php">View Student</a></td>
    </tr>
</table>
<hr>

<form action="" method="post">
    <table>
        <tr>
            <td>Search</td>
            <td><input type="text" name="searchData"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="search"></td>
        </tr>
    </table>
</form>

<table border="1" width="700">
	<tr>
		<th>SL No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Number</th>
		<th>Action</th>
	</tr>
	<?php while($student = mysqli_fetch_assoc($result)){
		?>
	<tr>
		<td><?php echo $student['id']; ?></td>
		<td><?php echo $student['name']; ?></td>
		<td><?php echo $student['email']; ?></td>
		<td><?php echo $student['mobile']; ?></td>
		<td>
			<a href="editStudent.php?id=<?php echo $student['id']; ?>">Edit || </a>
			<a href="?status=delete&id=<?php echo $student['id'] ;?>" onclick="return confirm('Delete??')">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>