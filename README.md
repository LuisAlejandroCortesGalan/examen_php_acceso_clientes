# Proyecto de Inicio de Sesión en PHP

Este proyecto consiste en un sistema de inicio de sesión básico implementado en PHP, que valida el correo y la contraseña del usuario. Si las credenciales son correctas, el usuario será redirigido a una página de bienvenida; de lo contrario, se mostrará un mensaje de error indicando que el correo o la contraseña son incorrectos.

## Características

- Validación de correo y contraseña.
- Mensajes de error en caso de credenciales incorrectas.
- Sesiones para mantener al usuario autenticado.
- Redirección a una página de bienvenida tras un inicio de sesión exitoso.

## Requisitos

Este proyecto requiere tener un servidor web compatible con PHP, como [XAMPP](https://www.apachefriends.org/index.html) o [WAMP](http://www.wampserver.com/en/), para poder ejecutar los scripts PHP correctamente.

## Archivos del proyecto

1. **signIn.php**: Página de inicio de sesión donde los usuarios ingresan sus credenciales.
2. **index.php**: Página de inicio que verifica si el usuario ha iniciado sesión o no.
3. **bienvenida.php**: Página que muestra un mensaje de bienvenida solo si el usuario ha iniciado sesión correctamente.
4. **customers.json**: Archivo JSON con datos de usuarios (si se utiliza una base de datos, este archivo se puede reemplazar por consultas a la base de datos).
5. **enunciado.txt**: Descripción del ejercicio y objetivos del proyecto.

## Instrucciones de uso

1. **Clona el repositorio**:

    ```bash
    git clone <URL_DEL_REPOSITORIO>
    ```

2. **Abre el proyecto en tu servidor local** (XAMPP, WAMP, etc.).
   
3. **Accede a `signIn.php`** desde tu navegador para iniciar sesión con las credenciales proporcionadas.

4. **Si las credenciales son incorrectas**, se mostrará un mensaje de error en rojo.

5. **Si las credenciales son correctas**, serás redirigido a la página de bienvenida.

## Notas

- El sistema de inicio de sesión es básico y no incluye características como el almacenamiento seguro de contraseñas (p. ej., con hashing).
- El proyecto está pensado para fines educativos, por lo que se recomienda mejorar la seguridad y la estructura antes de usarlo en un entorno de producción.

## Contribuciones

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b nueva-rama`).
3. Realiza los cambios y haz commit de tus modificaciones.
4. Empuja tus cambios al repositorio remoto (`git push origin nueva-rama`).
5. Abre un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT - consulta el archivo [LICENSE](LICENSE) para más detalles.
