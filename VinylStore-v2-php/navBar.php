<?php   
session_start();
if( !isset($_SESSION['LOGIN_USER']) )
    $connected = false;
else
    $connected = true;
?>

<nav class="navbar navbar-default navbar-fixed-top" id="navigationBar">

    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="logo.png" style="position: fixed; top: 5px; left: 10px;"></a>
        <a class="navbar-brand" href="index.php" style="width: 180px">
        </a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vinyls <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Top</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Materials <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tips <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php
                if( $connected )
                {
                    $cart = $_SESSION['PANIER_OBJ'];

                    echo '<li class="dropdown"><a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span class="badge" id="cart_item_number">'.count($cart).'</span>
                    <span class="glyphicon glyphicon-shopping-cart" id="cart_icon"</span></a>
                    <ul class="dropdown-menu" role="menu" id="cart_item_list">';

                    if($cart != null){
                        foreach ($cart as $item) {
                            echo '<li id='.$item->id.'class="media">';
                            echo '<div class="media-left">';
                            echo '<a href="#">';
                            echo '<img class="media-object" src='.$item->image.' alt="album0" style="width:50px; height:50px;">';
                            echo '</a>';
                            echo '</div>';

                            echo '<div class="media-body">';
                            echo '<h4 class="media-heading">'.$item->artist.'</h4>'.$item->title;
                            echo '</div>';
                            echo '<div class="media-right">';
                            echo '<h4 class="media-heading">';
                            echo ''.$item->prix;
                            echo '</h4>';
                            echo '<button class="button_cart" type="button" class="btn btn-default" aria-label="Left Align" onclick="removeItemFromCart('.$item->id.');">';
                            echo '<span class="glyphicon glyphicon-remove" aria-hidden="true">';
                            echo '</span>';
                            echo '</button>';
                            echo '</div>';
                            echo '</li>';
                        }
                    }
                    
                    
                    
                    echo '<li><a href="basket.php">Check Basket</a></li>
                    </ul></li>';

                    echo '<li class="dropdown"><a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <span class="glyphicon glyphicon-user"</span> Profile</a>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="profile.php">View profile</a></li>
                    <li><a href="sessionManagement/logoff.php">Log off</a></li>
                    </ul></li>';
                }
                else
                {
                 echo '<li><a href="sessionManagement/login.php"><span class="glyphicon glyphicon-user"</span> Log-in</a></li>
                 <li><a href="sessionManagement/create.php"><span class="glyphicon glyphicon-plus"</span> Create</a></li>';
             }
             ?>

         </ul>

     </div>
 </nav>