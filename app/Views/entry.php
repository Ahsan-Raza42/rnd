 <?php $this->extend('header'); 
 $this->section('content');?>
      
            
<form method="post" action="  home/entry_input  "  style="margin-left: 29px; margin-right: 29px;">
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
                   
<div class="form-group highlight-addon field-vendor-vendor_type_id required" bis_skin_checked="1">
<label class="control-label" for="vendor-vendor_type_id">Protocol No:</label>
<select id="protocol_number" class="form-control basic-single"  name="protocol" aria-required="true">
 
<option value="" disabled selected>Search Protocol No</option>
   <?php foreach($list as $listen){ ?> 

<option value="<?php echo $listen->id;?>"><?php echo $listen->protocol;?></option><?php }?>
 
</select>

<div class="help-block" bis_skin_checked="1"></div>

</div>
    
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Crop</label>
                             
   <select class="form-control basic-single" id="crop" name="crop">
                                                   
                                                          <option value="" disabled selected>Search Protocol No</option>    
                                                        <option value="<?php echo $listen->c_name;?>"><?php echo $listen->c_name;?></option> 
                                                     
                                                </select>

                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Year</label>
                         <select id="year" name="year" class="form-control"  name="vendor_type" aria-required="true">
                <option value="" disabled selected>Enter year </option> 
                <option value="<?php echo $listen->year;?>"><?php echo $listen->year;?></option> 
</select>
                        </div>
                    </div>
             
                </div>
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                    
<div class="form-group highlight-addon field-vendor-vendor_type_id required" bis_skin_checked="1">
<label class="control-label" for="vendor-vendor_type_id">Weed Type</label>
<select id="weed" class="form-control"  name="weed" aria-required="true">
 <option value="" disabled selected>Enter Weed Type</option> 
<option value="<?php echo $listen->type;?>"><?php echo $listen->type;?></option>
 
</select>


<select hidden name="crop_id" id="crop_id">
    </select>




<div class="help-block" bis_skin_checked="1"></div>

</div>

    
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Location</label>
                            <select id="locs" class="form-control"  name="loc" aria-required="true">
 <option value="" disabled selected>Enter Location</option>
<option value="<?php echo $listen->location;?>"><?php echo $listen->location;?></option>  
 
</select> 
                             
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Trial Code</label>
                            <input type="text" name="trial_code" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    
                </div>
                 <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Application Method</label>
                            <input type="text" name="App_method" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Application Timming</label>
                            <input type="text" name="Appl_time" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Treatment Name</label>
                            <input type="text" name="treamtent" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                
                </div>
                  <div class="row" bis_skin_checked="1">
                        <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Dose per Acre</label>
                            <input type="text" name="dose_per_acre" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Replication</label>
                            <input type="text" name="replication" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Assesment</label>
                            <input type="text" name="assesment" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
               
                </div>   
                    <div class="row" bis_skin_checked="1">
                  <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Germination of Wheat</label>
                            <input type="text" name="germination" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>

                  <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                 
                                            <label class="control-label">Disease</label>
                                          
                                                <select class="form-control placeholder-multiple" multiple="multiple" name="disease[]">
                                                        <option value="DEELA">DEELA</option>
                                                        <option value="Lehli">Lehli</option>
                                                        <option value="Billi Booti">Billi Booti</option>
                                                        <option value="Matri">Matri</option>
                                                        <option value="Jangli Haloon">Jangli Haloon</option>
                                                        <option value="Jangli Palak">Jangli Palak</option> 
                                                        <option value="Maina">Maina</option>
                                                        <option value="Senji">Senji</option>
                                                        <option value="Shahtra">Shahtra</option>
                                                        <option value="Veronica">Veronica</option>
                                                        <option value="Chatri Dhoodak">Chatri Dhoodak</option>
                                                        <option value="Kanda Palak">Kanda Palak</option>
                                                        <option value="Wild Radish">Wild Radish</option>
                                                        <option value="Kalari Booti">Kalari Booti</option>
                                                        <option value="Kanda Palak">Kanda Palak</option> 
                                                        <option value="Butter Cups">Butter Cups</option>
                                                        <option value="Parthenium">Parthenium</option>
                                                        <option value="Piazi">Piazi</option>
                                                        <option value="Milk Thistle">Milk Thistle</option>
                                                        <option value="Parthenium">Parthenium</option>
                                                        <option value="Krund">Krund</option>
                                                        <option value="Sarsoon">Sarsoon</option>
                                                        <option value="Galium">Galium</option>
                                                        <option value="Wild Mustured">Wild Mustured</option>
                                                        <option value="Dumbi Sitti">Dumbi Sitti</option>
                                                        <option value="Jangli Jai">Jangli Jai</option>
                                                        <option value="Jangli Jai (R+NR)">Jangli Jai (R+NR)  </option>
                                                        <option value="Dumbi Sitti (R)">Dumbi Sitti (R)</option>
                                                        <option value="Salai Sitti">Salai Sitti</option>
                                                        <option value="Salai Sitti (R)">Salai Sitti (R)</option> 
                                                        <option value="Chawli">Chawli</option>
                                                        <option value="Setaria Pumila">Setaria Pumila</option>
                                                        <option value="Jangli Jai (R)">Jangli Jai (R)</option>
                                                        <option value="Poa Annua">Poa Annua</option>
                                                        <option value="Lomar Ghass">Lomar Ghass</option>
                                                        <option value="Gajar Booti">Gajar Booti</option>
                                                        <option value="Looni Booti">Looni Booti</option>
                                                        <option value="Lalli Booti">Lalli Booti</option>
                                                        <option value="Brasica">Brasica</option>
                                                        <option value="Raya Sarsoon">Raya Sarsoon</option> 
                                                </select>
                                            </div>
                                        </div>
               
                   
     
                 
               
               
               
                
            </div>
        </div>
      <div class="col-md-12 text-center">
      
        <input class="btn btn-success  rounded-pill"  style="background-color: #37a000 ;" type="submit" name="save">
         </div>
</div>
              </form>
                  <?= $this->endsection();?>
