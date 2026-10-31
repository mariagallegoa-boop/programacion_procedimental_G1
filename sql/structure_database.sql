CREATE DATABASE venecia
USE venecia;
CREATE TABLE  inventario (
    id_inventario INT AUTO_INCREMENT PRIMARY KEY,
    categoria_producto VARCHAR(50) NOT NULL,
    codigo_producto VARCHAR(100) NOT NULL,
    nombre_producto VARCHAR(100) NOT NULL,
    descripcion_producto TEXT,
    cantidad_producto INT NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    proveedor_producto VARCHAR(100) NOT NULL
);

CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100) NOT NULL,
    categoria VARCHAR(50),
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    tipo_documento VARCHAR(20) NOT NULL,
    numero_documento VARCHAR(20) NOT NULL UNIQUE,
    telefono VARCHAR(20) NOT NULL UNIQUE,
    correo_electronico VARCHAR(100) NOT NULL UNIQUE,
    genero CHAR(2) NOT NULL,
    cargo VARCHAR(50) NOT NULL,
    fecha_nacimiento TIMESTAMP NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);

CREATE TABLE reservas (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_inventario INT,
    fecha_reserva DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_inventario) REFERENCES inventario(id_inventario)
);



Acevedo Marín Esteban Alejandro   
Agudelo Obando Thomas   
Blandón Zuluaga Miguel Ángel   
Calderón Otalvaro Juan José    
Cardona González Aslhy Mariana   
Carrera Mejía Eduardo    
Claro Agudelo Santiago   
Florez Acevedo Vladimir Santiago   
Gallego Ramirez Michael Stiven   
García Macias Diego Antonio    
Gomez Marquez Sergio   
Gomez Sarmiento Tomas Santiago   
Holguín Toro Gerónimo   
Martinez Marín Catalina   
Molina Tabares Juan Manuel   
Osorio Parra Maria Valentina   
Osto Perez Cristopher Gilson   
Tabares Pulgarin Ana Isabel    
Pacheco Pineda Martin Alejandro 
Castillo Osorio Juan Jose   
Lopez Uran Juan Pablo
Loaiza Gonzales Nicolas
