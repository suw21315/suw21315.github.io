<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Nicola Franchini - envato items</title>
    <meta name="description" content="Online demo">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <script type="text/javascript">
    // if (window != window.top) { 
    /* I'm in a frame! */ 
    //   top.location.replace( self.location.href );
    // }
    // if ( top !== self ){ top.location.replace( self.location.href ); }
  </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- html5 elements for ie<9 -->
    <!--[if lte IE 8 ]> <script type="text/javascript">var htmlForIe = ["abbr" ,"article" ,"aside" ,"audio" ,"canvas" ,"details" ,"figcaption" ,"figure" ,"footer" ,"header" ,"hgroup" ,"mark" ,"meter" ,"nav" ,"output" ,"progress" ,"section" ,"summary" ,"time" ,"video"], htmlForIeLen = htmlForIe.length; for(i=0;i<htmlForIeLen;i++){ document.createElement(htmlForIe[i]); }</script> <![endif]-->

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/screen.css">
    <link rel="stylesheet" type="text/css" href="assets/css/icons.css">
    <style type="text/css">
/*      
.wrap-frame {
  position: fixed;
  top: 0;
  right:0;
  bottom:0;
  left: 0;
  overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
}*/
    </style>
  </head>

  <body>
    <header>
      <div class="identity">
        <a href="#"></a>
      </div>

      <ul class="toolbar">
        <li class="toolbar__item toolbar__resolution">
          <a href="#" data-size="400" title="Small Screen (phone)"><i class="icon-smartphone"></i></a>
        </li>
        <li class="toolbar__item toolbar__resolution">
          <a href="#" data-size="768" title="Medium Screen (tablet)"><i class="icon-tablet"></i></a>
        </li>        
        <li class="toolbar__item toolbar__resolution">
          <a href="#" data-size="full" title="Full Screen"><i class="icon-desktop"></i></a>
        </li>

        <li class="toolbar__item">
          <a href="#" class="toolbar__buy small" target="_blank"><i class="icon-shopping-cart"></i> Buy now</a>
        </li>
        <li class="toolbar__item">
          <a href="#" class="toolbar__close" title="Close this Bar"><i class="icon-close"></i></a>
        </li>
      </ul>

      <div class="dropdown pull-right hidden-xs">
         <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false" class="currentProject hidden-xs">
          Select project
          <span class="caret pull-right"></span>
        </a>
        <ul class="dropdown-menu openmenu" role="menu" aria-labelledby="dLabel">
        </ul>
      </div>

    </header>

    <nav class="projects">
      <ul></ul>
    </nav>
   <iframe class="preview" frameborder="0" border="0" id="demoframe" src="https://veno.es/demo?i=n/" name="demoframe" allow="geolocation 'self'; autoplay 'self'"></iframe>    <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="projects.js" type="text/javascript"></script>
    <script src="assets/js/projectManager.js" type="text/javascript"></script>

    <script type="text/javascript">
    new ProjectManager( projects );
    </script>

     <script>
    // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    // ga('create', 'UA-3220555-25', 'auto');
    // ga('send', 'pageview');

    </script> 

  </body>
</html>