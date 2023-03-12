
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ambo University</title>
    <link rel="stylesheet" href="assets/style.css">
 
         

          
  </head>
  <body>
 


    <div class="container">
      <header>Request Process</header>
      <div class="progress-bar">
        <div class="step">
          <p>Student Advisor</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Library</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Proctor</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Dean of Student Service</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>

      </div>
      <div class="form-outer">
        <form action="process.php?id=<?php echo $_GET['id'];?>" method="post">
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
              
              <button class="submit" name="submit">Next</button>
            </div>
          </div>
        </form>
      
      </div>
    </div>
    </form>
    <script src="assets/script.js"></script>

  </body>
</html>
