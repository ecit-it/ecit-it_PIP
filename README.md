PIP
英文全称为：College students post practice platform
中文名为：大学生岗位实习平台
=====================================================================================================================
College students' post internship platform installation and configuration instructions
The configuration source program
1. Install download appserv - win32-2.5.10. Exe software (installed best in D packing directory, in the process of password is set to 8748 (set for other please change the database connection
Related files), in the language dropdown list, select simplified Chinese)
2. Additional database
Copies db_pip folder in the data folder into AppServ AppServ \ MySQL/data folder under the installation path, additional MySQL database operation to complete.
2. The release under the AppServ the program
(1) college students post internship platform copy all files to the AppServ in the WWW/PIP folder under the installation path please to set up folders (PIP).
(2) open the IE browser, type http://localhost/pip in the address bar, you can run the program.
"127.0.0.1" note: the default port number is "80", if the port number used when installation of Apache server is not the default setting, but the custom (to prevent it
Mouth conflict strongly build meaning is modified to 8080), you need to input "http://localhost:8080/pip" in the address bar, you can correct operation procedures.
Operation matters needing attention
(1) the system administrator user name: tsoft, password is: 111.
(2) the system has two kinds of user operation, one kind is ordinary registered users, only can view the information; One is administrator, you can look at, and deleting information BBS posts.
Operation process
User not logged in before, can view the post information and comment. If you want to apply for jobs, post, comment, post, modify user information information, need to log in, click on the first
"Register" button, enter the registered user name and password and related information. After registration, enter the normal user operation page.
In this page, can post information and comment. If you want to apply for jobs, post, comment, post, modify user information.
The administrator of this system information is stored in the database, the application cannot add, modify, and delete. In the blog home page login enter the administrator user name, password and validation code,
Enter the administrator page operation. Administrators with all of the user's permissions, ordinary also can delete the post information, comments, pictures and modify their own information, management of the ordinary
The user information and public announcement.

大学生岗位实习平台安装与配置使用说明书
配置源程序
1．安装下载的appserv-win32-2.5.10.exe软件（最好安装在D盘根目录下，安装过程中密码设为8748(设为其他请自行修改数据库连接
的相关文件)，在语言下拉列表中选择简体中文）
2．附加数据库
将data文件夹中的db_pip文件夹拷贝到AppServ安装路径下的AppServ\MySQL\data文件夹中，即可完成附加MySQL数据库的操作。
2．将程序发布到AppServ下
（1）将大学生岗位实习平台全部文件夹拷贝到AppServ安装路径下www/pip文件夹中(pip文件夹请自行建立)。
（2）打开IE浏览器，在地址栏中输入http://localhost/pip，即可运行程序。
　　注意：“127.0.0.1”的默认端口号为“80”，在安装Apache服务器时如果端口号采用的不是默认设置，而是用户自定义的（为防止端
　　口冲突强烈建意修改为8080），那么需要在地址栏中输入“http://localhost:8080/pip”，即可正确运行程序。
操作注意事项
（1）本系统管理员用户名为：tsoft，密码为：111。
（2）本系统有两种操作用户，一种是普通的注册用户，只可以查看信息；一种是管理员，可以查看、删除论坛帖子信息。
操作流程
用户未登录前，可以查看岗位信息及发表评论。如果想要申请岗位、发布帖子、评论帖子、修改用户信息等信息，需要登录，首先单击
“注册”按钮，输入注册用户名和密码等相关信息。注册成功后，进入普通用户操作页面。
在该页面中，可以岗位信息及发表评论。如果想要申请岗位、发布帖子、评论帖子、修改用户信息等操作。
　　本系统的管理员信息是保存在数据库中的，程序中不可添加、修改及删除。在博客首页登录处输入管理员用户名、密码及验证码，
　　进入管理员操作页面。管理员具有普通用户的所有权限，还可以删除帖子信息、评论信息、图片及修改自己的相关信息，管理普通
　　用户信息及公告信息。
License
=======================================================================================================================
MIT licensed

Copyright (C) 2012 huidaoli 、ecit-it.com, http://ecit-it.com               http://huidaoli.web-164.com
