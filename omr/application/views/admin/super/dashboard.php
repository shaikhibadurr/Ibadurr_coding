<?php include('header.php'); ?>
<div class="container" >
   <div class="card bg-light mt-4 pb-5" style="">
      <div class="rounded-circle mt-5 mx-auto" style="background:grey; width:150px; height:150px; 
      background-color: grey; background-image:url('data:image;base64,<?=base64_encode($employee_info->profile_photo);?>'); background-size:100%; background-repeat: no-repeat; background-position: center; box-shadow:-5px -4px 3px 0px rgba(255,255,255,0.425),
         5px 4px 3px 0px rgba(88,88,88,0.425);">
      </div>
      <h2 class="mt-2 mx-auto mb-0" style="font-weight: bolder;"><?=$employee_info->first_name." ".$employee_info->last_name;?></h2>
      <span class="mx-auto"><?=$department_info->designation;?></span>
      <div class="allcards mx-auto d-flex justify-content-between flex-wrap mt-5" style=" width:90%; ">
         

         




          <!-- f-card: City -->
            
                <div class="f-card">
                    <div class="flip-f-card">
                        <div class="flip-f-card__container">
                            <div class="f-card-front">
                                <div class="f-card-front__tp f-card-front__tp--city">
                                    <img width="70" src="<?=base_url('assets/img/man.png');?>">

                               <h1 style="" class="f-card-front__heading">
                                Employee
                            </h1>
                                </div>

                                <div class="f-card-front__bt">
                                    <p class="f-card-front__text-view f-card-front__text-view--city">
                                        See Details
                                    </p>
                                </div>
                            </div>
                            <div class="f-card-back" >
                              
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--city">
                                Total Employee:
                            </h3>
                            <h1 style="    font-size: 70px; margin-bottom: 25px;"><?= $num_employee->num_rows();?></h1>
                            <a href="<?=base_url('super_admin/employee_table');?>"><button type="button" class="btn btn-outline-dark">Manage</button></a>
                        </div>
                    </div>
                </div>



                <!-- f-card: City -->
            
                <div class="f-card">
                    <div class="flip-f-card">
                        <div class="flip-f-card__container">
                            <div class="f-card-front">
                                <div class="f-card-front__tp f-card-front__tp--ski">
                                    <img width="70" src="<?=base_url('assets/img/human-resources.png');?>">

                               <h1 style="" class="f-card-front__heading">
                                Human Resource
                            </h1>
                                </div>

                                <div class="f-card-front__bt">
                                    <p class="f-card-front__text-view f-card-front__text-view--ski">
                                        See Details
                                    </p>
                                </div>
                            </div>
                            <div class="f-card-back" >
                              
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--ski">
                                Total HR:
                            </h3>
                            <h1 style="    font-size: 70px; margin-bottom: 25px;">23</h1>
                            <button type="button" class="btn btn-outline-dark">Manage</button>
                        </div>
                    </div>
                </div>

                 <!-- f-card: City -->
            
                <div class="f-card">
                    <div class="flip-f-card">
                        <div class="flip-f-card__container">
                            <div class="f-card-front">
                                <div class="f-card-front__tp f-card-front__tp--beach">
                                    <img width="70" src="<?=base_url('assets/img/admin.png');?>">

                               <h1 style="" class="f-card-front__heading">
                                Admin
                            </h1>
                                </div>

                                <div class="f-card-front__bt">
                                    <p class="f-card-front__text-view f-card-front__text-view--beach">
                                        See Details
                                    </p>
                                </div>
                            </div>
                            <div class="f-card-back" >
                              
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--beach">
                                Total Admin:

                            </h3>
                            <h1 style="    font-size: 70px; margin-bottom: 25px;"><?= $num_admin->num_rows();?></h1>
                            <button type="button" class="btn btn-outline-dark">Manage</button>
                        </div>
                    </div>
                </div>









      </div>
   </div>
</div>

<?php include('footer.php'); ?>
