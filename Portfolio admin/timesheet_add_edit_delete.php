<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Template Name: Shakthi - Portfolio Admin
*/
-->
<!-- Add New -->
<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); ?>
<div class="modal custom-modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add Timesheet</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="timesheet_add.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input name="FirstName" required class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="LastName" required class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date <span class="text-danger">*</span></label>
                                <input name="Date" required class="form-control" type="date">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Projects <span class="text-danger">*</span></label>
                                <input name="Projects" required class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Assigned Days <span class="text-danger">*</span></label>
                                <input name="Assigned_days" required class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Completed Days <span class="text-danger">*</span></label>
                                <input name="Completed_days" required class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Designation <span class="text-danger">*</span></label>
                                <input name="Designation" required class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="3" name="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input name="Picture" type="file" class="custom-file-input" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose Profile
                                    Picture...</label>
                            </div>
                        </div>
                        <div class="modal-footer submit-section">
                            <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                            <button type="submit" name="add" class="btn btn-primary submit-btn"> Save</a>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Edit -->
<div class="modal custom-modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Timesheet</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="timesheet_edit.php" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label>Date <span class="text-danger">*</span></label>
                            <input name="Date" required class="form-control" type="date"
                                value="<?php echo $row['Date']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Project</label>
                            <input name="Projects" required class="form-control" type="text"
                                value="<?php echo $row['Projects']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Assigned Days <span class="text-danger">*</span></label>
                            <input name="Assigned_days" required class="form-control" type="number"
                                value="<?php echo $row['Assigned_days']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Completed Days<span class="text-danger">*</span></label>
                            <input name="Completed_days" required class="form-control" type="number"
                                value="<?php echo $row['Completed_days']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Designation <span class="text-danger">*</span></label>
                            <input name="Designation" required class="form-control" type="text"
                                value="<?php echo $row['Designation']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="3" name="Description"
                                value="<?php echo $row['Description']; ?>"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                            <button type="submit" name="edit" class="btn btn-success"> Update</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal custom-modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Delete Timesheet</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete?</p>
                <h2 class="text-center"><?php echo $row['Projects']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                <a href="timesheet_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Yes</a>
            </div>
        </div>
    </div>
</div>