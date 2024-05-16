<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Eventos</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        #app {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        form {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        label {
            margin-right: 10px;
            font-weight: bold;
            color: #555;
        }

        select, input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-right: 10px;
        }

        button[type="submit"] {
            padding: 8px 20px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Estilos para el cuadro JSON */
        #json-result {
            width: 100%;
            margin-top: 20px;
            padding: 15px;
            background-color: #f0f4f8;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            font-family: Consolas, monaco, monospace;
            white-space: pre-wrap;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div id="app">
        <h1>Documentación de Eventos</h1>
        <form @submit.prevent="fetchEventos">
            <label for="criteria">Buscar eventos por:</label>
            <select id="criteria" v-model="criteria">
                <option value="nombre">Nombre</option>
                <option value="tipo">Tipo</option>
                <option value="estado">Estado</option>
                <option value="fechaHora">Fecha/Hora</option>
                <option value="organizador">Organizador</option>
                <option value="artista">Artista</option>
                <option value="ubicacion">Ubicación</option>
            </select>
            <input type="text" v-model="query" required>
            <button type="submit">Buscar</button>
        </form>
        <div v-if="loading">
            <p>Cargando eventos...</p>
        </div>
        <div v-if="eventos.length">
            <pre id="json-result">{{ JSON.stringify(eventos, null, 2) }}</pre>
        </div>
        <div v-else-if="searched">
            <p>No se encontraron eventos.</p>
        </div>
        <div v-if="error">
            <p>Error al cargar eventos: {{ error }}</p>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                criteria: 'nombre',
                query: '',
                eventos: [],
                loading: false,
                searched: false,
                error: null
            },
            methods: {
                fetchEventos() {
                    this.loading = true;
                    this.error = null;
                    axios.get(`https://titmouse-keen-camel.ngrok-free.app/eventos/getBy${this.criteria.charAt(0).toUpperCase() + this.criteria.slice(1)}/${this.query}`)
                        .then(response => {
                            this.eventos = response.data;
                            this.searched = true;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos:', error);
                            this.error = 'No se pudo obtener la información de los eventos.';
                        })
                        .finally(() => {
                            this.loading = false;
                        });
                }
            }
        });
    </script>
</body>
</html>
