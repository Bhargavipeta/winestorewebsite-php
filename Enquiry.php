
<!DOCTYPE html>
<?php include "config.php"?>
<html lang="en">
<style type="text/css">
 .topcorner{
     
   top:0;
   right:0;
   margin: 0px;
    width: auto;
  }

  .align {
      width: 100px;
      padding-top: 5px;
      height: 24px;
      display: flex;

  }

        table         { width: 300px;
            border-collapse:collapse;
            background-color: lightblue; }
        table, td, th { border: 1px solid black;
            padding: 4px; }
        th            { text-align: left;
            color: white;
            background-color: blue; }
        tr.oddrow     { background-color: white; }



</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="winestore.css">
    <title>Wine Store</title>
</head>
<body class ="bg-img"> 
<div>    
<div class=" topcorner">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" src="js/formLib.js"></script>
    <script>

      function validateForm ( form ) {
          
          requiredText = new Array( "email");
           requiredCheckbox = new Array( "winetype" );
          
          return requireValues ( form, requiredText   ) &&
                 requireCheckboxs( form, requiredCheckbox ) &&
                 checkProblems ();
        }
    </script>
    <script>
        function validateYear() {
        const inpObj = document.getElementById("year");
        if (!inpObj.checkValidity()) {
            document.getElementById("demo").innerHTML = inpObj.validationMessage;
        } else {
            document.getElementById("demo").innerHTML = "vaild";
        } 
        } 
    </script>
  </head>
  <body>
  	<div class="container-fluid">
  	  <div class="container">
  	    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="Winestore.html">MyWinestore&nbsp;</a>
  	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  	      <div class="collapse navbar-collapse" id="navbarSupportedContent1"><a class="nav-link" href="Winestore.html">Home <span class="sr-only">(current)</span></a><a class="nav-link" href="Enquiry.php">About</a><a class="nav-link" href="Crapsgame.html">Craps Game</a>
  	        <ul class="navbar-nav mr-auto">
  	          <li class="nav-item active"> </li>
  	          <li class="nav-item"> </li>
  	          <li class="nav-item dropdown">   
     

    <h1>Wine Store </h1>
          <p>
            Search Our store and results will be sent to your email.
          </p>




    <form action="Enquiry.php" method="post" onSubmit="return validateForm( this );">
        <table>
        
        <div class="form_row">
                <input onkeyup="success()" type="email" name="email" id="email" placeholder="Enter your Email Address"> <label for="email">Email</label> 

                </div>

        <p style="color:black"><label>Select the Wine Type </label>
                    <input type="checkbox" name="winetype" value="6"> Red
                    <input type="checkbox" name="winetype" value="5"> White
                    <input type="checkbox" name="winetype" value="4"> Sweet
                    </p> 
                    <p style="color:red"><input type="number" min="1960" max="2010" id="year" step="1" name="year" placeholder="Enter the year for Wine" onblur="validateYear()"required/><span id="demo"></span></p>
                    
        </form>
            </div>
            <input type="submit" value="Search">

        
        </table>
    </form>
    <?php

        if ($_SERVER['REQUEST_METHOD']!="POST") exit();
        $year=$_POST['year'];
        $wine_type=$_POST['wine_type'];
        $email = $_POST['email'];
        $year=$_POST['year'];
        $wine_type=$_POST['winetype'];$cookie_name="email";
        $cookie_value = $_POST["email"];
        setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
        
       
        
        // "SELECT  * from wine INNER JOIN wine_type on wine.wine_type=wine_type.wine_type_id"
        $showTable= "SELECT  * from wine w INNER JOIN wine_type i on w.wine_type=i.wine_type_id and w.wine_type='$wine_type' and w.year>'$year'" ;
        $result=mysqli_query($link,$showTable) or die(mysqli_error($link));
        echo "<table border cellpadding=4>";
        echo "<tr>";
        echo "<th>wine_name</th>";
        echo "<th>wine_type</th>";
        echo "<th>year</th>";
        echo "<th>description</th>";
        echo "</tr>";
        
       
        while($info = mysqli_fetch_array($result))
            {
                
                echo "<td>".$info['wine_name'] . "</td>";
                echo "<td>".$info['wine_type'] . "</td>";
                echo "<td>".$info['year'] . "</td>";
                echo "<td>".$info['description'] . "</td></tr>";
                
            }
            echo "existing user is ".$_COOKIE[$cookie_name];
        echo "</table>";
        $headers = 'From: vikranthreddyavs@gmail.com'."\r\n".
                                                    'Reply-To: vanduri@mail.bradley.edu'."\r\n".
                                                    'Content-Type: text/html; charset=UTF-8'."\r\n".
                                                    'X-Mailer: PHP/'.phpversion();
                                        $to = $email;
                                        $subject = "Email of record updation";
                                        $message = "<p>Details of WineType</p>";
                                                    

                                        $message.="<table>
                                                    <tr>
                                                        <th>wine_id</th>
                                                        <th>wine_name</th>
                                                        <th>wine_type</th>
                                                        <th>year</th>
                                                        <th>winery_id</th>
                                                        <th>description</th>
                                                        
                                                    </tr>";
                                                    if ( !( $result=mysqli_query($link,$showTable)) ) 
                                                        {
                                                            print( "<p>Could not execute query!</p>" );
                                                            
                                                        } 
                                                    foreach ( $result as $row)
                                                    {
                                                    // build table to display results
                                                        $message.= "<tr>";
                                                        $message.="<td>".$row[wine_id]."</td>";
                                                        $message.="<td>".$row[wine_name]."</td>";
                                                        $message.="<td>".$row[wine_type]."</td>";
                                                        $message.="<td>".$row[year]."</td>";
                                                        $message.="<td>".$row[winery_id]."</td>";
                                                        $message.="<td>".$row[description]."</td>";
                                                        $message.=" </tr>" ;
                                                    }
                                                    $message.="</table>
                                                    \n\n Thanks and Regards \n Bhargavi P";                                     
                                         if (mail($to, $subject, $message,$headers)) {
                                               echo("<p>Message successfully sent!</p>");
                                          } else {
                                               echo("<p>Message delivery failed.</p>");
                                        }

    ?>
    <a href="mail.php">email the tables</a>
</body>
</html>




































    