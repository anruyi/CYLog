<?php

/* postEditor.html */
class __TwigTemplate_1917d8c204384255805c5df1adfd77a2499ca0da2c58232b58fcff4d6fbe1c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "postEditor.html", 1);
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
        echo "<title>a</title>
";
        // line 4
        $this->loadTemplate("common/singleHead.html", "postEditor.html", 4)->display($context);
        // line 5
        echo "<form action=\"\"></form>
    <div class=\"container\">
        <!--标题表单组-->
        <div class=\"form-group\">
            <label class=\"col-lg-1 col-md-1 col-sm-2 control-label\">标题</label>
            <div class=\"col-lg-11 col-md-11 col-sm-10\">
                <input type=\"text\" class=\"form-control\" placeholder=\"无标题日志\" maxlength=\"45\" name=\"title\" id=\"title\">
            </div>
        </div>
        <!--标题表单组END-->

        <!--标题作者组-->
        <div class=\"form-group\">
            <label class=\"col-lg-1 col-md-1 col-sm-2 control-label\">作者</label>
            <div class=\"col-lg-11 col-md-11 col-sm-10\">
                <input type=\"text\" class=\"form-control\" placeholder=\"作者\" maxlength=\"15\" name=\"author\" >
            </div>
        </div>
        <!--标题作者组END-->

        <!--摘要表单组-->
        <div class=\"form-group\">
            <label class=\"col-lg-1 col-md-1 col-sm-2 control-label\">摘要</label>
            <div class=\"col-lg-11 col-md-11 col-sm-10\">
                <textarea class=\"form-control\" name=\"summary\" id=\"\" rows=\"8\" placeholder=\"请输入摘要\"></textarea>
            </div>
        </div>
        <!--摘要表单组END-->

        <!--富文本编辑器-->
        <div class=\"form-group\">

            <div id=\"Editor\" name=\"content\">
                <p>欢迎使用 CYLog</p>
            </div>
        </div>
        <!--富文本编辑器END-->

        <!--标签表单组-->
        <div class=\"editor-tags form-group\">
            <label for=\"tags\" class=\"col-lg-1 col-md-1 col-sm-2 control-label\">标签</label>
            <div class=\"col-lg-11 col-md-11 col-sm-10\">
                <input type=\"text\" class=\"form-control\" name=\"tags\" placeholder=\"请输入标签，最多五个\">
            </div>
        </div>
        <!--标签表单组END-->

        <!--其他信息-->
        <div class=\"editor-panel\">
            <div class=\"dropdown\">
                <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                    <span id=\"type\">type</span>
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                    <li><a href=\"#\" onclick=\"dropdown('default')\">default</a></li>
                    <li><a href=\"#\" onclick=\"dropdown('markdown')\">markDown</a></li>
                </ul>
            </div>
        </div>
        <br>

        <!--其他信息END-->
        <br>
        <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"...\">
            <div class=\"btn-group\" role=\"group\">
                <button class=\"btn btn-success\" id=\"submit\"  onclick=\"loadXMLDoc()\">submit</button>
            </div>
            <div class=\"btn-group\" role=\"group\">
                <button type=\"reset\" class=\"btn btn-default\" id=\"reset\">reset</button>
            </div>
        </div>
        <br>

    </div>
</form>
<script type=\"text/javascript\" src=\"/app/assets/release/wangEditor.js\"></script>
<script>
    /**
     * wangEditor
     */
    var E = window.wangEditor;
    var editor2 = new E('#Editor');
    editor2.customConfig.uploadImgServer = '/app/views/dataBase/PostPictures';
    editor2.create();

    /**
     * 实施修改type内相应数据
     */
    function dropdown(str)
    {
        var cont=document.getElementById(\"type\");
        if(str=='default'){
            cont.innerText = 'default';
        }else if (str=='markdown'){
            cont.innerText = 'markdown';
        }
    }

    function getType()
    {
        var cont=document.getElementById(\"type\");
        if(cont.innerText=='type'||cont.innerText=='default'){
            return 0;
        } else if (cont.innerText=='markdown'){
            return 1;
        } else {
            return 0;
        }

    }

    /**
     * post方法传递数据
     */
    function loadXMLDoc()
    {
        var title = \$(\"[name=title]\").val();
        var content = editor2.txt.html();
        var author = \$(\"[name=author]\").val();
        var summary = \$(\"[name=summary]\").val()

        if(getType()==1){
            content = document.getElementById(\"Editor\").innerText;
        }else if(getType()==0)  {
            content = editor2.txt.html();
        }

        if(!title&&!summary&&!author) {
            alert(\"please input somethings in you post then click submit!\");
        }else{
            var xmlhttp;
            xmlhttp=new XMLHttpRequest();

            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById(\"title\").innerHTML=\"notice\";
                }
            };
            xmlhttp.open(\"POST\",\"/admin/posting/\",true);
            xmlhttp.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
            xmlhttp.send(\"title=\"+title+\"&author=\"+author+\"&content=\"+content+\"&summary=\"+summary+\"&type=\"+getType());
        }
    }

    jQuery(document).ready(function(\$){
        \$(\".reset\").click(
            function(){
                \$(\"#userInput\").val(\"\");
                \$(\"#pwd\").val(\"\");
            });
    });

</script>

";
    }

    public function getTemplateName()
    {
        return "postEditor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* {% block content %}*/
/* <title>a</title>*/
/* {% include "common/singleHead.html" %}*/
/* <form action=""></form>*/
/*     <div class="container">*/
/*         <!--标题表单组-->*/
/*         <div class="form-group">*/
/*             <label class="col-lg-1 col-md-1 col-sm-2 control-label">标题</label>*/
/*             <div class="col-lg-11 col-md-11 col-sm-10">*/
/*                 <input type="text" class="form-control" placeholder="无标题日志" maxlength="45" name="title" id="title">*/
/*             </div>*/
/*         </div>*/
/*         <!--标题表单组END-->*/
/* */
/*         <!--标题作者组-->*/
/*         <div class="form-group">*/
/*             <label class="col-lg-1 col-md-1 col-sm-2 control-label">作者</label>*/
/*             <div class="col-lg-11 col-md-11 col-sm-10">*/
/*                 <input type="text" class="form-control" placeholder="作者" maxlength="15" name="author" >*/
/*             </div>*/
/*         </div>*/
/*         <!--标题作者组END-->*/
/* */
/*         <!--摘要表单组-->*/
/*         <div class="form-group">*/
/*             <label class="col-lg-1 col-md-1 col-sm-2 control-label">摘要</label>*/
/*             <div class="col-lg-11 col-md-11 col-sm-10">*/
/*                 <textarea class="form-control" name="summary" id="" rows="8" placeholder="请输入摘要"></textarea>*/
/*             </div>*/
/*         </div>*/
/*         <!--摘要表单组END-->*/
/* */
/*         <!--富文本编辑器-->*/
/*         <div class="form-group">*/
/* */
/*             <div id="Editor" name="content">*/
/*                 <p>欢迎使用 CYLog</p>*/
/*             </div>*/
/*         </div>*/
/*         <!--富文本编辑器END-->*/
/* */
/*         <!--标签表单组-->*/
/*         <div class="editor-tags form-group">*/
/*             <label for="tags" class="col-lg-1 col-md-1 col-sm-2 control-label">标签</label>*/
/*             <div class="col-lg-11 col-md-11 col-sm-10">*/
/*                 <input type="text" class="form-control" name="tags" placeholder="请输入标签，最多五个">*/
/*             </div>*/
/*         </div>*/
/*         <!--标签表单组END-->*/
/* */
/*         <!--其他信息-->*/
/*         <div class="editor-panel">*/
/*             <div class="dropdown">*/
/*                 <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/
/*                     <span id="type">type</span>*/
/*                     <span class="caret"></span>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                     <li><a href="#" onclick="dropdown('default')">default</a></li>*/
/*                     <li><a href="#" onclick="dropdown('markdown')">markDown</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/* */
/*         <!--其他信息END-->*/
/*         <br>*/
/*         <div class="btn-group btn-group-justified" role="group" aria-label="...">*/
/*             <div class="btn-group" role="group">*/
/*                 <button class="btn btn-success" id="submit"  onclick="loadXMLDoc()">submit</button>*/
/*             </div>*/
/*             <div class="btn-group" role="group">*/
/*                 <button type="reset" class="btn btn-default" id="reset">reset</button>*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/* */
/*     </div>*/
/* </form>*/
/* <script type="text/javascript" src="/app/assets/release/wangEditor.js"></script>*/
/* <script>*/
/*     /***/
/*      * wangEditor*/
/*      *//* */
/*     var E = window.wangEditor;*/
/*     var editor2 = new E('#Editor');*/
/*     editor2.customConfig.uploadImgServer = '/app/views/dataBase/PostPictures';*/
/*     editor2.create();*/
/* */
/*     /***/
/*      * 实施修改type内相应数据*/
/*      *//* */
/*     function dropdown(str)*/
/*     {*/
/*         var cont=document.getElementById("type");*/
/*         if(str=='default'){*/
/*             cont.innerText = 'default';*/
/*         }else if (str=='markdown'){*/
/*             cont.innerText = 'markdown';*/
/*         }*/
/*     }*/
/* */
/*     function getType()*/
/*     {*/
/*         var cont=document.getElementById("type");*/
/*         if(cont.innerText=='type'||cont.innerText=='default'){*/
/*             return 0;*/
/*         } else if (cont.innerText=='markdown'){*/
/*             return 1;*/
/*         } else {*/
/*             return 0;*/
/*         }*/
/* */
/*     }*/
/* */
/*     /***/
/*      * post方法传递数据*/
/*      *//* */
/*     function loadXMLDoc()*/
/*     {*/
/*         var title = $("[name=title]").val();*/
/*         var content = editor2.txt.html();*/
/*         var author = $("[name=author]").val();*/
/*         var summary = $("[name=summary]").val()*/
/* */
/*         if(getType()==1){*/
/*             content = document.getElementById("Editor").innerText;*/
/*         }else if(getType()==0)  {*/
/*             content = editor2.txt.html();*/
/*         }*/
/* */
/*         if(!title&&!summary&&!author) {*/
/*             alert("please input somethings in you post then click submit!");*/
/*         }else{*/
/*             var xmlhttp;*/
/*             xmlhttp=new XMLHttpRequest();*/
/* */
/*             xmlhttp.onreadystatechange=function()*/
/*             {*/
/*                 if (xmlhttp.readyState==4 && xmlhttp.status==200)*/
/*                 {*/
/*                     document.getElementById("title").innerHTML="notice";*/
/*                 }*/
/*             };*/
/*             xmlhttp.open("POST","/admin/posting/",true);*/
/*             xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");*/
/*             xmlhttp.send("title="+title+"&author="+author+"&content="+content+"&summary="+summary+"&type="+getType());*/
/*         }*/
/*     }*/
/* */
/*     jQuery(document).ready(function($){*/
/*         $(".reset").click(*/
/*             function(){*/
/*                 $("#userInput").val("");*/
/*                 $("#pwd").val("");*/
/*             });*/
/*     });*/
/* */
/* </script>*/
/* */
/* {%endblock%}*/
