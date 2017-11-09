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
        echo "<!--header-->
";
        // line 4
        $this->loadTemplate("common/commonhead.html", "index.html", 4)->display($context);
        // line 5
        echo "<!-- 上封面 -->
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
<a href=\"\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), 1, array(), "array"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["notice"]) ? $context["notice"] : null), "html", null, true);
        echo "asdf</a>
<section class=\"row content-wrap\">
    <div class=\"container\">
        <div class=\"row\" id=\"post-masonry\">
            <!--循环后的数据id值-->
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 26
            echo "            <!--Blog Post-->
            <article class=\"col-sm-4 post post-masonry post-format-image\">
                <div class=\"post-wrapper row\">
                    <div class=\"featured-content row\">
                        <a href=\"/index/single/id/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), $context["key"], array(), "array"), "html", null, true);
            echo "\"><img src=\"/app/assets/images/posts/masonry/1.jpg\" alt=\"\" class=\"img-responsive\"></a>                    </div>
                    <div class=\"post-excerpt row\">
                        <h5 class=\"post-meta\">
                            <a href=\"#\" class=\"date\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "created_at", array()), $context["key"], array(), "array"), "d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "created_at", array()), $context["key"], array(), "array"), "m"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "created_at", array()), $context["key"], array(), "array"), "Y"), "html", null, true);
            echo "</a>
                            <span class=\"post-author\"><i>by</i><a href=\"#\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "author", array()), $context["key"], array(), "array"), "html", null, true);
            echo "</a></span>
                        </h5>
                        <h3 class=\"post-title\"><a href=\"index/single\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "title", array()), $context["key"], array(), "array"), "html", null, true);
            echo "</a></h3>
                        <p>";
            // line 37
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
        // line 46
        echo "        </div>
    </div>
</section>
<!--文章概要流END-->

";
        // line 51
        $this->loadTemplate("common/commonFoot.html", "index.html", 51)->display($context);
        // line 52
        echo "
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
        return array (  119 => 52,  117 => 51,  110 => 46,  95 => 37,  91 => 36,  86 => 34,  78 => 33,  72 => 30,  66 => 26,  62 => 25,  53 => 20,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <!--header-->*/
/* {% include "common/commonhead.html" %}*/
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
/* <a href="">{{data.id[1]}}{{notice}}asdf</a>*/
/* <section class="row content-wrap">*/
/*     <div class="container">*/
/*         <div class="row" id="post-masonry">*/
/*             <!--循环后的数据id值-->*/
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
/* */
/* {% include "common/commonFoot.html" %}*/
/* */
/* {% endblock %}*/
/* */
/* */
