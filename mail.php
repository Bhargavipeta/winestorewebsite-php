<!DOCTYPE html>

<!-- Fig. 19.16: database.php -->
<!-- Querying a database and displaying the results. -->
<html>
   <head>
      <meta charset = "utf-8">
      <title>Search Results</title>
   <style type = "text/css">
         body  { font-family: sans-serif;
                 background-color: lightyellow; } 
         table { background-color: lightblue; 
                 border-collapse: collapse; 
                 border: 1px solid gray; }
         td    { padding: 5px; }
         tr:nth-child(odd) {
                 background-color: white; }
      </style>
   </head>
   <body>
   <?php
        
        $sql="select * from wine";
 
        if ( !( $con = mysqli_connect( "localhost",
        "s_bpeta", "L4VQejaW" ) ) )                      
        die( "Could not connect to database </body></html>" );
            

         // open Products database
         if ( !mysqli_select_db( $con,"s_bpeta") )
         die( "Could not open the database </body></html>" );

        
        

        if ( !( $result = mysqli_query( $con, $sql ) ) ) 
        {
           print( "<p>Could not execute query!</p>" );
           die( mysqli_error($con) . "</body></html>" );
        }
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
                                                    if ( !( $result = mysqli_query( $con, $sql ) ) ) 
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

   </body>
</html>

