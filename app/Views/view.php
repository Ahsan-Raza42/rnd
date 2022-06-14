 <?= $this->extend('header'); 
 $this->section('content');?>

          <?php if (session()->getFlashdata('update') !== NULL) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('update'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('delete') !== NULL) : ?>
    <div class="alert alert-danger alert-dismissible fade show" style="background-color:red; color:White; font-size: 16px;  " role="alert">
        <?php echo session()->getFlashdata('delete'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>
<div class="container">
<div class="panel panel-info" bis_skin_checked="1">
            <div class="panel-heading" style="background-color: #1ab394; border-color: #1ab394;" bis_skin_checked="1">
                <h3 class="panel-title">Details</h3>
            </div>
            
            <div class="panel-body" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
    <div class="col-sm-12" bis_skin_checked="1">

        <div class="col-sm-12">
            <input type="text" class="form-control" value="" id="myInput" onkeyup="myFunction()" placeholder="Search Here....!" >
        </div>
<div class="form-group highlight-addon field-vendor-vendor_name required" bis_skin_checked="1" >
    
<div style="overflow-y:scroll; height:500px;" >

    <table border="2" id="myTable">
        <tr style=" position: sticky; top: 0; z-index: 1;">
            <th>#</th>
            <th>Crop</th>
            <th>Type</th>
            <th>Year</th>
            <th>location</th>
            <th>Sowing </th>
            <th>Planting</th>
            <th>Replication</th>
            <th>Blanket App</th>
            <th>Plot Size</th>
            <th>Previous Application</th>
            <th>Irragtion last Date</th>
             
            <th>Action</th>
        </tr>
 <div >

    <?php 
// echo "<pre>";
// print_r($detail);
// die();
    ?>
        <?php if($detail){ $i=1; foreach( $detail as $dataa){ ?>

          <tr>
            <td><?php echo $i++;?></td> 
            <td><?php echo $dataa->c_name;?></td>
            <td><?php echo $dataa->type;?></td>
            <td><?php echo $dataa->year;?></td>
            <td><?php echo $dataa->location; ?></td>
            <td><?php echo $dataa->sowing_date; ?></td>
            <td><?php echo $dataa->planntingdate; ?></td>
            <td><?php echo $dataa->replication; ?></td>
            <td><?php echo $dataa->blanket_app; ?></td>
            <td><?php echo $dataa->plotsize; ?></td>
            <td><?php echo $dataa->previousapplication; ?></td>
            <td><?php echo $dataa->Irragtiondate; ?></td>
            
         <?php  
              //  if($data->status==1){?>
           <!--  <td><span class="badge badge-pill badge-primary">Active</span></td> --><?php// } else { ?>
                <!-- <td><span class="badge badge-pill badge-danger">Deactive</span></td> --><?php //} ?> 
            <td><a href="<?php echo 'delete/'.$dataa->id;?>" title="Delete" data-toggle="modal" data-target="#dangerModal"  ><span style="color:  #EE4B2B; font-size: 20px; cursor: pointer;" class="fa fa-trash" ></span></a>&nbsp&nbsp <a href="<?php echo 'e_view/'.$dataa->id; ?>" title="Edit"><span style="color:dodgerblue; font-size: 20px; cursor: pointer;" class="fa fa-pencil-square-o"></span></a>&nbsp&nbsp  </td>
        </tr> 
  <?php }} ?>
          
    </table></div>
            </div>       
                                        <!-- Modal danger -->
                                        <div class="modal modal-danger fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="dangerModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title font-weight-600" id="dangerModalLabel">Delete Record </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="mb-0">Do you Really want to delete this record it may be permanat delete It may be affected on Data Analysis.
                                                             </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <a href="<?php echo 'delete/'.$dataa->id;?>" class="btn btn-success">Delete</a>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                </div>
                    </div>
                        </div>
                         </div>
                     </div>
  <?= $this->endsection();?>
