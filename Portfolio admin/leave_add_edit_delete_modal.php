<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Template Name: Shakthi - Portfolio Admin
*/
-->

<!-- Add New -->
<div class="modal custom-modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add Leaves</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="leave_add.php">
                    <div class="form-group">
                        <label>Employee Name <span class="text-danger">*</span></label>
                        <input name="Employee" required class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>From <span class="text-danger">*</span></label>
                        <input name="Starting_At" required class="form-control" type="date">
                    </div>
                    <div class="form-group">
                        <label>To <span class="text-danger">*</span></label>
                        <input name="Ending_On" required class="form-control" type="date">
                    </div>
                    <div class="form-group">
                        <label>Number of days <span class="text-danger">*</span></label>
                        <input name="Days" class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <label>Leave Reason <span class="text-danger">*</span></label>
                        <textarea name="Reason" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                        <button type="submit" name="add" class="btn btn-primary submit-btn"> Save</a>
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
                <h3 class="modal-title">Edit Leave</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="leave_edit.php">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label>Leave Type <span class="text-danger">*</span></label>
                            <input name="Leave_Type" required class="form-control" type="text"
                                value="<?php echo $row['Leave_Type']; ?>">
                        </div>
                        <div class="form-group">
                            <label>From <span class="text-danger">*</span></label>
                            <input name="Starting_At" required class="form-control" type="date"
                                value="<?php echo $row['Starting_At']; ?>">
                        </div>
                        <div class="form-group">
                            <label>To <span class="text-danger">*</span></label>
                            <input name="Ending_On" required class="form-control" type="date"
                                value="<?php echo $row['Ending_On']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Number of days <span class="text-danger">*</span></label>
                            <input name="Days" class="form-control" type="number" value="<?php echo $row['Days']; ?>">
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
                <h3 class="modal-title">Delete Leave</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete?</p>
                <h2 class="text-center"><?php echo $row['Employee']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                <a href="leave_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Yes</a>
            </div>
        </div>
    </div>
</div>