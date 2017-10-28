<?php

/* register.html */
class __TwigTemplate_7aee4365f87021d9e30b5f7bde71e04d1175750c911438f454dec97eba5dfbb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "register.html", 1);
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
        $this->loadTemplate("common/singleHead.html", "register.html", 3)->display($context);
        // line 4
        echo "<style>
    .form-container {
        background-color: #fff;
        padding: 20px;
    }

    .btn-submit {
        /*color: black;*/
        background-color: #42d9bc;
    }
</style>

<div class=\"container form-container\">
    <form method=\"post\" action=\"\">
        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                <label class=\"col-form-label\">昵称</label>
                <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"nickName\">
            </div>
            <div class=\"form-group col-md-6\">
                <label class=\"col-form-label\">电话</label>
                <input type=\"tel\" class=\"form-control\" placeholder=\"tel\">
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                <label class=\"col-form-label\">邮箱</label>
                <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
            </div>
            <div class=\"form-group col-md-6\">
                <label class=\"col-form-label\">密码</label>
                <input type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\">
            </div>
        </div>

        <div class=\"form-group\">
            <label  class=\"col-form-label\">简介</label>
            <input type=\"text\" class=\"form-control\" id=\"inputIntroduce\" placeholder=\"introduction\">
        </div>

        <div class=\"form-group\">
            <label class=\"col-form-label\">备用地址</label>
            <input type=\"text\" class=\"form-control\" id=\"inputAddress2\" placeholder=\"Apartment, studio, or floor\">
        </div>

        <div class=\"form-group\">
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input class=\"form-check-input\" type=\"checkbox\"> Check me out
                </label>
            </div>
        </div>
        <button class=\"btn btn-primary btn-submit\" id=\"btn-submit\">Sign in</button>
    </form>
</div>

<script src=\"/app/assets/js/jquery-2.2.0.min.js\"></script>
<script>

\$(\"#btn-submit\").click(
    function() {
        var nickName = \$(\"#inputName\").val();
        var email = \$(\"#inputEmail\").val();
        var password = \$(\"#inputPassword\").val();
        var xmlhttp;

        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            }
        };

        xmlhttp.open(\"POST\",\"/index/register/\",true);
        xmlhttp.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
        xmlhttp.send(\"username=\"+nickName+\"&password=\"+password+\"&email=\"+email);
    }
);

</script>

";
        // line 84
        $this->loadTemplate("common/commonFoot.html", "register.html", 84)->display($context);
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 84,  33 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* {% include "common/singleHead.html" %}*/
/* <style>*/
/*     .form-container {*/
/*         background-color: #fff;*/
/*         padding: 20px;*/
/*     }*/
/* */
/*     .btn-submit {*/
/*         /*color: black;*//* */
/*         background-color: #42d9bc;*/
/*     }*/
/* </style>*/
/* */
/* <div class="container form-container">*/
/*     <form method="post" action="">*/
/*         <div class="form-row">*/
/*             <div class="form-group col-md-6">*/
/*                 <label class="col-form-label">昵称</label>*/
/*                 <input type="text" class="form-control" id="inputName" placeholder="nickName">*/
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label class="col-form-label">电话</label>*/
/*                 <input type="tel" class="form-control" placeholder="tel">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-row">*/
/*             <div class="form-group col-md-6">*/
/*                 <label class="col-form-label">邮箱</label>*/
/*                 <input type="email" class="form-control" id="inputEmail" placeholder="Email">*/
/*             </div>*/
/*             <div class="form-group col-md-6">*/
/*                 <label class="col-form-label">密码</label>*/
/*                 <input type="password" class="form-control" id="inputPassword" placeholder="Password">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label  class="col-form-label">简介</label>*/
/*             <input type="text" class="form-control" id="inputIntroduce" placeholder="introduction">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="col-form-label">备用地址</label>*/
/*             <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <div class="form-check">*/
/*                 <label class="form-check-label">*/
/*                     <input class="form-check-input" type="checkbox"> Check me out*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/*         <button class="btn btn-primary btn-submit" id="btn-submit">Sign in</button>*/
/*     </form>*/
/* </div>*/
/* */
/* <script src="/app/assets/js/jquery-2.2.0.min.js"></script>*/
/* <script>*/
/* */
/* $("#btn-submit").click(*/
/*     function() {*/
/*         var nickName = $("#inputName").val();*/
/*         var email = $("#inputEmail").val();*/
/*         var password = $("#inputPassword").val();*/
/*         var xmlhttp;*/
/* */
/*         xmlhttp = new XMLHttpRequest();*/
/*         xmlhttp.onreadystatechange = function () {*/
/*             if (xmlhttp.readyState==4 && xmlhttp.status==200) {*/
/*             }*/
/*         };*/
/* */
/*         xmlhttp.open("POST","/index/register/",true);*/
/*         xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");*/
/*         xmlhttp.send("username="+nickName+"&password="+password+"&email="+email);*/
/*     }*/
/* );*/
/* */
/* </script>*/
/* */
/* {% include "common/commonFoot.html" %}*/
/* {% endblock %}*/
/* */
