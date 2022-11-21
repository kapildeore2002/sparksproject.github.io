<?php include('nav.php') ?>

<style>

.button {
    border: none;
    font-family: inherit;
    font-size: inherit;
    color: red;
    background: none;
    cursor: pointer;
    padding: 25px 80px;
    display: inline-block;
    margin: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    outline: none;
    position: relative;
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    transition: all 0.9s;
}
.button:after {
    content: '';
    position: absolute;
    z-index: -1;
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    transition: all 0.9s;

}
.button-1 {
    border: 3px solid red;
    color: ;
}
.button-1e {
    overflow: hidden;
}

.button-1e:after {
    width: 60%;
    height: 0;
    top: 50%;
    left: 50%;
    background: red;
    opacity: 0;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    transform: translateX(-50%) translateY(-50%) rotate(45deg);
}

.button-1e:hover,
.button-1e:active {
    color: white;
}
.button-1e:hover:after {
    height: 335%;
    opacity: 1;
}
.button-1e:active:after {
    height: 400%;
    opacity: 1;
}


/*Button1*/


.button2 {
    border: none;
    font-family: inherit;
    font-size: inherit;
    color: blue;
    background: none;
    cursor: pointer;
    padding: 25px 80px;
    display: inline-block;
    margin: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    outline: none;
    position: relative;
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    transition: all 0.9s;
}
.button2:after {
    content: '';
    position: absolute;
    z-index: -1;
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    transition: all 0.9s;
    
}
.button-2 {
    border: 3px solid Blue;
    color: ;
}
.button-2e {
    overflow: hidden;
}

.button-2e:after {
    width: 60%;
    height: 0;
    top: 50%;
    left: 50%;
    background: blue;
    opacity: 0;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    transform: translateX(-50%) translateY(-50%) rotate(45deg);
}

.button-2e:hover,
.button-2e:active {
    color: white;
}
.button-2e:hover:after {
    height: 335%;
    opacity: 1;
}
.button-2e:active:after {
    height: 400%;
    opacity: 1;
}


/*button2*/

.button3 {
    border: none;
    font-family: inherit;
    font-size: inherit;
    color: green;
    background: none;
    cursor: pointer;
    padding: 25px 80px;
    display: inline-block;
    margin: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    outline: none;
    position: relative;
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    transition: all 0.9s;
}

.button3:after {
    content: '';
    position: absolute;
    z-index: -1;
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    transition: all 0.9s;
    
}
.button-3 {
    border: 3px solid green;
    color: ;
}

.button-3e {
    overflow: hidden;
}


.button-3e:after {
    width: 60%;
    height: 0;
    top: 50%;
    left: 50%;
    background: green;
    opacity: 0;
    -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg);
    transform: translateX(-50%) translateY(-50%) rotate(45deg);
}

.button-3e:hover,
.button-3e:active {
    color: white;
}
.button-3e:hover:after {
    height: 335%;
    opacity: 1;
}
.button-3e:active:after {
    height: 400%;
    opacity: 1;
}
body{
        background:-webkit-linear-gradient(left,lightblue,lightgreen);    
    }
</style>

  


  <div class="container-fixed " style="height:610px">
  <div class="row">
    <div class="col-md-6 " style="margin-left:5% ; margin-top:5% ;">
      <img src="img/bankb.png" style="width:600px">
    </div>
    <div class="col-md-6  center" style="margin-left:25% ; margin-top:2% " >
      <ul>
        <li class="operations"><a style="margin-left:8% ; font-family:Cursive ; font-weight:bold ; color:gray ; font-size:20px"><img src="img/logo.png" alt="logo" height=60px width=60px> "   Sparks Bank   "</a></li>
      <li class="operations"><a href="transfer_money.php"><button class="button button-1 button-1e" style="width:300px">View all Users</button></a></li>
      <li class="operations"><a href="transfer_money.php"><button class="button2 button-2 button-2e" style="width:300px">Trasnfer Money</button></a></li>
      <li class="operations"><a href="transactionhistory.php"><button class="button3 button-3 button-3e" style="width:300px">View Transfer History </button></a></li>
        
      </ul>
    </div>
  </div>
  
  </div>

  <?php include('footer.php') ?>
  
</body>
</html>







