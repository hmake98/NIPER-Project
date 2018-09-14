<?php include 'layouts/master_layout_top.php'; ?>
<!--
  <div class="row justify-content-center" >
      <div class="pr-5 pl-5" style="border:2px solid #f2f2f2; width: 400px">
      <form>

       <h3 align="center" class="mb-4 mt-4">NIPER Admin Login</h3>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" ><i class="fa fa-user"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-4">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-keyboard-o"></i></span>
        </div>
        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
      </div>

      <div class="input-group mb-3">
        <input type="submit" class="form-control btn btn-primary" />
      </div>
      </form>
      </div>
  </div>
-->
  <div class="row justify-content-center" >
      <div class="pr-5 pl-5" style="border:2px solid #f2f2f2; width: 1000px; background: #f2f2f2">
      <form>

       <h3 align="center" class="mb-4 mt-4">Add New Instrument</h3>
      <span>Add a new instrument.</span>
      <div class="input-group mb-5">
        <div class="input-group-prepend">
          <span class="input-group-text" ><i class="fa fa-wrench"></i></span>
        </div>
        <input type="text" class="form-control" placeholder="Instrument" style="width:40%"> 
        <button type="submit" class="form-control btn btn-primary ml-2">Add</button>
      </div>
      </form>
      </div>
  </div>

<br><br>
   <div class="row justify-content-center" >
      <div class="pr-5 pl-5" style="border:2px solid #f2f2f2; width: 1000px; background: #f2f2f2">
      <form>

       <h3 align="center" class="mb-4 mt-4">Add Instrument Facilities</h3>
       <br>
       <span>Select Instrument and Add Facility.</span>  
       <div class="row">
        <div class="col-md-6" style="padding-right: 5px">
          <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text" ><i class="fa fa-wrench"></i></span>
            </div>
            <select class="custom-select form-control">
              <option selected>-- Select Instrument --</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>

        <div class="col-md-6" style="padding-left: 5px">
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text" ><i class="fa fa-flask"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Facility"> 
          </div>
        </div>
      </div>

      

      <div class="row">
        <div class="col-md-6" style="padding-right: 5px">
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text" ><i class="fa fa-rupee"></i></span>
             </div>
            <input type="text" class="form-control" placeholder="Charge for Insdustry">
          </div>
        </div>
        
        <div class="col-md-6" style="padding-left: 5px">
          <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text" ><i class="fa fa-rupee"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Charge for Institutes (Govt. and Private)"> 
           </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6" style="padding-right: 5px">
          <div class="input-group mb-5">
            <div class="input-group-prepend">
              <span class="input-group-text" >Remarks</span>
            </div>
            <input type="text" class="form-control" >
          </div>
        </div>

        <div class="col-md-6" style="padding-left: 5px">
          <div class="input-group mb-5">
              <input type="submit" class="form-control btn btn-primary" value="Add"> 
          </div>
        </div>
      </div>




      </form>
      </div>
  </div>


<?php include 'layouts/master_layout_bottom.php'; ?>