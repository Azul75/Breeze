# Breeze
Proyecto akus

Comandos Git

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
Errores comunes:

CONFLICT (content): Merge conflict in <fileName>
Automatic merge failed; fix conflicts and then commit the result.

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


