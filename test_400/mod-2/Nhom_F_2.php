<head>
   <meta charset="UTF-8">
   <meta name=”viewport” content=”width=device-width, initial-scale=1″>
   <title></title>
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <?php
      if (!class_exists('lessc')) {
          include ('./libs/lessc.inc.php');
      }
      $less = new lessc;
      $less->compileFile('less/mod-2.less', 'css/mod-2.css');
      ?>
   <link href="css/mod-2.css" rel="stylesheet" type="text/css"/>
   <link href="css/style.css" rel="stylesheet" type="text/css"/>
   <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  
   <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
   <header>
       <div class="container">
      <div class="mod-2">
         <!--MAIN MENU-->
         <div class="">
            <span class="fa fa-navicon btn-menu" data-toggle="collapse" data-target=".collapse-top-menu"></span>
            <div class="clear"></div>
         </div>
         <div class="navbar-collapse ">
            <ul class="nav navbar-nav navbar-right collapse collapse-top-menu">
               <li class="item active"><a href="#">Medical case</a></li>
               <li class="item"><a href="#">View</a></li>
               <li class="item"><a href="#">Mobile</a></li>
               <li class="item"><a href="#">Asus</a></li>
               <li class="item"><a href="#">Quiz</a></li>
            </ul>
         </div>
         <!--END MAIN MENU-->   
         </nav>
      </div>
       </div>     
    </header>
</body>