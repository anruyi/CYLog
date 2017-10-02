<?php

/* test.html */
class __TwigTemplate_407bf26f5f53bf63182311070bc95f8476a505d5d763cea1eaffa0d612b9893b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>wangEditor 上传图片</title>
</head>
<body>
    <p>wangEditor 上传图片到服务器</p>
    <div id=\"div3\">
        <p>欢迎使用 wangEditor 富文本编辑器</p>
    </div>

    <p>wangEditor 以base64保存图片文件</p>
    <div id=\"div4\">
        <p>欢迎使用 wangEditor 富文本编辑器</p>
    </div>

    <p>wangEditor 自定义上传图片</p>
    <div id=\"div5\">
        <p>欢迎使用 wangEditor 富文本编辑器</p>
    </div>

    <script type=\"text/javascript\" src=\"/app/assets/release/wangEditor.js\"></script>
    <script type=\"text/javascript\">
        var E = window.wangEditor;

        var editor2 = new E('#div3');
        editor2.customConfig.uploadImgServer = '/upload-img'
//        editor2.customConfig.uploadImgServer = '/app';
        editor2.create();

        var editor1 = new E('#div4');
        editor1.customConfig.uploadImgShowBase64 = true;
        editor1.create();

        var editor = new E('#div5');
        editor.customConfig.customUploadImg = function (files, insert) {
            console.log(files);
            insert('https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png');
        };
        editor.create();
    </script>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>wangEditor 上传图片</title>*/
/* </head>*/
/* <body>*/
/*     <p>wangEditor 上传图片到服务器</p>*/
/*     <div id="div3">*/
/*         <p>欢迎使用 wangEditor 富文本编辑器</p>*/
/*     </div>*/
/* */
/*     <p>wangEditor 以base64保存图片文件</p>*/
/*     <div id="div4">*/
/*         <p>欢迎使用 wangEditor 富文本编辑器</p>*/
/*     </div>*/
/* */
/*     <p>wangEditor 自定义上传图片</p>*/
/*     <div id="div5">*/
/*         <p>欢迎使用 wangEditor 富文本编辑器</p>*/
/*     </div>*/
/* */
/*     <script type="text/javascript" src="/app/assets/release/wangEditor.js"></script>*/
/*     <script type="text/javascript">*/
/*         var E = window.wangEditor;*/
/* */
/*         var editor2 = new E('#div3');*/
/*         editor2.customConfig.uploadImgServer = '/upload-img'*/
/* //        editor2.customConfig.uploadImgServer = '/app';*/
/*         editor2.create();*/
/* */
/*         var editor1 = new E('#div4');*/
/*         editor1.customConfig.uploadImgShowBase64 = true;*/
/*         editor1.create();*/
/* */
/*         var editor = new E('#div5');*/
/*         editor.customConfig.customUploadImg = function (files, insert) {*/
/*             console.log(files);*/
/*             insert('https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png');*/
/*         };*/
/*         editor.create();*/
/*     </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
