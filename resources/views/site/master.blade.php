<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ config('app.locale') }}">
   <head>
      <title>New Hope in Christ Ministry</title>
      <meta name="format-detection" content="telephone=no">
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta charset="utf-8">
      @section('seo')

      @show  
      <link rel="icon" href="images/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
      {!! Html::style('css/bootstrap.css') !!}   
      {!! Html::style('css/style.css') !!}
      {!! Html::style('css/mdi.css') !!}       
      {!! Html::style('css/fl-bigmug-line.css.css') !!}
      {!! Html::style('css/novi.css') !!}
      <!--[if lt IE 10]>      
      <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
      <script src="js/html5shiv.min.js"></script>    <![endif]-->     
   </head>
   <body>
      @include('site.preloader')
      <div class="page">
         <section class="section">
            @include('site.menubar')
            @include('site.partial.home.slideshow')
         </section>
         @section('main-content-page')       

        
         @show  
         @section('site.footer')
      </div>
      <div class="snackbars" id="form-output-global"></div>
      <script src="js/core.min.js"></script>
      <script src="js/script.js"></script>            
   </body>
</html>