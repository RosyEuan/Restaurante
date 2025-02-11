const express = require("express");
const app = express();
const port = 3000;
const connection = require('./db');
const cors = require('cors');
app.use(cors());
app.use(express.json());

//Crear
app.post('/api/mesas', (req, res) => {
  const { numero_mesa, seccion_mesa, capacidad, estado } = req.body;

  const query = 'INSERT INTO mesas (numero_mesa, seccion_mesa, capacidad, estado) VALUES (?, ?, ?, ?)';
  connection.query(query, [numero_mesa, seccion_mesa, capacidad, estado], (err, results) => {
    if (err) {
      console.error('Error al insertar: ' + err.stack);
      return res.status(500).send('Error en la inserción');
    }
    res.status(201).send('Mesa creada con ID:' + results.insertId);
  });
});

//Mostrar
app.get('/api/mesas', (req, res) => {
   connection.query('SELECT * FROM mesas', (err, query) => {
    if (err) {
      console.error('Error al ejecutar la consulta: ' + err.stack);
      return res.status(500).send('Error en la consulta');
    }
  res.json(query);
});
});

//Actualizar
app.put('/api/mesas/:id', (req, res) => {
  const { id } = req.params;
  const { numero_mesa, seccion_mesa, capacidad, estado } = req.body;
  const query = `
    UPDATE mesas
    SET numero_mesa = ?, seccion_mesa = ?, capacidad = ?, estado = ?
    WHERE pk_mesa = ?
  `;
  connection.query(query, [numero_mesa, seccion_mesa, capacidad, estado, id], (err, results) => {
    if (err) {
      console.error('Error al ejecutar la consulta: ' + err.stack);
      return res.status(500).send('Error en la consulta');
    }
    if (results.affectedRows > 0) {
      res.send('Mesa actualizada correctamente');
    } else {
      res.status(404).send('Mesa no encontrada');
    }
  });
});

//Eliminar
app.delete('/api/mesas/:id', async (req, res) => {
  const { id } = req.params;
  const query = 'DELETE FROM mesas WHERE pk_mesa = ?';
  try {
    const [results] = await connection.promise().query(query, [id]);
    if (results.affectedRows > 0) {
      res.send('Mesa eliminada correctamente');
    } else {
      res.status(404).send('Mesa no encontrada');
    }
  } catch (err) {
    console.error('Error al ejecutar la consulta: ' + err.stack);
    res.status(500).send('Error en la consulta');
  }
});

app.listen(port, () => {
  console.log('El servidor escucha en el puerto ' + port);
});