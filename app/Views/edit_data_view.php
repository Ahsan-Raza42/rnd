 <?php $this->extend('header'); 
 $this->section('content');?>
      
                <?php  foreach($list as $listens) {?>
<form method="post" action="<?php echo base_url().'/home/update_edit_data_entry/'. $listens->crop_id; ?>  "  style="margin-left: 29px; margin-right: 29px;">
 <?php   }    
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
   <?php //foreach($lists as $listens){ ?> 
     <?php foreach($list as $listens) {?>
  <option value="<?php echo $listens->id;  ?>"<?php if($listens->protocol_no == $listens->protocol_no) echo "Selected";     } ?>> <?php echo $listens->protocol_no;?></option>  <?php  //} ?>
 
</select>

<div class="help-block" bis_skin_checked="1"></div>

</div>
    
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Crop</label>
                             
   <select class="form-control basic-single" id="crop" name="crop">
                                                   
             <option value="" disabled selected>Search Crop Name</option>    
                   <?php foreach($list as $listen){ ?> 
                 <option value="<?php echo $listen->c_name;?>"<?php if($listens->c_name == $listens->c_name) echo "Selected";     }  ?>><?php echo $listen->c_name;   ?></option>  
                                                     
         </select>

                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Year</label>
                         <select id="year" name="year" class="form-control"  name="vendor_type" aria-required="true">
                <option value="" disabled selected>Enter year </option> 
                  <?php foreach($list as $listen){ ?> 
                <option value="<?php echo $listen->year;?>"<?php if($listens->year == $listens->year) echo "Selected";     }  ?>><?php echo $listen->year;  ?></option> 
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
   <?php foreach($list as $listen){ ?> 
<option value="<?php echo $listen->type;?>"<?php if($listens->type == $listens->type) echo "Selected";     }  ?>><?php echo $listen->type;   ?></option>
 
</select>

<input type="hidden" name="crop_id" value="<?php echo $listen->crop_id;?>">
 




<div class="help-block" bis_skin_checked="1"></div>

</div>

    
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Location</label>
                            <select id="locs" class="form-control"  name="loc" aria-required="true">
 <option value="" disabled selected>Enter Location</option>
   <?php foreach($list as $listen){ ?> 
<option value="<?php echo $listen->location;?>"<?php if($listens->location == $listens->location) echo "Selected";     }  ?>><?php echo $listen->location;  ?></option>  
 
</select> 
                             
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Trial Code</label>   
                            <input type="text" name="trial_code" data-validation="required" num-validation="" value="<?php echo $listen->trial_code;  ?>" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    
                </div>
                 <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Application Method</label>
                            <input type="text" name="App_method" data-validation="required" num-validation="" value="<?php echo $listen->application_method;?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Application Timming</label>
                            <input type="text" name="Appl_time" value="<?php echo $listen->timing;?>" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Treatment Name</label>
                            <input type="text" name="treamtent" data-validation="required" num-validation="" mandatory-field="" value="<?php echo $listen->treatments_name;?>" class="form-control">
                        </div>
                    </div>
                
                </div>
                  <div class="row" bis_skin_checked="1">
                        <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Dose per Acre</label>
                            <input type="text" name="dose_per_acre" data-validation="required" num-validation="" value="<?php echo $listen->dose;?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Replication</label>
                            <input type="text" name="replication" data-validation="required" num-validation="" value="<?php echo $listen->replication;?>"class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Assesment</label>
                            <input type="text" name="assesment" data-validation="required" num-validation="" value="<?php echo $listen->assessment;?>" mandatory-field="" class="form-control">
                        </div>
                    </div>
               
                </div>   
                    <div class="row" bis_skin_checked="1">
                  <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Germination of Wheat</label>
                            <input type="text" name="germination" data-validation="required" num-validation="" value="<?php echo $listen->germination;?>" class="form-control">
                        </div>
                    </div>

                  <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                 
                                            <label class="control-label">Disease</label> 

 
                                                <select class="form-control placeholder-multiple"   multiple="multiple" name="disease[]">
                                                    <?php foreach ($list as $key => $listen) { ?>
 <option value="DEELA"<?php if($listen->disease =="DEELA") echo "Selected" ;  } ?> >DEELA</option> <?php  foreach ($list as $key => $listen) { ?>
   <option value="Lehli"<?php if($listen->disease =="Lehli") echo "Selected";  }  ?>>Lehli</option><?php foreach ($list as $key => $listen) { ?>
       <option value="Billi Booti"<?php if($listen->disease =="Billi Booti") echo "Selected" ; }   ?>>Billi Booti</option> <?php foreach ($list as $key => $listen) {?>
           <option value="Matri" <?php if($listen->disease =="Matri") echo "Selected" ; }  ?>>Matri</option><?php   foreach ($list as $key => $listen) { ?>
                <option value="Jangli Haloon"<?php if($listen->disease =="Jangli Haloon") echo "Selected"; }   ?>>Jangli Haloon</option> <?php  foreach ($list as $key => $listen) {?>
    <option value="Jangli Palak"<?php if($listen->disease =="Jangli Palak") echo "Selected" ; }  ?>>Jangli Palak</option> <?php  foreach ($list as $key => $listen) { ?>
      <option value="Maina"<?php if($listen->disease =="Maina") echo "Selected";  }   ?>>Maina</option><?php foreach ($list as $key => $listen) { ?>
        <option value="Senji"<?php if($listen->disease =="Senji") echo "Selected" ; }  ?>>Senji</option><?php foreach ($list as $key => $listen){ ?>
          <option value="Shahtra"<?php if($listen->disease =="Shahtra") echo "Selected" ; }  ?>>Shahtra</option><?php foreach ($list as $key => $listen){ ?>
             <option value="Veronica" <?php if($listen->disease =="Veronica") echo "Selected" ; }  ?>>Veronica</option> <?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Chatri Dhoodak"<?php if($listen->disease =="Chatri Dhoodak") echo "Selected" ; }  ?>>Chatri Dhoodak</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Kanda Palak"<?php if($listen->disease =="Kanda Palak") echo "Selected" ; }  ?>>Kanda Palak</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Wild Radish"<?php if($listen->disease =="Wild Radish") echo "Selected" ; }  ?>>Wild Radish</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Kalari Booti"<?php if($listen->disease =="Kalari Booti") echo "Selected" ; }  ?>>Kalari Booti</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Kanda Palak"<?php if($listen->disease =="Kanda Palak") echo "Selected" ; }  ?>>Kanda Palak</option> <?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Butter Cups"<?php if($listen->disease =="Butter Cups") echo "Selected" ; }  ?>>Butter Cups</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Parthenium"<?php if($listen->disease =="Parthenium") echo "Selected" ; }  ?>>Parthenium</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Piazi"<?php if($listen->disease =="Piazi") echo "Selected" ; }  ?>>Piazi</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Milk Thistle"<?php if($listen->disease =="Milk Thistle") echo "Selected" ; }  ?>>Milk Thistle</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Parthenium"<?php if($listen->disease =="Parthenium") echo "Selected" ; }  ?>>Parthenium</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Krund"<?php if($listen->disease =="Krund") echo "Selected" ; }  ?>>Krund</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Sarsoon"<?php if($listen->disease =="Sarsoon") echo "Selected" ; }  ?>>Sarsoon</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Galium"<?php if($listen->disease =="Galium") echo "Selected" ; }  ?>>Galium</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Wild Mustured"<?php if($listen->disease =="Wild Mustured") echo "Selected" ; }  ?>>Wild Mustured</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Dumbi Sitti"<?php if($listen->disease =="Dumbi Sitti") echo "Selected" ; }  ?>>Dumbi Sitti</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Jangli Jai"<?php if($listen->disease =="Jangli Jai") echo "Selected"; }  ?>>Jangli Jai</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Jangli Jai (R+NR)"<?php if($listen->disease =="Jangli Jai (R+NR)") echo "Selected" ; }  ?>>Jangli Jai (R+NR)  </option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Dumbi Sitti (R)"<?php if($listen->disease =="Dumbi Sitti (R)") echo "Selected" ; }  ?>>Dumbi Sitti (R)</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Salai Sitti"<?php if($listen->disease =="Salai Sitti") echo "Selected" ; }  ?>>Salai Sitti</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Salai Sitti (R)"<?php if($listen->disease =="Salai Sitti (R)") echo "Selected" ; }  ?>>Salai Sitti (R)</option> <?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Chawli"<?php if($listen->disease =="Chawli") echo "Selected" ; }  ?>>Chawli</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Setaria Pumila"<?php if($listen->disease =="Setaria Pumila") echo "Selected" ; }  ?>>Setaria Pumila</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Jangli Jai (R)"<?php if($listen->disease =="Jangli Jai (R)") echo "Selected" ; }  ?>>Jangli Jai (R)</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Poa Annua"<?php if($listen->disease =="Poa Annua") echo "Selected" ; }  ?>>Poa Annua</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Lomar Ghass"<?php if($listen->disease =="Lomar Ghass") echo "Selected" ; }  ?>>Lomar Ghass</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Gajar Booti"<?php if($listen->disease =="Gajar Booti") echo "Selected" ; }  ?>>Gajar Booti</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Looni Booti"<?php if($listen->disease =="Looni Booti") echo "Selected" ; }  ?>>Looni Booti</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Lalli Booti"<?php if($listen->disease =="Lalli Booti") echo "Selected" ; }  ?>>Lalli Booti</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Brasica"<?php if($listen->disease =="Brasica") echo "Selected" ; }  ?>>Brasica</option><?php foreach ($list as $key => $listen){ ?>
                                                        <option value="Raya Sarsoon"<?php if($listen->disease =="Raya Sarsoon") echo "Selected" ; }  ?>>Raya Sarsoon</option> 
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
