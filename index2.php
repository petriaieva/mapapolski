<!DOCTYPE html>
<html >
  <head>
      <title>Название сайта</title>

    <!-- Bootstrap -->
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 </head>
  
  <body>
   
    
<div class="container">
        <form class="form-horizontal" method="post" action="php.php">
             <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                    <h2>Dodaj firmę do katalogu</h2>
               </div>
            </div>   
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" Name="Name" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <label for="inputWojewodstwo" class="col-sm-2 control-label">Wojewodstwo</label>
            <div class="col-sm-10">
              <select class="form-control" name="Wojewodstwo">
              <option>Zachodnio-pomorskie</option>
              <option>Pomorskie</option>
              <option>Warmińsko-mazurskie</option>
              <option>Podłaskie</option>
              <option>Lubuskie</option>
              <option>Wielkopolskie</option>
              <option>Kujawsko-pomorskie</option>
              <option>Mazowieckie</option>
              <option>Dołnośląskie</option>
              <option>Łódzkie</option>
              <option>Lubelskie</option>
              <option>Opolskie</option>
              <option>Śląskie</option>
              <option>Świętokrzyskie</option>
              <option>Małopolskie</option>
              <option>Podkarpackie</option>
            </select>
            </div>
            
          </div>
          <div class="form-group">
            <label for="inputDescription" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" Name="Description" placeholder="Description">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAdres" class="col-sm-2 control-label">Adres</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" Name="Adres" placeholder="Adres">
            </div>
          </div>
          <div class="form-group">
            <label for="inputTelefon" class="col-sm-2 control-label">Telefon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" Name="Telefon" placeholder="Telefon">
            </div>
          </div>
          <div class="form-group">
            <label for="inputStronawww" class="col-sm-2 control-label">WWW</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" Name="Stronawww" placeholder="www">
            </div>
          </div>
           <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" Name="Email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          <div >
        </div>
      </div>
    </form>
    </div>
   
 </body>
</html>