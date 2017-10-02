<?php

/* plug/twitter.html */
class __TwigTemplate_0ed0d76fb24927e0eea27e02663c15b9e3e618903d904c3d9368503dd610a582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'twitter' => array($this, 'block_twitter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('twitter', $context, $blocks);
    }

    public function block_twitter($context, array $blocks = array())
    {
        // line 2
        echo "<aside class=\"row m0 widget widget-twitter\">
    <div class=\"widget-twitter-inner\">
        <h5 class=\"widget-meta\"><i class=\"fa fa-twitter\"></i>Twitter feed <a href=\"http://twitter.com/chivalricblog\">@chivalricblog</a></h5>
        <div class=\"row tweet-texts\">
            <p>Check out new post on my blog <a href=\"http://twitter.com/#natureshot\">#natureshot</a> <a href=\"http://bit.ly/blog\">http://bit.ly/blog</a></p>
        </div>
        <div class=\"row timepast\">1 day ago</div>
    </div>
</aside>
";
    }

    public function getTemplateName()
    {
        return "plug/twitter.html";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
/* {% block twitter %}*/
/* <aside class="row m0 widget widget-twitter">*/
/*     <div class="widget-twitter-inner">*/
/*         <h5 class="widget-meta"><i class="fa fa-twitter"></i>Twitter feed <a href="http://twitter.com/chivalricblog">@chivalricblog</a></h5>*/
/*         <div class="row tweet-texts">*/
/*             <p>Check out new post on my blog <a href="http://twitter.com/#natureshot">#natureshot</a> <a href="http://bit.ly/blog">http://bit.ly/blog</a></p>*/
/*         </div>*/
/*         <div class="row timepast">1 day ago</div>*/
/*     </div>*/
/* </aside>*/
/* {% endblock %}*/
