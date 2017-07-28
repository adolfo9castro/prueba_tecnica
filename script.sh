#!/bin/bash
echo "para usar este script se necesita la llave de acceso de AWS"
scp -i "mango.pem" -r /opt/lampp/htdocs/user/ ubuntu@ec2-13-59-58-254.us-east-2.compute.amazonaws.com:.
ssh -i "mango.pem" ubuntu@ec2-13-59-58-254.us-east-2.compute.amazonaws.com

mysql -u root -p

mysql> CREATE DATABASE prueba_adolfo;

mysql> use prueba_adolfo;

mysql> exit;

logout
