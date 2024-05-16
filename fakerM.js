// Importar las bibliotecas necesarias
const mongoose = require('mongoose');
const faker = require('faker');

// Configurar el idioma de faker a español
faker.locale = "es_MX";

// Conectar a MongoDB
mongoose.connect('mongodb+srv://mcarlosmauricio53:contraseniachida@cluster0.rnwqsop.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0');

// Esquemas
const RecintoSchema = new mongoose.Schema({
  nombre: String,
  capacidad: Number,
  direccion: {
    calle: String,
    numero: String,
    ciudad: String,
    estado: String,
    pais: String,
    codigo_postal: String
  }
});

const ArtistaSchema = new mongoose.Schema({
  nombre: {
    nombre: String,
    apellidoPaterno: String,
    apellidoMaterno: String
  },
  genero: String,
  sitio_web: String,
  descripcion: String
});

const OrganizadorSchema = new mongoose.Schema({
  nombre: {
    nombre: String,
    apellidoPaterno: String,
    apellidoMaterno: String
  },
  empresa: {
    nombre: String,
    sitio: String,
    domicilio: String
  },
  telefono: String,
  email: String
});

const EventoSchema = new mongoose.Schema({
  nombre: String,
  descripcion: String,
  fechaHora: Date,
  ubicacion: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Recinto'
  },
  organizador: {
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Organizador'
  },
  artistas: [{
    type: mongoose.Schema.Types.ObjectId,
    ref: 'Artista'
  }],
  tipoEvento: String,
  estadoEvento: String
});

// Modelos
const Recinto = mongoose.model('Recinto', RecintoSchema);
const Artista = mongoose.model('Artista', ArtistaSchema);
const Organizador = mongoose.model('Organizador', OrganizadorSchema);
const Evento = mongoose.model('Evento', EventoSchema);

// Generar datos falsos
for(let i = 0; i < 100; i++) {
  const recinto = new Recinto({
    nombre: faker.company.companyName(),
    capacidad: faker.random.number(),
    direccion: {
      calle: faker.address.streetName(),
      numero: faker.random.number().toString(),
      ciudad: faker.address.city(),
      estado: faker.address.state(),
      pais: faker.address.country(),
      codigo_postal: faker.address.zipCode()
    }
  });

  const artista = new Artista({
    nombre: {
      nombre: faker.name.firstName(),
      apellidoPaterno: faker.name.lastName(),
      apellidoMaterno: faker.name.lastName()
    },
    genero: faker.music.genre(),
    sitio_web: faker.internet.url(),
    descripcion: faker.lorem.paragraph()
  });

  const organizador = new Organizador({
    nombre: {
      nombre: faker.name.firstName(),
      apellidoPaterno: faker.name.lastName(),
      apellidoMaterno: faker.name.lastName()
    },
    empresa: {
      nombre: faker.company.companyName(),
      sitio: faker.internet.url(),
      domicilio: faker.address.streetAddress()
    },
    telefono: faker.phone.phoneNumber(),
    email: faker.internet.email()
  });

  const evento = new Evento({
    nombre: faker.commerce.productName(),
    descripcion: faker.lorem.paragraph(),
    fechaHora: faker.date.future(),
    ubicacion: recinto._id,
    organizador: organizador._id,
    artistas: [artista._id], // Aquí puedes añadir más artistas si lo deseas
    tipoEvento: faker.random.word(),
    estadoEvento: faker.random.arrayElement(['Programado', 'En curso', 'Cancelado'])
  });

  // Guardar los documentos en las colecciones correspondientes
  recinto.save();
  artista.save();
  organizador.save();
  evento.save();
}
