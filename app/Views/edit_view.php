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
      
                   <?php 
  
foreach($list as $listi)
    
// echo"<pre>";
//   print_r($list);
//   echo "<?pre>";
//   die();
 ?>
<form method="post" action="<?php echo base_url();?>/home/update/<?php echo $listi->crop_id;?> "  style="margin-left: 29px; margin-right: 29px;">


 
        <div class="panel panel-info" bis_skin_checked="1">
            <div class="panel-heading" style="" bis_skin_checked="1">
                <h3 class="panel-title" >Trial Initiation</h3> 
            </div>
            <div class="panel-body" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Protocol No:</label>
                            <input type="text" value="<?php   echo $listi->protocol_no;?>" name="protocol" data-validation="required" mandatory-field="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Farmer Name:</label>
                    <input type="text" name="name" data-validation="required" value="<?php   echo $listi->name;?>" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                       


        
<div class="form-group highlight-addon field-vendor-vendor_type_id required" bis_skin_checked="1">
<label class="control-label" for="vendor-vendor_type_id">Location</label>

  <input type="text" name="loc" data-validation="required" num-validation="" value="<?php   echo $listi->location;?>" class="form-control"required>

<div class="help-block" bis_skin_checked="1"></div>

</div>

    
                    </div>
                </div>
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Crop:</label>
                            <input type="text" name="crop" value="<?php   echo $listi->c_name;?>" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div><div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Variety:</label>
                            <input type="text" name="variety" value="<?php   echo $listi->type;?>" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Sowing Method:</label>
                            <input type="text" name="sowing" data-validation="required" value="<?php   echo $listi->sowing_method;?>" num-validation="" mandatory-field="" class="form-control" required>
                        </div>
                    </div>
                    </div>
                 <div class="row" bis_skin_checked="1">
                      <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Planting Date:</label>
                            <input type="date" value="<?php   echo $listi->planting_date;?>" name="planting" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Replicates:</label>
                            <input type="text" name="replicates" value="<?php   echo $listi->replication;?>" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Target Pest:</label>
                            <input type="text" value="<?php   echo $listi->target_pest;?>" name="pest" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                   
                </div>
                  <div class="row" bis_skin_checked="1">
                     <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Plot Size:</label>
                            <input type="text" name="size" value="<?php   echo $listi->plot_size;?>" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Last Irrigation date:</label>
                            <input type="date" name="irrigation" value="<?php   echo $listi->irragtion_date;?>" data-validation="required" num-validation="" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Previous Appl:</label>
                            <input type="text" name="p_app" value="<?php   echo $listi->previous_app;?>" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                  
                </div>
                 <div class="row" bis_skin_checked="1">
                      <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Blanket Appl:</label>
                            <input type="text" name="blanket" value="<?php   echo $listi->blanket_app;?>"  data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Any Other info:</label>
                            <input type="text" name="other" value="<?php   echo $listi->anyothers;?>"   data-validation="required" num-validation="" class="form-control">
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
                            <input type="text" name="b_name" value="<?php   echo $listi->bname;?>"  data-validation="required" mandatory-field="" class="form-control "required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Formulation:</label>
                             <input type="text" name="formulation" value="<?php   echo $listi->formulation;?>"  data-validation="required" num-validation="" class="form-control"required>
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                       
<?php 
$id=$listi->brand_id;

// use App\Models\Rmodel;

// $rmodel= new Rmodel();
//$rmodel->update_brand($listi, ); 


 //$rmodel=new Rmodel();
// /$rmodel->ings($id);
// foreach($ing as $ing)

// echo "<pre>";
// //print_r($ing);
// print_r($id );
// echo "</pre>";
// die();

        $db = \Config\Database::connect();
    $query= $db->query("SELECT * FROM ingredient Where brand_id ='$id'   ");

        $get_ing= $query->getResult();
         foreach($get_ing as $get )
    $ingid=$get->brand_id;

 if($ingid == $id){

    $t=$listi->id;

    $o=$get->ing_id4;
  
           $query = $db->query("SELECT * FROM active_ingredient_detail Where id ='$o'   ");
        $row = $query->getResult();
       //return $row;
        foreach($row as $rows)
             $a4=$rows->active_ingredent;
         $c4=$rows->concentration;
      //   print_r( $a4=$rows->active_ingredent);
      //   print_r($c4=$rows->concentration);

      // die();
    // echo $t;
    // echo $o;
    // echo "Match sucessfully";
    // die();
         if($ingid == $id){
              $e=$listi->id;
            $s=$get->ing_id3;
    $query = $db->query("SELECT * FROM active_ingredient_detail Where id ='$s'   ");
        $row = $query->getResult();
        

        foreach($row as $rows)
             $a3=$rows->active_ingredent;
         $c3=$rows->concentration;
           
if ($ingid==$id) {

    $q=$listi->id;
    $qin=$get->ing_id2;
    $query = $db->query("SELECT * FROM active_ingredient_detail Where id ='$qin'   ");
        $row = $query->getResult();
        

        foreach($row as $rows)
             $a2=$rows->active_ingredent;
         $c2=$rows->concentration;
}
if ($ingid==$id) {
    
    $se=$listi->id;
    $ses=$get->ing_id1;
    $query = $db->query("SELECT * FROM active_ingredient_detail Where id ='$ses'   ");
        $row = $query->getResult();
        

        foreach($row as $rows)
             $av=$rows->active_ingredent;
         $cv=$rows->concentration;

} 
}
 }
   //endforeach();
//for get dose rate active ingredient
$query= $db->query("SELECT * FROM dose_rate_active_ing_all Where brand_id ='$id'");

        $get_dose_ing= $query->getResult();
         foreach($get_dose_ing as $dose )
    $dose_id=$dose->brand_id;
  
 if($dose_id==$id){
    $st=$dose->d_ing_id1;
     $query = $db->query("SELECT * FROM dose_rate_active_ing Where id ='$st'   ");
        $row = $query->getResult();
        

        foreach($row as $rows)
           $tl= $rows->active_ingredent;
           $lt= $rows->active_ing_gram;

         if ($dose_id==$id) {
            $ts=$dose->d_ing_id2;
     $query = $db->query("SELECT * FROM dose_rate_active_ing Where id ='$ts'   ");
        $row = $query->getResult();
        

        foreach($row as $rows)
           $lts= $rows->active_ingredent;
           $stl= $rows->active_ing_gram;

         }
         if ($dose_id==$id) {
            $to=$dose->d_ing_id3;
     $query = $db->query("SELECT * FROM dose_rate_active_ing Where id ='$to'   ");
        $row = $query->getResult();
        

        foreach($row as $rows)
           $nts= $rows->active_ingredent;
           $stn= $rows->active_ing_gram;

         }    if ($dose_id==$id) {
            $tn=$dose->d_ing_id4;
     $query = $db->query("SELECT * FROM dose_rate_active_ing Where id ='$tn'   ");
        $row = $query->getResult();
        

        foreach($row as $rows)
           $ns= $rows->active_ingredent;
           $sn= $rows->active_ing_gram;

         }




 }
   

?>

        
<div class="form-group highlight-addon field-vendor-vendor_type_id required" bis_skin_checked="1">
<label class="control-label" for="vendor-vendor_type_id">Active Ingredient-1</label>

 <input type="text" value="<?php echo $av;?>" name="a_ing_1" data-validation="required" num-validation="" class="form-control">

<div class="help-block" bis_skin_checked="1"></div>

</div>
 
    
                    </div>
                </div>
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Concentration (%):</label>
                            <input type="text" name="concentration_1" data-validation="required" num-validation="" value="<?php echo $cv; ?> " class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-2:</label>
                            <input type="text" name="a_ing_2" data-validation="required" num-validation="" value="<?php echo $a2;?>" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Concentration (%):</label>
                            <input type="text" name="concentration_2" data-validation="required" num-validation="" value="<?php echo $c2 ?>"  class="form-control">
                        </div>
                    </div>
                </div>
                 <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-3:</label>
                            <input type="text" name="a_ing_3" data-validation="required" num-validation="" value="<?php echo $a3;?>"  class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Concentration (%):</label>
                            <input type="text" name="concentration_3" data-validation="required" num-validation="" mandatory-field="" value="<?php echo $c3; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-4:</label>
                            <input type="text" name="a_ing_4" data-validation="required" num-validation="" value="<?php echo $a4;?>"  class="form-control">
                        </div>
                    </div>
                </div>
                  <div class="row" bis_skin_checked="1">
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Concentration (%):</label>
                            <input type="text" name="concentration_4" value="<?php echo $c4 ?>" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Dose Rate:</label>
                            <input type="text" name="d_rate" data-validation="required" num-validation=""value="<?php echo $listi->dose_rate;?>"   mandatory-field="" class="form-control" required>
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
                            <input type="text" value="<?php echo $tl;?>" name="d_a_ing_1" data-validation="required" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">1-Active Ingredient (Grams):</label>
                        <input type="text" value="<?php echo $lt;?>" name="d_a_ing_g_1" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                       


        
<div class="form-group highlight-addon field-vendor-vendor_type_id required" bis_skin_checked="1">
<label class="control-label" for="vendor-vendor_type_id">Active Ingredient-2:</label>

  <input type="text" value="<?php echo $lts;?>" name="d_a_ing_2" data-validation="required" num-validation="" class="form-control">

<div class="help-block" bis_skin_checked="1"></div>

</div>

    
                    </div>
                </div>
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">2-Active Ingredient (Grams):</label>
                            <input type="text" value="<?php echo $stl;?>" name="d_a_ing_g_2" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-3:</label>
                            <input type="text" value="<?php echo $nts;?>" name="d_a_ing_3" data-validation="required" num-validation="" mandatory-field="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">3-Active Ingredient (Grams):</label>
                            <input type="text" value="<?php echo $stn;?>" name="d_a_ing_g_3" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                </div>
                 <div class="row" bis_skin_checked="1">
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">Active Ingredient-4:</label>
                            <input type="text" value="<?php echo $ns;?>" name="d_a_ing_4" data-validation="required" num-validation="" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6" bis_skin_checked="1">
                        <div class="form-group" bis_skin_checked="1">
                            <label class="control-label">4-Active Ingredient (Grams):</label>
                            <input type="text" value="<?php echo $sn;?>" name="d_a_ing_g_4" data-validation="required" num-validation="" mandatory-field="" class="form-control">   

                            <input type="hidden" name="farmer_id" value="<?php echo $listi->farmer_id;?>">
                            <input type="hidden" name="brand_id" value="<?php echo $listi->brand_id;?>">
                            <input type="hidden" name="ing_id1" value="<?php echo $listi->ing_id1;?>">
                            <input type="hidden" name="ing_id2" value="<?php echo $listi->ing_id2;?>">
                            <input type="hidden" name="ing_id3" value="<?php echo $listi->ing_id3;?>">
                            <input type="hidden" name="ing_id4" value="<?php echo $listi->ing_id4;?>">
                            <input type="hidden" name="d_ing_ids1" value="<?php echo $listi->d_ing_id1;?>">
                            <input type="hidden" name="d_ing_ids2" value="<?php echo $listi->d_ing_id2;?>">
                            <input type="hidden" name="d_ing_ids3" value="<?php echo $listi->d_ing_id3;?>">
                            <input type="hidden" name="d_ing_ids4" value="<?php echo $listi->d_ing_id4;?>">
                            <input type="hidden" name="plot_ids" value="<?php echo $listi->plot_id;?>">

                        </div>
                    </div>
                    
                </div>
                 
          <div class="col-md-12 text-center">
     
        <input class="btn btn-success  rounded-pill"  style="background-color: #37a000 ;" type="submit" name="save">
         </div>
</div>
              </form>
                                   <?= $this->endsection();?>
