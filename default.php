<div class="container-fluid p-5 bg-warning text-white text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Jangan lupa bayar Kas <?=strtoupper($result['nama'])?></p> 
  <a href="?page=keluar" class="btn btn-danger">Logout</a>
</div>


<div class="container mt-5">
  <div class="row">
    <div class="col-sm-3">
      <h3>Data Tarif</h3>
      <div class="" style="width:200px">
      <a href="?page=tarif"><img class="card-img-top " src="img/lampp.png" alt="Card image"></a>
    </div>
    </div>
    <div class="col-sm-3">
      <h3>Data Clients</h3>
      <div class="" style="width:200px">
       <a href="?page=client"> <img class="card-img-top " src="img/clii.png" alt="Card image"></a>
    </div>  
    </div>
    <div class="col-sm-3">
      <h3>Data Payments</h3>        
      <div class="" style="width:200px">
       <a href="?page=payment"> <img class="card-img-top " src="img/mon.png" alt="Card image"></a>
    </div>   
    </div>
    <div class="col-sm-3">
      <h3>Data Users</h3>        
      <div class="" style="width:200px">
       <a href="?page=user"> <img class="card-img-top " src="img/usee.png" alt="Card image"></a>
    </div>  
    </div>
  </div>
</div>
