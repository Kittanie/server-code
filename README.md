#Wordpress Setup

1. Make custom folder to hold data for this client 

```
$ cd /srv/projects/server-code
$ mkdir felixroad
```

2. Make a mysql data folder

```
$ cd /srv/projects/server-data/wordpress-mysqldata
$ mkdir felixroad
```

3.


/var/lib/mysql


## commands wordpress


```
docker run -d \
	--name felixroad \
	-v /srv/projects/server-data/wordpress-mysqldata/felixroad:/var/lib/mysql \
	-v /srv/projects/server-code/wordpress-themes/felixroad:/var/www/html/wp-content/themes/custom \
	-p 8081:80 \
	tutum/wordpress
```

```
docker run -d \
	--name felixroad \
	-v /srv/projects/server-data/wordpress-mysqldata/felixroad:/var/lib/mysql \
	-v /srv/projects/server-data/wordpress-uploads/felixroad:/var/www/html/wp-content/uploads/custom \
	-v /srv/projects/server-code/wordpress-themes/felixroad:/var/www/html/wp-content/themes/custom \
	-p 8080:80 \
	tutum/wordpress
```

```
docker run -d \
	--name cardwordpress \
	-v /srv/projects/server-data/wordpress-mysqldata/cardmockup:/var/lib/mysql \
	-v /srv/projects/server-code/wordpress-themes/cardmockup:/var/www/html/wp-content/themes/custom \
	-p 8082:80 \
	tutum/wordpress
```

## vagrant commands nginx

Local Host URL: http://didesign.local.digger.io:8080/

```
docker run -d \
	--name nginx \
	-v /srv/projects/server-code/nginx:/etc/nginx/conf.d \
	-v /srv/projects/didesign:/home/websites/didesign \
	-p 80:80 \
	nginx
```
