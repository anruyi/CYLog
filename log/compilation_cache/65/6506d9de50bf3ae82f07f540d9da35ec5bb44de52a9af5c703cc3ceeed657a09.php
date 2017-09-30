<?php

/* single.html */
class __TwigTemplate_a4338515db3f9494c6b46b63d351fbf9bdf5e7d205c73aff6b73983918d9822c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<!DOCTYPE html>
<html lang=\"zh-cn\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
<title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "title", array()), "html", null, true);
        echo "</title>

<!--==========Dependency============-->
<link rel=\"stylesheet\" href=\"/app/assets/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"/app/assets/assets/css/font-awesome.min.css\">
<link rel=\"stylesheet\" href=\"/app/assets/assets/vendors/owl-carousel/assets/owl.carousel.css\">
<link rel=\"stylesheet\" href=\"/app/assets/assets/vendors/magnific-popup/magnific-popup.css\">
<link rel=\"stylesheet\" href=\"/app/assets/assets/vendors/flexslider/flexslider.css\">

<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Kanit:500\">
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic\">
<link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic\">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

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
<body class=\"home\">

<!--head-->
";
        // line 39
        $this->loadTemplate("common/singleHead.html", "single.html", 39)->display($context);
        // line 40
        echo "
<!--所有内容-->
<section class=\"row content-wrap\">
    <div class=\"container\" style=\"padding: 2px\">
        <div class=\"row\">
            <div class=\"col-md-8 single-post-contents\">
                <!--文章块开始-->
                <article class=\"single-post-content row m0 post\">
                    <!--文章标题-->
                    <header class=\"row\">                        
                        <h5 class=\"post-meta\">
                            <a href=\"#\" class=\"date\">feb 17, 2016</a>
                            <span class=\"post-author\"><i>by</i><a href=\"#\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "author", array()), "html", null, true);
        echo "</a></span>
                        </h5>
                        <h2 class=\"post-title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
                        <div class=\"row\">
                            <h5 class=\"taxonomy pull-left\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                            <div class=\"response-count pull-right\"><img src=\"/app/assets/images/comment-icon-gray.png\" alt=\"\">5</div>
                        </div>
                    </header>
                    <!--文章标题END-->

                    <!--文章内容-->
                    <div class=\"post-content\">
                        ";
        // line 65
        echo "                        ";
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "content", array());
        echo "
                        ";
        // line 67
        echo "                    </div>

                        <!--文章内容END-->

                    <!--文章标签-->
                    <div class=\"row m0 tags\">
                        <a href=\"#\" class=\"tag\">music</a>
                        <a href=\"#\" class=\"tag\">tegs</a>
                        <a href=\"#\" class=\"tag\">tegs hover</a>
                    </div>
                    <!--文章标签END-->

                    <!--文章翻页-->
                    <ul class=\"pager\">
                        <li>
                            <h4>Previous Articles</h4>
                            <h2 class=\"post-title\"><a href=\"single2.html\">Nature, in the broadest sense, is the natural...</a></h2>
                            <h5 class=\"taxonomy pull-left\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                        </li>
                        <li>
                            <h4>Next Articles</h4>
                            <h2 class=\"post-title\"><a href=\"single2.html\">Nature, in the broadest sense, is the natural...</a></h2>
                            <h5 class=\"taxonomy pull-left\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                        </li>
                    </ul>
                    <!--文章翻页END-->

                    <!--文章评论-->
                    ";
        // line 95
        $this->loadTemplate("plug/commont.html", "single.html", 95)->display($context);
        // line 96
        echo "
                </article>
                <!--文章块END-->
            </div>

            <!--侧边栏Plug-->
            <div class=\"col-md-4 sidebar\">               
                <!--Author Widget-->
                ";
        // line 104
        $this->loadTemplate("plug/author.html", "single.html", 104)->display($context);
        // line 105
        echo "
                <!--Twitter Widget-->
                ";
        // line 107
        $this->loadTemplate("plug/twitter.html", "single.html", 107)->display($context);
        // line 108
        echo "
                <!--Instagram Widget-->
                ";
        // line 110
        $this->loadTemplate("plug/instagram.html", "single.html", 110)->display($context);
        // line 111
        echo "
            </div>
            <!--侧边栏END-->
        </div>
    </div>
</section>
<!--所有内容END-->



<!--Footer-->
";
        // line 122
        $this->loadTemplate("common/CommonFoot.html", "single.html", 122)->display($context);
        // line 123
        echo "
<!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->
<script src=\"/app/assets/js/jquery-2.2.0.min.js\"></script>
<script src=\"/app/assets/js/bootstrap.min.js\"></script>
<script src=\"/app/assets/vendors/owl-carousel/owl.carousel.min.js\"></script>
<script src=\"/app/assets/vendors/magnific-popup/jquery.magnific-popup.min.js\"></script>
<script src=\"/app/assets/vendors/instafeed/instafeed.min.js\"></script>
<script src=\"/app/assets/vendors/imagesLoaded/imagesloaded.pkgd.min.js\"></script>
<script src=\"/app/assets/vendors/isotope/isotope.pkgd.min.js\"></script>
<script src=\"/app/assets/vendors/flexslider/jquery.flexslider-min.js\"></script>
<script src=\"/app/assets/js/theme.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "single.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 123,  170 => 122,  157 => 111,  155 => 110,  151 => 108,  149 => 107,  145 => 105,  143 => 104,  133 => 96,  131 => 95,  101 => 67,  96 => 65,  83 => 54,  78 => 52,  64 => 40,  62 => 39,  28 => 8,  19 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* <html lang="zh-cn">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->*/
/* <title>{{data[0].title}}</title>*/
/* */
/* <!--==========Dependency============-->*/
/* <link rel="stylesheet" href="/app/assets/css/bootstrap.min.css">*/
/* <link rel="stylesheet" href="/app/assets/assets/css/font-awesome.min.css">*/
/* <link rel="stylesheet" href="/app/assets/assets/vendors/owl-carousel/assets/owl.carousel.css">*/
/* <link rel="stylesheet" href="/app/assets/assets/vendors/magnific-popup/magnific-popup.css">*/
/* <link rel="stylesheet" href="/app/assets/assets/vendors/flexslider/flexslider.css">*/
/* */
/* <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:500">*/
/* <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic">*/
/* <link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>*/
/* <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic">*/
/* <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>*/
/* <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>*/
/* <link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>*/
/* */
/* <!--==========Theme Styles==========-->*/
/* <link href="/app/assets/css/style.css" rel="stylesheet">*/
/* <link href="/app/assets/css/theme/green.css" rel="stylesheet">*/
/* */
/* <!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->*/
/* <!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->*/
/* <!--==========[if lt IE 9]>*/
/*     <script src="/app/assets/js/html5shiv.min.js"></script>*/
/*     <script src="/app/assets/js/respond.min.js"></script>*/
/* <![endif]==========-->*/
/* </head>*/
/* <body class="home">*/
/* */
/* <!--head-->*/
/* {% include "common/singleHead.html" %}*/
/* */
/* <!--所有内容-->*/
/* <section class="row content-wrap">*/
/*     <div class="container" style="padding: 2px">*/
/*         <div class="row">*/
/*             <div class="col-md-8 single-post-contents">*/
/*                 <!--文章块开始-->*/
/*                 <article class="single-post-content row m0 post">*/
/*                     <!--文章标题-->*/
/*                     <header class="row">                        */
/*                         <h5 class="post-meta">*/
/*                             <a href="#" class="date">feb 17, 2016</a>*/
/*                             <span class="post-author"><i>by</i><a href="#">{{data[0].author}}</a></span>*/
/*                         </h5>*/
/*                         <h2 class="post-title">{{data[0].title}}</h2>*/
/*                         <div class="row">*/
/*                             <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>*/
/*                             <div class="response-count pull-right"><img src="/app/assets/images/comment-icon-gray.png" alt="">5</div>*/
/*                         </div>*/
/*                     </header>*/
/*                     <!--文章标题END-->*/
/* */
/*                     <!--文章内容-->*/
/*                     <div class="post-content">*/
/*                         {% autoescape false %}*/
/*                         {{data[0].content}}*/
/*                         {% endautoescape %}*/
/*                     </div>*/
/* */
/*                         <!--文章内容END-->*/
/* */
/*                     <!--文章标签-->*/
/*                     <div class="row m0 tags">*/
/*                         <a href="#" class="tag">music</a>*/
/*                         <a href="#" class="tag">tegs</a>*/
/*                         <a href="#" class="tag">tegs hover</a>*/
/*                     </div>*/
/*                     <!--文章标签END-->*/
/* */
/*                     <!--文章翻页-->*/
/*                     <ul class="pager">*/
/*                         <li>*/
/*                             <h4>Previous Articles</h4>*/
/*                             <h2 class="post-title"><a href="single2.html">Nature, in the broadest sense, is the natural...</a></h2>*/
/*                             <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>*/
/*                         </li>*/
/*                         <li>*/
/*                             <h4>Next Articles</h4>*/
/*                             <h2 class="post-title"><a href="single2.html">Nature, in the broadest sense, is the natural...</a></h2>*/
/*                             <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!--文章翻页END-->*/
/* */
/*                     <!--文章评论-->*/
/*                     {% include "plug/commont.html" %}*/
/* */
/*                 </article>*/
/*                 <!--文章块END-->*/
/*             </div>*/
/* */
/*             <!--侧边栏Plug-->*/
/*             <div class="col-md-4 sidebar">               */
/*                 <!--Author Widget-->*/
/*                 {% include "plug/author.html" %}*/
/* */
/*                 <!--Twitter Widget-->*/
/*                 {% include "plug/twitter.html" %}*/
/* */
/*                 <!--Instagram Widget-->*/
/*                 {% include "plug/instagram.html" %}*/
/* */
/*             </div>*/
/*             <!--侧边栏END-->*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <!--所有内容END-->*/
/* */
/* */
/* */
/* <!--Footer-->*/
/* {% include "common/CommonFoot.html" %}*/
/* */
/* <!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->*/
/* <script src="/app/assets/js/jquery-2.2.0.min.js"></script>*/
/* <script src="/app/assets/js/bootstrap.min.js"></script>*/
/* <script src="/app/assets/vendors/owl-carousel/owl.carousel.min.js"></script>*/
/* <script src="/app/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>*/
/* <script src="/app/assets/vendors/instafeed/instafeed.min.js"></script>*/
/* <script src="/app/assets/vendors/imagesLoaded/imagesloaded.pkgd.min.js"></script>*/
/* <script src="/app/assets/vendors/isotope/isotope.pkgd.min.js"></script>*/
/* <script src="/app/assets/vendors/flexslider/jquery.flexslider-min.js"></script>*/
/* <script src="/app/assets/js/theme.js"></script>*/
/* </body>*/
/* </html>*/
/* */
