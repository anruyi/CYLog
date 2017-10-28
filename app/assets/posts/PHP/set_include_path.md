#SET_INCLUDE_PATH

## set_include_path样例使用代码
  
设置导入文件的路径头
 ~~~php
 set_include_path('.' . PATH_SEPARATOR . '../library/'. PATH_SEPARATOR . './application/models/'. PATH_SEPARATOR . './application/lib/'. PATH_SEPARATOR . get_include_path()); 
 ~~~
  
## PATH_SEPARATOR,常数
  
  在linux上是一个":"号,WIN上是一个";"号
  
  在win下，当你要include多个路径的话，你要用";"隔开，但在linux下就使用":"隔开的，故产生此方法;

## get_include_path
  
  get_include_path取得当前已有的环境变量