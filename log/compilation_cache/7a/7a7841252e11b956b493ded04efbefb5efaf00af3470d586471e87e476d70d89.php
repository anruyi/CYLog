<?php

/* layout.html */
class __TwigTemplate_66f982e17ea4a7edc1e032a658c555ba431adeb361a30e74108d1a107acd96fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!--------------------------->
<!--本页面并不使用，但是留作蓝本-->
<!--------------------------->
<html lang=\"zh-cn\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
    <title>Home</title>

    <!--==========Dependency============-->
    <link rel=\"stylesheet\" href=\"/app/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/app/assets/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/app/assets/vendors/owl-carousel/assets/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/app/assets/vendors/magnific-popup/magnific-popup.css\">

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Kanit:500\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic\">
    <link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic\">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>

    <!--==========Theme Styles==========-->
    <link href=\"/app/assets/css/style.css\" rel=\"stylesheet\">
    <link href=\"/app/assets/css/theme/green.css\" rel=\"stylesheet\">

    <!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->
    <!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->
    <!--==========[if lt IE 9]>
    <script src=\"/app/assets/js/html5shiv.min.js\"></script>
    <script src=\"/app/assets/js/respond.min.js\"></script>
    <![endif]==========-->
</head>
<body>


<div>
";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "</div>

<!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->
<script src=\"/app/assets/js/jquery-2.2.0.min.js\"></script>
<script src=\"/app/assets/js/bootstrap.min.js\"></script>
<script src=\"/app/assets/vendors/owl-carousel/owl.carousel.min.js\"></script>
<script src=\"/app/assets/vendors/magnific-popup/jquery.magnific-popup.min.js\"></script>
<script src=\"/app/assets/vendors/instafeed/instafeed.min.js\"></script>
<script src=\"/app/assets/vendors/imagesLoaded/imagesloaded.pkgd.min.js\"></script>
<script src=\"/app/assets/vendors/isotope/isotope.pkgd.min.js\"></script>
<script src=\"/app/assets/js/theme.js\"></script>
</body>
</html>
";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  82 => 40,  79 => 39,  62 => 42,  60 => 39,  20 => 1,);
    }
}
/* <!--------------------------->*/
/* <!--本页面并不使用，但是留作蓝本-->*/
/* <!--------------------------->*/
/* <html lang="zh-cn">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->*/
/*     <title>Home</title>*/
/* */
/*     <!--==========Dependency============-->*/
/*     <link rel="stylesheet" href="/app/assets/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="/app/assets/css/font-awesome.min.css">*/
/*     <link rel="stylesheet" href="/app/assets/vendors/owl-carousel/assets/owl.carousel.css">*/
/*     <link rel="stylesheet" href="/app/assets/vendors/magnific-popup/magnific-popup.css">*/
/* */
/*     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:500">*/
/*     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic">*/
/*     <link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic">*/
/*     <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>*/
/* */
/*     <!--==========Theme Styles==========-->*/
/*     <link href="/app/assets/css/style.css" rel="stylesheet">*/
/*     <link href="/app/assets/css/theme/green.css" rel="stylesheet">*/
/* */
/*     <!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->*/
/*     <!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->*/
/*     <!--==========[if lt IE 9]>*/
/*     <script src="/app/assets/js/html5shiv.min.js"></script>*/
/*     <script src="/app/assets/js/respond.min.js"></script>*/
/*     <![endif]==========-->*/
/* </head>*/
/* <body>*/
/* */
/* */
/* <div>*/
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* </div>*/
/* */
/* <!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->*/
/* <script src="/app/assets/js/jquery-2.2.0.min.js"></script>*/
/* <script src="/app/assets/js/bootstrap.min.js"></script>*/
/* <script src="/app/assets/vendors/owl-carousel/owl.carousel.min.js"></script>*/
/* <script src="/app/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>*/
/* <script src="/app/assets/vendors/instafeed/instafeed.min.js"></script>*/
/* <script src="/app/assets/vendors/imagesLoaded/imagesloaded.pkgd.min.js"></script>*/
/* <script src="/app/assets/vendors/isotope/isotope.pkgd.min.js"></script>*/
/* <script src="/app/assets/js/theme.js"></script>*/
/* </body>*/
/* </html>*/
/* */
