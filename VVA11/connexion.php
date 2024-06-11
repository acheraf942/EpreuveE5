<?php
 session_start();
?>
<!doctype html>
<html>
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="generator" content="Hugo 0.98.0">
    <meta charset="utf-8">
  
    <title>VVA</title>
    <style>
     td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}
section
{
  position: relative;
  width: 100%;
  height: 100vh;
  padding: 100px;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}
section::before
{
  content: "";
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;

}
section img
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  pointer-events: none;
}
section img#mountains_front
{
  z-index: 10;
}

.sec
{
  position: relative;
  min-height: 500px;
  padding: 100px;

}
.sec h2
{
  font-size: 3.5em;
  margin-bottom: 10px;
  color: #000000;
}
.sec p
{
  font-size: 1.2em;
  color: #000000;
}

  </style>
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


      <br><br>

    <div class="row">
      <div class="col-12">

    <section>
      <img src="stars.png" id="stars">      

         <form action="connexion1.php" method="post">
          <h1>Page de connexion</h1><br>


            <div class="form-floating mb-3">
              <input type="text"  name="user" class="form-control" placeholder="user">
              <label for="floatingInput">User</label>
            </div>
            
            <div class="form-floating">
              <input type="password" name="mdp" class="form-control"  placeholder="Password">
              <label for="floatingPassword">Mot de passe</label>
            </div><br>

            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-secondary" type="submit" name="submit" value="Se connecter">Connexion</button>
            </div>
          </form>
           
      <img src="mountains_front.png" id="mountains_front">
      <div class="content">
      </div>
    </section>
    </div>
  </div>



    <br><br>
      


   </body>
</html>