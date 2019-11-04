<div class="container">
    <a href="View/Test/add.php" class="btn btn-success">Add new</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Fullname</th>
                <th scope="col">Class</th>
                <th scope="col">Mark</th>
                <th scope="col">Sex</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
        if (isset($data['student_data'])) {
            foreach ($data['student_data'] as $rows) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name'] ?></td>
                        <td><?php echo $rows['class'] ?></td>
                        <td><?php echo $rows['mark'] ?></td>
                        <td><?php echo $rows['sex'] ?></td>
                        <td class="text-center">
                            <a href="index.php?id=<?php echo $rows['id']; ?>"><i class="material-icons">visibility</i></a>
                            <a href="index.php?id=<?php echo $rows['id']; ?>"><i class="material-icons">edit</i></a>
                            <a href="index.php?id=<?php echo $rows['id']; ?>"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                </tbody>
                </tbody>
        <?php
        }
        }
        ?>
    </table>
</div>