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
            <ul>
                <li class=\"editor-list list-inline\">
                    <div class=\"row-left\">系统分类</div><br>
                    <div class=\"row-right\">请选择</div><br>
                </li>

                <br>

                <li class=\"editor-type\">
                    原创<br>
                    转贴
                </li>
                <li class=\"editor\">A</li>
                <li class=\"editor\">B</li>
                <li class=\"editor\">C</li>
            </ul>
        </div>
        <!--其他信息END-->
        
        <button class=\"btn btn-success\" id=\"submit\"  onclick=\"loadXMLDoc()\">submit</button>
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
     * post方法传递数据
     */
    function loadXMLDoc()
    {
        var title = \$(\"[name=title]\").val();
        var content = editor2.txt.html();
        var author = \$(\"[name=author]\").val();

        var xmlhttp;
        xmlhttp=new XMLHttpRequest();

        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById(\"title\").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open(\"POST\",\"/admin/posting/\",true);
        xmlhttp.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
        xmlhttp.send(\"title=\"+title+\"&author=\"+author+\"&content=\"+content);
    }
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
/*             <ul>*/
/*                 <li class="editor-list list-inline">*/
/*                     <div class="row-left">系统分类</div><br>*/
/*                     <div class="row-right">请选择</div><br>*/
/*                 </li>*/
/* */
/*                 <br>*/
/* */
/*                 <li class="editor-type">*/
/*                     原创<br>*/
/*                     转贴*/
/*                 </li>*/
/*                 <li class="editor">A</li>*/
/*                 <li class="editor">B</li>*/
/*                 <li class="editor">C</li>*/
/*             </ul>*/
/*         </div>*/
/*         <!--其他信息END-->*/
/*         */
/*         <button class="btn btn-success" id="submit"  onclick="loadXMLDoc()">submit</button>*/
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
/*      * post方法传递数据*/
/*      *//* */
/*     function loadXMLDoc()*/
/*     {*/
/*         var title = $("[name=title]").val();*/
/*         var content = editor2.txt.html();*/
/*         var author = $("[name=author]").val();*/
/* */
/*         var xmlhttp;*/
/*         xmlhttp=new XMLHttpRequest();*/
/* */
/*         xmlhttp.onreadystatechange=function()*/
/*         {*/
/*             if (xmlhttp.readyState==4 && xmlhttp.status==200)*/
/*             {*/
/*                 document.getElementById("title").innerHTML=xmlhttp.responseText;*/
/*             }*/
/*         }*/
/*         xmlhttp.open("POST","/admin/posting/",true);*/
/*         xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");*/
/*         xmlhttp.send("title="+title+"&author="+author+"&content="+content);*/
/*     }*/
/* </script>*/
/* */
/* {%endblock%}*/
