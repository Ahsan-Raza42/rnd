 <?= $this->extend('header'); 
 $this->section('content');?>
                    <div id="dash-content"  >
       
        <!-- content -->


          <?php if (session()->getFlashdata('data') !== NULL) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('data'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>
          <?php if (session()->getFlashdata('brand') !== NULL) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('data'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>
      
            
<form method="post" action="<?php echo base_url().'/home/insert_data'?>"  style="margin-left: 29px; margin-right: 29px;">
       
 
        <div class="panel panel-info" bis_skin_checked="1">
            <div class="panel-heading" style="" bis_skin_checked="1">
                <h3 class="panel-title" >Trial Initiation</h3>
            </div>
            <div class="panel-body" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Protocol No:</label>
                            <input type="text" name="protocol" data-validation="required" mandatory-field="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Farmer Name:</label>
                    <input type="text" name="name" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                       


        
<div class="form-group highlight-addon field-vendor-vendor_type_id required" bis_skin_checked="1">
<label class="control-label" for="vendor-vendor_type_id">Location</label>

  <input type="text" name="loc" data-validation="required" num-validation="" class="form-control"required>

<div class="help-block" bis_skin_checked="1"></div>

</div>

    
                    </div>
                </div>
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Crop:</label>
                            <input type="text" name="crop" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Variety:</label>
                            <input type="text" name="variety" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Sowing Method:</label>
                            <input type="text" name="sowing" data-validation="required" num-validation="" mandatory-field="" class="form-control" required>
                        </div>
                    </div>
                    
                </div>
                 <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Planting Date:</label>
                            <input type="date" name="planting" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Replicates:</label>
                            <input type="text" name="replicates" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Target Pest:</label>
                            <input type="text" name="pest" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                   
                </div>
                  <div class="row" bis_skin_checked="1">
                     <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Plot Size:</label>
                            <input type="text" name="size" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Last Irrigation date:</label>
                            <input type="date" name="irrigation" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Previous Appl:</label>
                            <input type="text" name="p_app" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    
                </div>
                 <div class="row" bis_skin_checked="1">
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Blanket Appl:</label>
                            <input type="text" name="blanket" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Any Other info:</label>
                            <input type="text" name="other" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                     
                     
                </div>
                 <div class="panel panel-info" bis_skin_checked="1">
            <div class="panel-heading" style="" bis_skin_checked="1">
                <h3 class="panel-title" >Brand & Ingredient</h3>
            </div>
            <div class="panel-body" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Brand Name:</label>
                            <input type="text" name="b_name" data-validation="required" mandatory-field="" class="form-control "required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Formulation:</label>
                             <input type="text" name="formulation" data-validation="required" num-validation="" class="form-control"required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                       


        
<div class="form-group highlight-addon field-vendor-vendor_type_id required" bis_skin_checked="1">
<label class="control-label" for="vendor-vendor_type_id">Active Ingredient-1</label>

 <input type="text" name="a_ing_1" data-validation="required" num-validation="" class="form-control">

<div class="help-block" bis_skin_checked="1"></div>

</div>

    
                    </div>
                </div>
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Concentration (%):</label>
                            <input type="text" name="concentration_1" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-2:</label>
                            <input type="text" name="a_ing_2" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Concentration (%):</label>
                            <input type="text" name="concentration_2" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                </div>
                 <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-3:</label>
                            <input type="text" name="a_ing_3" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Concentration (%):</label>
                            <input type="text" name="concentration_3" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-4:</label>
                            <input type="text" name="a_ing_4" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                </div>
                  <div class="row" bis_skin_checked="1">
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Concentration (%):</label>
                            <input type="text" name="concentration_4" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Dose Rate:</label>
                            <input type="text" name="d_rate" data-validation="required" num-validation="" mandatory-field="" class="form-control" required>
                        </div>
                    </div>
                    
                </div>
                
                 <div class="panel panel-info" bis_skin_checked="1">
            <div class="panel-heading" style="" bis_skin_checked="1">
                <h3 class="panel-title" >Dose Rate of Active Ingredient (Grams)</h3>
            </div>
            <div class="panel-body" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-1:</label>
                            <input type="text" name="d_a_ing_1" data-validation="required" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">1-Active Ingredient (Grams):</label>
                        <input type="text" name="d_a_ing_g_1" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                       


        
<div class="form-group highlight-addon field-vendor-vendor_type_id required" bis_skin_checked="1">
<label class="control-label" for="vendor-vendor_type_id">Active Ingredient-2:</label>

  <input type="text" name="d_a_ing_2" data-validation="required" num-validation="" class="form-control">

<div class="help-block" bis_skin_checked="1"></div>

</div>

    
                    </div>
                </div>
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">2-Active Ingredient (Grams):</label>
                            <input type="text" name="d_a_ing_g_2" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-3:</label>
                            <input type="text" name="d_a_ing_3" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">3-Active Ingredient (Grams):</label>
                            <input type="text" name="d_a_ing_g_3" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                </div>
                 <div class="row" bis_skin_checked="1">
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-4:</label>
                            <input type="text" name="d_a_ing_4" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">4-Active Ingredient (Grams):</label>
                            <input type="text" name="d_a_ing_g_4" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    
                </div>
                 
          <div class="col-md-12 text-center">
     
        <input class="btn btn-success  rounded-pill"  style="background-color: #37a000 ;" type="submit" name="save">
         </div>
</div>
              </form>
                    <?= $this->endsection();?>
