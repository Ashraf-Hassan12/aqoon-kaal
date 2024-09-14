<?php 
session_start();
require("../tools/function.php");
?>
<div class="row">
	<div style="margin: auto;" class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Class</div>
                             
                            </div>
                            <div class="ibox-body">
              <form class="form_data" action="tools/addclass.php" method="post">
                               
                                    <div class="form-group">
                                        <label>Class Name</label>
          <input class="form-control" name="class" type="text" placeholder="Enter Class Name">
                                    </div>
                                    <div class="form-group">
                               <label>Choose Level</label>
                                        <select name="level" class="form-control">
                                          <option selected="" disabled="">Choose One</option>
                             <?php get_dropdown('level') ?>
                                        </select>
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