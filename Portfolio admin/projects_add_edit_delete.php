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
                <h3 class="modal-title">Add Project</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="projects_add.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" type="text" name="Project_name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Client</label>
                                <input class="form-control" type="text" name="Client">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Project ID <span class="text-danger">*</span></label>
                                <input name="Project_id" readonly type="text" value="<?php echo 'PRJ-'.$id; ?>"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon">
                                    <input name="Start_date" class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon">
                                    <input name="Deadline" class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Rate</label>
                                <input name="Project_cost" placeholder="₹50" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select name="" class="select">
                                    <option>Hourly</option>
                                    <option>Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Priority</label>
                                <select class="select">
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Add Team Leader</label>
                                <input class="form-control" type="text" name="leader_1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Team Leader Photo</label>
                                <input class="form-control" type="file" name="leader_1p">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Add Team : </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Member 1</label>
                                <input class="form-control" type="text" name="Team_1">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Member 2</label>
                                <input class="form-control" type="text" name="Team_2">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Member 3</label>
                                <input class="form-control" type="text" name="Team_3">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Member 4</label>
                                <input class="form-control" type="text" name="Team_4">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Photo</label>
                                <input class="form-control" type="file" name="Team_1p">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Photo</label>
                                <input class="form-control" type="file" name="Team_2p">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Photo</label>
                                <input class="form-control" type="file" name="Team_3p">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Photo</label>
                                <input class="form-control" type="file" name="Team_4p">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" class="form-control summernote" placeholder="Enter your message here"
                            name="Description"></textarea>
                    </div>
                    <div class="modal-footer submit-section">
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
                <h3 class="modal-title">Edit Project</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="projects_edit.php" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label>Project <span class="text-danger">*</span></label>
                            <input name="Project_name" required class="form-control" type="text"
                                value="<?php echo $row['Project_name']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Project ID <span class="text-danger">*</span></label>
                            <input name="Project_id" readonly type="text" class="form-control"
                                value="<?php echo $row['Project_id']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Start Date</label>
                            <div class="cal-icon">
                                <input name="Start_date" class="form-control datetimepicker" type="text"
                                    value="<?php echo $row['Start_date']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>End Date</label>
                            <div class="cal-icon">
                                <input name="Deadline" class="form-control datetimepicker" type="text"
                                    value="<?php echo $row['Deadline']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Rate</label>
                            <input name="Project_cost" class="form-control" type="text"
                                value="<?php echo $row['Project_cost']; ?>">
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
                <h3 class="modal-title">Delete Project</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Are you sure you want to Delete?</p>
                <h2 class="text-center"><?php echo $row['Project_name']; ?> <?php echo $row['LastName']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>
                <a href="projects_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Yes</a>
            </div>
        </div>
    </div>
</div>