
# Principios SOLID en PHP 🛠️
Este repositorio contiene ejemplos prácticos y explicaciones detalladas de los principios SOLID aplicados en PHP. Los principios SOLID son fundamentales para escribir código limpio, mantenible y escalable. Aquí encontrarás ejemplos que ilustran cada uno de estos principios.

# Contenido 📂

1. **[Single Responsibility Principle (SRP)](#single-responsibility-principle-srp)**
   - Cada clase debe tener una sola responsabilidad.
   - Ejemplo: Clases que manejan la lógica de negocio separada de la lógica de presentación.

2. **[Open/Closed Principle (OCP)](#openclosed-principle-ocp)**
   - Las clases deben estar abiertas para la extensión pero cerradas para la modificación.
   - Ejemplo: Uso de interfaces y herencia para añadir funcionalidad sin modificar el código existente.

3. **[Liskov Substitution Principle (LSP)](#liskov-substitution-principle-lsp)**
   - Las clases derivadas deben ser sustituibles por sus clases base.
   - Ejemplo: Clases hijas que pueden reemplazar a sus clases padres sin alterar el comportamiento del programa.

4. **[Interface Segregation Principle (ISP)](#interface-segregation-principle-isp)**
   - Los clientes no deben estar forzados a depender de interfaces que no utilizan.
   - Ejemplo: Interfaces pequeñas y específicas en lugar de interfaces monolíticas.

5. **[Dependency Inversion Principle (DIP)](#dependency-inversion-principle-dip)**
   - Los módulos de alto nivel no deben depender de módulos de bajo nivel. Ambos deben depender de abstracciones.
   - Ejemplo: Uso de inyección de dependencias para reducir el acoplamiento entre clases.

   
## Estructura del Proyecto 🗂️

Cada principio tiene su propio directorio con los siguientes elementos:

- **Explicación:** Descripción teórica del principio.
- **Ejemplo de Código:** Implementaciones prácticas en PHP.
- **Comentarios:** Explicaciones en el código para clarificar cómo se aplica el principio.

### Directorios del Proyecto:

- `SRP/` - Ejemplos y explicaciones del principio de responsabilidad única.
- `OCP/` - Ejemplos y explicaciones del principio abierto/cerrado.
- `LSP/` - Ejemplos y explicaciones del principio de sustitución de Liskov.
- `ISP/` - Ejemplos y explicaciones del principio de segregación de interfaces.
- `DIP/` - Ejemplos y explicaciones del principio de inversión de dependencias.

## Requisitos del Sistema 🖥️
PHP 7.4 o superior
## Cómo Usar Este Repositorio 🚀
1. Clona el repositorio:

       bash
       git clone https://github.com/tu_usuario/solid-principles-php.git
      
3. Navega a través de los directorios para explorar los principios SOLID.

4. Ejecuta los ejemplos de código en tu entorno local:

        bash
        php path/to/example.php
## Contribuciones 🤝
¡Las contribuciones son bienvenidas! Si tienes ejemplos adicionales o mejoras, siéntete libre de hacer un fork del repositorio, crear una nueva rama, y enviar un pull request.

## Licencia 📜
Este proyecto está licenciado bajo la MIT License. Consulta el archivo LICENSE para más detalles.

## Agradecimientos 🙏
Gracias por explorar este repositorio. Espero que encuentres útil la información y que los ejemplos te ayuden a mejorar tu comprensión y aplicación de los principios SOLID en tus proyectos PHP.
