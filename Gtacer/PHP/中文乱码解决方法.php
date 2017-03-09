<?php
header('Content-Type:text/html;charset=utf-8');    //plain控制网页以纯文本的格式显示，html控制网页以html的方式显示
echo "中文".PHP_EOL;
?>
Content-Type：用于定义用户的浏览器或相关设备如何显示将要加载的数据，或者如何处理将要加载的数据

　　MIME：MIME类型就是设定某种扩展名的文件用一种应用程序来打开的方式类型，当该扩展名文件被访问的时候，浏览器会自动使用指定应用程序来打开。多用于指定一些客户端自定义的文件名，以及一些媒体文件打开方式。

　　text/html的意思是将文件的content-type设置为text/html的形式，浏览器在获取到这种文件时会自动调用html的解析器对文件进行相应的处理。

　　text/plain的意思是将文件设置为纯文本的形式，浏览器在获取到这种文件时并不会对其进行处理。

                <!--html中-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />