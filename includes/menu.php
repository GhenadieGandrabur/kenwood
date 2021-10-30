<style>


.topnav1 {
  overflow: hidden;
  background-color: #134d75 ;
}

.topnav1 a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active1 {
  background-color:  #134d75 ;
  color: white;
}

.topnav1 .icon1 {
  display: none;
}

.dropdown1 {
  float: left;
  overflow: hidden;
}

.dropdown1 .dropbtn1 {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #134d75;
 
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  border:1px solid white;
}

.topnav1 a:hover, .dropdown1:hover .dropbtn1 {
  background-color: orange;
  color: white;

}

.dropdown-content1 a:hover {
  background-color: orange;
  color: white;
  
}

.dropdown1:hover  .dropdown-content1  {
  display: block;
  
}

@media screen and (max-width: 600px) {
  .topnav1 a:not(:first-child), .dropdown1 .dropbtn1 {
    display: none; 
  }
.topnav1 a.icon1 {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav1.responsive1 {position: relative1;}
  .topnav1.responsive1 .icon1 {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav1.responsive1 a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav1.responsive1 .dropdown1 {float: none;}
  .topnav1.responsive1 .dropdown-content1 {position: relative;}
  .topnav1.responsive1 .dropdown1 .dropbtn1 {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>


<div class="topnav1" id="myTopnav1">
  <a href="index.php" class="active1">Home</a>
  <!--<div class="dropdown1">
    <button class="dropbtn1">Produse <i class="fa fa-caret-down"></i> </button>
    <div class="dropdown-content1">
      <a href="statii.php">Statii radio</a>
      <a href="accesorii.php">Accesorii</a>
      <a href="soft.php">Soft</a>
    </div>
	
  </div> -->
  <a href="statii.php">Statii radio</a>
  <a href="accesorii.php">Acsesorii</a>
  <a href="contacts.php">Contate</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon1" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav1");
  if (x.className === "topnav1") {
    x.className += " responsive1";
  } else {
    x.className = "topnav1";
  }
}
</script>