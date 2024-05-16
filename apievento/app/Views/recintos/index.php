<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Recintos</title>
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
        <h1>Documentación de Recintos</h1>
        <form @submit.prevent="fetchRecintos">
            <label for="criteria">Buscar recintos por:</label>
            <select id="criteria" v-model="criteria">
                <option value="nombre">Nombre</option>
                <option value="direccion">Dirección</option>
            </select>
            <input type="text" v-model="query" required>
            <button type="submit">Buscar</button>
        </form>
        <div v-if="loading">
            <p>Cargando recintos...</p>
        </div>
        <div v-if="recintos.length">
            <pre id="json-result">{{ JSON.stringify(recintos, null, 2) }}</pre>
        </div>
        <div v-else-if="searched">
            <p>No se encontraron recintos.</p>
        </div>
        <div v-if="error">
            <p>Error al cargar recintos: {{ error }}</p>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                criteria: 'nombre',
                query: '',
                recintos: [],
                loading: false,
                searched: false,
                error: null
            },
            methods: {
                fetchRecintos() {
                    this.loading = true;
                    this.error = null;
                    axios.get(`https://titmouse-keen-camel.ngrok-free.app/recintos/getBy${this.criteria.charAt(0).toUpperCase() + this.criteria.slice(1)}/${this.query}`)
                        .then(response => {
                            this.recintos = response.data;
                            this.searched = true;
                        })
                        .catch(error => {
                            console.error('Error al obtener los recintos:', error);
                            this.error = 'No se pudo obtener la información de los recintos.';
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
