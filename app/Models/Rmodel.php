<?php

namespace App\Models;

use CodeIgniter\Model;

class Rmodel extends Model
{
    // public function __construct(){ 
    //     $this->DB = \Config\Database::connect();
    //      $this->BUILDER = $this->DB->table('crops'); 

    //       }

    public function get_crop( )
    {
         $db = \Config\Database::connect();
           $query = $db->query("SELECT * FROM crops");
        $row = $query->getLastRow();
     $e= $row->id;
     return $e;
 

    }
    public function get_plot( )
    { 
        $db = \Config\Database::connect();
           $query = $db->query("SELECT * FROM plot");
        $row = $query->getLastRow();
     $p= $row->id;
       return $p;
         
    }
    public function get_farmer()
    {
         $db = \Config\Database::connect();
           $query = $db->query("SELECT * FROM farmer");
        $row = $query->getLastRow();
     $f= $row->id;
       return $f;
    }
    public function get_brand()
    {  
        $db = \Config\Database::connect();
           $query = $db->query("SELECT * FROM brand");
        $row = $query->getLastRow(); 
     $b= $row->id;
       return $b;
        
    }
    public function get_ingredient()
    {  
        $db = \Config\Database::connect();
           $query = $db->query("SELECT * FROM ingredient");
        $row = $query->getLastRow();
       
       return $row->id;
        
    }
    public function ings()
    { 
         
        $db = \Config\Database::Connect();
        $query= $db->query("SELECT * FROM ingredient");

        return $query->getResult();
    }
    public function active_ing()
    {
        $db = \Config\Database::Connect();
        $query= $db->query("SELECT * FROM active_ingredient_detail");
        return $query->getResult();
    }
public function crop_insert($crop)
{
    $db = \Config\Database::connect();
       $query= $db->table('crops')->insert($crop);
       return $query;
}
public function plot_insert($plot)
{
     $db = \Config\Database::connect();
       $query= $db->table('plot')->insert($plot);
       return $query;
}
public function farmer_insert($farmer)
{
    $db = \Config\Database::connect();
       $query= $db->table('farmer')->insert($farmer);
       return $query;
}public function brand_insert($brand)
{
    $db = \Config\Database::connect();
      $query=$db->table('brand')->insert($brand);
      return $query;
}
 
    public function saves($trial ,$sowing ,$replication)
    {
         $db = \Config\Database::connect();
     

        
    //$th=$db->table('crops')->$row = $query->getLastRow();
    //echo $ht;
   //      if(isset($row)){
    // echo "<pre>";
    // print_r($sowing);
    // echo "</pre>";
    //     die();
   // }
   // else{
   //  echo "variable value not fond";
   //  die();
   // }
     //$this->home->insert_data($S); 
   // echo $this->db->getlastQuery();
         $db->table('sowing')->insert($sowing );  
         $db->table('replication')->insert($replication ); 
         $db->table('trial')->insert($trial);
        

        
   }
       
       
public function crop()
{ 
  $builder = $this->db->table("crops");
  $builder->select('crops.*, sowing.sowing_date as sowing_date, sowing.planting_date as planntingdate, plot.replication as replication, plot.blanket_app as blanket_app'); 

  $builder->select('crops.*, plot.plot_size as plotsize, plot.previous_app as previousapplication, plot.irragtion_date as Irragtiondate , plot.location as location,trial.protocol_no as protocol');
  $builder->join('sowing as sowing', 'crops.id = sowing.crop_id');
  $builder->join('plot as plot', 'crops.id = plot.crop_id');
  $builder->join('trial as trial', 'trial.crop_id = plot.crop_id','right');
  $data = $builder->get()->getResult();
return $data ;
 
}
public function get_data($id)
{


     $db = \Config\Database::connect();
     //    $db->table('crops');
     //   $db->select('id');
     // $query=  $db->where(['id'=> $id]);
     // return $query;
     //  $query = $db->query("SELECT * FROM crops WHERE id='$id'");
     //    $row = $query->getResult();
     // return $row;
//last day editing
//$builder = $this->db->table("crops ");
//$builder = $db->table('blogs');
// $builder->select('*');
// $builder->join('crops, sowing.sowing_date as sowing_date, sowing.planting_date as planntingdate, plot.replication as replication, plot.blanket_app as blanket_app','comments.id = blogs.id');
// $query = $builder->get();
//$this->db->select('*')->from('crops')->where('users.u_id',1)->join('comments','comments.user_id = users.u_id')->join('city','city.user_id = users.u_id')->get();

//   $builder->select('crops.*, crops.name as crop_name,crops.location as crop_loc');
// // $builder->where('id',$id);
//   $builder->select('crops.*,farmer.name as name ,sowing.sowing_method as sowing_method,sowing.planting_date as planting_date,plot.replication as replication ');
  
//     $builder->join('sowing as sowing', 'crops.id = sowing.crop_id');
//      $builder->join('farmer as farmer', 'crops.id = sowing.crop_id');
//   $builder->join('plot as plot', 'crops.id = plot.crop_id');
//   $builder->where("id", $id);
//   $data = $builder->get();

//this is upper code copy here
  //  $builder = $this->db->table("crops");
  //  $builder->select('crops.*');
  // $builder->select('crops.*, sowing.sowing_date as sowing_date, sowing.planting_date as planntingdate, plot.replication as replication, plot.blanket_app as blanket_app'); 

  // $builder->select('crops.*, plot.plot_size as plotsize, plot.previous_app as previousapplication, plot.irragtion_date as Irragtiondate , plot.location as Location');
  // $builder->join('sowing as sowing', 'crops.id = sowing.crop_id');
  // $builder->join('plot as plot', 'crops.id = plot.crop_id');
  // $data = $builder->get()->getResult();

 //$builder = $this->db->table();

//   $builder = $this->db->table("farmer");
//   $builder->select('farmer.*, sowing.sowing_date as sowing_date, sowing.planting_date as planntingdate, plot.replication as replication, plot.blanket_app as blanket_app'); 

//   $builder->select('farmer.*, plot.plot_size as plotsize, plot.previous_app as previousapplication, plot.irragtion_date as Irragtiondate , plot.location as location');
//   $builder->join('sowing as sowing', 'farmer.id = sowing.crop_id');
//   $builder->join('plot as plot', 'farmer.id = plot.crop_id');
//   $builder->orderBy('id',$id);
//   $data = $builder->get()->getResult();
// return $data;
  
     //  $query = $db->query("SELECT crops.id, trial.id,farmer.id, sowing.id,replication.id,plot.id FROM (((crops INNER JOIN farmer on crops.id ,plot.id = farmer.id) INNER JOIN sowing on crop.id,plot.id on crop.id,plot.crop_id = crops.id) INNER join replication on crops.id,replication.crop_id = crop.id);");
     //    $row = $query->getResult();
     // return $row;

// return $data;
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// die();
     $builder=$db->table('crops');
$query=$builder->select('*')
 ->where('crops.id',$id)
->join('sowing', 'crops.id = sowing.crop_id','left')
->join('plot','crops.id = plot.crop_id','left')
->join('trial','crops.id = trial.crop_id',  'left')
->join('farmer', 'crops.id =farmer.crop_id','left')
->join('brand', 'trial.brand_id = brand.id','left')
->join('ingredient', 'brand.id = ingredient.brand_id' ,'left')
 //->join('active_ingredient_detail', 'brand.id = active_ingredient_detail.brand_id','left')
  ->join('dose_rate_active_ing_all', 'brand.id = dose_rate_active_ing_all.brand_id','left')
->get()->getResult();
return $query;

 
}



public function crop_update($crop,$id)
{   
   
 $db = \Config\Database::connect();
$query=$db->table('crops');
$query->where('id', $id);
$query->update($crop);
     
      return $query;
     

}
public function plot_update($plots,$e)
{
    // foreach ($plots as $plot) 
  
   
    $db =\Config\Database::connect();
    $re=$db->table('plot');
    $re->where('crop_id',$e);
    $re->update($plots);
    return $re;
        
}
public function trial_update($fids,$bids,$pids,$e,$trial)
{ $db = \Config\Database::Connect();
       $query= $db->query("SELECT * FROM trial WHERE farmer_id= '$fids' AND crop_id ='$e' AND plot_id= '$pids' AND brand_id= '$bids' ");
          $frow=$query->getRow();
             $buids=$frow->id;

    $r=$db->table('trial');
    $r->where('id',$buids);
    $r->update($trial);
    //return $r;
     //        echo "<pre>";
     //        print_r($fid);
     //        echo "</pre>";
     //        die();
}
public function sowing_update($sowings,$e )
{
    $db = \Config\Database::Connect();
    $r = $db->table('sowing');
    $r->where('crop_id',$e);
    $r->update($sowings);
    return $r;
     
}
public function replication_update($replication,$e)
{
      $db = \Config\Database::Connect();
    $r = $db->table('replication');
    $r->where('crop_id',$e);
    $r->update($replication);
    return $r;
  
}
public function get_crop_by_id($id)
{
      
$db = \Config\Database::Connect();
        $query= $db->query("SELECT * FROM crops WHERE id='$id'");
        $row= $query->getRow();
        $f= $row->id;
         return $f;
    

}
public function getallcrop()
{
$db = \Config\Database::Connect();
        $query= $db->query("SELECT * FROM crops  ");
        $row= $query->getResult();
        
         return $row;
    
}

public function get_plot_by_id($id)
{
        $db = \Config\Database::Connect();
        $query= $db->query("SELECT * FROM plot WHERE crop_id= '$id'");
         $row=$query->getRow();
        $a=$row->id;
            return $a;
}
public function farmer_update($farmer,$fids)
{
     // $os=$farmer['name'];
     // $fyp=$farmer['location'];

    
     $db =\Config\Database::connect();
     // $query= $db->query("SELECT * FROM farmer WHERE name= '$os' AND location ='$fyp' AND crop_id= '$id' ");
     //     $frow=$query->getRow();
     //        $fid=$frow->id;

     //        echo "<pre>";
     //        print_r($fid);
     //        echo "</pre>";
     //        die();
       
    $re=$db->table('farmer');
    $re->where('id',$fids);
    $re->update($farmer);
    return $re;
}
public function get_farmer_by_id($id)
{
    $db = \Config\Database::Connect();
        $query= $db->query("SELECT * FROM farmer WHERE crop_id= '$id'");
         $row=$query->getRow();
        $a=$row->id;
            return $a;
}
public function get_brand_by_id($bids)
{
     $db = \Config\Database::Connect();
        $query= $db->query("SELECT * FROM brand WHERE id= '$id'");
         $row=$query->getRow();
        $a=$row->id;
            return $a;
}
public function update_brand($brand,$bids )
{
  //foreach($brand as $brands)
    //$t=$brand['id'] ;
 
     // $o=$brand['bname'];
     // $fp=$brand['formulation'];
     // $doe=$brand['dose_rate'];
     //  $db = \Config\Database::Connect();
     //    $query= $db->query("SELECT * FROM brand WHERE bname= '$o' AND formulation ='$fp' AND dose_rate ='$doe'");
     //     $row=$query->getRow();
     //        $bid=$row->id;
        // $query= $db->query("SELECT * FROM brand WHERE id= '$bids'  ");
        //  $row=$query->getRow();
        // $a=$row->id;
        //     return $a;
             $db = \Config\Database::Connect();
    $r=$db->table('brand');
    $r->where('id',$bids);
    $r->update($brand);
    return $r;
}

public function get_trial($id )
{
        $db = \Config\Database::Connect();



 $builder=$db->table('crops');
$query=$builder->select('*')
 ->where('crops.id',$id)
->join('trial', 'crops.id = trial.crop_id','left')
->join('plot', 'crops.id = plot.crop_id','left') 
->get()->getResult();
return $query;









        $query= $db->query("SELECT * FROM farmer WHERE crop_id= '$id'");
         $row=$query->getRow();
        $a=$row->id;
            return $a;
}


public function trial_view(  )
{
     $db = \Config\Database::Connect();



 $builder=$db->table('crops');
$query=$builder->select('*') 
->join('treatment', 'crops.id = treatment.crop_id','inner')
//->join('disease', 'crops.id = disease.crop_id','left') 

->get()->getResult();
return $query;

}
public function get_edit_view_data($id)
{
      $db = \Config\Database::Connect();



 $builder=$db->table('crops');
$query=$builder->select('*')
 ->where('crops.id',$id)
->join('treatment', 'crops.id = treatment.crop_id','left')
->join('disease', 'crops.id = disease.crop_id','left') 
->join('trial', 'crops.id = trial.crop_id','left') 

->get()->getResult();
return $query;

}
public function update_edit_view_data($data,$cid)
{ 
    $db = \Config\Database::Connect();
      $r=$db->table('treatment'); 
     $r->where('crop_id',$cid);
     $r->update($data); 
    return $r;
}
public function update_disease($value,$cid)
{
     $db = \Config\Database::Connect();
    $r=$db->table('disease');
    $r->where('crop_id',$cid);
   $r->update(['disease'=> $value]);
   return $r;
}
 
         
    }
 

// SELECT crops.id, trial.id,farmer.id, sowing.id,replication.id,plot.id FROM (((crops INNER JOIN farmer on crops.id ,plot.id = farmer.id) INNER JOIN sowing on crop.id,plot.id on crop.id,plot.crop_id = crops.id) INNER join replication on crops.id,replication.crop_id = crop.id);

//     ->join('ingredient', 'brand.id = ingredient.brand_id','left')
// ->join('active_ingredient_detail', 'brand.id = active_ingredient_detail.brand_id','left')

    //  echo "<pre>";
    // print_r($a);
    // echo "</pre>";
    // die();