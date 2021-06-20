<div class="panel panel-primary">
    <div class="panel-heading">
        Add Student
        <?php
        echo $this->Html->link(
            'List Students',
            '/list-students',
            ['class' => 'btn btn-warning pull-right', 'style' => 'margin-top:-7px']
        );
        ?>
    </div>
    <div class="panel-body">
        <form action="javascript:void(0)" id="frm-add-student" method="post">
            <div class="row custom-padding">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" required class="form-control" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" required class="form-control" placeholder="email" name="email">
                    </div>
                </div>
            </div>
            <div class="row custom-padding">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Phone No</label>
                        <input type="text" required class="form-control" placeholder="Phone No" name="phone_no">
                    </div>
                </div>
            </div>
            <div class="row custom-padding">
                <div class="col-sm-6">
                    <!-- Select multiple-->
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
