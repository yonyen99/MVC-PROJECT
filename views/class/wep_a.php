<table class="table table-striped table-hover mt-2">
    <thead class="table-dark">
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
    <form action="index.php?action=attendent_wepa" method="post">
    <?php
    if (isset($data['view'])){
        foreach ($data['view'] as $rows) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['firstName'];?></td>
                    <td><?php echo $rows['lastName']; ?></td>
                    <td><?php echo $rows['sex']; ?></td>
                    <td>
                        <?php echo $rows['havePermission']; ?>
                        <form action="/action_page.php">
                            <input type="checkbox" name="vehicle1" value="Bike"><br>
                        </form>
                    </td>
                    <td>
                        <?php echo $rows['noPermission']; ?>
                        <form action="/action_page.php">
                            <input type="checkbox" name="vehicle1" value="Bike"><br>
                        </form>
                    </td>
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
    <a href="index.php?action=attendent_wepa" class="btn btn-outline-warning">save</a>
  <!-- <a href="index.php?action=attendent_wepa"class="btn btn-outline-danger">Save</a> -->
  </form>
</table>