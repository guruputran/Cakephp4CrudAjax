<div class="panel panel-primary">
    <div class="panel-heading">
        List Students
        <?php
        echo $this->Html->link(
            'Add Student',
            '/add-student',
            ['class' => 'btn btn-warning pull-right', 'style' => 'margin-top:-7px']
        );
        ?>
    </div>
    <div class="panel-body">

        <table id="tbl-students-list" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($students) > 0) {
                    foreach ($students as $index => $data) {
                ?>
                        <tr>
                            <td><?= $data->id ?></td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->email ?></td>
                            <td><?= $data->phone_no ?></td>
                            <td>
                                <a href="<?= $this->Url->build('/edit-student/' . $data->id, ['fullBase' => true]) ?>" class="btn btn-warning">Edit</a>

                                <a href="javascript:void(0)" class="btn btn-danger btn-delete-student" data-id="<?= $data->id ?>">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
