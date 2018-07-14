<form action="<?php echo route('student.update', $student->id )?>" method="post" >

<?php echo csrf_field() ?>
<?php echo method_field('PATCH') ?>
Name    <input type="text" name="student_name"
 value="<?php echo $student->name ?>" > <br/>

Age     <input type="text" name="student_age"
 value="<?php echo $student->age ?>"> <br/>

Address <input type="text" name="student_address" 
value="<?php echo $student->address ?>"> <br/>

<input type="submit" value="save" >
</form>