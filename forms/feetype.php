<?php 
session_start();

?>
<div class="row">
	<div style="margin: auto;" class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Fee Type</div>
                             
                            </div>
                            <div class="ibox-body">
              <form class="form_data" action="tools/insert_anny.php" method="post">
                    <input type="hidden" name="sp" value="fee_type_sp">
                                    <div class="form-group">
                                        <label>Shift Name</label>
          <input class="form-control" name="shift" type="text" placeholder="Enter Fee Name">
                                    </div>
                                
  
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