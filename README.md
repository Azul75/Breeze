# Breeze
Proyecto akus **Demo** https://azul75.github.io/Breeze/

## Como clonar este repositorio

* Copia la siguiente url `https://github.com/Azul75/Breeze`
* Una vez la hayas copiado, ve a la carpeta del servidor que usaras, por ejemplo si usaras xampp ve a `C:\xampp\htdocs` una vez en la carpeta htdocs o public del servidor que usas da clic derecho y selecciona la opcion **Git Bash Here**. Se debera abrir una consola.
* Una vez la consola se habra escriba el siguiente comando: `git clone <url que copiaste aqui sin el mayor y menor que>` ejemplo: `git clone https://github.com/Azul75/Breeze` y espera a que termine de descargar el repositorio.
* Una vez que termine escribe `cd Breeze` para entrar a la carpeta descargada
* Listo! Ya tienes el repositorio en local, ahora has los cambios que requieras y cuando termines subelos al servidor usando los comandos de abajo. SIEMPRE QUE TERMINES DE MODIFICAR SUBE LOS CAMBIOS.

## Comandos Git

Comando para añadir todos los archivos modificados a la cola de git

`git add -A`

Comando para añadir un archivo en especifico a la cola de git

`git add nombre_del_archivo`

Comando para añadir un comentario a la cola de git

`git commit -m "Comentario aqui"`

Comando para bajar cambios del servidor

`git pull origin master`

Comando para subir cambios al servidor

`git push origin master`

Comando para ver si hay cambios en el repositorio local

`git status`

----------------------------------------------------
## Errores comunes:

```
CONFLICT (content): Merge conflict in <fileName>
Automatic merge failed; fix conflicts and then commit the result.
```

Este error se debe a que dos commits se han juntado y el sistema no sabe cual elegir. 
Se debe ir al archivo que marca en <filename> y corregirlo manualmente. Sedebe buscar

```
 <<<<<<< HEAD:mergetest
 This is my third line
 =======
 This is a fourth line I am adding
 >>>>>>> 4e2b407f501b68f8588aa645acafffa0224b9b78:mergetest
```

y escoger el codigo que corresponda al cambio. Se debe borrar <<<<<< y =====

Una vez hecho esto se debe hacer `git add -A` y `git commit -m "comentario"`

---
```
To https://github.com/Azul75/Breeze
 ! [rejected]        master -> master (fetch first)
error: failed to push some refs to 'https://github.com/Azul75/Breeze'
hint: Updates were rejected because the remote contains work that you do
hint: not have locally. This is usually caused by another repository pushing
hint: to the same ref. You may want to first integrate the remote changes
hint: (e.g., 'git pull ...') before pushing again.
hint: See the 'Note about fast-forwards' in 'git push --help' for details.
```

Este error indica que hay cambios en el servidor que no tienes en local,
para solucionarlo ejecuta  `git add -A`, `git commit -m "comentario"` y `git pull origin master` 
y despues que se terminen de bajar los cambios hacer  `git push origin master`
