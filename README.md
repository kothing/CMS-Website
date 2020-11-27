# SiteCMS

网址导航系统

Demo http://site.nice-boy.com

### 安装步骤

-   上传文件到 web 服务器目录

-   复制根目录下的 .env.example 文件并重命名为 .env

```
cp .env.example .env
```

-   然后打开生成的.env 文件修改数据库配置：

```
DB_CONNECTION 数据库类型，保持默认 mysql
DB_HOST 数据库服务器地址，一般填写 localhost 或者 127.0.0.1
DB_PORT 数据库端口地址 默认 3306 不用修改
DB_DATABASE 数据库名称
DB_USERNAME 数据库用户名
DB_PASSWORD=数据库密码
```

-   使用 composer 加载扩展应用

```
composer install
```

-   生成 系统密令 key ；

```
php artisan key:generate
```

-   生成数据表；

```
php artisan migrate
```

-   生成初始化的数据；

```
php artisan db:seed
```

-   最后清理系统缓存

```
php artisan cache:clear
```
