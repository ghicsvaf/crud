
<a href="<?php echo route('student.create'); ?>"><h2>create</h2> </a>

</br>

<table border="1" >
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    <?php 
    $no = 1;

    foreach ($student as $key => $value)
    {?>
     <tr>
        <td><?php echo $no++ ;?></td>
        <td><?php echo $value->name;?></td>
        <td><?php echo $value->age;?></td>
        <td><?php echo $value->address;?></td>
        <td>
           <a href="<?php echo route('student.edit',$value->id);?>" >Edit</a> | 
           
           <form action="<?php echo route('student.destroy', $value->id) ?>"
            method="post" style="display: inline-block;">
                <?php echo csrf_field() ?>
                <?php echo method_field('DELETE') ?>
                <a href="javascript:;" 
                onclick="confirm_delete(this.parentNode)" >Delete</a>

           </form>
        </td>
    </tr>
    <?php
    }
    ?>
    
</table>

<script type="text/javascript">
function confirm_delete(form)
{
 var isDeleteConfirmed = confirm('Delete Data?');
 if (isDeleteConfirmed)
 {
     form.submit();
 }
}
</script>