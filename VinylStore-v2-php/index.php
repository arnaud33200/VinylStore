<!DOCTYPE html>
<html lang="en">

<script type="text/javascript">

function ajaxRecordCart(id,artist, title, image, note, prix) {

  var xhr;
  if (window.XMLHttpRequest) {
    xhr = new XMLHttpRequest();
  }
  else if (window.ActiveXObject) {
    xhr = new ActiveXObject("Msxml2.XMLHTTP");
  }
  else {
    throw new Error("Ajax is not supported by this browser");
  }

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status == 200 && xhr.status < 300) {
        var r = xhr.responseText;

      }
    }
  }
  xhr.open('POST', 'basket/recordCart.php');
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  var d = "id="+id+"&artist="+artist+"&title="+title+"&image="+image+"&note="+note+"&prix="+prix;
  xhr.send(d);
}

function changeCartColor(){
  document.getElementById('cart_icon').style.cssText = 'color: red;';
  document.getElementById('cart_item_number').style.cssText = 'background: red; color: white;';
}

function resetCartColor(){
  document.getElementById('cart_icon').style.cssText = 'color: gray;';
  document.getElementById('cart_item_number').style.cssText = 'background: gray; color: white;';
}

function addItemToCart(artist, title, image, note, prix) {
  var cartList = document.getElementById('cart_item_list');
  var count = $("#cart_item_list li").length;
  var albumid = "albumList"+count;
  var price = prix+"$"

  ajaxRecordCart(albumid, artist, title, image, note, prix);

  cartList.innerHTML ='<li id=\''+albumid+'\' class="media">\
  <div class="media-left">\
  <a href="#">\
  <img class="media-object" src=\''+image+'\'alt="album0" style="width:50px; height:50px;">\
  </a>\
  </div>\
  <div class="media-body">\
  <h4 class="media-heading">'+artist+'</h4>'+title+'\
  </div>\
  <div class="media-right">\
  <h4 class="media-heading">\
  '+price+'\
  </h4>\
  <button class="button_cart" type="button" class="btn btn-default" aria-label="Left Align" onclick="removeItemFromCart(\''+albumid +'\');">\
  <span class="glyphicon glyphicon-remove" aria-hidden="true">\
  </span>\
  </button>\
  </div>\
  </li>' + cartList.innerHTML;
  

  var cartItemNumber = document.getElementById('cart_item_number');
  var itemNumber = cartItemNumber.innerHTML;
  cartItemNumber.innerHTML = parseInt(itemNumber)+1;
  changeCartColor();
  setTimeout(resetCartColor,1000);
}


</script>

<?php include 'navBar.php';?>

<head>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">

 <title>Vinyl Store</title>

 <link href="css/bootstrap-theme.css" rel="stylesheet">
 <link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/vinylStore.css" rel="stylesheet">

 <script type="text/javascript" src="js/jquery-1.11.2.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>


</head>

<body>



  <div class="content-section">

    <div class="left-section">

     <ul class="nav nav-pills nav-stacked">
      <li role="presentation" class="active"><a href="#">Vinyl</a></li>
      <li role="presentation"><a href="#">Search</a></li>
      <li role="presentation"><a href="#">Top</a></li>
      <li role="presentation"><a href="#">Specials</a></li>
    </ul>

  </div>

  <div class="right-section">

   <div class="panel panel-default">
    <div class="panel-heading">
     <input type="text" placeholder="Search">
     <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
   </div>




   <div class="row">


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "VinylStore";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `vinyle`";
    $result = $conn->query($sql);
    $albumNumber = 0;

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $albumImageId = "album".$albumNumber."_image";
        $albumArtistId = "album".$albumNumber."_artist";
        $albumTitleId = "album".$albumNumber."_title";
        $album = "<div class=\"col-sm-6 col-md-4\" style=\"width:300px; height:500px;\">
        <div class=\"thumbnail\">
        <a href=\"#\" class=\"thumbnail\">
        <img id=".$albumImageId." src=".$row["Pochette"]." alt=\"album0\">
        </a>
        <div class=\"caption\">
        <h4 id=".$albumArtistId.">".$row["Artiste"]."</h4>
        <h5 id=".$albumTitleId.">".$row["Titre"]."</h5>
        <p>";

        $albumNote = $row["Note"];
        $albumPrix = $row["Prix"];
        $i = 1;
        for ($i; $i <= $row["Note"]; $i++) {
          $album = $album . "<span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>";
        }

        for ($i; $i <= 5; $i++) {
          $album = $album . "<span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>";
        }

        $album = $album . "<button class=\"button_cart\" type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\" onclick=\"addItemToCart(getElementById('{$albumArtistId}').innerHTML,getElementById('{$albumTitleId}').innerHTML,getElementById('{$albumImageId}').src,$albumNote,$albumPrix)\">
        ".$row["Prix"]."$
        <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
        </button>
        </p>
        </div>
        </div>
        </div>";

        echo "".$album;

        $albumNumber = $albumNumber + 1;
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?> 

  </div>

</div>



</div>
</div>

</body>


</html>