<table class="table table-striped table-hover mt-2">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>F-Name</th>
            <th>L-Name</th>
            <th>Sext</th>
            <th>Permission</th>
            <th>Description</th>
        </tr>
    </thead>
    <?php
    if (isset($data['view'])) {
        foreach ($data['view'] as $rows) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['firstName']; ?></td>
                    <td><?php echo $rows['lastName']; ?></td>
                    <td><?php echo $rows['sex']; ?></td>
                    <td><?php echo $rows['permission']; ?></td>
                    <td>
                        <?php echo $rows['description']; ?>
                        <textarea name="text" cols="30" rows="1"></textarea>
                    </td>
                </tr>
            </tbody>
    <?php
        }
    }
    ?>
     <button type="submit" class="btn btn-outline-danger">Save</button>
</table>