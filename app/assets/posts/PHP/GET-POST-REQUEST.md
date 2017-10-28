# GET、POST、REQUEST区别和共性

## 一、$_GET 变量

>预定义的 $_GET 变量用于收集来自 method="get" 的表单中的值。
从带有 GET 方法的表单发送的信息，对任何人都是可见的（会显示在浏览器的地址栏），并且对发送信息的量也有限制。**$_GET 变量的安全性不如$_POST**

实例
~~~html
<form action="get.php" method="get">  
Name: <input type="text" name="name">  
Age:  <input type="text" name="age">  
      <input type="submit" value="提交">  
</form> 
~~~

  
  当用户点击 "Submit" 按钮时，发送到服务器的 URL (如果没另外设置路由)如下所示：http://www.xxx.com/get.php?name=XXX&age=XXX, 很明显，你提交的信息都会显性的暴露在浏览器中，**所以在发送密码或其他敏感信息时，不应该使用这个方法！**
  
  "get.php" 文件现在可以通过 $_GET['name']、$GET['age']变量来收集表单数据了（表单域的名称会自动成为 $_GET 数组中的键）

  但是，正因为变量显示在 URL 中，所以我们可以在收藏夹中收藏该页面。在某些情况下，这是有用的。

  它的值是不能超过 2000 个字符的。

## 二、$_POST 变量

预定义的 $_POST 变量用于收集来自 method="post" 的表单中的值。

从带有 POST 方法的表单发送的信息，对任何人都是不可见的（不会显示在浏览器的地址栏），并且对发送信息的量也没有限制。

注释：然而，默认情况下，POST 方法的发送信息的量最大值为 8 MB（可通过设置 php.ini 文件中的 post_max_size 进行更改）。

实例
~~~html
<form action="post.php" method="post">  
Name: <input type="text" name="name">  
Age:  <input type="text" name="age">  
      <input type="submit">  
</form>
~~~
当用户点击 "Submit" 按钮时，URL 如下所示：http://www.xxx.com/post.php
"post.php" 文件可以通过 $_POST （表单域的名称会自动成为 $_POST 数组中的键）

然而，由于变量不显示在 URL 中，所以无法把页面加入书签。
主要区别如下：
① 安全性 post>get
② 数据传输大小 [浏览器]post>get
③ 保存到收藏夹 get比较方便.

## 三、PHP $_REQUEST 变量

预定义的 $_REQUEST 变量包含了 $_GET、$_POST 和 $_COOKIE 的内容。

  
  $_REQUEST 变量可用来收集通过 GET 和 POST 方法发送的表单数据。
  
  $_REQUEST 变量既可以收集GET方法发送的数据，也可以接受POST方法接受的数据。

注意事项:
  
  1、不要经常使用$_REQUEST,
  
  2、如果不确定_GET/POST

所以在你接收数据时候，可以这样判断一下
~~~php
if($_SERVER['REQUEST_METHOD’]=="POST"){  
    $echo $_POST['名字'];  
}else if($_SERVER[’ REQUEST_METHOD’]=="GET"){  
    //用 _GET接收.  
}  
~~~