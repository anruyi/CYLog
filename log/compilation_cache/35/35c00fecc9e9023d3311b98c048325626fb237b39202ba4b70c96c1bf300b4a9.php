<?php

/* common/commonhead.html */
class __TwigTemplate_18c3f5e5c43d3547d9553e4255dcb94d66338ba17be628b8ab43f045f8e7fdb6 extends Twig_Template
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
        echo "<!--主界面头部-->
<header class=\"row transparent black header1\" data-spy=\"affix\" data-offset-top=\"0\" id=\"header\">
    <div class=\"container\">
        <div class=\"row top-header\">
            <div class=\"col-sm-4 search-form-col\">
                <form action=\"#\" method=\"get\" class=\"search-form\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><img src=\"/app/assets/images/search-icon-white.png\" alt=\"\"></span>
                        <input type=\"search\" class=\"form-control\" placeholder=\"search\">
                    </div>
                </form>
            </div>
            <div class=\"col-sm-4 logo-col text-center\">
                <!--==logo图片==-->
                <a href=\"/index/index\"><img src=\"/app/assets/images/logo-white-green.png\" alt=\"\"></a>
            </div>
            <div class=\"col-sm-4 menu-trigger-col\">
                <button class=\"menu-trigger pull-right\">
                    <span class=\"active-page\">home</span>
                    <img src=\"/app/assets/images/menu-align-white.png\" alt=\"\" class=\"icon-burger\">
                    <img src=\"/app/assets/images/menu-close-white.png\" alt=\"\" class=\"icon-cross\">
                </button>
            </div>
        </div>
    </div>
    <div class=\"row menu-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 menu-col\">
                    <div class=\"row\">
                        <ul class=\"nav column-menu black-bg\">
                            <li class=\"active dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Home <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"index/index\">Home Option one</a></li>
                                </ul>
                            </li>

                            ";
        // line 39
        if (((isset($context["userLoginState"]) ? $context["userLoginState"] : null) == 0)) {
            // line 40
            echo "                            <li><a href=\"/index/login\">Login</a></li>
                            ";
        }
        // line 42
        echo "
                            ";
        // line 43
        if (((isset($context["userLoginState"]) ? $context["userLoginState"] : null) == 1)) {
            // line 44
            echo "                            <li><a href=\"/admin/posting\">Posting</a></li>
                            <li><a href=\"/admin/logout\">logout</a></li>
                            ";
        }
        // line 47
        echo "
                            <li><a href=\"/index/about\">About</a></li>
                        </ul>
                        <ul class=\"nav column-menu black-bg\">
                            <li><a href=\"index/single\">other link one</a></li>

                            <li><a href=\"index/contact\">other link two</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-4 subscribe-col\">
                    <h5 class=\"widget-title\">subscribe to our newsletter.</h5>
                    <form action=\"#\" method=\"post\" class=\"form-inline subscribe-form\">
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                            <span>send</span>
                        </button>
                    </form>
                    <ul class=\"nav social-nav dark\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook-official\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-envelope\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/commonhead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 47,  70 => 44,  68 => 43,  65 => 42,  61 => 40,  59 => 39,  19 => 1,);
    }
}
/* <!--主界面头部-->*/
/* <header class="row transparent black header1" data-spy="affix" data-offset-top="0" id="header">*/
/*     <div class="container">*/
/*         <div class="row top-header">*/
/*             <div class="col-sm-4 search-form-col">*/
/*                 <form action="#" method="get" class="search-form">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon"><img src="/app/assets/images/search-icon-white.png" alt=""></span>*/
/*                         <input type="search" class="form-control" placeholder="search">*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="col-sm-4 logo-col text-center">*/
/*                 <!--==logo图片==-->*/
/*                 <a href="/index/index"><img src="/app/assets/images/logo-white-green.png" alt=""></a>*/
/*             </div>*/
/*             <div class="col-sm-4 menu-trigger-col">*/
/*                 <button class="menu-trigger pull-right">*/
/*                     <span class="active-page">home</span>*/
/*                     <img src="/app/assets/images/menu-align-white.png" alt="" class="icon-burger">*/
/*                     <img src="/app/assets/images/menu-close-white.png" alt="" class="icon-cross">*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row menu-section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 menu-col">*/
/*                     <div class="row">*/
/*                         <ul class="nav column-menu black-bg">*/
/*                             <li class="active dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="index/index">Home Option one</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                             {% if userLoginState == 0 %}*/
/*                             <li><a href="/index/login">Login</a></li>*/
/*                             {% endif %}*/
/* */
/*                             {% if userLoginState == 1 %}*/
/*                             <li><a href="/admin/posting">Posting</a></li>*/
/*                             <li><a href="/admin/logout">logout</a></li>*/
/*                             {% endif %}*/
/* */
/*                             <li><a href="/index/about">About</a></li>*/
/*                         </ul>*/
/*                         <ul class="nav column-menu black-bg">*/
/*                             <li><a href="index/single">other link one</a></li>*/
/* */
/*                             <li><a href="index/contact">other link two</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-4 subscribe-col">*/
/*                     <h5 class="widget-title">subscribe to our newsletter.</h5>*/
/*                     <form action="#" method="post" class="form-inline subscribe-form">*/
/*                         <div class="form-group">*/
/*                             <input type="email" class="form-control" placeholder="Email">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-primary btn-sm">*/
/*                             <span>send</span>*/
/*                         </button>*/
/*                     </form>*/
/*                     <ul class="nav social-nav dark">*/
/*                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-envelope"></i></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
