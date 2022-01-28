<?php include('header.php');?>


<div class="container col-6">
<form action="#">
  <fieldset>
    <legend>Legend</legend>
    <div class="row">
      <div class="form-group col-6">
        <label for="firstname" class="form-label mt-4">First Name</label>
        <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstname">
      </div>
      <div class="form-group col-6">
        <label for="lastname" class="form-label mt-4">Last Name</label>
        <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-6">
        <label for="fathername" class="form-label mt-4">Father Name</label>
        <input type="text" class="form-control" id="fathername" aria-describedby="emailHelp" placeholder="Enter Father Name" name="fathername">
      </div>
      <div class="form-group col-6">
        <label for="mothername" class="form-label mt-4">Mother Name</label>
        <input type="text" class="form-control" id="mothername" placeholder="Enter Mother Name" name="mothername">
      </div>
    </div>

    <div class="form-group">
      <label for="dob" class="form-label mt-4">Date Of Birth</label>
      <input type="date" class="form-control" id="dob" placeholder="DOB" name="dob">
    </div>
    <div class="row">
        <div class="form-group col-6">
          <label for="localaddress" class="form-label mt-4">Local Address</label>
          <textarea class="form-control" id="localaddress" name="localaddress" placeholder="Local Address" rows="6"></textarea>
        </div>
        <div class="col-6" style="margin-top:56px;">
          <div class="form-group">
            <input type="text" class="form-control" id="localaddress" placeholder="City" name="localcity">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="localaddress" aria-describedby="emailHelp" placeholder="Postal Code" name="localpostalcode">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="localaddress" placeholder="State" name="localstate">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="localaddress" aria-describedby="emailHelp" placeholder="Country" name="localcountry">
          </div>
        </div>
    </div>
    <fieldset class="form-group">
      <div class="form-check mt-4">
        <input class="form-check-input" type="checkbox" value="" id="samelocaladdress">
        <label class="form-check-label" for="samelocaladdress">
          Same as Local Address
        </label>
      </div>
    </fieldset>
    <div class="row">
        <div class="form-group col-6">
          <label for="permanentaddress" class="form-label mt-4">Permanent Address</label>
          <textarea class="form-control" id="permanentaddress" placeholder="Permanent Address" rows="6"></textarea>
        </div>
        <div class="col-6" style="margin-top:56px;">
          <div class="form-group">
            <input type="text" class="form-control" id="permanentaddress" placeholder="City" name="permanentcity">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="permanentaddress" aria-describedby="emailHelp" placeholder="Postal Code" name="permanentpostalcode">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="permanentaddress" placeholder="State" name="permanentstate">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="permanentaddress" aria-describedby="emailHelp" placeholder="Country" name="permanentcountry">
          </div>
        </div>
    </div>
    <div class="row">
      <div class="form-group col-6">
        <label for="emergencynumber" class="form-label mt-4">Emergency Number</label>
        <input type="number" class="form-control" id="emergencynumber" placeholder="Number" name="emergencynumber">
      </div>
      <div class="form-group col-6">
        <label for="email" class="form-label mt-4">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email Id" name="email">
      </div>
    </div>
    <div class="row">
     <fieldset class="col-6">
        <legend class="mt-4">Status</legend>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="status">
          <label class="form-check-label" for="status">Active</label>
        </div>
      </fieldset>
      <fieldset class="col-6">
        <legend class="mt-4">Notice Period</legend>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="active">
          <label class="form-check-label" for="active">Active</label>
        </div>
      </fieldset>
    </div>
    <div class="form-group">
      <label for="gender" class="form-label mt-4">Gender</label>
      <select class="form-select" id="gender">
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
    </div>
    <div class="row">
      <fieldset class="form-group col-3" style="margin-top: 30px;">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="maritalstatus">
          <label class="form-check-label" for="maritalstatus">
            Marital Status
          </label>
        </div>
      </fieldset>
      <div class="form-group col-9 mt-4">
        <input type="text" class="form-control" id="spousename" aria-describedby="emailHelp" placeholder="Spouse Name " name="firstname">
      </div>
    </div>
    <div class="form-group">
      <label for="tshirtsize" class="form-label mt-4">T-shirt Size</label>
      <select class="form-select" id="tshirtsize">
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
      </select>
    </div>
    <div class="form-group">
      <label for="assetnumber" class="form-label mt-4">Asset Number</label>
      <input type="number" class="form-control" id="assetnumber" aria-describedby="emailHelp" placeholder="Enter Asset Name" name="firstname">
    </div>
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Employee Type</label>
      <select class="form-select" id="exampleSelect1">
        <option>Admin</option>
        <option>HR</option>
        <option>Normal</option>
      </select>
    </div>
    <button type="submit" class="mt-4 btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>


<?php include('footer.php'); ?>