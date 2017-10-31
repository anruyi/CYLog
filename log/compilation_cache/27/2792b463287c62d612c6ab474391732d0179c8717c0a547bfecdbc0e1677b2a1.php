<?php

/* common/singleHead.html */
class __TwigTemplate_3225fcdcc5ef51afcc89848296902311c688a7976b26d1be14cef304298d88c2 extends Twig_Template
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
        echo "<header class=\"row transparent white\" data-spy=\"affix\" data-offset-top=\"300\" id=\"header\">
    <div class=\"container\">
        <div class=\"row top-header\">
            <div class=\"col-sm-4 search-form-col\">
                <form action=\"#\" method=\"get\" class=\"search-form\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><img src=\"/app/assets/images/search-icon-dark.png\" alt=\"\"></span>
                        <input type=\"search\" class=\"form-control\" placeholder=\"search\">
                    </div>
                </form>
            </div>
            <div class=\"col-sm-4 logo-col text-center\">
                <!--==logo图片==-->
                <a href=\"/index/index\"><img src=\"/app/assets/images/logo-black-green.png\" alt=\"\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), 1, array(), "array"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"col-sm-4 menu-trigger-col\">
                <button class=\"menu-trigger black pull-right\">
                    <span class=\"active-page\">Blog Details</span>
                    <img src=\"/app/assets/images/menu-align-dark.png\" alt=\"\" class=\"icon-burger\">
                    <img src=\"/app/assets/images/menu-close-dark.png\" alt=\"\" class=\"icon-cross\">
                </button>
            </div>
        </div>
    </div>
    <div class=\"row menu-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 menu-col\">
                    <div class=\"row\">
                        <ul class=\"nav column-menu white-bg\">
                            <li class=\"active dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Home <span class=\"caret\"></span></a>
                                <!--==Home下拉菜单==-->
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"/index/index\">Home Option 1</a></li>
                                </ul>
                            </li>
                            ";
        // line 38
        if (((isset($context["userLoginState"]) ? $context["userLoginState"] : null) == 0)) {
            // line 39
            echo "                            <li><a href=\"/index/login\">Login</a></li>
                            ";
        }
        // line 41
        echo "
                            ";
        // line 42
        if (((isset($context["userLoginState"]) ? $context["userLoginState"] : null) == 1)) {
            // line 43
            echo "                            <li><a href=\"/admin/posting\">Posting</a></li>
                            <li><a href=\"/admin/logout\">logout</a></li>
                            ";
        }
        // line 46
        echo "
                            <li><a href=\"/index/about\">About</a></li>
                        </ul>
                        <ul class=\"nav column-menu white-bg\">
                            <li><a href=\"index/single\">other link one</a></li>

                            <li><a href=\"index/contact\">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-4 subscribe-col\">
                    <h5 class=\"widget-title\">subscribe to our newsletter.</h5>
                    <form action=\"#\" method=\"post\" class=\"form-inline subscribe-form\">
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span>send</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/singleHead.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 46,  72 => 43,  70 => 42,  67 => 41,  63 => 39,  61 => 38,  34 => 14,  19 => 1,);
    }
}
/* <header class="row transparent white" data-spy="affix" data-offset-top="300" id="header">*/
/*     <div class="container">*/
/*         <div class="row top-header">*/
/*             <div class="col-sm-4 search-form-col">*/
/*                 <form action="#" method="get" class="search-form">*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon"><img src="/app/assets/images/search-icon-dark.png" alt=""></span>*/
/*                         <input type="search" class="form-control" placeholder="search">*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="col-sm-4 logo-col text-center">*/
/*                 <!--==logo图片==-->*/
/*                 <a href="/index/index"><img src="/app/assets/images/logo-black-green.png" alt="">{{data.id[1]}}</a>*/
/*             </div>*/
/*             <div class="col-sm-4 menu-trigger-col">*/
/*                 <button class="menu-trigger black pull-right">*/
/*                     <span class="active-page">Blog Details</span>*/
/*                     <img src="/app/assets/images/menu-align-dark.png" alt="" class="icon-burger">*/
/*                     <img src="/app/assets/images/menu-close-dark.png" alt="" class="icon-cross">*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row menu-section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-8 menu-col">*/
/*                     <div class="row">*/
/*                         <ul class="nav column-menu white-bg">*/
/*                             <li class="active dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>*/
/*                                 <!--==Home下拉菜单==-->*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="/index/index">Home Option 1</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
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
/*                         <ul class="nav column-menu white-bg">*/
/*                             <li><a href="index/single">other link one</a></li>*/
/* */
/*                             <li><a href="index/contact">contact</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-4 subscribe-col">*/
/*                     <h5 class="widget-title">subscribe to our newsletter.</h5>*/
/*                     <form action="#" method="post" class="form-inline subscribe-form">*/
/*                         <div class="form-group">*/
/*                             <input type="email" class="form-control" placeholder="Email">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
