FROM php:8.4-cli
COPY . /home/dev/slcl
WORKDIR /home/dev/slcl
CMD [ "php", "./configure.php" ]