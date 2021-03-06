# oh-my-php
开始学习PHP了。一些学习的源码，以及操作系统环境的配置

## ` PHP `是用来做什么的
之前自己写的页面，搭建的博客基本都是静态的页面，即` html + css + javascript `，也就是网站的内容基本都是写死的，不会动态改变，也就是` 兄弟连学PHP `里面说的是` 网站创建者 `一个人的创作结果，访客无法更改网站页面的内容。而` PHP `作为服务器后台处理的语言，素有` 最好的语言 `之称，在` 兄弟连学PHP `的视频中提到，用户访问网站，所看到的内容是浏览器对` html ` 、` CSS ` 、` JavaScript `这3种语言解释的结果，其中html主要负责网站的内容，css负责网站的布局，js则负责网站的动效(包括一些组件的样式)，服务器的http软件(以Apache为例)对于浏览器发来的url请求，默认情况直接返回所请求的文件，对于后缀名为` .php `的文件，则交给自己的` PHP模块 `处理，处理完成后将生产的html页面返回给请求端。网站上面有些内容是动态生成的，php还会连接数据库，从数据库中取出内容，将内容存放到数据库。所以说http软件只和php发生关系，和数据库没什么关系，所以有时搭建网站的时候，出现数据库连接不成功，是php和数据库的原因，和http软件没有关系。
![前端组件关系](http://ww1.sinaimg.cn/large/005GQrpLgy1g0anjwifogj31xq17caga.jpg)
## 安装环境
我使用的操作系统是` macOS 10.14 `,服务器上面的操作系统上` fedora 29 `,虽然对于` macOS `而言，有很多集成web开发环境的软件，但是我还是比较喜欢自己安装，web组件可选择的有很多，下面是我个人喜欢使用的。是***fedora 29***上面的习惯带过来的
- [x] php
- [x] mariadb
- [x] caddy

这3者都可以通过` brew `这个包管理工具安装:
```bash
brew install php mariadb caddy
```
通过` brew services start php `可以将php作为守护进程在后台启动运行，编辑caddy的配置文件` /usr/local/etc/Caddyfile `来设置网站的根目录，这些守护进程的参数都在` brew services list `里面看到参数的配置文件:
![参数列表](http://ww1.sinaimg.cn/large/005GQrpLgy1g0anzo3wlgj32k41o0noj.jpg)

> 编辑器的选择

我比较喜欢的是:
- Visual Studio Code（我安装了vim插件）
- GVim
