<form action="<?php echo route('student.store')?>" method="post" >

<?php echo csrf_field() ?>

Name &nbsp &nbsp<input type="text" name="student_name" > <br/>

Age  &nbsp &nbsp &nbsp   <input type="text" name="student_age" > <br/>

Address <input type="text" name="student_address" > <br/>

<input type="submit" value="save" >

</form>

