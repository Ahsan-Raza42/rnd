 <?= $this->extend('header'); 
 $this->section('content');?>

          <?php if (session()->getFlashdata('update') !== NULL) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata('update'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>
<?php if (session()->getFlashdata('deletes') !== NULL) : ?>
    <div class="alert alert-danger alert-dismissible fade show" style="background-color:red; color:White; font-size: 16px;  " role="alert">
        <?php echo session()->getFlashdata('deletes'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>
<div class="container">
<div class="panel panel-info" bis_skin_checked="1">
            <div class="panel-heading" style="background-color: #1ab394; border-color: #1ab394;" bis_skin_checked="1">
                <h3 class="panel-title">Details</h3>
            </div>
            <?php
            // echo "<pre>";
            // print_r($list);
            // die();

            ?>
            <div class="panel-body" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
    <div class="col-sm-12" bis_skin_checked="1">
 
        
<div class="form-group highlight-addon field-vendor-vendor_name required" bis_skin_checked="1" >
    
<div style="overflow-y:scroll; height:500px;" >

    <table border="2">
        <tr style=" position: sticky; top: 0; z-index: 1;">
            <th>#</th>   
            <th>Trial</th>
            <th>App  Method </th>
            <th>Timing</th>
            <th>Treatment</th>
            <th>Dose</th>
            <th>Replication</th>
            <th>Assessment</th>
            <th>Germination</th> 
            <th>Action</th>
        </tr>
 <div >

    
        <?php if($list){ $i=1; foreach( $list as $dataa){ ?>

          <tr>
            <td><?php echo $i++;?></td> 
           
            <td><?php echo $dataa->trial_code;?></td> 
            <td><?php echo $dataa->application_method; ?></td>
            <td><?php echo $dataa->timing; ?></td>
            <td><?php echo $dataa->treatments_name; ?></td>
            <td><?php echo $dataa->dose; ?></td>
            <td><?php echo $dataa->replication; ?></td>
            <td><?php echo $dataa->assessment; ?></td>
            <td><?php echo $dataa->germination; ?></td> 
            <td><a href="<?php echo 'delete_data/'.$dataa->crop_id;?>" title="Delete"   ><span style="color:  #EE4B2B; font-size: 20px; cursor: pointer;" class="fa fa-trash" ></span></a>&nbsp&nbsp <a href="<?php echo 'edit_view/'.$dataa->crop_id; ?>" title="Edit"><span style="color:dodgerblue; font-size: 20px; cursor: pointer;" class="fa fa-pencil-square-o"></span></a>&nbsp&nbsp  </td>
        </tr> 
  <?php }} ?>

    </table></div>
            </div>       
                                        <!-- Modal danger -->
                                     <!--    <div class="modal modal-danger fade" id="dangerModal" tabindex="-1" role="dialog" aria-labelledby="dangerModalLabel" aria-hidden="true">
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
                                                        
                                                        <a href=" <?php //echo 'delete_data/'.$dataa->crop_id; ?>" class="btn btn-success">Delete</a>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   -->
                </div>
                    </div>
                        </div>
                         </div>
                     </div>
  <?= $this->endsection();?>
 