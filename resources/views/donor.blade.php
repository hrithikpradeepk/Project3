@extends("theme")

@section("content")
      <div class="container">
        <div class="row">
            

            <centre><h2 style="text-align: center;"> <b>ONE STEP TO BECOME A DONOR</b></h2></centre>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
               <form>
                 <BR>
               
                   <br>
                   <br>
                   <table class="table " style="height: 350px; width: 500px; margin-left: auto; margin-right: auto;">
              
                    <tr>
                        <td>
                            <input type="text" class="form-control" placeholder="First Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text"  placeholder="Address 1" class="form-control" required></td>
                    </tr>
                    <tr><td><input type="number" class="form-control" placeholder="Age" required></td>
                    </tr>
                    <tr>
                        <td>
                          <label>Gender:</label>
                            <input type="radio" name="gender" id="male" value="male"  class="form-check-input">
                            <label>Male</label>
                            <input type="radio" name="gender" id="female" value="female" class="form-check-input">
                            <label>Female</label>
                            
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            <select name="bloodgroup" id=" bloodgroup" class="form-control">
                                <option>B +ve</option>
                                <option>O +ve</option>
                                <option>A +ve</option>
                                <option>AB +ve</option>
                                <option>A -ve</option>
                                <option>B -ve</option>
                                <option>AB -ve</option>
                                <option>B -ve</option>
                            </select>
                        </td>
                    </tr>
                    </table>
</form>
</div>

                    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                      <form>
                        
                    
                          <br>
                          <br>
                          <br>
                          <table class="table " style="height: 300px; width: 600px; margin-left: auto; margin-right: auto;">
                     
                           <tr>
                              
                               <td>
                                   <input type="text" class="form-control" placeholder="Last Name" required>
                               </td>
                           </tr>
                           <tr>
                               <td><input type="text" placeholder="Address 2" class="form-control"></td>
                           </tr>
                           <tr>
                              <td> <input type="tel" class="form-control" placeholder="Mobile Number" required>
                           </td>
                           </tr>
                           <tr>
                               
                               <td>
                                   <input type="number" class="form-control" placeholder="Weight" required>
                               </td>
                              </tr>
                              <tr>
                               
                                <td>
                                    <input type="number" class="form-control" placeholder="Height" required>
                                </td>
                               </tr>
              </table>
            
            </form>
            </div>

          <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Register
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Plese click Register button to confirm Registration
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="Donor Registration.html"><button type="button" class="btn btn-primary"   >Register</button></a>
      </div>
    </div>
  </div>
</div>


            </div>
            </div>
            
            <br><br><br>
                <footer class=" text-center text-black" style="background-color: red;" >
                    <!-- Grid container -->
                    <div class="container p-4 pb-0" style="background-color: red;">
                      <!-- Section: Form -->
                      <section class="">
                        <form action="">
                          <!--Grid row-->
                          <div class="row d-flex justify-content-center">
                            <!--Grid column-->
                            <div class="col-auto">
                              <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                              </p>
                            </div>
                            <!--Grid column-->
                  
                            <!--Grid column-->
                            <div class="col-md-5 col-12">
                              <!-- Email input -->
                              <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example2" class="form-control" />
                                <label class="form-label" for="form5Example2">Email address</label>
                              </div>
                            </div>
                            <!--Grid column-->
                  
                            <!--Grid column-->
                            <div class="col-auto">
                              <!-- Submit button -->
                              <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                              </button>
                            </div>
                            <!--Grid column-->
                          </div>
                          <!--Grid row-->
                        </form>
                      </section>
                      <!-- Section: Form -->
                    </div>
                    <!-- Grid container -->
                  
                    <!-- Copyright -->
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                      © 2020 Copyright:
                      <a class="text-white" href="#">BloodBankSociety</a>
                    </div>
                    <!-- Copyright -->
                  </footer>


            @endsection