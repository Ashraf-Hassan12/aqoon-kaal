<?php 
session_start();
require("../tools/function.php");
?>
<div class="row">
	<div style="margin: auto;" class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Add Class Room</div>
                             
                            </div>
                            <div class="ibox-body">
              <form class="form_data" action="tools/addclasroom.php" method="post">
                               
                                    <div class="form-group">
                                        <label>Choose Branch</label>
          <select name="a" class="form-control">
                                          <option selected="" disabled="">Choose One</option>
                             <?php get_dropdown('branch') ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                               <label>Choose Class</label>
                                        <select name="b" class="form-control">
                                          <option selected="" disabled="">Choose One</option>
                             <?php get_dropdown('class') ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Choose Char</label>
    <div>
                    <label class="ui-radio ui-radio-inline">
                    <input type="radio" name="c" value="A">
                     <span class="input-span"></span>A
                    </label>
                         <label class="ui-radio ui-radio-inline">
                    <input type="radio" name="c" value="B">
                     <span class="input-span"></span>B
                    </label>
                         <label class="ui-radio ui-radio-inline">
                    <input type="radio" name="c" value="C">
                     <span class="input-span"></span>C
                    </label>
                                            
                                         
                                        </div>
                                    </div>

                                      <div class="form-group">
                               <label>Choose Shift</label>
                                        <select name="d" class="form-control">
                                          <option selected="" disabled="">Choose One</option>
                             <?php get_dropdown('shift') ?>
                                        </select>
                                    </div>

                                       <div class="form-group">
                               <label>Fee</label>
            <input type="text" name="e" class="form-control" placeholder="Haddi feega uu ka duwan yahay lacagta heerka hadii kale 0">
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