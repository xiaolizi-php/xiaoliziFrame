小李子PHP框架

作者：小李

QQ：2498131909，482430025

邮箱：xingxuan@xingxuanka.cn

本框架基于medoo twig开发

> **PHP框架各式各样，有很多出色的快速开发框架。但是，很多时候小白从框架开始入门往往会遇到很多难题，可能是因为自身技术不足或许框架的使用难度有点高，或者....。因为，这些问题，作者曾经也遇到过，但最终还是学会了使用这些优秀的框架。这个学的过程是漫长的，也是需要付出更多的时间来慢慢积累经验。但是现在，作者想做出一个疯狂的尝试，想开发出一款，简洁，易懂，易开发小型后端程序的PHP开发框架。可能，这个框架不太完美，不能与市面上的优秀框架媲美。但，作者相信，总有一天会做出一个很好的框架（当然，作者更希望有更多的开发者参与开发贡献代码），毕竟这个尝试也是对自己是一个挑战和学习的过程。 本框架的开发目的是让更多的小白开发者更快速的学习PHP，打造了一款PHP小白也能操作的框架 。**
> 框架需要配置伪静态规则：

Apache

```apache
RewriteEngine on 
RewriteCond %{REQUEST_FILENAME} !-d 
RewriteCond %{REQUEST_FILENAME} !-f 
RewriteRule ^(.*)$ index.php/$1 [L] 
```

Nginx

```Nginx
if (!-d $request_filename){
	set $rule_0 1$rule_0;
}
if (!-f $request_filename){
	set $rule_0 2$rule_0;
}
if ($rule_0 = "21"){
	rewrite ^/(.*)$ /index.php/$1 last;
}
```



