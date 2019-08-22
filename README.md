# build and run docker
```
$ docker build -t alpine-nginx-php-oci8 .

$ docker run -it -p 8080:80 -v /Users/montreebungnasang/dev/project/docker/alpine-nginx-php-oci8/app:/app alpine-nginx-php-oci8

```