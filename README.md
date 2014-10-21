#Wordpress Setup

1. Make custom folder to hold data for this client 

```
$ cd /srv/projects/wordpress
$ mkdir felixroad
```

2. Make a mysql data folder

```
$ cd /srv/projects/wordpress/felixroad
$ mkdir mysqldata
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
	--name cardwordpress \
	-v /srv/projects/server-data/wordpress-mysqldata/cardmockup:/var/lib/mysql \
	-v /srv/projects/server-code/wordpress-themes/cardmockup:/var/www/html/wp-content/themes/custom \
	-p 8082:80 \
	tutum/wordpress
```

## vagrant commands nginx

```
docker run -d \
	--name nginx \
	-v /srv/projects/server-code/nginx:/etc/nginx/conf.d \
	-v /srv/projects/didesign:/home/websites/didesign \
	-v /srv/projects/withyou:/home/websites/withyou \
	-p 80:80 \
	nginx
```