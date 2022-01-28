<?php include('header.php'); ?>
<div class="container" >
   <div class="card bg-light mt-4 pb-5" style="">
      <div class="rounded-circle mt-5 mx-auto" style="background:grey; width:150px; height:150px; background-image:url('data:image;base64,<?=base64_encode($employee_info->profile_photo);?>'); background-size:100%; background-repeat: no-repeat; background-position: center; box-shadow:-5px -4px 3px 0px rgba(255,255,255,0.425),
         5px 4px 3px 0px rgba(88,88,88,0.425);">
      </div>
      <h2 class="mt-2 mx-auto mb-0" style="font-weight: bolder;"><?=$employee_info->first_name." ".$employee_info->last_name;?></h2>
      <span class="mx-auto"><?=$department_info->designation;?></span>
      <div class="allcards mx-auto d-flex justify-content-between flex-wrap mt-5" style=" width:90%; ">
         

         <div class="card border-secondary mb-3 " style="width:19rem;">
            <div class="card-header bg-white">Personal Info</div>
            <div class="card-body">
               <div class="phone d-flex">
                  <span style="width:40px;">	
                  <img style="width:25px;" src="<?=base_url('assets/img/m.png');?>">
                  </span>
                  <div style=""><?=$employee_info->mother_name;?></div>
               </div>
               <div class="email mt-2 d-flex">
                  <span style="width:40px;">	
                  <img style="width:25px;" src="<?=base_url('assets/img/dad.png');?>">
                  </span>
                  <div style=""><?=$employee_info->father_name; ?></div>
               </div>
               <div class="address mt-2 d-flex">
                  <span style="width:40px;">	
                  <img style="width:25px;" src="<?=base_url('assets/img/lavatory.png');?>">
                  </span>
                  <div style=""><?=$employee_info->gender;?>
                  </div>
               </div>
               <div class="dob mt-2 d-flex">
                  <span style="width:40px;">	
                  <img style="width:25px;" src="<?=base_url('assets/img/birthd.png');?>">
                  </span>
                  <div style=""><?=$employee_info->dob;?>
                  </div>
               </div>
            </div>
         </div>

         <div class="card border-secondary mb-3" style="width:19rem;">
            <div class="card-header bg-white">Contact Info</div>
            <div class="card-body">
               <div class="phone d-flex">
                  <div style="margin-right: 15px;">	
                     <img style="width:25px;" src="<?=base_url('assets/img/call.png');?>">
                  </div>
                  <div style="">
                     <a style="text-decoration: none;" href="tel:<?=$employee_info->emergency_number;?>"><?=$employee_info->emergency_number;?></a>
                  </div>
               </div>
               <div class="email mt-2 d-flex">
                  <div style="margin-right: 15px;">	
                     <img style="width:25px;" src="<?=base_url('assets/img/user.png');?>">
                  </div>
                  <div style=""><a style="text-decoration: none;" href="mailto:<?=$employee_info->email;?>"><?=$employee_info->email; ?></a></div>
               </div>
               <div class="address mt-2 d-flex">
                  <div style="margin-right: 15px;">	
                     <img style="width:25px;" src="<?=base_url('assets/img/map-location.png');?>">
                  </div>
                  <div style=""><a style="text-decoration: none;" href="https://google.com/maps/search/<?=$employee_info->local_address." ".$employee_info->local_city." ".$employee_info->local_state." ".$employee_info->local_postal_code.",".$employee_info->local_country; ?>"><?=$employee_info->local_address." ".$employee_info->local_city." ".$employee_info->local_state." ".$employee_info->local_postal_code.",".$employee_info->local_country; ?> </a>
                  </div>
               </div>
            </div>
         </div>


         <div class="card border-secondary mb-3" style="width:19rem;">
            <div class="card-header bg-white">Other Info</div>
            <div class="card-body">
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>OMR Id</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$employee_info->omr_id;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>Marital Status</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$employee_info->marital_status;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>Spouse Name</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$employee_info->spouse_name;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>Notice Period</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$employee_info->notice_period;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>Asset Number</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$employee_info->asset_number;?>
               </div>
            </div>
         </div>

         <div class="card border-secondary mb-3" style="width:19rem; ">
            <div class="card-header bg-white">Bank Info</div>
            <div class="card-body">
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>Bank Name</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$bank_info->bank_name;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>Account Number</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$bank_info->account_number;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>IFSC Code</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$bank_info->ifsc_code;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>Branch Name</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$bank_info->branch_name;?>
               </div>
            </div>
         </div>

         <div class="card border-secondary mb-3" style="width:19rem; ">
            <div class="card-header bg-white">PF Info</div>
            <div class="card-body">
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>PF Number</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$pf_info->pf_number;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>UAN Number</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$pf_info->uan_number;?>
               </div>
            </div>
         </div>

         <?php if($document_info): ?>
         <div class="card border-secondary mb-3" style="width:19rem; ">
            <div class="card-header bg-white">Document Info</div>
            <div class="card-body">
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>Aadhar Number</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$document_info->aadhar_number;?>
               </div>
               <div class="phone d-flex">
                  <div style="width: 130px;">
                     <h6>PAN Number</h6>
                  </div>
                  <div style="margin-right: 10px;">
                     <h6>:</h6>
                  </div>
                  <?=$document_info->pan_number;?>
               </div>
            </div>
         </div>
         <?php endif; ?>

      </div>
   </div>
</div>

<?php include('footer.php'); ?>
