<?php
echo '<br>';
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<a href=\"$multiple\">反回首页</a>]";
echo '<br>';
echo '<br>';
echo "显示脚本文件的相对路径和文件名:\"".$_SERVER["PHP_SELF"]."\"<br>";
echo "显示服务器使用的CGI脚本规范:\"".$_SERVER["GATEWAY_INTERFACE"]."\"<br>";
echo "显示当前运行脚本所在服务器的IP地址:\"".$_SERVER["SERVER_ADDR"]."\"<br>";
echo "显示当前运行脚本服务器名称:\"".$_SERVER["SERVER_NAME"]."\"<br>";
echo "显示当前运行脚本服务器标识:\"".$_SERVER["SERVER_SOFTWARE"]."\"<br>";
echo "显示请求页面的通信协议的名称和版本:\"".$_SERVER["SERVER_PROTOCOL"]."\"<br>";
echo "显示访问页面的请求方法:\"".$_SERVER["REQUEST_METHOD"]."\"<br>";
echo "显示脚本开始运行时间:\"".$_SERVER["REQUEST_TIME"]."\"<br>";
echo "显示URL问号后的字符串:\"".$_SERVER["QUERY_STRING"]."\"<br>";
echo "显示当前运行脚本的文档根目录:\"".$_SERVER["DOCUMENT_ROOT"]."\"<br>";
echo "显示当前Accept请求的头信息:\"".$_SERVER["HTTP_ACCEPT"]."\"<br>";
echo "显示当前请求的字符信息:\"".$_SERVER["HTTP_ACCEPT_CHARSET"]."\"<br>";
echo "显示当前当前请求的Accept-Encoding头信息:\"".$_SERVER["HTTP_ACCEPT_ENCODING"]."\"<br>";
echo "显示当前请求的Accept-Language头信息:\"".$_SERVER["HTTP_ACCEPT_LANGUAGE"]."\"<br>";
echo "显示当前请求的Connection头信息:\"".$_SERVER["HTTP_CONNECTION"]."\"<br>";
echo "显示当前请求的Host头信息:\"".$_SERVER["HTTP_HOST"]."\"<br>";
echo "显示当前页面的前一个页面的URL地址:\"".$_SERVER["HTTP_REFERER"]."\"<br>";
echo "显示当前请求的User-Agent的头信息:\"".$_SERVER["HTTP_USER_AGENT"]."\"<br>";
echo "显示脚本是否可以通过HTTPS协议进行访问:\"".$_SERVER["HTTPS"]."\"<br>";
echo "显示浏览当前页面用户的IP地址:\"".$_SERVER["REMOTE_ADDR"]."\"<br>";
echo "显示浏览当前页面用户的主机名:\"".$_SERVER["REMOTE_HOST"]."\"<br>";
echo "显示用户连接到服务器时所使用的端口:\"".$_SERVER["REMOTE_PORT"]."\"<br>";
echo "显示当前执行脚本的绝对路径名:\"".$_SERVER["SCRIPT_FILENAME"]."\"<br>";
echo "显示Apache配置文件中的SERVER_ADMIN参数设置情况:\"".$_SERVER["SERVER_ADMIN"]."\"<br>";
echo "显示网络服务器使用的端口,默认为\"80\":\"".$_SERVER["SERVER_PORT"]."\"<br>";
echo "显示服务器版本和虚拟主机名的字符串:\"".$_SERVER["SERVER_SIGNATURE"]."\"<br>";
echo "显示脚本在文件系统中的基本路径:\"".$_SERVER["PATH_TRANSLATED"]."\"<br>";
echo "显示当前脚本的路径:\"".$_SERVER["SCRIPT_NAME"]."\"<br>";
echo "显示访问当前页面的URI:\"".$_SERVER["REQUEST_URI"]."\"<br>";

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

function getClientIp(){
  
  if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown')){
   $onlineip = getenv('HTTP_CLIENT_IP');
  }
  elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown')){
   $onlineip = getenv('HTTP_X_FORWARDED_FOR');
  }
  elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'),'unknown')){
   $onlineip = $_SERVER['REMOTE_ADDR'];
  }
  preg_match("/[\d\.]{7,15}/", $onlineip, $onlineipmatches);
  $onlineip = $onlineipmatches[0] ? $onlineipmatches[0] : 'unknown'; 

  return $onlineip; 
 }



?>