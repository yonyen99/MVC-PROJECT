
<table class ="table table-striped table-hover mt-2">
    <thead class ="table-dark">
        <tr>
            <th>Id</th>
            <th>F-Name</th>
            <th>L-Name</th>
            <th>Sext</th>
            <th>Have-Permission</th>
            <th>No-Permission</th>
            <th>Description</th>
        </tr>
    </thead>
    <?php
        if(isset( $data['view'])){
            foreach( $data['view'] as $rows){
    ?>
    <tbody>
        <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['firstName'];?></td>
            <td><?php echo $rows['lastName'];?></td>
            <td><?php echo $rows['sex'];?></td>
            <td><?php echo $rows['havePermission'];?></td>
            <td><?php echo $rows['noPermission'];?></td>
            <td><?php echo $rows['description'];?></td>
        </tr>
    </tbody>
    <?php
        }
    }
        
    ?>
</table>