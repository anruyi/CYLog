<?php

/* index.html */
class __TwigTemplate_90ee635b08188655e4e5676ac73d594251f86eccd9a060dd28c1de3167bc74bb extends Twig_Template
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
        echo "
<!-- 上封面 -->
<section class=\"row featured-post-carousel\">
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
<!-- 上封面END -->

<!--文章概要流-->
<section class=\"row content-wrap\">
    <div class=\"container\">
        <div class=\"row\" id=\"post-masonry\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 23
            echo "            <!--Blog Post-->
            <article class=\"col-sm-4 post post-masonry post-format-image\">
                <div class=\"post-wrapper row\">
                    <div class=\"featured-content row\">
                        <a href=\"/index/single/id/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), $context["key"], array(), "array"), "html", null, true);
            echo "\"><img src=\"/app/assets/images/posts/masonry/1.jpg\" alt=\"\" class=\"img-responsive\"></a>                    </div>
                    <div class=\"post-excerpt row\">
                        <h5 class=\"post-meta\">
                            <a href=\"#\" class=\"date\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "created_at", array()), $context["key"], array(), "array"), "d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "created_at", array()), $context["key"], array(), "array"), "m"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "created_at", array()), $context["key"], array(), "array"), "Y"), "html", null, true);
            echo "</a>
                            <span class=\"post-author\"><i>by</i><a href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "author", array()), $context["key"], array(), "array"), "html", null, true);
            echo "</a></span>
                        </h5>
                        <h3 class=\"post-title\"><a href=\"index/single\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), $context["key"], array(), "array"), "html", null, true);
            echo "</a></h3>
                        <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "summary", array()), $context["key"], array(), "array"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>
    </div>
</section>
<!--文章概要流END-->
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
        return array (  100 => 43,  85 => 34,  81 => 33,  76 => 31,  68 => 30,  62 => 27,  56 => 23,  52 => 22,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* */
/* <!-- 上封面 -->*/
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
/* <!-- 上封面END -->*/
/* */
/* <!--文章概要流-->*/
/* <section class="row content-wrap">*/
/*     <div class="container">*/
/*         <div class="row" id="post-masonry">*/
/*             {% for key in data.id|keys %}*/
/*             <!--Blog Post-->*/
/*             <article class="col-sm-4 post post-masonry post-format-image">*/
/*                 <div class="post-wrapper row">*/
/*                     <div class="featured-content row">*/
/*                         <a href="/index/single/id/{{data.id[key]}}"><img src="/app/assets/images/posts/masonry/1.jpg" alt="" class="img-responsive"></a>                    </div>*/
/*                     <div class="post-excerpt row">*/
/*                         <h5 class="post-meta">*/
/*                             <a href="#" class="date">{{data.created_at[key]|date('d')}} {{data.created_at[key]|date('m')}}, {{data.created_at[key]|date('Y')}}</a>*/
/*                             <span class="post-author"><i>by</i><a href="#">{{data.author[key]}}</a></span>*/
/*                         </h5>*/
/*                         <h3 class="post-title"><a href="index/single">{{data.title[key]}}</a></h3>*/
/*                         <p>{{data.summary[key]}}</p>*/
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
/* <!--文章概要流END-->*/
/* {% endblock %}*/
/* */
/* */
