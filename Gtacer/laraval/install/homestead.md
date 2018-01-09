#### 安装 VirtualBox
* 一个虚拟机软件
* 提供虚拟环境支持，运行虚拟机

#### 安装 Vagrant
* 一个创建虚拟机的软件
* 使用它创建 Homestead 虚拟机

#### 使用 Vagrant 增加封装包(Homestead box)
* `vagrant box add laravel/homestead`
* 创建了一个 laravel/homestead 虚拟机盒子
* 一个集成了(Nginx,PHP,MySQL,Postgres,Redis,Memcached)的虚拟机

#### 安装和使用 Homestead (管理脚本)
* `git clone https://github.com/laravel/homestead.git Homestead`
* 一个使用 Ruby 和 Shell 写成的脚本
* 从 `~/Homestead/Homestead.yaml` 读取配置信息，在 provision 时解析为 Vagrant 命令，以此进行对虚拟机的配置

#### 初始化配置文件
* 创建 `Homestead.yaml` 配置文件
  * linux: `bash init.sh`
  * windows: `./init.sh`

#### 配置 Homestead.yaml
* 虚拟机设置
  * ip
  * memory
  * cpus
  * provider
* SSH 密钥登陆配置
  * authorize
  * keys （数组选项，填写本机的 SSH 私钥文件地址）
* 共享文件夹配置
  * folders (将本机上的文件夹映射到虚拟机)
    * map （对应本机文件夹）
    * to （对应 Homestead 上的文件夹）
* 站点配置
  * sites (在本机通过域名访问虚拟机里的应用)
    * map （对应站点域名）
    * to （对应 Homestead 上的文件夹）
* 数据库配置
  * databases (指定数据库名称)
* 自定义变量
  * variables
    * key
    * value

#### 运行 Vagrant
* 进入 Homestead (管理脚本)目录
  * `cd ~/Homestead`
* 启动 vagrant
  *  `vagrant up`
* 通过 SSH 登录 Homestead 虚拟机

#### 安装 Laravel
* 根据 Homestead.yaml 中 sites 的设置，使用 composer 创建 Laravel 项目
  * `composer create-project laravel-laravel Laravel --prefer-dist "5.5.\*"`

#### 通过主机访问 Laravel 站点
* 在主机中通过 Homestead sites.map 中设置的域名，访问虚拟机中的站点

### 安装流程总结：
1. 通过 Vagrant 将 Homestead box 添加到  VirtualBox
2. 通过 Homestead 管理脚本，生成配置文件
3. 通过配置文件中的 folders 与 sites 设置，达到主机与虚拟机通信的目的
4. 通过 Homestead 管理脚本，影响 Vagrant 的行为，从而达到配置虚拟机的目的

### 虚拟环境启动流程总结
1. 从 Homestead管理脚本 目录中运行 Vagrant
2. Homestead管理脚本 读取 Homestead.yaml 中的数据，并解析为 Vagrant 命令
3. Vagrant 根据 Homestead管理脚本 的配置，启动虚拟机

### 开发流程总结
1. 在 Homestead管理脚本 目录 启动 Vagrant
2. 此时 Homestead.yaml 中，folders.map 中设置的主机文件夹，已与 folders.to 中设置的虚拟机文件夹实现了共享，只需要在 folders.map 设置的主机文件夹下进行开发即可
3. 通过 Homestead.yaml 中 sites.map 中设置的域名，即可访问虚拟机上的站点内容

### 访问流程总结
1. 在浏览器中访问 www.test.com
2. 浏览器根据 host 文件，将域名解析为设置的虚拟机地址，并访问该 ip 地址
3. 虚拟机的 80 端口侦听到访问，返回网站内容到主机浏览器
4. 主机上的浏览器显示网站内容
