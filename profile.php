<?php
session_start();
$name = $_SESSION['username'];
$title = $name . " - profile";
include "./komponen/partials/head.php";
?>
<?php include "./komponen/partials/navtop.php"?>
<div class="container">
<div class="row text-white mt-4">
  <div class="col-12">
     <div class="card bg-transparent">
        <div class="card-header d-flex align-items-center">
          <div class="profile" style="border:1px white solid;padding:5px;border-radius:26px;margin-right:5px;">
             <img width="50℅" class="rounded-circle" src="./komponen/gambar/profil.png" alt="">
          </div>
           <h5 class="card-title"> Rysnanto <span><svg style="color:#0d6efd;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16"><path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/></svg</span>  </h5>
           
        </div>
      <div class="card-body">
        <p>lorem20 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, nobis.
       🔥SMK UMAR FATAH
        </p>
        
      </div>
      <div class="card-footer " style="border-top:1px white solid;border-bottom:1px white solid;">
        <div class="row text-center" style="margin-bottom:-18px;">
          <div class="col-4" >
            <p class="count">10</p>
            <p style="margin-top:-10px;">Postingan</p>
          </div>
       <div class="col-4">
         <p class="count">1000</p>
         <p style="margin-top:-10px" >Likes</p>
        </div>
    <div class="col-4">
      <p class="count">50</p>
      <p style="margin-top:-10px;">Following</p>
    </div>
        </div>
      </div>
        </div>
     </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-12">
    <div class="container">
      <div class="card bg-transparent">
         <div class="card-body d-flex align-items-center" style="border-left:1px white solid;">
<img src="./komponen/gambar/profil.png" class="rounded-circle " alt="Profile Image" width="40">
           <h5>Rysnanto</h5>
         </div>
      </div>
    </div>
    
  </div>
</div>

</div>




<?php include "./komponen/partials/navbottom.php"?>
<?php include "./komponen/partials/footer.php"?>