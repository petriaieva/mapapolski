<?php 
    error_reporting(-1);
    header('Content-Type: text/html; charset=utf-8');
    $Woj=NULL;
    function filtr()
        {
        
        $mysqli = new mysqli('localhost', 'root', '', 'katalog');
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }
        else {

            if (isset($_GET["id"]))
                {
                $Woj=$_GET["id"];
                $stmt = $mysqli->query("SELECT Name,Wojewodstwo,Description,Adres,Telefon,Stronawww,Email FROM katalog WHERE Wojewodstwo LIKE \""  .$Woj. "\"");
                $rows[]=NULL;
                while ($row = $stmt->fetch_assoc()) 
                    {
                    $rows[]=$row;
                    }
                $stmt->free();
                $mysqli->close();
                return $rows;
                }
            else {
                $stmt = $mysqli->query("SELECT Name,Wojewodstwo,Description,Adres,Telefon,Stronawww,Email FROM katalog WHERE 1");
                
                while ($row = $stmt->fetch_assoc()) 
                    {
                    $rows[]=$row;
                    }
                $stmt->free();
                $mysqli->close();
                return $rows;
                }
            }
        }
$frm=filtr();
?>
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
  <script>
   
  </script>
  <body>
   
    <div class="container">
       
        <div id="lokalizacja_mapa" ><img name="lokalizacja_mapa" src="mapa_polski.png"  id="mapa_polski" usemap="#polska" alt="mapa polski" /></div>  
        <br />
        <map name="polska" id="polska">
            <area shape="poly" coords="135,234,135,234,131,235,128,235,126,237,122,248,122,249,113,263,110,271,108,271,106,273,103,280,102,280,99,280,97,282,97,283,95,281,94,283,94,286,96,288,99,292,96,294,90,296,86,300,83,299,79,295,75,289,72,281,72,278,74,276,77,271,77,268,74,266,70,266,67,268,62,272,51,262,48,258,43,256,38,257,35,257,34,251,32,244,27,240,23,242,20,248,17,251,16,250,16,248,18,242,22,233,23,227,23,222,25,220,32,215,35,216,38,217,40,214,42,211,45,211,47,215,50,216,52,215,54,210,56,207,59,205,62,200,65,195,69,195,69,195,71,196,74,201,76,202,78,201,82,197,82,196,85,196,89,198,91,200,92,202,92,203,94,205,96,207,99,210,103,211,108,212,111,211,113,210,115,208,116,207,120,207,124,207,128,211,128,212,127,213,126,216,127,218,127,219,128,221,130,221,134,221,134,222,134,222,133,225,135,229,135,232,135,234,135,234" href="<?php $frm=filtr()?>?id=Dalnośląskie" id="1" />
            <area shape="poly" coords="189,160,186,156,180,154,172,151,171,150,168,150,166,151,165,147,161,149,158,151,157,150,153,147,148,146,146,145,141,141,139,142,137,144,137,140,135,138,131,137,127,133,127,131,131,128,132,125,130,122,125,118,124,117,124,114,125,108,124,105,126,103,127,102,128,102,129,100,127,97,123,94,123,93,127,89,128,85,129,82,130,80,133,80,137,81,140,79,144,75,146,72,147,69,148,69,150,70,153,71,156,68,160,69,162,73,168,73,170,74,174,74,181,74,181,77,182,79,189,80,196,79,197,81,198,86,200,90,200,90,201,91,205,94,211,96,215,97,218,98,219,104,220,106,219,107,216,109,215,111,216,114,217,119,210,120,208,121,208,123,208,126,206,130,207,133,209,136,206,136,204,139,204,144,204,148,202,152,201,156,194,159,189,160,189,160" href="<?php $frm=filtr()?>?id=Kujawsko-pomorskie" id="4" />
            <area shape="poly" coords="361,163,362,164,365,167,369,167,372,168,375,171,377,176,377,181,377,190,376,203,377,207,379,213,379,221,378,223,379,224,386,231,391,237,393,245,395,249,397,250,398,251,397,254,395,261,398,267,400,276,399,280,396,283,387,283,384,285,382,288,379,293,376,289,374,286,371,283,367,282,364,284,361,284,357,286,353,289,346,290,343,288,340,286,337,285,335,286,331,285,331,283,333,281,336,280,336,277,336,273,333,271,328,270,325,268,321,267,320,265,321,263,321,260,319,259,315,258,310,260,308,260,305,258,305,251,305,245,304,240,302,234,303,231,305,229,306,225,304,222,304,221,305,219,306,215,303,213,298,212,296,208,298,205,300,205,301,205,305,204,307,202,307,201,307,200,308,197,308,194,306,191,306,189,307,187,308,183,311,181,321,179,324,179,329,178,332,176,335,177,338,174,340,174,346,175,350,173,352,169,354,167,355,165,356,162,361,163,361,163" href="<?php $frm=filtr()?>?id=Lubelskie" id="11" />
            <area shape="poly" coords="71,113,70,114,69,116,69,118,68,124,67,126,67,133,61,137,61,140,62,143,64,146,65,150,64,151,63,151,62,152,62,155,63,155,63,158,63,162,61,165,58,170,58,173,60,177,60,180,62,181,66,181,69,183,74,185,78,188,81,192,82,194,81,196,78,200,76,201,74,198,70,194,69,194,68,193,65,194,63,196,60,203,56,206,53,210,51,213,50,215,48,214,46,210,44,209,41,210,39,214,38,216,35,215,34,213,31,214,27,217,22,221,19,214,15,209,11,208,11,204,12,198,12,192,12,186,16,182,19,177,17,173,14,170,14,166,13,161,12,157,13,151,15,145,15,142,14,139,17,137,18,138,21,138,24,132,28,125,31,124,37,125,42,124,45,119,45,118,47,118,56,116,68,110,72,110,73,112,71,113,71,113" href="<?php $frm=filtr()?>?id=Lubuskie" id="8" />
            <area shape="poly" coords="172,244,172,244,168,239,168,239,167,239,166,242,164,241,159,238,155,237,152,235,152,233,150,231,148,228,150,225,151,224,153,222,156,220,158,220,161,217,162,212,164,201,165,196,165,195,165,195,169,194,172,194,174,195,176,194,179,190,178,185,178,183,179,181,183,178,185,176,185,174,184,172,185,171,189,171,191,170,192,168,192,165,191,162,190,161,201,157,201,158,206,162,211,164,218,166,221,166,224,164,228,165,231,167,234,173,237,175,238,177,238,180,239,184,239,185,241,188,245,189,248,188,249,189,252,193,252,196,253,199,255,204,254,204,254,204,253,204,248,202,246,202,245,204,246,210,248,214,249,218,246,224,244,230,241,230,238,231,236,234,236,234,231,234,228,236,228,240,229,245,228,248,226,247,224,245,221,248,217,255,217,257,216,258,214,256,211,254,208,255,207,255,207,255,207,254,205,250,205,250,204,249,202,247,199,245,197,246,197,247,195,248,194,248,192,246,189,244,186,243,183,242,179,243,173,244,172,244,172,244" href="<?php $frm=filtr()?>?id=łódzkie" id="12" />
            <area shape="poly" coords="277,291,277,293,276,300,276,304,277,309,277,315,280,319,281,320,280,322,276,324,276,326,278,327,282,331,285,337,286,347,284,344,282,343,280,344,277,345,274,344,271,343,269,345,268,354,267,356,264,355,258,350,255,349,251,348,243,349,239,351,240,354,236,356,231,358,229,361,228,362,226,361,224,360,221,361,216,364,214,364,214,362,216,355,216,352,214,350,209,346,205,340,205,339,206,336,205,335,202,334,203,329,201,327,198,326,196,324,194,322,193,321,193,319,192,317,190,315,189,314,192,310,197,304,203,300,202,297,199,295,201,293,203,292,206,289,211,287,216,286,222,285,225,283,225,280,225,280,224,280,227,280,234,282,238,283,240,286,240,291,242,296,244,301,250,301,255,299,259,296,262,293,266,293,272,292,277,291,277,291" href="<?php $frm=filtr()?>?id=Małopolskie" id="14" />
            <area shape="poly" coords="294,86,296,93,297,100,298,107,300,110,303,111,304,111,305,111,307,113,307,116,309,117,310,120,311,124,312,126,314,126,319,123,322,123,321,125,320,126,320,128,321,129,324,129,326,129,327,131,326,136,328,141,330,148,331,151,333,154,344,156,350,157,354,158,355,160,354,162,354,166,352,168,349,172,346,174,343,173,340,172,337,174,335,175,333,175,324,178,321,178,311,180,308,181,306,184,305,189,305,191,306,192,307,195,306,197,305,199,306,201,306,201,305,203,301,204,300,203,297,204,295,207,296,211,299,213,304,214,305,216,304,218,303,220,303,222,303,222,304,225,305,228,302,231,301,234,303,240,304,243,303,243,300,241,296,241,293,241,291,243,291,243,290,244,287,243,285,241,281,241,278,240,276,238,275,237,276,236,275,235,274,234,272,235,272,235,270,237,265,239,263,238,260,236,257,235,255,232,252,231,250,228,249,226,247,225,250,219,250,216,249,213,247,210,246,206,246,204,249,203,253,205,254,205,256,203,255,200,253,196,254,193,252,190,250,188,248,187,246,187,242,187,241,185,241,184,240,182,239,180,239,178,239,175,236,173,233,168,227,163,225,162,223,163,221,164,218,165,212,163,207,161,202,158,202,155,203,152,205,148,205,144,205,140,207,137,209,137,210,136,209,133,208,130,209,126,210,124,209,122,217,120,218,119,216,112,216,112,217,110,219,108,223,110,224,108,224,107,225,106,227,108,229,109,230,109,237,108,239,107,244,107,249,105,251,103,253,102,258,100,262,97,269,94,271,93,276,93,281,91,285,88,289,87,294,86,294,86" href="<?php $frm=filtr()?>?id=Mazowieckie" id="16" />
            <area shape="poly" coords="152,236,153,237,161,240,164,242,167,242,168,240,171,244,173,246,173,248,175,253,170,256,168,259,166,262,165,266,165,270,166,273,167,273,171,277,164,276,162,278,161,280,161,280,159,283,158,287,158,291,161,295,160,296,156,296,152,298,148,300,145,303,143,308,142,309,141,308,137,311,132,313,127,308,125,302,130,297,130,294,129,292,127,291,120,293,112,289,104,285,99,283,98,283,100,280,102,280,104,281,108,272,110,272,112,268,114,263,123,249,124,248,127,239,128,236,128,236,132,236,135,235,140,234,139,237,141,239,152,236,152,236" href="<?php $frm=filtr()?>?id=Opolskie" id="17" />
            <area shape="poly" coords="378,294,367,305,357,316,348,327,344,332,342,337,344,346,345,355,346,364,348,369,349,371,348,371,342,369,326,363,317,357,312,353,306,350,300,350,287,348,287,348,286,337,283,330,278,326,277,325,281,322,282,320,279,317,278,314,278,309,277,304,277,300,278,293,278,291,280,289,283,286,290,281,295,276,301,270,304,263,305,260,307,261,310,261,312,260,320,260,320,262,319,264,319,267,320,268,324,269,328,271,333,272,335,273,335,277,334,280,331,282,329,284,330,286,335,287,337,287,342,288,343,290,346,291,353,290,358,287,360,285,362,285,366,284,371,284,373,287,375,290,378,294,378,294" href="<?php $frm=filtr()?>?id=Podkarpackie" onclick="" id="5"/>
            <area shape="poly" coords="333,32,337,31,339,27,342,24,346,24,350,27,360,32,365,35,368,39,372,65,380,86,387,102,387,106,389,115,393,127,392,131,390,134,387,136,383,137,379,138,375,141,365,151,362,156,361,161,356,161,354,158,350,156,345,155,339,154,334,153,331,147,329,140,327,136,328,131,328,129,326,128,321,127,321,127,322,126,323,124,322,122,317,123,313,125,312,123,312,120,311,117,309,115,308,113,306,110,304,110,303,110,300,108,298,102,297,92,296,89,295,85,298,85,306,86,307,84,308,83,309,83,313,82,325,72,326,71,330,70,332,68,333,68,334,66,338,63,341,56,342,53,341,52,337,49,335,47,334,45,335,43,335,42,333,40,329,37,328,35,330,34,333,32,333,32" href="<?php $frm=filtr()?>?id=Podłaskie" id="9" />
            <area shape="poly" coords="108,18,114,17,119,14,125,9,133,5,146,3,155,2,161,1,168,0,174,1,180,4,185,7,188,11,189,16,181,8,177,5,174,4,174,7,175,11,177,13,179,16,178,21,179,24,182,27,188,30,197,30,207,28,213,26,221,21,222,23,220,25,214,28,209,30,206,32,205,34,200,44,200,47,201,50,207,52,207,56,208,58,210,58,214,57,209,66,203,64,199,74,196,78,189,79,182,78,182,75,183,72,173,72,168,72,163,72,162,70,159,67,157,67,155,68,152,70,149,68,146,69,145,72,142,74,139,78,137,80,134,79,130,78,128,81,127,85,124,83,121,82,117,82,114,83,111,80,110,76,108,74,109,72,112,63,113,59,112,55,107,49,105,45,106,40,110,35,110,28,108,18,108,18" href="<?php $frm=filtr()?>?id=Pomorskie" id="10"/>
            <area shape="poly" coords="204,339,201,338,193,342,186,348,184,348,183,347,179,341,175,334,173,332,171,330,167,328,165,323,166,318,166,316,164,316,160,315,155,315,151,315,147,313,143,310,145,304,148,302,152,300,156,298,160,297,162,296,162,295,159,291,159,286,162,282,162,279,164,278,169,279,171,278,171,277,167,273,167,273,166,270,166,266,167,263,169,259,174,255,175,254,175,252,174,249,173,245,176,245,179,244,183,243,185,244,189,245,192,248,195,249,198,249,198,246,201,248,203,249,204,251,204,251,205,253,205,255,207,256,208,256,212,256,216,259,216,259,217,258,218,260,217,263,216,264,218,266,220,268,221,270,221,273,219,276,220,279,223,281,224,281,222,283,216,285,212,285,207,286,206,288,203,291,199,293,198,295,199,296,202,299,200,301,194,306,190,311,187,314,189,316,191,318,192,320,193,322,195,325,197,327,199,328,202,329,202,330,201,334,204,336,205,337,204,339,204,339" href="<?php $frm=filtr()?>?id=Śląskie" id="15" />
            <area shape="poly" coords="304,244,304,251,304,256,303,263,300,270,295,275,286,282,280,287,277,290,272,290,270,291,265,292,260,293,256,297,249,300,245,300,243,296,241,291,241,286,239,282,234,281,231,281,227,279,223,279,222,279,220,277,222,274,223,269,221,267,218,266,217,264,219,262,219,259,218,256,222,248,224,246,226,247,229,249,230,243,229,240,229,237,231,235,237,235,239,232,241,231,244,231,244,232,246,230,247,226,249,227,249,229,251,232,253,233,256,235,258,237,261,237,262,239,265,240,267,239,273,236,273,236,274,235,275,236,274,237,275,239,277,242,281,242,286,244,287,245,290,245,292,244,293,243,296,243,299,242,303,244,304,244,304,244" href="<?php $frm=filtr()?>?id=Świętokrzyskie" id="6" />
            <area shape="poly" coords="206,34,209,35,209,37,211,38,214,34,217,31,227,26,232,27,251,31,274,32,287,32,322,31,331,31,329,33,327,35,328,38,333,41,334,43,334,47,336,50,340,53,340,54,340,56,337,62,333,65,332,67,331,67,327,70,324,71,312,81,309,82,308,82,307,83,306,85,301,84,296,84,294,84,291,84,287,86,280,90,276,92,271,92,268,93,262,96,258,99,253,101,250,102,248,104,244,106,239,106,238,107,233,107,230,108,228,106,224,105,223,105,223,107,223,108,220,107,221,106,220,103,219,98,218,96,215,95,214,95,207,94,202,91,201,89,200,89,199,82,198,81,197,79,201,72,204,65,210,67,215,57,214,56,211,57,208,57,208,54,208,52,206,51,202,49,201,47,201,45,206,35,206,34,206,34" href="<?php $frm=filtr()?>?id=Warmińsko-mazurskie" id="13" />
            <area shape="poly" coords="127,86,126,88,123,92,122,94,122,95,127,100,126,101,125,101,123,103,123,105,124,108,123,114,123,117,125,120,129,123,130,125,130,127,129,129,126,131,126,134,128,137,131,138,135,140,136,144,137,145,138,144,140,142,144,145,148,147,155,150,156,151,160,151,164,148,165,150,166,152,167,152,169,151,172,152,180,155,185,157,189,161,191,166,191,169,189,170,185,170,183,171,183,173,183,177,181,178,176,182,177,185,178,189,176,193,174,194,169,192,166,193,164,195,164,196,163,201,161,211,160,215,160,217,158,219,155,219,152,221,150,224,149,225,147,228,149,232,151,235,151,236,141,238,140,238,141,235,141,233,139,233,136,234,136,229,134,225,135,223,135,222,135,220,131,220,128,219,128,218,127,216,128,213,129,213,129,211,127,208,122,206,116,206,114,206,114,208,110,210,108,210,104,210,100,209,98,207,95,204,93,202,92,200,90,197,86,195,83,195,82,191,79,187,76,184,72,183,67,180,62,180,61,180,61,179,60,174,59,170,62,166,64,162,64,158,64,155,63,154,63,152,63,152,63,152,66,150,65,145,62,140,62,138,66,136,68,134,68,131,67,128,69,125,70,118,70,115,74,115,80,115,86,112,89,108,94,105,99,104,101,102,101,99,95,93,92,88,96,85,101,82,105,77,106,75,107,75,109,77,111,83,114,84,117,83,124,84,127,86,127,86" href="<?php $frm=filtr()?>?id=Wielkopolskie" id="7" />
            <area shape="poly" coords="36,48,59,42,78,37,83,37,88,33,95,24,99,20,103,18,107,18,109,28,108,34,105,40,104,44,105,47,109,53,112,58,111,63,109,67,107,72,107,73,104,77,100,81,96,84,90,88,91,91,94,94,100,100,98,103,95,104,90,106,86,109,83,112,74,114,71,114,73,113,74,111,73,109,68,109,55,115,47,117,44,118,42,122,39,124,34,124,30,123,27,125,24,132,20,137,18,137,16,136,13,139,12,137,5,130,0,123,1,119,4,117,7,114,9,111,10,96,8,74,8,70,11,71,16,74,19,77,19,84,19,86,20,87,23,83,23,77,20,71,20,68,21,65,30,52,36,48,36,48" href="<?php $frm=filtr()?>?id=Zachodnio-pomorskie" id="3" />
            </map>	
              
</div>	

     <div class="container">
        <div class="row">
            <div >
              <a type="submit" class="btn btn-default" href="<?php $frm=filtr()?>?">All</a>
              <a type="submit" class="btn btn-default" href="index2.php">Add to katalog</a>

            </div>
           
        </div>
         <div class="row">
          <table class="table table-striped">
              <tr>
                  <td><b>Name</b></td>
                  <td><b>Wojewódstwo</b></td>
                  <td><b>Description</b></td>
                  <td><b>Adres</b></td>
                  <td><b>Telefon</b></td>
                  <td><b>WWW</b></td>
                  <td><b>Email</b></td>

              </tr>
              <?php for($i=0;$i<count($frm);$i++) { ?>
              <tr>
                  <td><?php echo $frm[$i]["Name"]?></td>
                  <td><?php echo $frm[$i]["Wojewodstwo"]?></td>
                  <td><?php echo $frm[$i]["Description"]?></td>
                  <td><?php echo $frm[$i]["Adres"]?></td>
                  <td><?php echo $frm[$i]["Telefon"]?></td>
                  <td><?php echo $frm[$i]["Stronawww"]?></td>
                  <td><?php echo $frm[$i]["Email"]?></td>
              </tr>
              <?php } ?>
            </table>
          </div>
      </div>
 </body>
</html>