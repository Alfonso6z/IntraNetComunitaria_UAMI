# Montar sitio web en Docker 

![Intranet Comunitaria UAMI](/img/docker/docker_icon.png)



## Comenzando 

Estas instrucciones te permitirán correr en un contenedor de Docker una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.


### Pre-requisitos 📋

Tener instalado docker en su equipo_
Si usted no tiene docker en su equipo, siga las siguientes instrucciones
[Aqui](https://docs.docker.com/docker-for-windows/install/)

### Instalación :white_check_mark:


1.Crear una carpeta nueva  y colocarse en ella por medio de la terminal

2.Colocar la siguiente instrucción



```bash
docker run -dti -p 8080:80 --name intranetuami -v "$PWD":/opt/lampp/htdocs cswl/xampp

```

En donde:

* -d inicia el contenedor en segundo plano
* t nos permite utilizar la terminal dentro del contenedor
* i parámetro para activar la entrada de texto estándar para poder escribir 
* --name parámetro para darle un nombre al contenedor, puede ponerle cualquiera, en este caso se colocó intranetuami
* -v Indica el parámetro de volúmen en donde la carpeta en el contenedor `/opt/lampp/htdocs` estará mapeada a la carpeta actual donde se ejecutan las instrucciones `"$PWD"`
* cswl/xampp es el nombre de la imagen con la cuál se creará el contenedor

3.Si el proceso fue realizado con éxito y sin errores, obtendremos un ID

4.Sin salirse de la ventana actual de la terminal se descargará el repositorio del proyecto con la siguiente instrucción
 ```bash
 git clone https://github.com/Alfonso6z/IntraNetComunitaria_UAMI.git

 ```
5.Por último, se le darán todos los permisos a las carpetas y subcarpetas del proyecto para su ejecución y visualización
```bash
chmod 777 IntraNetComunitaria_UAMI/* && chmod 777 IntraNetComunitaria_UAMI/writable/* && chmod 777 IntraNetComunitaria_UAMI/writable/cache/*
```

Si todo fue realizado con éxito, ir al navegador y colocar en la barra de direcciones`localhost:8080/IntraNetComunitaria_UAMI` y se podrá visualizar el contenido del sitio web




## Construido con 🛠️

* [Imagen de xampp utilizada en docker](https://hub.docker.com/r/cswl/xampp) - cswl/xampp
* [Docker](https://docs.docker.com/docker-for-windows/install/) - Docker
* [Sitio web](https://github.com/Alfonso6z/IntraNetComunitaria_UAMI.git) - IntraNetComunitaria_UAMI 

---
⌨️ con ❤️ por [Tonalli C.S](https://github.com/tonacs) 😊