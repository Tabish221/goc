<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Goverment of Canada</title>
   <?php include("includes/style.php"); ?>
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
</head>

<body>
   <?php include("includes/header.php") ?>

   <div class="container-fluid p-0">
      <div class="mainBody">
         <?php include("includes/aside.php") ?>

         <div class="mainPanel">
            <div class="mainPanel-head">
               <h6>
                  <div class="icon"><i class="fas fa-id-card"></i></div> My Profile
               </h6>
            </div>

            <div class="mainPanel-body">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <ul class="accordion">
                              <li class="active">
                                 <div class="acc_title">
                                    <div class="">
                                       <div class="status done"><i class="fas fa-hourglass-half"></i></div>
                                       Identify
                                    </div>

                                    <i class="far fa-plus"></i>
                                 </div>
                                 <div class="acc_desc" style="display: block;">
                                    <form action="#">
                                       <div class="deshborad-form">
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="surname">Surname(s) recorded in the passport</label>
                                                   <input type="text" id="surname">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                                <div class="dform-checkBox">
                                                   <input type="checkbox" id="surnamecheck">
                                                   <label for="surnamecheck">No Surname in passport</label>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="firstname">Frist Name(s) written in the passport</label>
                                                   <input type="text" id="firstname">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                                <div class="dform-checkBox">
                                                   <input type="checkbox" id="firstnamecheck">
                                                   <label for="firstnamecheck">No first name in passport</label>
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="sex">Sex</label>
                                                   <select name="sex" id="sex">
                                                      <option value="" selected disabled>- Select -</option>
                                                      <option value="1">Male</option>
                                                      <option value="2">Female</option>
                                                   </select>
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="dob">Date of birth</label>
                                                   <input type="date" name="dob" id="dob">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="cob">City of birth</label>
                                                   <input type="text" name="cob" id="cob">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="cotob">Country or territory of birth</label>
                                                   <input type="text" name="cotob" id="cotob">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="profilenum">Profile number</label>
                                                   <input type="text" name="profilenum" id="profilenum">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="dform-note">
                                                   <span>Fields marked with and asterisk are required.</span>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div
                                                   class="dform-groupBtn d-flex align-items-center justify-content-end gap-2">
                                                   <a href="#" class="btn btn-secondary"
                                                      style="display: none">Cancel</a>
                                                   <button class="btn btn-success" style="display: none">Save</button>
                                                   <a href="#" class="btn btn-primary">Update My Identity
                                                      Information</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </li>

                              <li>
                                 <div class="acc_title">
                                    <div class="">
                                       <div class="status"><i class="fas fa-hourglass-half"></i></div>
                                       Contact Details
                                    </div>

                                    <i class="far fa-plus"></i>
                                 </div>
                                 <div class="acc_desc" style="display: none;">
                                    <form action="#">
                                       <div class="deshborad-form">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="dform-hd">
                                                   <h6>Email Address</h6>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="email">Email Address</label>
                                                   <input type="email" id="email">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                                <div class="dform-note pt-0" style="display: none;">
                                                   <span>Fields marked with an asterisk (*) are required.</span>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-groupBtn d-flex align-items-center justify-content-end gap-2 pt-3">
                                                   <a href="#" class="btn btn-secondary"
                                                      style="display: none">Cancel</a>
                                                   <button class="btn btn-success" style="display: none">Save</button>
                                                   <a href="#" class="btn btn-primary">Update Email</a>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="dform-hd">
                                                   <h6>Residence Address</h6>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="resaddress">Address</label>
                                                   <input type="text" name="resaddress" id="resaddress">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="resaddressline2">Address (line 2)</label>
                                                   <input type="text" name="resaddressline2" id="resaddressline2">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="resaddressline3">Address (line 3)</label>
                                                   <input type="text" name="resaddressline3" id="resaddressline3">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="resaddresscountry">Country*</label>
                                                   <input type="text" name="resaddresscountry" id="resaddresscountry">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="resaddressprovincestate">Province / State*</label>
                                                   <input type="text" name="resaddressprovincestate" id="resaddressprovincestate">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="resaddresscity">City*</label>
                                                   <input type="text" name="resaddresscity" id="resaddresscity">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="resaddresspostalcode">Postal Code</label>
                                                   <input type="text" name="resaddresspostalcode" id="resaddresspostalcode">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-groupBtn d-flex align-items-center justify-content-end gap-2 pt-3">
                                                   <a href="#" class="btn btn-secondary"
                                                      style="display: none">Cancel</a>
                                                   <button class="btn btn-success" style="display: none">Save</button>
                                                   <a href="#" class="btn btn-primary">Update Address</a>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="dform-hd">
                                                   <h6>Phone Number</h6>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="dform-hd">
                                                   <h3>Telephone At Home</h3>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="intdialingcode">International dialing code</label>
                                                   <input type="text" name="intdialingcode" id="intdialingcode">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="telathome">Telephone at home</label>
                                                   <input type="text" name="telathome" id="telathome">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="dform-hd">
                                                   <h3>Cell Phone</h3>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="intdialingcode1">International dialing code</label>
                                                   <input type="text" name="intdialingcode1" id="intdialingcode1">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="cellphone">Cell phone</label>
                                                   <input type="text" name="cellphone" id="cellphone">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="dform-hd">
                                                   <h3>Phone At Work</h3>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="intdialingcode2">International dialing code</label>
                                                   <input type="text" name="intdialingcode2" id="intdialingcode2">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="phoneatwork">Phone at work</label>
                                                   <input type="text" name="phoneatwork" id="phoneatwork">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-feild">
                                                   <label for="postnumber">Post Number</label>
                                                   <input type="text" name="postnumber" id="postnumber">
                                                   <div class="error">This field Must be fild</div>
                                                </div>
                                             </div>

                                             <div class="col-md-6">
                                                <div class="dform-groupBtn d-flex align-items-center justify-content-end gap-2 pt-3">
                                                   <a href="#" class="btn btn-secondary"
                                                      style="display: none">Cancel</a>
                                                   <button class="btn btn-success" style="display: none">Save</button>
                                                   <a href="#" class="btn btn-primary">Update My Identity
                                                      Information</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include("includes/scripts.php"); ?>
</body>

</html>