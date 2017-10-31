<?php

/* single.html */
class __TwigTemplate_a4338515db3f9494c6b46b63d351fbf9bdf5e7d205c73aff6b73983918d9822c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "single.html", 1);
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
<!--header-->
";
        // line 5
        $this->loadTemplate("common/singleHead.html", "single.html", 5)->display($context);
        // line 6
        echo "<!--headerEND-->

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
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "author", array()), "html", null, true);
        echo "</a></span>
                        </h5>
                        <h2 class=\"post-title\">";
        // line 21
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
        // line 32
        echo "                        ";
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array"), "content", array());
        echo "
                        ";
        // line 34
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
                            <h2 class=\"post-title\"><a href=\"/index/single/\">Nature, in the broadest sense, is the natural...</a></h2>
                            <h5 class=\"taxonomy pull-left\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                        </li>
                        <li>
                            <h4>Next Articles</h4>
                            <h2 class=\"post-title\"><a href=\"/index/single/\">Nature, in the broadest sense, is the natural...</a></h2>
                            <h5 class=\"taxonomy pull-left\"><i>in</i> <a href=\"#\">image</a>, <a href=\"#\">entertainment</a></h5>
                        </li>
                    </ul>
                    <!--文章翻页END-->

                    <!--文章评论-->
                    ";
        // line 62
        $this->loadTemplate("plug/commont.html", "single.html", 62)->display($context);
        // line 63
        echo "
                </article>
                <!--文章块END-->
            </div>

            <!--侧边栏Plug-->
            <div class=\"col-md-4 sidebar\">
                <!--Author Widget-->
                ";
        // line 71
        $this->loadTemplate("plug/author.html", "single.html", 71)->display($context);
        // line 72
        echo "
                <!--Twitter Widget-->
                ";
        // line 74
        $this->loadTemplate("plug/twitter.html", "single.html", 74)->display($context);
        // line 75
        echo "
                <!--Instagram Widget-->
                ";
        // line 77
        $this->loadTemplate("plug/instagram.html", "single.html", 77)->display($context);
        // line 78
        echo "
            </div>
            <!--侧边栏END-->
        </div>
    </div>
</section>
<!--所有内容END-->


<!--Footer-->
";
        // line 88
        $this->loadTemplate("common/CommonFoot.html", "single.html", 88)->display($context);
        // line 89
        echo "<!--FooterEND-->


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
        return array (  145 => 89,  143 => 88,  131 => 78,  129 => 77,  125 => 75,  123 => 74,  119 => 72,  117 => 71,  107 => 63,  105 => 62,  75 => 34,  70 => 32,  57 => 21,  52 => 19,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* */
/* <!--header-->*/
/* {% include "common/singleHead.html" %}*/
/* <!--headerEND-->*/
/* */
/* <!--所有内容-->*/
/* <section class="row content-wrap">*/
/*     <div class="container" style="padding: 2px">*/
/*         <div class="row">*/
/*             <div class="col-md-8 single-post-contents">*/
/*                 <!--文章块开始-->*/
/*                 <article class="single-post-content row m0 post">*/
/*                     <!--文章标题-->*/
/*                     <header class="row">*/
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
/*                     <!--文章内容END-->*/
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
/*                             <h2 class="post-title"><a href="/index/single/">Nature, in the broadest sense, is the natural...</a></h2>*/
/*                             <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>*/
/*                         </li>*/
/*                         <li>*/
/*                             <h4>Next Articles</h4>*/
/*                             <h2 class="post-title"><a href="/index/single/">Nature, in the broadest sense, is the natural...</a></h2>*/
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
/*             <div class="col-md-4 sidebar">*/
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
/* <!--Footer-->*/
/* {% include "common/CommonFoot.html" %}*/
/* <!--FooterEND-->*/
/* */
/* */
/* {% endblock %}*/
/* */
