PHP 常量 dirname(__file__)
__FILE__ :被称为PHP魔术常量 ,返回当前执行PHP脚本的完整路径和文件名,包含一个绝对路径
1）dirname(__FILE__) 函数返回的是脚本所在在的路径。
比如文件 b.php 包含如下内容：
?
1
2
3
4
5
<?php 
$basedir = dirname(__FILE__); 
echo $basedir
//将在页面打印出一个这个文件所在绝对路径! 
?>
我做的测试得到结果: E:/website/othertest/cms
这个相当于, asp中的server.mappth的用法
如果b.php被其他目录里的a.php文件require 或者 include 去引用的话。 变量$basedir 的内容还是b.php所在的那个文件夹的路径。 而不是变成a.php文件所在的目录。
2）dirname(__FILE__) 一般会返回文件所的当前目录到系统根目录的一个目录结构。
不会返回当前的文件名称。 dirname(__FILE__) 也可能返回一个 . (当前目录) [原因是 b.php 文件在 http.conf 或者 PHP 配置开发环境的默认WEB目录下

几个 PHP 的“魔术常量”
名称 说明 
__LINE__ 文件中的当前行号。 
__FILE__ 文件的完整路径和文件名。如果用在包含文件中，则返回包含文件名。自 PHP 4.0.2 起，__FILE__ 总是包含一个绝对路径，而在此之前的版本有时会包含一个相对路径。 
__FUNCTION__ 函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。 
__CLASS__ 类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。 
__METHOD__ 类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写比如当前文件是放在(d:\www\)下，文件名是test.php。 
测试的代码如下：
?
1
2
3
4
5
<?php 
echo __FILE__ ; // 取得当前文件的绝对地址，结果：D:\www\test.php 
echo dirname(__FILE__); // 取得当前文件所在的绝对目录，结果：D:\www\ 
echo dirname(dirname(__FILE__)); //取得当前文件的上一层目录名，结果：D:\ 
?>
使用方法提示, 
dirname(__FILE__) 取到的是当前文件的绝对路径，也就是说，比起相对路径，查找速度是最快的。 
如果重复一次可以把目录往上提升一个层次: 
比如：$d = dirname(dirname(__FILE__)); 
其实就是把一个目录给dirname()做参数了．因为dirname()返回最后的目录不带\\或者是/ 
所以重复使用的时候可以认为　dirname()　把最下层的目录当成文件名来处理了．照常返回 
当前目录的上级目录.这样重复就得到了它的上一级的目录. 

包含得到上一级目录的文件 
include(dirname(__FILE__).'/../filename.php'); 

__FILE__的路径是当前代码所在文件 

dirname(dirname(__FILE__));得到的是文件上一层目录名 

dirname(__FILE__);得到的是文件所在层目录名

from jiaobenzhijia.com