<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
    div.scroll {
  
    overflow: auto;
    white-space: nowrap;
  }
  
  div.scroll a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
  }
  
  div.scroll a:hover {
    background-color: #777;
    color:red;
  }

 
        </style>
  </head>

  <div class=" d-flex flex-column">
        
        <div class="d-flex justify-content-start">
      <img src="/assets/circle.png" alt="" class=""> 
        <div class="d-flex flex-column  ">
        <a class="navbar-link fs-4 text-decoration-none  " href="#"><span class="fw-bold text-dark  ">Mc cafee</span></a>
       <p>menu</p>
      </div>
      </div>

   <!--   <div class="mt-2 d-flex flex-row col-12">
    <div class="scroll bg-light" >
    
          <a class=" link fs-4 fw-bold text-danger"  href="<?php echo base_url("admin/index")?>">Cafeteria</a>
       
       
          <a class=" fs-4 fw-bold text-dark"  href="<?php echo base_url("admin/amaro_view")?>">Amaro&Rum</a>
       
    
          <a class=" fs-4 fw-bold text-dark" href="<?php echo base_url("admin/cigarete_view")?>">Cigare</a>
       
          <a class=" fs-4 disabled fw-bold text-dark " href="#" >Disabled</a>

          <a class=" active fs-4 fw-bold text-danger"  href="#">Cafeteria</a>
       
       
       <a class="fs-4 fw-bold text-dark" href="#">Amaro&Rum</a>
    
 
       <a class=" fs-4 fw-bold text-dark" href="#">Cigare</a>
    
  
       <a class=" fs-4 disabled fw-bold text-dark " href="#" >Disabled</a>

  
    </div>
</div>-->

<div class="scroll  bg-light fw-bold  text-dark d-flex justify-content-between  ">
  <?php 
  
  foreach($categories as $category) {
    echo '<a href="#'.$category['name'].'">'.$category['name'].'</a>';
  };
  ?>
</div>