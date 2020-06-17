<!DOCTYPE html>
<html>
<title>Pulau 135</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>135</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="img/logo.jpeg" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">All Promo</h4>
         <p class="w3-center"><img src="img/logo.jpeg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>

         <div class="promo">
         <p><i class="fa fa-percent fa-fw w3-margin-right w3-text-theme"></i><a href="../support/agent/pds/promo/nasional/" target="_blank">Promo Nasional</a></p>
         <p><i class="fa fa-percent fa-fw w3-margin-right w3-text-theme"></i><a href="../support/agent/pds/promo/tradein/" target="_blank">Promo Tradein</a></p>
         <p><i class="fa fa-percent fa-fw w3-margin-right w3-text-theme"></i><a href="../support/agent/mypertamina/promo/ramadhan/" target="_blank">Promo Ramadhan</a></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Bandung, Indonesia</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo "Tanggal " . date("d/m/Y") ;?></p>
         </div>

        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> INFO</button>
          <div id="Demo1" class="w3-hide w3-container">
          <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://pertaminalubricants.typeform.com/to/sA964s" target="_blank">FORM PLHS</a>
          <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://merchant.linkaja.id/payment" target="_blank">Transaksi LinkAja</a>
          <a class="w3-button w3-theme-d1 w3-margin-bottom" href="http://bit.ly/LinkAjaUserGuidanceWebMerchant" target="_blank"> Guidance LinkAja</a>
          <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://www.pertaminalubricants.com/" target="_blank"><?php echo strtoupper("pertamina lubricants");?></a>
          <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://mypertamina.id/" target="_blank">MyPertamina</a>
          <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://www.pertamina.com/" target="_blank">PERTAMINA</a>
          
          
          
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> MOM | Download</button>
          <div id="Demo2" class="w3-hide w3-container">
            <ul>
              <li><a href="../support/mom/MOM_Meeting_26_Mei_2020.xlsx" target="_blank">MOM Meeting 26 Mei 2020</a></li>
            </ul>
            
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Features</p>
          <p>
          <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://vanillawebprojects.com/projects/typing-game/" target="_blank">Typing Game</a>
          <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://vanillawebprojects.com/projects/breakout-game/" target="_blank">Breakout Game</a>
         
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    <div class="title w3-round"><h4>BEST AGENT</h4></div>
      <div class="w3-container w3-card w3-white w3-round w3-margin">
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <p>Voice</p>
              <img src="img/logo.jpeg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
            <p>Sosmed</p>
              <img src="img/logo.jpeg" style="width:100%" alt="Nature" class="w3-margin-bottom">
          </div>
        </div>
      
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>Apps</h4>
        <hr class="w3-clear">
        <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://pds135.com/" target="_blank">PDS 135</a>
        <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://www.pds135.com/backoffice/auth" target="_blank">PDS Back Office 135</a>
        <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://on4.infomedia.co.id/oct_pertamina" target="_blank">OMNI</a>
        <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://dashboard.my-pertamina.id/login" target="_blank">MyPertamina Dashboard</a>
        <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://webadm.berbagiberkah.mypertamina.id" target="_blank">Web Admin</a>
        <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://www.google.com/maps/d/u/0/viewer?mid=1XDhARtklfH8XrElIEtGUsYrQkWNFqDkz&ll=-2.5354146947953926%2C118.00752249999994&z=4" target="_blank">PLHS</a>
        <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://gabungoutlet.pertaminalubricants.com/" target="_blank">Gabung Outlet</a>
        <a class="w3-button w3-theme-d1 w3-margin-bottom" href="https://ownchannel.pertaminalubricants.com/" target="_blank">Daftar Jadi Mitra</a>
        
      </div>  

      

      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Social Media template by w3.css</h6>
              <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
            </div>
          </div>
        </div>
      </div>


      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="img/logo.jpeg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">32 min</span>
        <h4>Angie Jane</h4><br>
        <hr class="w3-clear">
        <p>Have you seen this?</p>
        <img src="img/logo.jpeg" style="width:100%" class="w3-margin-bottom">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div> 
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">

    <div class="w3-card w3-round w3-blue w3-center">
        <div class="w3-container">
          <p>Layanan</p>
        </div>
      </div>
      <br>


      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <div class="layanan">
        <a href="../support/bs/pds/industry/customer" target="_blank">BackSales</a>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <div class="layanan">
        <a href="http://172.24.59.48/support/agent/panduansolusi/" target="_blank">Pansol</a>
        </div>
      </div>
      <br>

    
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <div class="layanan">
        <a href="http://172.24.59.48/support/agent/eca/" target="_blank">ECA</a>
        </div>
      </div>
      <br>

    
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <div class="layanan">
        <a href="http://172.24.59.48/support/agent/pds/promo/harga/" target="_blank">Harga</a>
        </div>
      </div>
      <br>

    
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <div class="layanan">
        <a href="wa" target="_blank">Kasir Wa </a>
        </div>
      </div>
      <br>

      

      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <div class="layanan">
        <a href="agent" target="_blank">Agent</a>
        </div>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <div class="layanan">
        <a href="http://172.24.59.48/repository/" target="_blank">Repository</a>
        </div>
      </div>
      <br>

      

      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Layanan</p>
          <img src="img/logo.jpeg" alt="Forest" style="width:100%;">
          <p><strong>Tanggal</strong></p>
          <p><?php echo date("d/m/Y") ;?></p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>


      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="img/logo.jpeg" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
        <p>Archive</p>
        <p>Web Aplikasi Expired</p>
        <p>Tidak Digunakan !!!</p>
        <a href="../archive" target="_blank">Cek Archive</a>
      </div>


      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
