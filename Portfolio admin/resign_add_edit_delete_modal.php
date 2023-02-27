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
                <h3 class="modal-title">Add Resignation</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="resign_add.php">
                    <div class="form-group">
                        <label>Resigning Employee <span class="text-danger">*</span></label>
                        <input name="Employee" required class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Department <span class="text-danger">*</span></label>
                        <input name="Department" required class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Notice Date <span class="text-danger">*</span></label>
                        <input name="Notice_date" required class="form-control" type="date">
                    </div>
                    <div class="form-group">
                        <label>Resignation Date <span class="text-danger">*</span></label>
                        <input name="Resignation_date" class="form-control" type="date">
                    </div>
                    <div class="form-group">
                        <label>Reason <span class="text-danger">*</span></label>
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
                <h3 class="modal-title">Edit Resignation</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="resign_edit.php">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label>Resigning Employee <span class="text-danger">*</span></label>
                            <input name="Employee" required class="form-control" type="text"
                                value="<?php echo $row['Employee']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Notice Date <span class="text-danger">*</span></label>
                            <input name="Notice_date" required class="form-control" type="text"
                                value="<?php echo $row['Notice_date']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Resigning Date <span class="text-danger">*</span></label>
                            <input name="Resignation_date" required class="form-control" type="text"
                                value="<?php echo $row['Resignation_date']; ?>">
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
                <h3 class="modal-title">Delete Resignation</h3>
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
                <a href="resign_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Yes</a>
            </div>
        </div>
    </div>
</div>