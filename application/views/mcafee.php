<body>
     <div class="container-fluid">




 
   <!--  <div class="mt-2 d-flex flex-row col-12">
    <div class="scroll bg-light" >
    
          <a class=" link fs-4 fw-bold text-danger"  href="<?php echo base_url("admin/index")?>">Cafeteria</a>
       
       
          <a class=" fs-4 fw-bold text-dark"  href="<?php echo base_url("admin/amaro_view")?>">Amaro&Rum</a>
       
    
          <a class=" fs-4 fw-bold text-dark" href="#">Cigare</a>
       
          <a class=" fs-4 disabled fw-bold text-dark " href="#" >Disabled</a>

          <a class=" active fs-4 fw-bold text-danger"  href="#">Cafeteria</a>
       
       
       <a class="fs-4 fw-bold text-dark" href="#">Amaro&Rum</a>
    
 
       <a class=" fs-4 fw-bold text-dark" href="#">Cigare</a>
    
  
       <a class=" fs-4 disabled fw-bold text-dark " href="#" >Disabled</a>

  
    </div>
</div>-->

  <!--</div>-->





  

<div class="row ">
<?php 
  
foreach($products as $product) {
  echo '

  <div class="col-lg-6 col-md-6 col-6  " style=" background-color: #FFE4C4;">
  <div class=" p-3 mt-5 d-flex flex-row text-start " >

  

  <div class="mt-5 p-2 "  >

  <h5 class=" fw-bold   "> '.$product['title']['rendered'] . '--'.'</h5>
  </div>



</div>

</div>

<div class="col-lg-6 col-md-6 col-6  " style=" background-color: 	#fff0f5;">
  <div class=" p-1 mt-5 d-flex flex-column text-start " >

  

  <div class="mt-5 p-2 "  >

  <h5 class=" fw-bold   "> '.$product['title']['rendered'] . '--'.'</h5>
  </div>




</div>

</div>











';
    
}
?>
</div>

 




 <!--<div class="col-lg-6 col-md-6 col-6 px-0 " style="background-color:Violet;" >
<div class=" p-3 mt-5 d-flex flex-column text-start"  >
<div class="mt-5 p-2 "  >
  <p class=" fw-bold  "> ILLY CAPUCCINO</p>
</div>
</div>
</div>

</div>









<div class="row ">
  <div class="col-lg-6 col-md-6 col-6 px-0 " style=" background-color: #6495ED;">
 
  <div class=" p-3 mt-5 d-flex flex-column text-start " >
  <div class="mt-5 p-2"  >
  <h5 class=" fw-bold  "> Lavaza Cafee</h5>
</div>
</div>

</div>


<div class="col-lg-6 col-md-6 col-6 px-0 " style="background-color:#D8BFD8;" >
<div class=" p-3 mt-5 d-flex flex-column text-start "  >
<div class="mt-5 p-2"  >
  <p class=" fw-bold  "> ILLY CAPUCCINO</p>
</div>
</div>
</div>

</div>


<div class="row ">
  <div class="col-lg-6 col-md-6 col-6 px-0 " style=" background-color: #87CEEB;">
 
  <div class=" p-3 mt-5 d-flex flex-column " >
  <div class="mt-5 p-2"  >
  <h5 class="mt-2 fw-bold  "> KAFE</h5>
</div>
</div>

</div>


<div class="col-lg-6 col-md-6 col-6 px-0 " style="background-color:#FFF0F5;" >
<div class=" p-3 mt-5 d-flex flex-column "  >
<div class="mt-5 p-2"  >
  <p class=" fw-bold  "> ILLY CAPUCCINO</p>
</div>
</div>
</div>


</div>-->






<div class="mt-1  col-12 text-center bg-success  ">

<div class="footer  ">
 
   <h2 class="fw-bold fs-1  text-dark text-center" > @dev<span class="fw-bold fs-1" >POS</span></h2>
</div>

</div>









</div>




</body>
