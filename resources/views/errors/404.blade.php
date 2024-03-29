<!-- <!DOCTYPE html>
<html>
    <head>
        <title>404 Not found</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">404 not found</div>
                <h2><a href="{{ url('/home') }}">Take me to Home</a><h2>  
                <a href="{{ url('/home') }}">
                    <img src="../images/404.png" style="height: 620px ; width: 100%">
                </a>
            </div>
        </div>
    </body>
</html>  -->


<!--
Template Name: The King Maker
Template URL: bootstrap-404-error-page-html-template-free-download
Title: Bootstrap 404 error page html template free download - BWT
Description: Bootstrap 404 error page html template free download with amazing background. just download the free 404 error page template to make your site user friendly.
Keyword: bootstrap error template, bootstrap 404 error page, error page html template free, 404 page template html free, bootstrap 404 error page template
Author URI: https://bootstrapwebtemplates.com/
Tags: 404 error, custom error page, error, page not found, 404 not found, 404 Template, bootstrap
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
            
        <!-- Scripts -->
        <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    </head>
    <body  style="background-color: dimgray; padding-top: 60px;" >

    <style type="text/css">
        
        /*!
Template Name: The King Maker
Template URL: bootstrap-404-error-page-html-template-free-download
Title: Bootstrap 404 error page html template free download - BWT
Description: Bootstrap 404 error page html template free download with amazing background. just download the free 404 error page template to make your site user friendly.
Keyword: bootstrap error template, bootstrap 404 error page, error page html template free, 404 page template html free, bootstrap 404 error page template
Author URI: https://bootstrapwebtemplates.com/
Tags: 404 error, custom error page, error, page not found, 404 not found, 404 Template, bootstrap
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0
*/

/* CSS RESET * -------------------------- */

* {margin: 0px; padding: 0px; box-sizing:border-box;}

/* GENERAL * -------------------------- */

::-moz-selection {
  color: white;
  text-shadow: none;
  background: #222222;
}
::selection {
  color: white;
  text-shadow: none;
  background: #222222;
}
img::selection {
  color: white;
  background: transparent;
}
img::-moz-selection {
  color: white;
  background: transparent;
}
body{
    margin:0;
    font-family: 'Roboto', sans-serif;
    font-weight:300;
    overflow-x:hidden;
    color:#fff;
    font-size:14px;
    
}
html,
body {
  height: 100%;
  width: 100%;
  background: #AA076B;
  background: -webkit-linear-gradient(to top, #aa076b, #61045f); 
  background: linear-gradient(to top, #aa076b, #61045f); 
  letter-spacing: 1px;
}
a {
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  transition: all 0.35s;
  color: #f39c12;
}
a:hover,
a:focus {
  color: #f39c12;
  text-decoration:none;
}
hr {
  width: 100%;
  margin: 20px 0;
  border-top:2px dashed #dedede;
}
hr.light {
  border-color: white;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: 'Roboto', sans-serif;
  font-weight: normal;
  letter-spacing: 1px;
  color: #fff;
}
p {
  font-size: 20px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.brand{
  color: #fff;
}
.brand span{
  margin-top:50px;
  font-size: 40px;
}
.brand h3{
  font-weight: 300;
  margin: 10px 0 0 0;
}
h1.head{
  font-size: 250px;
  font-weight: 900;
  letter-spacing: 25px;
  margin: 10px 0 0 0;
}
h1.head span {
  position: relative;
  display: inline-block;
}
h1.head span:before, h1.head span:after{
  position: absolute;
  top:50%;
  width: 50%;
  height: 1px;
  background: #fff;
  content: '';
}
h1.head span:before{
  left: -55%;
}
h1.head span:after{
  right: -55%;
}
.btn-outline{
  border: 2px solid #fff;
  color: #fff;
  padding: 12px 40px;
  border-radius: 25px;
  margin-top: 25px;
  display: inline-block;
  font-weight: 600;
}
.btn-outline:hover{
  color: #aa076b;
  background: #fff;
}
.bwt-footer-copyright { font-size:14px; padding:10px 0; line-height:20px; margin-top:50px;}
.bwt-footer-copyright .left-text{ text-align:left; margin:10px 0;}
.bwt-footer-copyright .right-text{ text-align:right; margin:10px 0;}
.bwt-footer-copyright a{ color: #fff; font-weight: 500; }

@media (max-width: 1024px) {
  
h1.head {
  font-size: 200px;
  letter-spacing: 25px;
}

}

@media (max-width: 768px) {
  
h1.head {
  font-size: 150px;
  letter-spacing: 25px;
}
.bwt-footer-copyright .left-text{ text-align:center; margin:10px 0;}
.bwt-footer-copyright .right-text{ text-align:center; margin:10px 0;}

}

@media (max-width: 640px) {
  
h1.head {
  font-size: 150px;
  letter-spacing: 0;
}

}

@media (max-width: 480px) {

.brand h3 {
    font-size: 20px;
}
  h1.head {
  font-size: 130px;
  letter-spacing: 0;
}
h1.head span:before, h1.head span:after {
    width: 40%;
}
h1.head span:before {
    left: -45%;
}
h1.head span:after {
    right: -45%;
}
p {
    font-size: 18px;
}

}

@media (max-width: 320px) {

.brand h3 {
    font-size: 16px;
}
  h1.head {
  font-size: 100px;
  letter-spacing: 0;
}
h1.head span:before, h1.head span:after {
    width: 25%;
}
h1.head span:before {
    left: -30%;
}
h1.head span:after {
    right: -30%;
}

}


    </style>
    


</head>

<body>

    <div class="container text-center">
        <div class="brand">
            <span class="glyphicon glyphicon-king" aria-hidden="true"></span>
            <h3 class="text-uppercase">Laravel démo project</h3>
        </div>
        <h1 class="head"><span>404</span></h1>
        <p>Oops! The Page you requested was not found!</p>
        <a href="{{ url('/home') }}" class="btn-outline"> Back to Home</a>
    </div>

   <div class="bwt-footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8 copyright">
                <p class="navbar-text pull-left">&copy 2018 - Site Built By Temimi M'<small>ed</small>.
                <a href="#" target="_blank" >Laravel 5 / HTML5 / Bootstrap / Jquery</a>
          
        </div>
      </div>
    </div>
   </div>




</body>

</html>
