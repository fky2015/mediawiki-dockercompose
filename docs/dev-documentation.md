# 一些Tips

## parsoid

- version `v0.9.0`

## restbase

- version `v0.19.2`

## 部署阶段

可以直接使用
`docker-compose up`

### node build 失败

以上状况在aliyun上出现过
修改解析即可

```json
"dns": ["10.0.0.2", "8.8.8.8"]
```

### 明明有这个插件却说没有extensions.json, 用了require_once却说permission denied

修改权限
```bash
chown www-data:www-data extension skin -R
chmod 754  extension skin -R
```

### avatar 等 图像类插件无法使用

```bash
chown www-data:www-data image -R
```

### 刚安装后

`php maintenance/update.php`
修改favicon和logo

### 2018-10-13 关于 node-services 修改

今天龙神找我谈到关于mathjax的事情,然后我想起来我也没有配置数学编辑器.
配置过程中发现mathjax其实已经不支持了,连simplemath也有了问题.
所以打算使用mathoid,然后发现其实是math插件调用mathoid服务进行公式渲染.
然后发现配置完mathoid之后始终报错`Math extension cannot connect to Restbase.`
后来对比wikipeida的restbase api才明白, restbase是要特殊配置的,所以老的restbase就不行了
所以打算使用新的node-services(官方出品)

`https://github.com/wikimedia/mediawiki-node-services`

---

## 插件使用

## [Extension:google Analysis Integretion](https://www.mediawiki.org/wiki/Extension:Google_Analytics_Integration)

上面似乎说这个的比较老了, 推荐用headScript插入新的GA标签

## [Extension:HeadScript](https://www.mediawiki.org/wiki/Extension:MsUpload)

替换原有google的

## [Extension:Info](https://www.mediawiki.org/wiki/Extension:Info/zh)

The Info extension adds a info tab on all normal pages, that allows us to display the site information quickly.

## [Extension:HostStats](https://www.mediawiki.org/wiki/Extension:HostStats/zh)

注意权限配置

## [Extension:NewUserMessage]()

## [Extension:AntiSpoof](https://www.mediawiki.org/wiki/Extension:AntiSpoof/zh)
需要另做设置, 更新php

## [Extension:SocialProfile](https://www.mediawiki.org/wiki/Extension:SocialProfile)

## [Extension:UserWelcome](https://www.mediawiki.org/wiki/Extension:UserWelcome)

## [Extension:Linter](https://www.mediawiki.org/wiki/Extension:Linter/zh)
## [Extension:Score](https://www.mediawiki.org/wiki/Extension:Score#Installation)

可插入乐谱, 需要进一步配置.

## [Extension:CiteThisPage](https://www.mediawiki.org/wiki/Extension:CiteThisPage)
需要掌握一定的编辑能力才能使用

## [Extesion:hoststats](https://www.mediawiki.org/wiki/Extension:HostStats)

这个需要注意权限管理,应该不能给所有的sysop权限

## [Extension:Lint](https://www.mediawiki.org/wiki/Extension:Linter#Configuration_parameters)

需要用到 Parsoid,
In your Parsoid config.yaml, set:
```yaml
        linting: true
        linter:
            sendAPI: true
```


## [Extension:Score](https://www.mediawiki.org/wiki/Extension:Score/zh#Installation)

需要

```bash
lilypond
Abc2Ly
timidity
```

安装

```bash
curl -O http://lilypond.org/download/binaries/linux-64/lilypond-2.18.2-1.linux-64.sh

# 进而安装 lilypond 与 Abc2Ly

apt update && apt install timidity
# 会安装timidity
```

因为目前没有需求, 所以没用直接安装在docker中