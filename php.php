 <?php
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8'); 
    $mysqli = new mysqli('localhost', 'root', '', 'katalog');
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    else {
     
      if (isset($_POST['Name'])&isset($_POST['Wojewodstwo'])&isset($_POST['Description'])&isset($_POST['Adres'])&isset($_POST['Telefon'])&isset($_POST['Stronawww'])&isset($_POST['Email'])){ 
      echo "OK";    
      $stmt = $mysqli->prepare("INSERT INTO katalog(Name,Wojewodstwo,Description,Adres,Telefon,Stronawww,Email) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssss', $_POST['Name'],                       $_POST['Wojewodstwo'], $_POST['Description'], $_POST['Adres'], $_POST['Telefon'], $_POST['Stronawww'], $_POST['Email']);
        
        if(!$stmt->execute()) echo $stmt->error;
       
        $stmt->close();
        header( 'Location: index1.php', true, 303 );
        }  
    }

    ?> 