 <?php $this->extend('header'); 
 $this->section('content');?>
      
              

 <?php 
// echo "<pre>";
// print_r($list);
// echo "</pre>";
// die();


 ?>

  
        <div class="panel panel-info" bis_skin_checked="1">
            <div class="panel-heading" style="" bis_skin_checked="1">
                <h3 class="panel-title" >Crops Details</h3>
            </div>
            <div class="panel-body" bis_skin_checked="1">
              
                <div class="row" bis_skin_checked="1">
                     
                 
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Treatment No</label>
                            <input type="text" name="trial_code" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    
                
             
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Product</label>
                            <input type="text" name="App_method" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Dose Rate</label>
                            <input type="text" name="Appl_time" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                 
                 <div class="col-md-12 text-center">
        <button class="btn btn-success md-trigger mb-2 mr-1" id="add" data-modal="modal-6">ADD LEAF</button>
         <!-- <button class="btn btn-success md-trigger mb-2 mr-1"  data-target="#modal-13" data-modal="modal-13">ADD LEAF</button> -->
         </div>
                </div>
<!-- 
                  <div class="panel-heading" style="" bis_skin_checked="1">
                <h3 class="panel-title" >Leaf Details</h3>
            </div> -->

                 
              <form method="post" id="user_form">
    <div class="table-responsive">
     <table class="table table-striped table-bordered" id="user_data">
      <tr>
       <th>LEAF NO</th>
       <th>UPPER LEAF</th>
       <th>MIDDLE LEAF</th>
       <th>LOWER LEAF</th>
       <th>VIEW</th>
       <th>REMOVE</th>
      </tr>
     </table>
    </div>
    <div align="center">
     <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
    </div>
   </form>
                     
               
                   <!-- Modal side fall effects -->
           
                                                       
                             <div id="user_dialog" title="ADD LEAF" >
   <div class="form-group">
    <label>LEAF NO</label>
    <input type="text" name="leaf_no" id="leaf_no" class="form-control" />
    <span id="error_leaf_no" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>UPPER LEAF</label>
    <input type="text" name="upper" id="upper" class="form-control" />
    <span id="error_upper" class="text-danger"></span>
   </div> 
   <div class="form-group">
    <label>MIDDLE LEAF</label>
    <input type="text" name="middle" id="middle" class="form-control" />
    <span id="error_middle" class="text-danger"></span>
   </div>
    <div class="form-group">
    <label>LOWER LEAF</label>
    <input type="text" name="lower" id="lower" class="form-control" />
    <span id="error_lower" class="text-danger"></span>
   </div>
   <div class="form-group" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="button" name="save" id="save" class="btn btn-info">Save</button>
   </div>
  </div>
  <div id="action_alert" title="Action" >

  </div>
                                                    </div>
                                                </div>
                                            </div>
               
                
            </div>
        </div>
   <!--    <div class="col-md-12 text-center">
      
        <input class="btn btn-success  rounded-pill"  style="background-color: #37a000 ;" type="submit" name="save">
         </div> -->
</div>
              </form>





                  <?= $this->endsection();?>
