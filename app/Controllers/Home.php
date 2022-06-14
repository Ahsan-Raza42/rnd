<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use Config\Database;
use App\Models\Rmodel;

class Home extends BaseController
{
     protected $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
        // OR $this->db = \Config\Database::connect();
    }
//     public function __Construct()
//     {
//         $session = \Config\Services::session( );
     
//     $this->rmodel = new rmodel();
 
     

// }
    public function index()
    {    
        return view('index');
    }
    public function data()
    {
        
        return view('data_entry');
    }
    public function data_view( )
    {
      //  $model = new Rmodel();
 $rmodel=new Rmodel();


        $data['detail']  = $rmodel->crop();
     
  
        return view('view',$data);
   
    }
 public function insert_data()
 {
  $rmodel=new Rmodel();


      $crop = array(
                'type'              =>$this->request->getVar('variety'),
                'c_name'              =>$this->request->getVar('crop') ,
                'location'          =>$this->request->getVar('loc'),
                'year'              =>$this->request->getVar('planting'),
                    );
        $rmodel->crop_insert($crop);

          $e =$rmodel->get_crop();
  
  $plot = array(
                'crop_id'           =>$e,
                'replication'       =>$this->request->getVar('replicates'),
                'irragtion_date'    =>$this->request->getVar('irrigation'),
                'plot_size'         =>$this->request->getVar('size'),
                'previous_app'      =>$this->request->getVar('p_app'),
                'blanket_app'       =>$this->request->getVar('blanket'),
                'anyothers'         =>$this->request->getVar('other'),
                'location'          =>$this->request->getVar('loc'),
                    );
 
        $rmodel->plot_insert($plot);
       $p =$rmodel->get_plot(); 

        $farmer = array(
                'plot_id'           =>$p,
                'crop_id'           =>$e,
                'name'              =>$this->request->getVar('name'),         
                'location'          =>$this->request->getVar('loc')

                     );

      $rmodel->farmer_insert($farmer);

       $f =$rmodel->get_farmer();
  // $inputs = $this->validate([
  //           'protocol' => 'required',
  //           'errors' => [
  //               'required' => 'Name is required.'
  //           ],
  //           'name' => 'required',
  //           'loc' => 'required ',
  //           'variety' => 'required ',
  //           'sowing' => 'required ',
  //           'planting' => 'required ',
  //           'size' => 'required ',
  //           'irrigation' => 'required ' ,
           
  //       ]);
 
  //       if (!$inputs) {
  //           return view('data_entry', [
  //               'validation' => $this->validator
  //           ]);
  //       }else{
    // $request = \Config\Services::request();
    //   $session = \Config\Services::session();

  
 
     $brand = array(
                'bname'             =>$this->request->getVar('b_name'),
                'formulation'       =>$this->request->getVar('formulation'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
                 
                

                    );  
      $rmodel->brand_insert($brand);
        $b =$rmodel->get_brand();

  
  

  //$i =$rmodel->get_ingredient();
  // echo "<pre>";
  // print_r($p);
  // echo "</pre>";
  // die();
     $trial = array(
                'farmer_id'         =>$f,
                'crop_id'           =>$e,
                'plot_id'           =>$p,
                'protocol_no'       =>$this->request->getVar('protocol'),
                'target_pest'       =>$this->request->getVar('pest'),
                'brand_id'          =>$b,
                    );
    
   
     $sowing = array(
                'crop_id'           =>$e,
                'sowing_date'       =>$this->request->getVar('irrigation'),
                'planting_date'     =>$this->request->getVar('planting'),               
                 'sowing_method'    =>$this->request->getVar('sowing')

                    );

     $replication = array(
                'replication_name'  =>$this->request->getVar('replicates'),
                'crop_id'           =>$e,
                   ) ;
     $ing1 = array(
                'active_ingredent'  =>$this->request->getVar('a_ing_1'),
                'concentration'     =>$this->request->getVar('concentration_1'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
                'brand_id'          =>$b,
                  ); 
     $ing2 = array(
                'active_ingredent'  =>$this->request->getVar('a_ing_2'),
                'concentration'     =>$this->request->getVar('concentration_2'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
                 'brand_id'          =>$b,
                

                    );
     $ing3 = array(
                'active_ingredent'  =>$this->request->getVar('a_ing_3'),
                'concentration'     =>$this->request->getVar('concentration_3'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
                 'brand_id'          =>$b,
                

                    ); 
    $ing4 = array(
                'active_ingredent'  =>$this->request->getVar('a_ing_4'),
                'concentration'     =>$this->request->getVar('concentration_4'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
                'brand_id'          =>$b,
                 );
    $a_ing1 = array(
                'active_ingredent'  =>$this->request->getVar('d_a_ing_1'),
                'active_ing_gram'   =>$this->request->getVar('d_a_ing_g_1'),
                'brand_id'          =>$b,
                 ); 
    $a_ing2 = array(
                'active_ingredent' =>$this->request->getVar('d_a_ing_2'),
                'active_ing_gram'  =>$this->request->getVar('d_a_ing_g_2'),
                'brand_id'         =>$b,
                 );
    $a_ing3 = array(
                'active_ingredent' =>$this->request->getVar('d_a_ing_3'),
                'active_ing_gram'  =>$this->request->getVar('d_a_ing_g_3'),
                'brand_id'         =>$b,
                 );
    $a_ing4 = array(
                'active_ingredent' =>$this->request->getVar('d_a_ing_4'),
                'active_ing_gram'  =>$this->request->getVar('d_a_ing_g_4'),
                'brand_id'         =>$b,
                 );
    
    $db = \Config\Database::connect();
 $db->table('active_ingredient_detail')->insert($ing1);
             $query = $db->query("SELECT * FROM active_ingredient_detail");
        $row = $query->getLastRow();
     $i= $row->id;
        
       $s =array(
                'ing_id1' =>$i


       );
       //yahan tak 
       $db->table('active_ingredient_detail')->insert($ing2);
        $query = $db->query("SELECT * FROM active_ingredient_detail");
        $row = $query->getLastRow();
     $l= $row->id;
        
       $v =array(
                'ing_id2' =>$l


       );
        $db->table('active_ingredient_detail')->insert($ing3);
        $query = $db->query("SELECT * FROM active_ingredient_detail");
        $row = $query->getLastRow();
     $o= $row->id;
     $d=array(
                'ing_id3' => $o
        );
       
$db->table('active_ingredient_detail')->insert($ing4);
 $query = $db->query("SELECT * FROM brand");
        $row = $query->getLastRow();
      $b= $row->id;
        

   $query = $db->query("SELECT * FROM active_ingredient_detail");
        $row = $query->getLastRow();
     $m= $row->id;
     $y=array(       
                'ing_id1' =>$i,
                'ing_id2' =>$l,
                'ing_id3' =>$o,
                'ing_id4' =>$m,
                'brand_id'=>$b
         );

   $db->table('ingredient')->insert($y);
   // for table dose_rate_active_ing_all insert ids on tables from dose_rate_active_ing

$db->table('dose_rate_active_ing')->insert($a_ing1);
             $query = $db->query("SELECT * FROM dose_rate_active_ing");
        $row = $query->getLastRow();
     $dose_id1= $row->id;
        
     $dose1 =array(
                'd_ing_id1' =>$dose_id1


       );
         $db->table('dose_rate_active_ing')->insert($a_ing2);
        $query = $db->query("SELECT * FROM dose_rate_active_ing");
        $row = $query->getLastRow();
     $dose_id2= $row->id;
        
       $dose2 =array(
                'd_ing_id2' =>$dose_id2


       );
       $db->table('dose_rate_active_ing')->insert($a_ing3);
        $query = $db->query("SELECT * FROM dose_rate_active_ing");
        $row = $query->getLastRow();
     $dose_id3= $row->id;
        
       $dose3=array(
                'd_ing_id3' =>$dose_id3


       ); 
       $db->table('dose_rate_active_ing')->insert($a_ing4);
       $query = $db->query("SELECT * FROM brand");
        $row = $query->getLastRow();
      $brands= $row->id;

        $query = $db->query("SELECT * FROM dose_rate_active_ing");
        $row = $query->getLastRow();
     $dose_id4= $row->id;
        
       $alldose =array(

                     'd_ing_id1' =>$dose_id1,
                     'd_ing_id2' =>$dose_id2,
                     'd_ing_id3' =>$dose_id3,
                     'd_ing_id4' =>$dose_id4,
                     'brand_id'  =>$brands


       );
  $db->table('dose_rate_active_ing_all')->insert($alldose);
         
   
 // echo "<pre>";
 //    print_r($S);
 //    echo "</pre>";
 //        die();
 $rmodel->saves($trial, $sowing,$replication);
        return redirect()->route('in')->with('data', 'Data Add Successfully');
      // return redirect('/in')->back()->with('data', 'Data Add Successfully');
         
   //$db = db_connect();
//$db->query("Insert into user (username,email,role) values('raza','raza@gmail.com','Admin')");
 //$this->insert('user',$data);
         
    //  // $rmodel=new Rmodel();
    //   $db =Database::connect();
    //   $db->table('user');
    // $db->insert($data);
  
 
  
 
 
}
public function edit_view( $id)

{   
  $rmodel=new Rmodel();
  $data['list'] = $rmodel->get_data($id );
 
 $data['ing']=$rmodel->ings();
 $data['active_ing']=$rmodel->active_ing();

     return view('edit_view',$data);
}

public function update($id)
{
     

     $rmodel=new Rmodel();


      $crop = array(
                'type'              =>$this->request->getVar('variety'),
                'c_name'            =>$this->request->getVar('crop') ,
                'location'          =>$this->request->getVar('loc'),
                'year'              =>$this->request->getVar('planting'),
                    );
       $rmodel->crop_update($crop,$id);

         $e =$rmodel->get_crop_by_id($id);

  $plots = array(
                'crop_id'           =>$e,
                'replication'       =>$this->request->getVar('replicates'),
                'irragtion_date'    =>$this->request->getVar('irrigation'),
                'plot_size'         =>$this->request->getVar('size'),
                'previous_app'      =>$this->request->getVar('p_app'),
                'blanket_app'       =>$this->request->getVar('blanket'),
                'anyothers'         =>$this->request->getVar('other'),
                'location'          =>$this->request->getVar('loc'),
                    );
  
        $rmodel->plot_update($plots,$e);
       $p =$rmodel->get_plot_by_id($e); 
 
        $farmer = array(
                'plot_id'           =>$p,
                'crop_id'           =>$e,
                'name'              =>$this->request->getVar('name'),         
                'location'          =>$this->request->getVar('loc')

                     );
    $fids= $this->request->getVar('farmer_id');
      $rmodel->farmer_update($farmer,$fids);

       $f =$rmodel->get_farmer_by_id($id);

     $brand = array(
                'bname'             =>$this->request->getVar('b_name'),
                'formulation'       =>$this->request->getVar('formulation'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
                 
                

                    );  
  $bids= $this->request->getVar('brand_id');
 
      $rmodel->update_brand($brand,$bids);
      

  $trial = array(
                
                'protocol_no'       =>$this->request->getVar('protocol'),
                'target_pest'       =>$this->request->getVar('pest'),
                 
                    );
     
   
     $sowings = array(
                 
                'sowing_date'       =>$this->request->getVar('irrigation'),
                'planting_date'     =>$this->request->getVar('planting'),               
                 'sowing_method'    =>$this->request->getVar('sowing')

                    );

     $replication = array(
                'replication_name'  =>$this->request->getVar('replicates'),
                'crop_id'           =>$e,
                   ) ;
     $ing1 = array(
                'active_ingredent'  =>$this->request->getVar('a_ing_1'),
                'concentration'     =>$this->request->getVar('concentration_1'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
              
                  ); 
     $ing2 = array(
                'active_ingredent'  =>$this->request->getVar('a_ing_2'),
                'concentration'     =>$this->request->getVar('concentration_2'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
               
                

                    );
     $ing3 = array(
                'active_ingredent'  =>$this->request->getVar('a_ing_3'),
                'concentration'     =>$this->request->getVar('concentration_3'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
                  
                

                    ); 
    $ing4 = array(
                'active_ingredent'  =>$this->request->getVar('a_ing_4'),
                'concentration'     =>$this->request->getVar('concentration_4'),
                'dose_rate'         =>$this->request->getVar('d_rate'),
                 
                 );
    $a_ing1 = array(
                'active_ingredent'  =>$this->request->getVar('d_a_ing_1'),
                'active_ing_gram'   =>$this->request->getVar('d_a_ing_g_1'),
                 
                 ); 
    $a_ing2 = array(
                'active_ingredent' =>$this->request->getVar('d_a_ing_2'),
                'active_ing_gram'  =>$this->request->getVar('d_a_ing_g_2'),
                 
                 );
    $a_ing3 = array(
                'active_ingredent' =>$this->request->getVar('d_a_ing_3'),
                'active_ing_gram'  =>$this->request->getVar('d_a_ing_g_3'),
                 
                 );
    $a_ing4 = array(
                'active_ingredent' =>$this->request->getVar('d_a_ing_4'),
                'active_ing_gram'  =>$this->request->getVar('d_a_ing_g_4'),
              
                 );
     $in_ids1= $this->request->getVar('ing_id1'); 
    $db = \Config\Database::connect();
      $re=$db->table('active_ingredient_detail');
    $re->where('id',$in_ids1);
    $re->update($ing1);
    //return $re;
    $in_ids2= $this->request->getVar('ing_id2'); 
        $re=$db->table('active_ingredient_detail');
    $re->where('id',$in_ids2);
    $re->update($ing2);
    //return $re;
     $in_ids3= $this->request->getVar('ing_id3'); 
         $re=$db->table('active_ingredient_detail');
    $re->where('id',$in_ids3);
    $re->update($ing3);
    //return $re; 
     $in_ids4= $this->request->getVar('ing_id4'); 
        $re=$db->table('active_ingredient_detail');
    $re->where('id',$in_ids4);
    $re->update($ing4);
  
$d_ing_id1= $this->request->getVar('d_ing_ids1'); 

        $re=$db->table('dose_rate_active_ing');
    $re->where('id',$d_ing_id1);
    $re->update($a_ing1);
    //return $re;
$d_ing_id2= $this->request->getVar('d_ing_ids2'); 
        $re=$db->table('dose_rate_active_ing');
    $re->where('id',$d_ing_id2);
    $re->update($a_ing2);
    //return $re;
$d_ing_id3= $this->request->getVar('d_ing_ids3'); 
        $re=$db->table('dose_rate_active_ing');
    $re->where('id',$d_ing_id3);
    $re->update($a_ing3);
   // return $re;
$d_ing_id4= $this->request->getVar('d_ing_ids4'); 
        $re=$db->table('dose_rate_active_ing');
    $re->where('id',$d_ing_id4);
    $re->update($a_ing4);
    //return $re;

  $pids= $this->request->getVar('plot_ids');
  $rmodel->trial_update($fids,$bids,$pids,$e,$trial);
  $rmodel->sowing_update($sowings,$e);
  $rmodel->replication_update($replication,$e); 
 return redirect()->route('view')->with('update', 'Data Update Successfully');
 
      
}
public function delete($id)
{
     $db = \Config\Database::connect();
    $r = $db->table('crops');
    
     
        $r->where('id', $id);
        $r->delete();

       
 return redirect()->route('view')->with('delete', 'Data Deleted Successfully');
 
}

public function entry()
{

  $rmodel=new Rmodel();

  $data['list'] = $rmodel->crop();

    return view('entry',$data);
}
 public function get_trial_data( )
 {
      $rmodel=new Rmodel();
           $id =$this->request->getVar('id');
          
        $data = $rmodel->get_trial($id);
        
        echo json_encode($data);
 }

public function entry_input( )
{

        $db = \Config\Database::connect(); 

                $data =array(   
                //                  'protocol_no'              =>$this->request->getVar('protocol'),
                //                   'crop'                    =>$this->request->getVar('crop'),
                //                   'year'                    =>$this->request->getVar('year'),
                //                   'weed'                    =>$this->request->getVar('weed'),
                //                   'loc'                     =>$this->request->getVar('loc'),
                                  'trial_code'              =>$this->request->getVar('trial_code'),
                                  'application_method'              =>$this->request->getVar('App_method'),
                                  'timing'                  =>$this->request->getVar('Appl_time'),
                                  'treatments_name'               =>$this->request->getVar('treamtent'),
                                  'dose'                    =>$this->request->getVar('dose_per_acre'),
                                  'replication'             =>$this->request->getVar('replication'),
                                  'assessment'               =>$this->request->getVar('assesment'),
                                  'germination'             =>$this->request->getVar('germination'),
                                   'crop_id'                 =>$this->request->getVar('crop_id'),
                                  
                            );
                 $db->table('treatment')->insert($data);
            
                // $diseases=array(

                //                     'crop_id'               =>$this->request->getVar('crop_id'),  
                //                      'disease'                 =>$this->request->getVar('disease'),
                //                     // 'disease' => implode(",",$this->request->getVar('disease'))

                //             );
                // $disease=array( 
                //     array(
                //                       'crop_id'               =>$this->request->getVar('crop_id'),  
                //                     'disease'                 =>$this->request->getVar('disease'),
                //      ), 
                //     array(
                //                       'crop_id'               =>$this->request->getVar('crop_id'),  
                //                     'disease'                 =>$this->request->getVar('disease'),
                //                     )
                // );
             $cid  =  $this->request->getVar('crop_id');
          
              $dic =  $this->request->getVar('disease');
              $datas = array();
    foreach( $dic as $key => $value){
      // $datas[$key]['crop_id']=$cid;
      // $datas[$key]['disease']=$value;
     
                  $r=   $db->table('disease')->insert(['crop_id' => $cid, 'disease' => $value]);
    }

   if (isset($r)) {
       
        return redirect()->route('Insert_view')->with('In_data', 'Data Add Successfully');
   } 

}
public function in_data ()
{
     $rmodel=new Rmodel();

  $data['list'] = $rmodel->trial_view();

    return view('data_view',$data);
}
public function edit_data_entry($id)
{
     $rmodel=new Rmodel();
  $data['list'] = $rmodel->get_edit_view_data($id );
 
 
  

    // $data['lists'] = $rmodel->crop();


     return view('edit_data_view',$data);
}
public function update_edit_data_entry($id)
{
      $db = \Config\Database::connect(); 
      $rmodel=new Rmodel();

                $data =array(   
                 
                                  'trial_code'              =>$this->request->getVar('trial_code'),
                                  'application_method'      =>$this->request->getVar('App_method'),
                                  'timing'                  =>$this->request->getVar('Appl_time'),
                                  'treatments_name'         =>$this->request->getVar('treamtent'),
                                  'dose'                    =>$this->request->getVar('dose_per_acre'),
                                  'replication'             =>$this->request->getVar('replication'),
                                  'assessment'              =>$this->request->getVar('assesment'),
                                  'germination'             =>$this->request->getVar('germination'),
                                   
                            );
             
    $cid  =  $this->request->getVar('crop_id');
    $rmodel->update_edit_view_data($data,$cid);
  
   
                   
              $dic =  $this->request->getVar('disease');
              $datas = array();
    foreach( $dic as $key => $value){

     //  $t= $rmodel->update_disease($value,$cid);
   // $r= $db->table('disease') 
   //   ->where('crop_id',$cid) 
   // ->update(['disease'=> $value]);
   //   return $r;
        $id=232;

                   $r=   $db->table('disease')->where('id',$id,'crop_id',$cid)->update(['disease' => $value]);
    }

   if (isset($r)) {
       
        return redirect()->route('Insert_view')->with('update', 'Data Update Successfully');
   } 

}
public function delete_edit_data_entry($id)
{

     //$id= 221;
      $db = \Config\Database::connect();
    $r = $db->table('treatment');
   
     
        $r->where('crop_id', $id);
        $r->delete();
 $r = $db->table('disease');
    
        $r->where('crop_id', $id);
        $r->delete();

      if(isset($r)){ 
 return redirect()->route('Insert_view')->with('deletes', 'Data Deleted Successfully');
 }
}
public function adult_insect( )
{
    return view('adult_insect');
}
public function insert_leaf( )
{
         $db = \Config\Database::connect();
        

// echo "<pre>";
// print_r($this->request->getVar('hidden_leaf_no'));
// die();
  foreach( $this->request->getVar('hidden_leaf_no') as $key =>  $de){
   // var_dump($de);
            $leaf_no = $de;

        
            $upper_leaf = (array_key_exists($key, $this->request->getVar('hidden_upper'))) ? $this->request->getVar('hidden_upper')[$key] : "" ;
            $middle_leaf = (array_key_exists($key,$this->request->getVar('hidden_middle')))? $this->request->getVar('hidden_middle')[$key] : "" ;
            $lower_leaf = (array_key_exists($key,$this->request->getVar('hidden_lower')))? $this->request->getVar('hidden_middle')[$key] : "" ;
            $total_avg=0;
            $upper_avg=0;
            $middle_avg=0;
            $lower_avg=0;
            $avg_all=0;
            $insect_id=1;
 
            // $data=array(
            // 'leaf_no'       =>$this->request->getVar('hidden_leaf_no'),
            // 'upper_leaf'    =>$this->request->getVar('hidden_upper'),
            // 'middle_leaf'   =>$this->request->getVar('hidden_middle'),
            // 'lower_leaf'    =>$this->request->getVar('hidden_lower') ,
            // 'total_avg'=>0,
            // 'upper_avg'=>0,
            // 'middle_avg'=>0,
            // 'lower_avg'=>0,
            //  'avg_all'=>0,
            // 'insect_id'=>1,
            // );



   $db->table('leaf')->insert(['leaf_no' => $leaf_no, 'upper_leaf' => $upper_leaf, 'middle_leaf' => $middle_leaf,'lower_leaf' => $lower_leaf,'total_avg' => $total_avg,'upper_avg' => $upper_avg,'middle_avg' => $middle_avg,'lower_avg' => $lower_avg,'avg_all' => $avg_all,'insect_id' => $insect_id,]);
  
      // $db->table('leaf')->insert($data);
   
}
} 
  }