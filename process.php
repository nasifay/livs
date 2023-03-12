
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ambo University</title>
    <link rel="stylesheet" href="assets/style.css">

  
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

  </head>
 

  <body>
    <div class="container">
      <header>Request Process</header>
      <div class="progress-bar">
        <div class="step">
          <p>Finance</p>
          <div class="bullet">
            <span>5</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Head of Compus Police</p>
          <div class="bullet">
            <span>6</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Registrar</p>
          <div class="bullet">
            <span>7</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submite</p>
          <div class="bullet">
            <span></span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      
      <div class="form-outer">
        <form action="php/check.php?id=<?php echo $_GET['id'];?>" method="post">
          <div class="page slide-page">
           
            <div class="field">
             
              <button class="firstNext next">Next</button>
            
            </div>
             
          </div>

         <div class="page">
           
            <div class="field btns">
              
              <button class="next-1 next">Next</button>
            
            </div>
         
          </div>

          <div class="page">
           
            <div class="field btns">
             
              <button class="next-2 next">Next</button>

            </div>
         
          </div>

          <div class="page">
           
            <div class="field btns">
              
              <button name="submit">FINISHED</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="assets/script.js"></script>

  </body>
</html>
