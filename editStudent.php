<?php 
    require_once "vendor/autoload.php";
    use App\Classes\Student;

    $id = $_GET['id'];
    $student = new Student();
    $result = $student->getStudentInfo($id);
    $student = mysqli_fetch_assoc($result);

    if(isset($_POST['btn'])){
        $student = new Student();
        $msg = $student->updateStudent();
    }
?>


<table>
    <tr>
        <td><a href="addStudent.php">Add Student</a></td>
        <td><a href="viewStudent.php">View Student</a></td>
    </tr>
</table>
<hr>

<form action="" method="POST">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $student['name'];?>"></td>
            <td><input type="hidden" name="id" value="<?php echo $student ['id']; ?>"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo $student['email'];?>"></td>
        </tr>
        <tr>
            <td>Mobile:</td>
            <td><input type="text" name="mobile" value="<?php echo $student['mobile'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>