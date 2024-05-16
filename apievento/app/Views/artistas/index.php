<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Artistas</title>
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
            flex-wrap: wrap;
            align-items: center;
        }

        label {
            margin-right: 10px;
            font-weight: bold;
            color: #555;
        }

        select, input[type="text"], input[type="url"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-right: 10px;
            margin-bottom: 10px;
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
        <h1>Documentación de Artistas</h1>
        <form @submit.prevent="fetchArtistas">
            <label for="criteria">Buscar artistas por:</label>
            <select id="criteria" v-model="criteria">
                <option value="Nombre">Nombre</option>
                <option value="Genero">Género</option>
                <option value="Sitio">Sitio Web</option>
                <option value="NombreAndGenero">Nombre y Género</option>
            </select>
            <input type="text" v-model="nombre" v-if="criteria === 'NombreAndGenero'" placeholder="Nombre" required>
            <input type="text" v-model="genero" v-if="criteria === 'NombreAndGenero'" placeholder="Género" required>
            <input type="text" v-model="query" v-if="criteria !== 'Sitio' && criteria !== 'NombreAndGenero'" required>
            <input type="url" v-model="query" v-if="criteria === 'Sitio'" required>
            <button type="submit">Buscar</button>
        </form>
        <div v-if="loading">
            <p>Cargando artistas...</p>
        </div>
        <div v-if="artistas.length">
            <pre id="json-result">{{ JSON.stringify(artistas, null, 2) }}</pre>
        </div>
        <div v-else-if="searched">
            <p>No se encontraron artistas.</p>
        </div>
        <div v-if="error">
            <p>Error al cargar artistas: {{ error }}</p>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                criteria: 'Nombre',
                query: '',
                nombre: '',
                genero: '',
                artistas: [],
                loading: false,
                searched: false,
                error: null
            },
            methods: {
                fetchArtistas() {
                    this.loading = true;
                    this.error = null;
                    let url = '';
                    if (this.criteria === 'NombreAndGenero') {
                        url = `https://titmouse-keen-camel.ngrok-free.app/artistas/getByNombreAndGenero/${this.nombre}/${this.genero}`;
                    } else {
                        url = `https://titmouse-keen-camel.ngrok-free.app/artistas/getBy${this.criteria}/${this.query}`;
                    }
                    axios.get(url)
                        .then(response => {
                            this.artistas = response.data;
                            this.searched = true;
                        })
                        .catch(error => {
                            console.error('Error al obtener los artistas:', error);
                            this.error = 'No se pudo obtener la información de los artistas.';
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
