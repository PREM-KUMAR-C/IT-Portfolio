<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Template Name: Shakthi - Portfolio Admin
*/
-->

<!-- Edit -->
<div class="modal custom-modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Invoice</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="invoice_edit.php" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client <span class="text-danger">*</span></label>
                                    <input name="Clients" required class="form-control" type="text"
                                        value="<?php echo $row['Clients']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project</label>
                                    <input name="Project_name" required class="form-control" type="text"
                                        value="<?php echo $row['Project_name']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Address <span class="text-danger">*</span></label>
                                    <input name="Address" required class="form-control" type="text"
                                        value="<?php echo $row['Address']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input name="Email" required class="form-control" type="email"
                                        value="<?php echo $row['Email']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Invoice Date</label>
                                    <input name="Invoice_date" required class="form-control datetimepicker" type="text"
                                        value="<?php echo $row['Invoice_date']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Due Date</label>
                                    <input name="Due_date" required class="form-control datetimepicker" type="text"
                                        value="<?php echo $row['Due_date']; ?>">
                                </div>
                            </div>
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
                <h3 class="modal-title">Delete Invoice</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete?</p>
                <h2 class="text-center"><?php echo $row['Invoice_id']; ?> <?php echo $row['LastName']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                <a href="invoice_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Yes</a>
            </div>
        </div>
    </div>
</div>