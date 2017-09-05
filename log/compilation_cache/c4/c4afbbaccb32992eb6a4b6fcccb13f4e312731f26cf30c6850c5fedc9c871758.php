<?php

/* index.html */
class __TwigTemplate_7d6325726547850b5db28e3de79bc7c471b6c55e980b7a6b4b845aa60e53dc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
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
        echo "<section class=\"row featured-post-carousel\">
    <div class=\"item post\">
        <img src=\"/app/assets/images/featured-posts/1.jpg\" alt=\"\" class=\"img-responsive main-bg\">
        <div class=\"post-content\">
            <div class=\"container\">
                <h5 class=\"post-meta\"><i>in</i> <a href=\"#\">Author Profile</a> | <a href=\"#\">feb 17, 2016</a></h5>
                <h2 class=\"post-title\"><a href=\"/index/single\">Nature, in the broadest sense, is the natural, physical, or material world or universe.</a></h2>
                <a href=\"index/single\" class=\"btn btn-primary\"><span>read more</span></a>            </div>
        </div>
    </div>
</section>

<section class=\"row content-wrap\">
    <div class=\"container\">
        <div class=\"row\" id=\"post-masonry\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 19
            echo "            <!--Blog Post-->
            <article class=\"col-sm-4 post post-masonry post-format-image\">
                <div class=\"post-wrapper row\">
                    <div class=\"featured-content row\">
                        <a href=\"index/single\"><img src=\"/app/assets/images/posts/masonry/1.jpg\" alt=\"\" class=\"img-responsive\"></a>                    </div>
                    <div class=\"post-excerpt row\">
                        <h5 class=\"post-meta\">
                            <a href=\"#\" class=\"date\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "msgTime", array()), "d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "msgTime", array()), "m"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "msgTime", array()), "Y"), "html", null, true);
            echo "</a>
                            <span class=\"post-author\"><i>by</i><a href=\"#\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "msgUser", array()), "html", null, true);
            echo "</a></span>
                        </h5>
                        <h3 class=\"post-title\"><a href=\"index/single\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "msgTitle", array()), "html", null, true);
            echo "</a></h3>
                        <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "msgContent", array()), "html", null, true);
            echo "</p>
                        <footer class=\"row\">
                            <h5 class=\"taxonomy\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                            <div class=\"response-count\"><img src=\"/app/assets/images/comment-icon-gray.png\" alt=\"\">5</div>
                        </footer>
                    </div>
                </div>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 39,  78 => 30,  74 => 29,  69 => 27,  61 => 26,  52 => 19,  48 => 18,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <section class="row featured-post-carousel">*/
/*     <div class="item post">*/
/*         <img src="/app/assets/images/featured-posts/1.jpg" alt="" class="img-responsive main-bg">*/
/*         <div class="post-content">*/
/*             <div class="container">*/
/*                 <h5 class="post-meta"><i>in</i> <a href="#">Author Profile</a> | <a href="#">feb 17, 2016</a></h5>*/
/*                 <h2 class="post-title"><a href="/index/single">Nature, in the broadest sense, is the natural, physical, or material world or universe.</a></h2>*/
/*                 <a href="index/single" class="btn btn-primary"><span>read more</span></a>            </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section class="row content-wrap">*/
/*     <div class="container">*/
/*         <div class="row" id="post-masonry">*/
/*             {% for val in data %}*/
/*             <!--Blog Post-->*/
/*             <article class="col-sm-4 post post-masonry post-format-image">*/
/*                 <div class="post-wrapper row">*/
/*                     <div class="featured-content row">*/
/*                         <a href="index/single"><img src="/app/assets/images/posts/masonry/1.jpg" alt="" class="img-responsive"></a>                    </div>*/
/*                     <div class="post-excerpt row">*/
/*                         <h5 class="post-meta">*/
/*                             <a href="#" class="date">{{val.msgTime|date('d')}} {{val.msgTime|date('m')}}, {{val.msgTime|date('Y')}}</a>*/
/*                             <span class="post-author"><i>by</i><a href="#">{{val.msgUser}}</a></span>*/
/*                         </h5>*/
/*                         <h3 class="post-title"><a href="index/single">{{val.msgTitle}}</a></h3>*/
/*                         <p>{{val.msgContent}}</p>*/
/*                         <footer class="row">*/
/*                             <h5 class="taxonomy"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>*/
/*                             <div class="response-count"><img src="/app/assets/images/comment-icon-gray.png" alt="">5</div>*/
/*                         </footer>*/
/*                     </div>*/
/*                 </div>*/
/*             </article>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
/* */
