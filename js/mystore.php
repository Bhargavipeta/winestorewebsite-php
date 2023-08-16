<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Dive Sites - Bhaccasyoniztas Beach Resort Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <script language="JavaScript" src="js/formLib.js"></script>
    <script>
    
      function validateForm ( form ) {
          
          requiredText = new Array( "email");
          
        //   requiredSelect = new Array( "Food" );
        //   requiredRadio  = new Array( "gender" );
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
            document.getElementById("demo").innerHTML = "✔";
        } 
        } 
    </script>
	<style type = "text/css">
		body  { font-family: sans-serif;
				background-color: lightyellow; } 
		table { background-color: lightblue; 
				border-collapse: collapse; 
				border: 1px solid gray; }
		td    { padding: 5px; }
		tr:nth-child(odd) {
				background-color: white; }
                h1{
				 font-family: Sans-serif; 
				 font-size: 24px;     
				 font-style: normal; 
				 font-weight: bold; 
				 color: blue;
				 text-align: center; 
				}
				form{
				 font-family: verdana; 
				  
				 font-size: 16px; 
				 font-style: normal;
				 font-weight: bold; 
				 border-collapse: collapse;
				}
				
				input[type=text], input[type=email], input[type=number],[type=password],[type=url],[type=range],[type=date],[type=number],[type=time],[type=tel]{
				 width: 50%;
				 padding: 6px 12px;
				 margin: 5px 0;
				 box-sizing: border-box;
				}

				select{
				 width: 50%;
				 padding: 6px 12px;
				 margin: 5px 0;
				 box-sizing: border-box;
				}
								
				button{
				 width: 15%;
				 padding: 8px 12px;
				 margin: 5px 0;
				 box-sizing: border-box;
				}
				input[type=submit], input[type=reset]{
				border: none;
				 padding: 8px 12px; 
				 margin: 5px 0;
				 box-sizing: border-box;
				}
                
	 </style>
	<script src = "js/DateTime.js"></script>
	<script src = "js/load.js"></script>
</head>
<body>
	<div id="background">
		<p class="Timespent">Time on dives page::<span id = "soFar">0</span></p>
		<div class="currenttime"><section id = "getMethods"></section></div>
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
				</div>
				<div id="navigation" style="width:122px !important">
                    <ul>
                        <li>
                            <a href="mystore.html">MyStore</a>
                        </li>
                    </ul>
                </div>
            </div>
			<div id="contents">
				<div class="box">
					<div>
						<div class="body">
							<form method="post" action="ResultsWine.php" onSubmit="return validateForm( this );">
                                <h1> In here you can view the list of wine and winery names their region</h1>
                                <p style="color:black"><input type="text" placeholder="Enter your email" id="email" name="email" pattern=".+@mail\.bradley\.edu" /></p>
                                <p style="color:black"><label>Select the Wine Type </label>
                                <input type="checkbox" name="winetype" value="6"> Red
                                <input type="checkbox" name="winetype" value="5"> White
                                <input type="checkbox" name="winetype" value="4"> Sweet
                                </p>                        
                                <p style="color:black"><input type="number" min="1960" max="2010" id="year" step="1" name="year" placeholder="Enter the year for Wine" onblur="validateYear()" required/><span id="demo"></span></p>
                                <input class="auto-style4" name="wineSortQuery" type="submit" value="Check the wine details" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
                <ul class="navigation">
                    <li>
                        <a href="mystore.html">mystore</a>
                    </li>
                </ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2023 by BHACCASYONIZTAS BEACH RESORT. All Rights Reserved
			</p>
			<div class="navigation"><section id = "newArguments"></section></div>
			<div><section id = "setMethods"></section></div>
			<div class="navigation"><section id = "times"></section></div>
		</div>
	</div>
</body>
</html>