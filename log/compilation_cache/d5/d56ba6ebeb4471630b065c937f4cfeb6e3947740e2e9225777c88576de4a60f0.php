<?php

/* common/commonFoot.html */
class __TwigTemplate_cec2cce2378710f22190e8564df0fae7f326d1029643be70aa294f951e29ad84 extends Twig_Template
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
        echo "<footer class=\"row\" id=\"footer\">
    <div class=\"container\">
        <div class=\"row top-footer\">
            <div class=\"widget col-sm-3 widget-about\">
                <div class=\"row m0\"><a href=\"index.html\"><img src=\"/app/assets/images/logo-black-green.png\" alt=\"\"></a></div>
            </div>
            <div class=\"widget col-sm-5 widget-menu\">
                <div class=\"row\">
                    <ul class=\"nav column-menu white-bg\">
                        <li class=\"active\"><a href=\"/index/index\">Home</a></li>

                        ";
        // line 12
        if (((isset($context["userLoginState"]) ? $context["userLoginState"] : null) == 1)) {
            // line 13
            echo "                        <li><a href=\"/admin/posting\">Posting</a></li>
                        <li><a href=\"/admin/logout\">logout</a></li>
                        <li><a href=\"/index/about\">[";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["notice"]) ? $context["notice"] : null), "html", null, true);
            echo "]</a></li>
                        ";
        }
        // line 17
        echo "
                        ";
        // line 18
        if (((isset($context["userLoginState"]) ? $context["userLoginState"] : null) == 0)) {
            // line 19
            echo "                        <li><a href=\"/index/about\">About</a></li>
                        ";
        }
        // line 21
        echo "
                    </ul>
                    <ul class=\"nav column-menu white-bg\">
                        <li><a href=\"single3.html\">anther list one</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"widget col-sm-4 widget-subscribe\">
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
</footer>";
    }

    public function getTemplateName()
    {
        return "common/commonFoot.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  48 => 19,  46 => 18,  43 => 17,  38 => 15,  34 => 13,  32 => 12,  19 => 1,);
    }
}
/* <footer class="row" id="footer">*/
/*     <div class="container">*/
/*         <div class="row top-footer">*/
/*             <div class="widget col-sm-3 widget-about">*/
/*                 <div class="row m0"><a href="index.html"><img src="/app/assets/images/logo-black-green.png" alt=""></a></div>*/
/*             </div>*/
/*             <div class="widget col-sm-5 widget-menu">*/
/*                 <div class="row">*/
/*                     <ul class="nav column-menu white-bg">*/
/*                         <li class="active"><a href="/index/index">Home</a></li>*/
/* */
/*                         {% if userLoginState == 1 %}*/
/*                         <li><a href="/admin/posting">Posting</a></li>*/
/*                         <li><a href="/admin/logout">logout</a></li>*/
/*                         <li><a href="/index/about">[{{notice}}]</a></li>*/
/*                         {% endif %}*/
/* */
/*                         {% if userLoginState == 0 %}*/
/*                         <li><a href="/index/about">About</a></li>*/
/*                         {% endif %}*/
/* */
/*                     </ul>*/
/*                     <ul class="nav column-menu white-bg">*/
/*                         <li><a href="single3.html">anther list one</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="widget col-sm-4 widget-subscribe">*/
/*                 <h5 class="widget-title">subscribe to our newsletter.</h5>*/
/*                 <form action="#" method="post" class="form-inline subscribe-form">*/
/*                     <div class="form-group">*/
/*                         <input type="email" class="form-control" placeholder="Email">*/
/*                     </div>*/
/*                     <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
