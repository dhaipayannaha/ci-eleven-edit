
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>how to insert data in database
                            <a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float-right">Add Employee</a>
                            <!-- $config['base_url'] = 'http://localhost/ci-eignt-database/'; -->

                            <!-- $autoload['helper'] = array('url'); -->

                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone No</th>
                                    <th>Email ID</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employee as $row) : ?>
                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?= $row->first_name; ?></td>
                                    <td><?= $row->last_name; ?></td>
                                    <td><?= $row->phone; ?></td>
                                    <td><?= $row->email; ?></td>
                                    <td>
                                        <a href="<?php echo base_url('employee/edit/'. $row->id) ?>" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

 