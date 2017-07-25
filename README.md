# PHP_MySQL

## 主要是
1. Login, Logout, Cookie
2. Register: new user

## YouTube 来源： [PHP MySQL Tutorials](https://www.youtube.com/playlist?list=PL712637B6CB66DB50)
1. 从视频上传时间看：2012年7月份上传的4集视频，作者前前后后用了10多天时间。
2. 很多处理数据库用到的函数都是弃用、不宜用（deprecated）。
```
Deprecated: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead 
```
3. 注意打开扩展
```
extension=php_mysql.dll
extension=php_mysqli.dll
```
都打开吧（在 php.ini 中打开）。否则会出现 Fatal error: Call to undefined function mysql_connect()
4. 原视频的作者使用了 phpMyAdmin 设置数据库。（phpMyAdmin 是 XAMPP 集成的 Web UI 的图形化工具）。我们可以选择 Navicat

配置php.ini去掉警告信息(NOTICE)的方法
xampp\php\php.ini display_error = off

