CREATE TABLE IF NOT EXISTS productos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  precio INT NOT NULL
);

INSERT INTO productos (nombre, precio) VALUES
  ('Teclado', 15990),
  ('Mouse', 8990),
  ('Monitor', 129990);
