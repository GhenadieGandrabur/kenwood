<html>
  <head>
    <title>Kenwood contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-
    lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	 <link rel="stylesheet" href="includes/style.css">
	  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7188583604227224"
     crossorigin="anonymous"></script>
  </head>
  <body>
 <?php include 'includes/header.php';?> 
 <?php include 'includes/menu.php';?>
	  <br>
 <div class="container">
	<div class="row">
	<div class="col  " >	
		<br><br>
		<h3>Scritine un e-mail</h3>
		<div style="border-radius: 5px;   background-color: #f2f2f2;   padding: 20px;">
      <form action="" method="post">
        <label for="name">Nume</label>
        <input type="text" name="name" >		  
        <label for="subject">Tema</label>
		<select name='tema' id='tema'>   
        <option value='cumparare'>Cum sa cumpar</option>
        <option value='intrebare'>Am o intrebare</option>
        <option value='sugestie'>Am o sugestie</option>
        <option value='sltele'>Altele</option>
		 </select> 
		 <label for="message">Mesajul</label> 
		<textarea textarea rows="4" column="5" name="message" placeholder="Mesajul..." ></textarea>
        <input type="submit" value="submit">
      </form>  
		</div>

<?php
if (isset($_POST['message'])){(mail("info@tahograf.md", "Tema", "Text of the message."));
if (mail("info@tahograf.md", "Tema", "Text of the message.")){
echo "The message is sent.";	
}else{
echo "Not sent";
}
}


		
?>
	
</div>

    
	  <div class="col " >
	
		<p style="padding-left:30px;">Caterpilar SRL , str. Padurii 20, <br>
		Mun. Chisinau, 	Tel: 022 926668</p>
	
	<div class="container text-center">
	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d577.166196729568!2d28.89583144056952!3d46.97047228718272!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sit!2s!4v1633099220557!5m2!1sit!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
		  </div>
 </div>
	 </div>
	  <br>
<div class="container-fluid">		
 <?php include 'includes/footer.php';?>
</div>
  </body>
</html>
