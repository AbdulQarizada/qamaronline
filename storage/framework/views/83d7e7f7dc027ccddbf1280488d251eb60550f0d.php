

<?php $__env->startSection('title'); ?> ADD QAMAR CARE CARD <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/filepond.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
<link href="<?php echo e(URL::asset('/assets/libs/filepond/css/plugins/filepond-plugin-image-preview.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />

 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Qamar Care / Add Qamar Care Card <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>   <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
        <div class="col-12">
           <a href="<?php echo e(route('IndexQamarCareCard')); ?>" class="btn btn-info btn-lg waves-effect btn-label waves-light m-3"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        </div>
     </div>


     <div class="row">
        <div class="col-12">
        <div class="card border border-3">
                    <div class="card-header">
                      <blockquote class="blockquote border-primary  font-size-14 mb-0">
                                <p class="my-0   card-title fw-medium font-size-24 text-wrap">ADD CARE CARD</p>
                        
                        </blockquote>
                    </div>
                </div>
      
        </div>
     </div>



<form class="needs-validation"  action="<?php echo e(route('CreateQamarCareCard')); ?>" method="POST" enctype="multipart/form-data" novalidate>
     <?php echo csrf_field(); ?>
     

<div class="row">
    <div class="col-lg-12">
    <div class="card ">
    <h4 class="card-header bg-primary text-white ">PEROSNAL INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                 
                 <div class="row">
                    <div class="col-md-10">
                      <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="FirstName" class="form-label ">First Name</label>
                                    <input type="text" class="form-control form-control-lg" id="FirstName" name="FirstName"
                                          required>
                              
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="LastName" class="form-label ">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="LastName" name="LastName"
                                          required>
                               
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="TazkiraID" class="form-label ">Tazkira ID</label>
                                    <input type="number" class="form-control form-control-lg" id="TazkiraID" name="TazkiraID"
                                          required>
                                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="QCC" class="form-label ">Qamar Care Card Number</label>
                                    <div class="hstack gap-3">
                                    <label class="form-label ">QCC-</label>
                                    <input class="form-control form-control-lg me-auto" type="text"  name="QCC" id="QCC" readonly>
                                    <!-- <button type="button" class="btn btn-lg btn-outline-danger" onclick="Random();"><i class=" bx bxs-magic-wand  font-size-16 align-middle"></i> </button> -->
                                
                                 </div>
                                </div>
                            </div>
                            
                     </div>

                    </div>
                    <div class="col-md-2 justify-content-center">
                               <label for="Profile" class="form-label"></label>
                                <input type="file" class="my-pond" id="Profile" name="Profile"  />
                          
                    </div>
                </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Country" class="form-label">Country</label>
                                    <select class="form-select  form-select-lg" required id="Country" name="Country">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Somalie">Somalie</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Tribe" class="form-label">Tribe</label>
                                    <select class="form-select  form-select-lg" required id="Tribe" name="Tribe">
                                    <option value="Pashtoon">Pashtoon</option>
                                    <option value="Tajik">Tajik</option>
                                    <option value="Hazara">Hazara</option>
                                    <option value="Nooristani">Nooristani</option>
                                    <option value="Uzbak">Uzbak</option>
                                    <option value="Turkman">Turkman</option>
                                    <option value="Baloch">Baloch</option>
                                    

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Language" class="form-label">Language</label>
                                    <select class="form-select  form-select-lg" required id="Language" name="Language">
                                    <option value="Pashto">Pashto</option>
                                    <option value="Dari">Dari</option>
                                    <option value="Pashai">Pashai</option>
                                    <option value="Nooristani">Nooristani</option>
                                    <option value="Uzbaki">Uzbaki</option>
                                    <option value="Turkmani">Turkmani</option>
                                    <option value="Balochi">Balochi</option>
                                    

                                    </select>
                                </div>
                            </div>
                      
                   
                        </div>
                    
                        <div class="row">
                        <!-- <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="GOBType" class="form-label">Date of Birth Type</label>
                                    <select class="form-select  form-select-lg" id="GOBType"  name="GOBType">
                                    <option value="Age">Age</option>
                                    <option value="ShamsiDate">Shamsi Date</option>
                                    <option value="Gorogoin Date">Grogorian Date</option>

                                 </select>
                                </div>
                            </div> -->
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="DOB" class="form-label">Date of Birth</label>
                                    <div class="input-group " id="example-date-input">
                                      
                                    <input class="form-control form-select-lg" type="date"  id="example-date-input" name="DOB" id="DOB" required>

                                   
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Gender" class="form-label">Gender</label>
                                    <select class="form-select  form-select-lg" id="Gender"  name="Gender" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                 </select>
                                </div>
                            </div>
                      
                   
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="CurrentJob" class="form-label">Current Job</label>
                                    <select class="form-select  form-select-lg" required name="CurrentJob"  id="CurrentJob">
                                    <option value="Jobless">Jobless</option>
                                    <option value="Cooking">Cooking</option>
                                    <option value="SecurityGuard">Security Guard</option>
                                     <option value="Driving">Driving</option>
                                     <option value="Cleaning">Cleaning</option>
                                     <option value="ShopKeeping">Shop Keeping</option>
                                     <option value="HouseWife">House Wife</option>



                               </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="FutureJob" class="form-label">What type of job you can do?</label>
                                    <select class="form-select  form-select-lg" required name="FutureJob"  id="FutureJob">
                                    <option value="Cooking">Cooking</option>
                                    <option value="SecurityGuard">Security Guard</option>
                                     <option value="Driving">Driving</option>
                                     <option value="Cleaning">Cleaning</option>
                                     <option value="ShopKeeping">Shop Keeping</option>


                               </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="EducationLevel" class="form-label">Education Level</label>
                                    <select class="form-select  form-select-lg" required name="EducationLevel"  id="EducationLevel">
                                    <option value="NoEducation">No Education</option>
                                    <option value="Bachularate">Bachularate</option>
                                     <option value="University">University Graduate</option>
                                     <option value="Master">Master</option>
                                     <option value="PhD">PhD</option>



                               </select>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->




<div class="row">
    <div class="col-lg-12">
    <div class="card ">
    <h4 class="card-header bg-primary text-white ">ADDRESS AND CONTACT</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                 
            
                        <div class="row">
                         
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="PrimaryNumber" class="form-label">Primary Number</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control  form-control-lg" id="PrimaryNumber" name="PrimaryNumber"
                                             aria-describedby="PrimaryNumber"
                                            required>
                                    </div>
                                </div>
                            </div>
                                     
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="SecondaryNumber" class="form-label">Secondary Number</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control  form-control-lg" id="SecondaryNumber" name="SecondaryNumber"
                                            aria-describedby="SecondaryNumber"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Email" class="form-label">Email</label>
                                    <div class="input-group">
                                      
                                        <input type="email" class="form-control  form-control-lg" id="Email" name="Email"
                                            aria-describedby="Email"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
           
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Province" class="form-label">Province</label>
                                    <select class="form-select  form-select-lg" required name="Province" id="Province">
                                    <option value="Kabul">Kabul</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="District" class="form-label">District</label>
                                    <input type="text" class="form-control  form-control-lg" id="District"  name="District"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="Village" class="form-label">Village</label>
                                    <input type="text" class="form-control  form-control-lg" id="Village"  name="Village"
                                        required>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                                                       
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="RelativeName" class="form-label">Relative Name</label>
                                    <div class="input-group">
                                      
                                        <input type="text" class="form-control  form-control-lg" id="RelativeName" name="RelativeName"
                                            aria-describedby="Email"
                                            required>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="RelativeRelationship" class="form-label">Relationship</label>
                                    <select class="form-select  form-select-lg" required name="RelativeRelationship"  id="RelativeRelationship">
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                     <option value="Brother">Brother</option>
                                     <option value="Sister">Sister</option>
                                     <option value="Uncle">Uncle</option>
                                     <option value="Aunt">Aunt</option>
                                  </select>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="RelativeNumber" class="form-label">Relative Number</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control  form-control-lg" id="RelativeNumber" name="RelativeNumber"
                                             aria-describedby="RelativeNumber"
                                            required>
                                    </div>
                                </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->





<div class="row">
    <div class="col-lg-12">
    <div class="card ">
    <h4 class="card-header bg-primary text-white ">FAMILY AND INCOME INFORMATION</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="FatherName" class="form-label">Father's Name</label>
                                    <input type="text" class="form-control  form-control-lg" id="FatherName" name="FatherName"
                                          required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="SpuoseName" class="form-label">Spuose's Name</label>
                                    <input type="text" class="form-control  form-control-lg" id="SpuoseName"  name="SpuoseName"
                                         required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="EldestSonAge" class="form-label">Eldest Son Age</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg" id="EldestSonAge" name="EldestSonAge"
                                             aria-describedby="EldestSonAge"
                                            required>
                                    </div>
                                </div>
                            </div>
                     
                        </div>
                        <div class="row">
                         
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="MonthlyFamilyIncome" class="form-label">Monthly Family Income</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg" id="MonthlyFamilyIncome" name="MonthlyFamilyIncome"
                                            aria-describedby="MonthlyFamilyIncome"
                                            required>
                                    </div>
                                </div>
                            </div>
                                     
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="MonthlyFamilyExpenses" class="form-label">Monthly Family Expenses</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg" id="MonthlyFamilyExpenses" name="MonthlyFamilyExpenses"
                                             aria-describedby="MonthlyFamilyExpenses"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="NumberFamilyMembers" class="form-label">Number of  Family Members</label>
                                    <div class="input-group">
                                      
                                        <input type="number" class="form-control form-control-lg" id="NumberFamilyMembers" name="NumberFamilyMembers"
                                             aria-describedby="NumberFamilyMembers"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="IncomeStreem" class="form-label">Income Streem</label>
                                    <div class="input-group">
                                      
                                        <input type="text" class="form-control form-control-lg" id="IncomeStreem" name="IncomeStreem"
                                             aria-describedby="IncomeStreem"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="LevelPoverty" class="form-label">Level Of Poverty</label>
                                    <select class="form-select form-select-lg" required name="LevelPoverty" id="LevelPoverty">
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>

                              </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label for="FamilyStatus" class="form-label">Family Status</label>
                                    <select class="form-select form-select-lg" required name="FamilyStatus" id="FamilyStatus">
                                    <option>Select Family Status</option>
                                    <option value="Poor">Poor</option>
                                    <option value="Orphan">Orphan</option>
                                    <option value="Widow">Widow</option>
                                    <option value="Handicap">Handicap</option>
                                    <option value="In debt">In debt</option>
                                    <option value="Low Income">Low Income</option>
                              </select>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->




<div class="row">
    <div class="col-lg-12">
    <div class="card ">
    <h4 class="card-header bg-primary text-white ">DOCUMENTS</h4>

                <div class="card-body">
                    <!-- <p class="card-title-desc">Please enter all information about the Beneficiaries of the Qamar Care Card.
                    </p> -->
                 
                        <div class="row">
                          <div class="col-md-4">
                               <label for="Tazkira" class="form-label">Tazkira</label>
                                <input type="file" class="my-pond" name="Tazkira" id="Tazkira" />
                         </div>
                         
                    </div>
                
                </div>
            </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<div>

<button class="btn btn-success btn-lg" type="submit">Save </button>
<a class="btn btn-danger btn-lg" href="<?php echo e(route('IndexQamarCareCard')); ?>">Cancel</a>
</div>





</form>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>



<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/filepond.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/filepond/js/plugins/filepond-plugin-image-preview.min.js')); ?>"></script>


<script src="<?php echo e(URL::asset('/assets/js/pages/form-validation.init.js')); ?>"></script>





<script>

	  FilePond.registerPlugin(FilePondPluginImagePreview);



	// Get a reference to the file input element
	  const inputProfile = document.querySelector('input[name="Profile"]');

      // Get a reference to the file input element
	  const inputTazkira = document.querySelector('input[name="Tazkira"]');

      

	  // Create a FilePond instance
	  const Profile = FilePond.create(inputProfile,
		  {
			  labelIdle: 'Profile <span class="bx bx-upload"></span >',


		  });


          	  // Create a FilePond instance
	  const Tazkira = FilePond.create(inputTazkira,
		  {
			  labelIdle: 'Click to upload Tazkira <span class="bx bx-upload"></span >',
              server:
			  {

				  url: '../Upload_Tazkira',
				  headers:
				  {
					  'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
				  }

			  },
			  instantUpload: true,


		  });



          Profile.setOptions(
		  {
			  server:
			  {

				  url: '../Upload_Profile',
				  headers:
				  {
					  'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
				  }

			  },
			  instantUpload: true,
              imagePreviewHeight: 100,
            imageCropAspectRatio: '1:1',
    imageResizeTargetWidth: 10,
    imageResizeTargetHeight: 10,
    stylePanelLayout: 'compact circle',
    styleLoadIndicatorPosition: 'center bottom',
    styleProgressIndicatorPosition: 'right bottom',
    styleButtonRemoveItemPosition: 'left bottom',
    styleButtonProcessItemPosition: 'right bottom'
		  });



	  $(document).ready(function () {
		  $("#select1").change(function () {
			  var dID = $(this).val();
			  $.getJSON("/Lecturers/Courses/GetSubTabs/"+dID,
				  function (data) {
					  var select = $("#select2");
					  $("#select2").show();
					  select.empty();
					  select.append('<option>SelectOption</option>');
					  $.each(data, function (index, itemData) {

						  select.append($('<option/>', {
							  value: itemData.value,
							  text: itemData.text
						  }));
					  });
				  });
		  });
	  });


	  $(document).ready(function () {
		  $("#select2").change(function () {
			  var dID = $(this).val();
			  $.getJSON("/Lecturers/Courses/GetSubTabs/" + dID,
				  function (data) {
					  var select = $("#select3");
					  $("#select3").show();
					  select.empty();
					  select.append('<option>SelectOption</option>');
					  $.each(data, function (index, itemData) {
						  select.append($(
							  '<option/>', {
							  value: itemData.value,
							  text: itemData.text
						  }));
					  });
				  });
		  });
	  });

      $(document).ready(function () {
        var rnd = Math.floor(Math.random() * 100000000);
        document.getElementById('QCC').value = rnd;
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Home\Desktop\Qamar\qamaronline\qamaronline\resources\views/QamarCardCard/Create.blade.php ENDPATH**/ ?>