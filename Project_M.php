<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #map {
        height: 70%;
        width: 90%;
        position: fixed;
        bottom: 15%;
        top: 16%;
        left: 5%;
        z-index: 0;
      }
      html, body {
        height: 100%;
        padding: 0px;
        margin:0px;
      }

      #pac-input {
        position: relative !important;
        background-color: #fff;
        font-family: Roboto;
        color: green;
        cursor : pointer;
        box-shadow :0;
        border : 0;
        top: 20px;
        margin: 10px auto;
        width: 30%;
        border: 2% solid #4d90fe;
        font-size: 16px;
        background-color : #e6f7ff;
        background-repeat: no-repeat;
        padding: 1.5% 4% 1.5% 5%;
        padding-left :2%;
        z-index: 5;
      }

      #pac-input:focus {
        border-color: #4d90fe;
        background-color: white;
      }
      #pac-input:hover {
        background-color: white;
        box-shadow : 0 0 1em;
        cursor : pointer;
      }
      .SideNav { margin-top : 0%;
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #33ACFF;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 35px;
          z-index: 1;
      }
      .SideNav a {
        padding: 5px 10px 10px 40px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
        z-index: 1;
      }
      .SideNav a:hover, offcanvas, focus{
        color: #f1f1f1;
      }
      .SideNav .closebtn {
        position: absolute;
        top: 0;
        right: 5%;
        font-size: 40px;
        margin-left: 85%;
        z-index: 1;
      }
      .btn{
        position: relative;
        top: 22%;
      }

      .Logo{
        position: fixed;
        left: 45%;
        top: -2%;
      }
      span { 
        position: fixed;
        top : 4%;
        font-size: 30px;
        cursor: pointer;
      }
      div.Body{
        position: relative;
        top: 16%;
        height: 20%;
        width : 100%;
        text-align: center;
      }
      div.Header{
        position: fixed;
        padding-left: 5%;
        width : 100%;
        height : 16%;
        background-color: #337ab7;
        color: white;
        z-index: 1;
      }
      div.Footer{
        background-color: #222;
        color: #fff;
        font-family: Helvetica;
        height: 16%;
        width: 100%;
        position: initial;
        bottom: 0%;
        padding-left: 10%;
      }
      div.locate{
        position: fixed;
        right: 10%;
        top: 4%;
      }
      .fa {
       padding: 20px;
       font-size: 30px;
       width: 75px;
       text-align: center;
       text-decoration: none;
       margin: 5px 2px;
       position : center;       
      }
      .fa:hover {
      opacity: 0.7;
      }
      .fa-facebook {
       background: #3B5998;
       color: white;  
      }
      .fa-twitter {
       background: #55ACEE;
       
       color: white;
      }
      .fa-google {
       background: #dd4b39;

       color: white;
      }
      .fa-linkedin {
       background: #007bb5;
       
       color: white;   
      }
    </style>
  </head>
  <body>
  <div class="Header">
      <div id="Sidenav" class="SideNav" style="width: 0%;">
        <a href="#" class="closebtn" onclick="closeNavigation()">&times;</a>
        <a href="#about" onclick="closeNavigation()">About</a>
        <a href="mailto:2015_inft@ves.ac.in" onclick="closeNavigation()">Contact</a>
      </div>
      <span onclick="openNavigation()">&#9776;</span>
      <script>
      function openNavigation() {
        document.getElementById("Sidenav").style.width = "15%";
      }
      function closeNavigation() {
        document.getElementById("Sidenav").style.width = "0%";
      }
      function display(){
        document.getElementById("Name").value;
      }
      </script>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <form>
          <input id="pac-input" class="controls" type="number" placeholder="Enter Pin code here">
        </form>
        <a href= "#"><img src= "WebProLogo.png" id= "logo" class="Logo"/></a>
        <div class="locate">
          <a href="index.html" class="btn"><button type="button" class="btn btn-success">Locate Me!</button></a>
        </div>
      </div>
    <div id="map">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDLIFDc3H8nRLLvA0I-sr2U_c9v5-QsUc&libraries=places&callback=initMap"
         async defer></script>
         <script type="text/javascript" src="js/main.js"></script>
    </div>
    <br>
    <div class="Body">
      <div class="buttons">
          <h4>Select the places you are looking for:
          <button id="hosp" type="button" class="btn btn-primary">Hospital</button>
          <button id="sch" type="button" class="btn btn-primary">School</button>
          <button id="pol" type="button" class="btn btn-primary">Police</button>
          </h4>
      </div>
    </div>
    <br><br>
    <div class="Footer" id="about">
      <a href="https://www.facebook.com/vesitedu/" class="fa fa-facebook"></a>
      <a href="https://twitter.com/vesitedu?lang=en" class="fa fa-twitter"></a>
      <a href="https://ves.ac.in/vesit/" class="fa fa-google"></a>
      <a href="https://in.linkedin.com/in/vesit-edu-8534a9b8" class="fa fa-linkedin"></a>
      <p>ALL RIGHTS RESERVED &copy;</p>
    </div>
  </body>
</html>