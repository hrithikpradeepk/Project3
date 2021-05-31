@extends("theme")

@section("content")
      <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
                    <div class="carousel-inner"> 
                      <div class="carousel-item active" >
                        <img  height="500px" src="https://d1nakyqvxb9v71.cloudfront.net/wp-content/uploads/2020/01/Heart-Article-Hero-1200x500.gif" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="500px " src="https://www.gyanipandit.com/wp-content/uploads/2015/05/Quotes-about-Blood-Donation-Gif.gif" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="500px" src="https://i.pinimg.com/originals/94/4b/52/944b52ee3a0adb9673a81c4d1e57405b.gif" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
    
            </div>
    
        </div>
    </div>
<br><br>

<div class="container">
  <div class="row">
    <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6">
      <div class="card" style="width: 42rem; margin-left: 10px;  background-color:gray;">
        <div class="card-body">
          <h5 class="card-title" style="color: white;">Request for Blood</h5>
          <h6 class="card-subtitle mb-2" style="color: white;">Everyone can request for the corresponding blood in advance - response will be in minutes </h6>
          <p class="card-text"></p>
         <table class="table" style="border: black;">
           <tr>
             <td style="color: white;">Name:</td>
             <td><input type="text" style="background-color: gray;" class="form-control"></td>
           </tr>
           <tr>
             <td style="color: white;">Place:</td>
             <td> <input type="text" style="background-color: gray;" class="form-control"></td>
           </tr>
           <tr>
             <td style="color: white;">Blood Group:</td>
             <td> <select name="bloodgroup" style="background-color: gray; color: white;" id=" bloodgroup" class="form-control">
              <option>B +ve</option>
              <option>O +ve</option>
              <option>A +ve</option>
              <option>AB +ve</option>
              <option>A -ve</option>
              <option>B -ve</option>
              <option>AB -ve</option>
              <option>B -ve</option>
          </select></td>
           </tr>
           <tr>
             <td style="color:white">Mobile Number:</td>
             <td><input type="tel" style="background-color: gray;" class="form-control"></td>
           </tr>
           <tr>
             <td></td>
             <td><button class="btn btn-danger">Request</button></td>
           </tr>
         </table>
        
      
      
        </div>
      </div>
    </div>   
    <div class="col col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6">   
    <div class="card" style="width: 38rem; margin-left: 80px; background-color: black;">
        <div class="card-body">
          <h5 class="card-title" style="color: white;">Information Corner</h5>
          <h6 class="card-subtitle mb-2" style="color: white;">Express your suggestion or information </h6>
          <p class="card-text"></p>
          <textarea name="info" id="info" cols="30" rows="10" class="form-control" style="background-color: gray;"></textarea>
          <br>

<button class="btn btn-danger" style="margin-left: 50px;">Submit</button>
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