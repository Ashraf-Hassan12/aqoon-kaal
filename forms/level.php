<?php 
session_start();
?>
<div class="row">
	<div style="margin: auto;" class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Level</div>
                             
                            </div>
                            <div class="ibox-body">
              <form class="form_data" action="tools/addlevel.php" method="post">
                               
                                    <div class="form-group">
                                        <label>Level Name</label>
          <input class="form-control" name="level" type="text" placeholder="Enter Level Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Level Fee</label>
                                        <input class="form-control" type="number" placeholder="Enter Level Fee" name="fee">
                                    </div>
                               
     <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" name="user_id">
                                    <div class="form-group">
                       <button class="btn btn-primary btn-block" type="submit">Save</button>
                                    </div>
                                </form>
                             <div>
                             	
                             </div>
                            </div>
                        </div>
                    </div>
</div>