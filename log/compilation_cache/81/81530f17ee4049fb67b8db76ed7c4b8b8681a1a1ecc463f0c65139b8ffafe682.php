<?php

/* login.html */
class __TwigTemplate_0b20cdbcc888cb0ed5a8c3dfdd677a9cec1b344aeab9da1f2a523a73db254887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
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
        $this->loadTemplate("common/singleHead.html", "login.html", 3)->display($context);
        // line 4
        echo "<head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"/app/assets/css/login.css\">
    <script src=\"/app/assets/js/jquery-2.2.0.min.js\"></script>
</head>


<div class=\"wrapper\">
    <button class=\"loginBtn\">登录</button>
    <form id=\"myForm\" action=\"\" class=\"myForm\" method=\"post\" >

        <div class=\"loginBox\">
            <div class=\"loginBoxCenter\">
                <!--UserName-->
                <p><label for=\"username\">用户名：<?= \$data['username'] ?> end ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "username", array(), "array"), 0, array(), "array"), "html", null, true);
        echo " </label></p>
                <p><input type=\"text\" id=\"username\" name=\"username\" class=\"loginInput\" autofocus=\"autofocus\" required=\"required\" autocomplete=\"off\" placeholder=\"请输入邮箱/手机号\"/></p>
                <!--PassWord-->
                <p><label for=\"password\">密码：</label></p>
                <p><input type=\"password\" id=\"password\" name=\"password\" class=\"loginInput\" required=\"required\" placeholder=\"请输入密码\" /></p>

                <p><a class=\"forgetLink\" href=\"#\">忘记密码?</a></p>
                <input id=\"remember\" type=\"checkbox\" name=\"remember\" />
                <label for=\"remember\">记住登录状态</label>
            </div>
            <div class=\"loginBoxButtons\">
                <button class=\"loginBtn\">登录</button>
                <div> 新用户注册</div>
            </div>
        </div>
    </form>
</div>
<!--<script rel=\"stylesheet\" href=\"/app/assets/js/login.js\"></script>-->
<script>

    \$(\"button\").click(function(){
        var username = \$(\"#username\").val();
        var password = \$(\"#password\").val();
        var content = \"c\";

        var xmlhttp;
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                \$(\".myForm\").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open(\"POST\",\"/admin/login/\",true);
        xmlhttp.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
        xmlhttp.send(\"username=\"+username+\"&password=\"+password+\"&content=\"+content);
    });

</script>

<!--=========尾巴========-->
";
        // line 59
        $this->loadTemplate("common/commonFoot.html", "login.html", 59)->display($context);
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 60,  93 => 59,  49 => 18,  33 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* {% include "common/singleHead.html" %}*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <link rel="stylesheet" href="/app/assets/css/login.css">*/
/*     <script src="/app/assets/js/jquery-2.2.0.min.js"></script>*/
/* </head>*/
/* */
/* */
/* <div class="wrapper">*/
/*     <button class="loginBtn">登录</button>*/
/*     <form id="myForm" action="" class="myForm" method="post" >*/
/* */
/*         <div class="loginBox">*/
/*             <div class="loginBoxCenter">*/
/*                 <!--UserName-->*/
/*                 <p><label for="username">用户名：<?= $data['username'] ?> end {{ data['username'][0] }} </label></p>*/
/*                 <p><input type="text" id="username" name="username" class="loginInput" autofocus="autofocus" required="required" autocomplete="off" placeholder="请输入邮箱/手机号"/></p>*/
/*                 <!--PassWord-->*/
/*                 <p><label for="password">密码：</label></p>*/
/*                 <p><input type="password" id="password" name="password" class="loginInput" required="required" placeholder="请输入密码" /></p>*/
/* */
/*                 <p><a class="forgetLink" href="#">忘记密码?</a></p>*/
/*                 <input id="remember" type="checkbox" name="remember" />*/
/*                 <label for="remember">记住登录状态</label>*/
/*             </div>*/
/*             <div class="loginBoxButtons">*/
/*                 <button class="loginBtn">登录</button>*/
/*                 <div> 新用户注册</div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* <!--<script rel="stylesheet" href="/app/assets/js/login.js"></script>-->*/
/* <script>*/
/* */
/*     $("button").click(function(){*/
/*         var username = $("#username").val();*/
/*         var password = $("#password").val();*/
/*         var content = "c";*/
/* */
/*         var xmlhttp;*/
/*         xmlhttp = new XMLHttpRequest();*/
/*         xmlhttp.onreadystatechange = function() {*/
/*             if (xmlhttp.readyState==4 && xmlhttp.status==200)*/
/*             {*/
/*                 $(".myForm").innerHTML=xmlhttp.responseText;*/
/*             }*/
/*         };*/
/*         xmlhttp.open("POST","/admin/login/",true);*/
/*         xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");*/
/*         xmlhttp.send("username="+username+"&password="+password+"&content="+content);*/
/*     });*/
/* */
/* </script>*/
/* */
/* <!--=========尾巴========-->*/
/* {% include "common/commonFoot.html" %}*/
/* */
/* {% endblock %}*/
