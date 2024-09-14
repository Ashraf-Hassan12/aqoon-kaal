<?php 
session_start();

?>
<div class="row">
	<div style="margin: auto;" class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Shift</div>
                             
                            </div>
                            <div class="ibox-body">
              <form class="form_data" action="tools/addshift.php" method="post">
                               
                                    <div class="form-group">
                                        <label>Shift Name</label>
          <input class="form-control" name="shift" type="text" placeholder="Enter Shift Name">
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