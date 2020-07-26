<?php include 'header.php'?>
<section style="margin-top:45px;margin-bottom:0px;">
<div class="container">
<div class="card mb-3" id="cad">
<div class="card-header">
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="images/1.jpg"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="images/2.jpg"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- carousel end -->
</div>    
  <div class="card-body">
    <h2 class="card-title"><i class="material-icons">event</i>Dahma Ta Yar Daw</h2>
    
    <div class="row">
        <div class="col-md-3">
        <div class="text-center">
        <i class="material-icons" style="color:gray;">person_outline</i>
        <p class="card-text">Oo oat dahma</p>
        </div>
        <!-- text-center end -->
        </div>
        <!-- col-md-3 end -->

        <div class="col-md-3">
        <div class="text-center">
        <i class="material-icons" style="color:orange">alarm</i>
        <p class="card-text">12:00pm</p>
        </div>
        <!-- text-center end -->
        </div>
        <!-- col-md-3 end -->

        <div class="col-md-3">
        <div class="text-center">
        <i class="material-icons" style="color:red">alarm_off</i>
        <p class="card-text">6:00am</p>
        </div>
        <!-- text-center end -->
        </div>
        <!-- col-md-3 end -->

        <div class="col-md-3">
        <div class="text-center">
        <i class="material-icons" style="color:green;">calendar_today</i>
        <p class="card-text">13.4.2020</p>
        </div>
        <!-- text-center end -->
        </div>
        <!-- col-md-3 end -->
    </div>
    <!-- row end -->
    <br><hr>
    <div class="row">

        <div class="col-md-6">
        
        <h4 class="card-title">Description</h4>
    <p class="card-text"><small class="text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</small></p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <!-- col-md-3 end -->
    <!-- row end -->
<div class="col-md-3">
<h4 class="card-title">Ticket Type</h4>
<select name="" id="" class="form-control" disabled>
  <option value="1">GA</option>
  <option value="2">Vip</option>
  <option value="3">VVIP</option>
</select>
</div>
<div class="col-md-3">
<h4 class="card-title">Ticket Price</h4>
<input type="text" class="form-control" placeholder="20000 ks" readonly>
</div>
<!-- col-md-3 end -->
</div>
    <br>
    <div class="row">

        <div class="col-md-6">
        
        <h4 class="card-title">Addtional Info</h4>
    <p class="card-text"><small class="text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</small></p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <!-- col-md-3 end -->
    <!-- row end -->
<div class="col-md-6">
<h4 class="card-title">Ticket Quantity</h4>
<input type="number" placeholder="5" readonly class="form-control"  min="1" max="10">
</div>
</div>

<div class="row">
<div class="col-md-6">
</div>
<!-- col-md-3 end -->
<!-- row end -->
<div class="col-md-6" id="font">
<h1 style="font-size: 35px"><b>Total Deposit : 15000 ks</b></h2>
</div>
</div>
<!-- col-md-3 end -->
</div>

        
  </div>
</div>

<!-- card end -->
</div>
<!-- container end -->
</section>
<?php include 'footer.php'?>