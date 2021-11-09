<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ExDAY2-Y-S</title>
</head>

<body>
       <p>GET METHOD</p >
       <form action= "Day2Ex.php" method= "GET">
           Name: <input type="text"   name="name" />
           Age: <input type= "text"  name="age" />
           <input  type="submit"  name="submit" />
        </form>
       <?php
       if(isset($_GET[ 'submit']))
       {
           if( $_GET["name"] && $_GET["age" ] )
           {
               echo "Welcome ". $_GET['name']. "<br />";
               echo "You are ". $_GET['age' ]. " years old.";}
            else if ($_GET ["name"] ) 
       {
            echo 'please insert your age too'; 
           
            }
            else if ($_GET ["age"] ) 
            {
                 echo 'please insert your name too'; 
                
                 }
        }
           ?>





</body>
</html>