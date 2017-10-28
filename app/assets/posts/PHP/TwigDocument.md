# Documentation
开始之前，为了开始安装并使用这些简明的代码，我们建议你先阅读这个导航文档
## 一、开始

### （一）new Medoo()
>极度轻松的使用Medoo

>这是一个指导你使用Medoo框架并开始一个数据库连接的导航
#### 使用要求
+ PHP >= 5.4 && PDO supported
+ 安装类似MySQL、MSSQL、SQLite或者其他类似的数据库 
+ 确定php_pdo_xxx组件已经正确的安装并开启
+ 了解一点点SQL知识
#### Tips
> 在PHP5.4以上版本，我们将会使用[]表示数组而不是array()，请确保你会使用‘[]’语法
~~~php
//in the past
$data = array("foo","bar");

//at present
$data = ['foo','bar'];
~~~

### （二）PHP_PDO 组件清单
+ MySQL, MariaDB ->  php_pdo_mysql
+ MSSQL (Windows) -> php_pdo_sqlsrv
+ MSSQL (Linux/UNIX) -> php_pdo_dblib
+ Oracle -> php_pdo_oci
+ Oracle version 8 -> php_pdo_oci8
+ SQLite -> php_pdo_sqlite
+ PostgreSQL -> php_pdo_pgsql
+ Sybase -> php_pdo_dblib

#### PHP PDO驱动安装
> Medoo依赖PDO，如果你的PHP配置文件并没有开启这个，请紧随这个步骤 
~~~php
// Open php.ini and remove the ';' for the database extension you want to install.
 
// .dll is for Windows and .so for Linux/UNIX
 
// From
;extension=php_pdo_mysql.dll
;extension=php_pdo_mysql.so
 
// To
extension=php_pdo_mysql.dll
extension=php_pdo_mysql.so
 
// Save it, and restart PHP or Apache server.
 
// If PDO is installed successfully, you can find it on phpinfo().
~~~

> 或者你也可以通过终端自动安装
~~~bash
$ sudo apt-get install php5-mysql
~~~

#### Composer 安装方式

~~~
$ composer require catfan/Medoo
~~~
> 紧接着更新composer

#### 配置
> 三种方式配置Medoo开启数据库连接
~~~php
// If you installed via composer, just use this code to requrie autoloader on the top of your projects.
require 'vendor/autoload.php';
 
// Using Medoo namespace
use Medoo\Medoo;
 
$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'name',
	'server' => 'localhost',
	'username' => 'your_username',
	'password' => 'your_password',
 
	// [optional]
	'charset' => 'utf8',
	'port' => 3306,
 
	// [optional] Table prefix
	'prefix' => 'PREFIX_',
 
	// [optional] Enable logging (Logging is disabled by default for better performance)
	'logging' => true,
 
	// [optional] MySQL socket (shouldn't be used with server and port)
	'socket' => '/tmp/mysql.sock',
 
	// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
	'option' => [
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	],
 
	// [optional] Medoo will execute those commands after connected to the database for initialization
	'command' => [
		'SET SQL_MODE=ANSI_QUOTES'
	]
]);
 
$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com"
]);
~~~
### （四）和主流框架的契合
> Medoo
Medoo是一个和众多框架友好合作的框架，你可以You can register Medoo object via singleton extension that most of full-stack frameworks supported, and access back directly with the registered name. For more details, you can read about their official documentation about how to co-work with third-party library.

#### Laravel

#### Slim

### （五）Medoo1.4新特性
> 相比旧版Medoo1.4拥有很多不兼容的升级，如果你想要更新Medoo版本，请跟着导航阅读这些文字

#### 初始化
~~~php
// old
$account_id = $database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25
]);

// new
$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25
]);
 
$account_id = $database->id();
~~~

#### Last Insert ID
~~~php
// old
$account_id = $database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25
]);

// new
$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25
]);
 
$account_id = $database->id();
~~~

#### New API
~~~php
// old
$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25
]);
 
$database->last_query();

// new
$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25
]);
 
$database->last();
~~~

## 二、查询

### （一）SELECT
~~~php
select($table, $columns, $where)
~~~

~~~php
select($table, $join $columns, $where)
~~~

#### 关联表
> SQL JOIN clause can combine rows together between two table. Medoo provide simple syntax for JOIN clause.大致上是提供简明的方法进行多表查询

~~~php
// [>] == LEFT JOIN
// [<] == RIGH JOIN
// [<>] == FULL JOIN
// [><] == INNER JOIN
 
$database->select("post", [
	// Here is the table relativity argument that tells the relativity between the table you want to join.
 
	// The row author_id from table post is equal the row user_id from table account
	"[>]account" => ["author_id" => "user_id"],
 
	// The row user_id from table post is equal the row user_id from table album.
	// This is a shortcut to declare the relativity if the row name are the same in both table.
	"[>]album" => "user_id",
 
	// [post.user_id is equal photo.user_id and post.avatar_id is equal photo.avatar_id]
	// Like above, there are two row or more are the same in both table.
	"[>]photo" => ["user_id", "avatar_id"],
 
	// If you want to join the same table with different value,
	// you have to assign the table with alias.
	"[>]account (replyer)" => ["replyer_id" => "user_id"],
 
	// You can refer the previous joined table by adding the table name before the column.
	"[>]account" => ["author_id" => "user_id"],
	"[>]album" => ["account.user_id" => "user_id"],
 
	// Multiple condition
	"[>]account" => [
		"author_id" => "user_id",
		"album.user_id" => "user_id"
	]
], [
	"post.post_id",
	"post.title",
	"account.user_id",
	"account.city",
	"replyer.user_id",
	"replyer.city"
], [
	"post.user_id" => 100,
	"ORDER" => ["post.post_id" => "DESC"],
	"LIMIT" => 50
]);
 
// SELECT
// 	`post`.`post_id`,
// 	`post`.`title`,
// 	`account`.`city`
// FROM `post`
// LEFT JOIN `account` ON `post`.`author_id` = `account`.`user_id`
// LEFT JOIN `album` USING (`user_id`)
// LEFT JOIN `photo` USING (`user_id`, `avatar_id`)
// WHERE
// 	`post`.`user_id` = 100
// ORDER BY `post`.`post_id` DESC
// LIMIT 50
~~~

### （二）INSERT

插入新纪录

~~~php
insert($table, $data)
~~~

#### Last Insert ID
插入记录后获取row ID
~~~php
$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25
]);
 
$account_id = $database->id();
~~~

#### 对象序列化（将对象当作字符串存储）
在你插入数组数据前，Medoo将会默认使用serialize()将其序列化，但是可以通过标志JSON来让程序使用json_encode()序列化数据
~~~php
$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25,
	"lang" => ["en", "fr", "jp", "cn"] // => 'a:4:{i:0;s:2:"en";i:1;s:2:"fr";i:2;s:2:"jp";i:3;s:2:"cn";}'
]);
 
$database->insert("account", [
	"user_name" => "foo",
	"email" => "foo@bar.com",
	"age" => 25,
	"lang [JSON]" => ["en", "fr", "jp", "cn"] // => '["en","fr","jp","cn"]'
]);
~~~

#### Type Auto-detection
>数据插入、优化前，Medoo自动识别数据类型

~~~php
class Foo {
	var $bar = "cat";
 
	public function __wakeup()
	{
		$this->bar = "dog";
	}
}
 
$object_data = new Foo();
 
$fp = fopen($_FILES[ "file" ][ "tmp_name" ], "rb");
 
$database->insert("account", [
	// String value
	"user_name" => "foo",
 
	// Integer value
	"age" => 25,
 
	// Boolean value
	"is_locked" => true,
	
	// Array value
	"lang" => ["en", "fr", "jp", "cn"],
 
	// Array value encoded as JSON
	"lang [JSON]" => ["en", "fr", "jp", "cn"],
 
	// Object value
	"object_data" => $object_data,
 
	// Large Objects (LOBs)
	"image" => $fp
]);
~~~