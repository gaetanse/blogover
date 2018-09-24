<!DOCTYPE html>
<html lang="fr">

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BlogOver</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" type="../image/png" sizes="16x16" href="images/favicon.png">

  <!-- <link rel="stylesheet" href="./css/bootstrap.css"> -->
  <link href="./css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="./css/helper.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <link href="./css/main.css" rel="stylesheet">

  <script src="./js/main.js"></script>
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 </head>

 <body class="fix-header fix-sidebar">

 <div class="login-box">

  <div class="login-logo">
   Blog<b>Over</b>
  </div>

  <div class="login-box-body">

   <form id="formulaire">
    <span id="label_email" class="login-box-msg">V&eacute;rification de l'&eacute;ligibilit&eacute;</span>
    <div class="form-group has-feedback" id="blockLogin">
     <input name="login" id="login" type="text" class="form-control" placeholder="Adresse Email" />
    </div>
    <input name="lcode" id="lcode" type="text" style="display: none;"></p>
    <div id="blockPasse" class="form-group has-feedback">
     <span id="label_passe" class="login-box-msg">V&eacute;rification du code
     </span>
     <table id="tabCD">
      <tr>

      <?php
       $cpt = 10;
       $tabRslt = array();

       while($cpt!=0) {
        $nbr = mt_rand(0,9);

        if (!in_array($nbr,$tabRslt)) {
         $tabRslt[] = $nbr;
         $cpt--;
        }
       }

       for ($i=0; $i<10; $i++) {
        print("<td style='padding-left: 3px;'>\n");
        print("<button id='".$tabRslt[$i]."' type='button' class='btn btn-primary' onclick='leCode(".$tabRslt[$i].");'>\n");
        print("<span style='font-size: 18px;'>".$tabRslt[$i]."</span>\n");
        print("</button>");
        print("</td>\n");
       }
       ?>

      </tr>
     </table>
     </div>
      <button value="Envoi des informations" class="btn btn-default" type="button" onclick="infos()"></button>

   </form>

  </div>

 </div>

  <script src="./js/lib/jquery/jquery.min.js"></script>
  <script src="./js/lib/bootstrap/js/popper.min.js"></script>
  <script src="./js/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./js/jquery.slimscroll.js"></script>
  <script src="./js/sidebarmenu.js"></script>
  <script src="./js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <script src="./js/scripts.js"></script>

 </body>
</html>
