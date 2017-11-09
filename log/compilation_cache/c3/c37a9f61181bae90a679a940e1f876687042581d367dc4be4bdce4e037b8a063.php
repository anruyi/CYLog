<?php

/* about.html */
class __TwigTemplate_67d4a22db327144302e04b7cbcdb7cb64bcf87ee2711f753379ea832bc0533f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "about.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        $this->loadTemplate("common/singleHead.html", "about.html", 3)->display($context);
        // line 4
        echo "<!-- 上封面 -->
<section class=\"row page-content-wrap\">
    <div class=\"container\">
        <h2 class=\"page-title text-center\">about ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["notice"]) ? $context["notice"] : null), "html", null, true);
        echo "</h2>
        <div class=\"row\">
            <div class=\"col-md-8 page-contents\">
                <div class=\"row page-content\">
                    <img src=\"/app/assets/images/author.jpg\" alt=\"\" class=\"img-responsive\">

                    <div class=\"contents row\">
                        <h4>Mark Samder, lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>

                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <p>It has survived not only five centuries, remaining essentially unchanged. <a href=\"www.mywebsite.com\">www.mywebsite.com</a> it was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class=\"col-sm-6\">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"col-md-4 sidebar\">
                <!--Twitter Widget-->
                <aside class=\"row m0 widget widget-twitter\">
                    <div class=\"widget-twitter-inner\">
                        <h5 class=\"widget-meta\"><i class=\"fa fa-twitter\"></i>Twitter feed <a href=\"http://twitter.com/chivalricblog\">@chivalricblog</a></h5>
                        <div class=\"row tweet-texts\">
                            <p>Check out new post on my blog <a href=\"http://twitter.com/#natureshot\">#natureshot</a> <a href=\"http://bit.ly/blog\">http://bit.ly/blog</a></p>
                        </div>
                        <div class=\"row timepast\">1 day ago</div>
                    </div>
                </aside>
                <!--Instagram Widget-->
                <aside class=\"row m0 widget widget-instagram\">
                    <div class=\"widget-instagram-inner\">
                        <h5 class=\"widget-meta\"><i class=\"fa fa-twitter\"></i>instagram feed <a href=\"http://twitter.com/chivalricblog\">@chivalricblog</a></h5>
                        <div id=\"instafeed\"></div>
                    </div>
                </aside>
                <aside class=\"row m0 widget widget-facebook\">
                    <div class=\"widget-inner widget-facebook-inner\">
                        <a href=\"#\" class=\"facebook-link\"><i class=\"fa fa-facebook-square\"></i>find us on facebook</a>
                    </div>
                    <ul class=\"nav social-nav\">
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-facebook-official\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-envelope\"></i></a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
";
        // line 66
        $this->loadTemplate("common/commonFoot.html", "about.html", 66)->display($context);
        // line 67
        echo "
";
    }

    public function getTemplateName()
    {
        return "about.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 67,  100 => 66,  38 => 7,  33 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content%}*/
/* {% include "common/singleHead.html" %}*/
/* <!-- 上封面 -->*/
/* <section class="row page-content-wrap">*/
/*     <div class="container">*/
/*         <h2 class="page-title text-center">about {{notice}}</h2>*/
/*         <div class="row">*/
/*             <div class="col-md-8 page-contents">*/
/*                 <div class="row page-content">*/
/*                     <img src="/app/assets/images/author.jpg" alt="" class="img-responsive">*/
/* */
/*                     <div class="contents row">*/
/*                         <h4>Mark Samder, lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4>*/
/* */
/*                         <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>*/
/*                         <br>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6">*/
/*                                 <p>It has survived not only five centuries, remaining essentially unchanged. <a href="www.mywebsite.com">www.mywebsite.com</a> it was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>*/
/*                             </div>*/
/*                             <div class="col-sm-6">*/
/*                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 sidebar">*/
/*                 <!--Twitter Widget-->*/
/*                 <aside class="row m0 widget widget-twitter">*/
/*                     <div class="widget-twitter-inner">*/
/*                         <h5 class="widget-meta"><i class="fa fa-twitter"></i>Twitter feed <a href="http://twitter.com/chivalricblog">@chivalricblog</a></h5>*/
/*                         <div class="row tweet-texts">*/
/*                             <p>Check out new post on my blog <a href="http://twitter.com/#natureshot">#natureshot</a> <a href="http://bit.ly/blog">http://bit.ly/blog</a></p>*/
/*                         </div>*/
/*                         <div class="row timepast">1 day ago</div>*/
/*                     </div>*/
/*                 </aside>*/
/*                 <!--Instagram Widget-->*/
/*                 <aside class="row m0 widget widget-instagram">*/
/*                     <div class="widget-instagram-inner">*/
/*                         <h5 class="widget-meta"><i class="fa fa-twitter"></i>instagram feed <a href="http://twitter.com/chivalricblog">@chivalricblog</a></h5>*/
/*                         <div id="instafeed"></div>*/
/*                     </div>*/
/*                 </aside>*/
/*                 <aside class="row m0 widget widget-facebook">*/
/*                     <div class="widget-inner widget-facebook-inner">*/
/*                         <a href="#" class="facebook-link"><i class="fa fa-facebook-square"></i>find us on facebook</a>*/
/*                     </div>*/
/*                     <ul class="nav social-nav">*/
/*                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-instagram"></i></a></li>*/
/*                         <li><a href="#"><i class="fa fa-envelope"></i></a></li>*/
/*                     </ul>*/
/*                 </aside>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!--Footer-->*/
/* {% include "common/commonFoot.html" %}*/
/* */
/* {% endblock%}*/
