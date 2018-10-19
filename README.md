# 诊所WIKI项目

利用`docker-compose`快速部署，持久运维`mediaWiki`

## 项目简介

这个项目的主要作用是利用`docker-compose`，提供了部署小型mediawiki的能力。其实在github上也有一个类似的项目，但是那个用到了`elasticsearch`，对内存占用较大。本来用到的`parsoid`，`restbase`的dockerfile也是自己写的，但是一直有配置问题，于是就使用了`github`上的项目。

## 目录结构

- docs `存放文档`
  - dev-documentation
  - extensions-list
- mediawiki ``
  - assets `加入到 /var/www/html/resources/assets/`
  - extensions `加入到 /var/www/html/extensions`
  - skins `加入到 /var/www/html/skins`
  - dockerfile
- parsoid-docker `提供parsoid的dockerfile`
- restbase-docker `提供restbase的dockerfile`
- self-made-node-server `自己写的， 目前弃用`
- LocalSettings-example.php `LocalSettings.php 的样例，其中自定义的部分非常重要`


## 注意

- 请把 docker-compose 中 restbase 和 parsoid 用gitlab的镜像
- LocalSettings-123.php 是校内的最全的配置
