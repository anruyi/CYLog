# 在线日志项目开发

## 一、后台功能需求

### （一）必要功能
1. 日志文章相关
* 新建文章
* 文章搜索
* 文章归档[时间、品类]
* **解析MarkDown文件**

2. 用户
* 用户登陆
* 用户注册
* 游客、用户评论

### （二）插件化实现
1. 自动备份
* 七牛
* 万网

2. 安全
* 暂时不会，自学吧

3. 用户体验
* 自适应
* 美观
* 可拓展

## 二、前台功能需求：
### （一）LOGO：
1. Ps简单做一个，CYLeft，主旨，放浪不羁爱自由？
### （二）自适应，高度用户自定义

### （三）界面 bootstrap？不想用

## 三、拓展实现

* 界面可优化
* 用户数据库美化
* 最好用户可以自定义申请自己的日志界面
* 邮箱提醒！

## 四、数据库实现 MySQL

### （一）界面样式表
* 界面样式表
	* id
	* 背景颜色
	* 字体
	* 背景图片
	
### （二）用户表
* 用户表
	* id
	* 头像
	* 用户名
	* 用户密码
	* 用户简介
	* 界面样式选择
	*用户管理员分开使用*
	
### （三）文章表
* 文章表
	* id
	* 标题
	* 作者
	* 时间
	* 完整内容：富文本编辑器（markdown编辑器\wangEditor）
	* 摘要内容
	* 标签有无的标记甚至数量的标记。
	* 自动生成表（可选）
	
### （四）留言表
* 留言表
	* 留言者，留言内容，留言联系方式
	
### （五）标签表
* 标签表
	* id
	* 标签名
	* 标签使用次数
	
### （六）标签、文章关联表
* 标签、文章关联表
	* id
	* 文章id
	* 标签id
