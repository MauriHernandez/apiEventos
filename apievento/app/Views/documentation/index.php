<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación de la API</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        #sidebar {
            background-color: #fff;
            width: 250px;
            position: fixed;
            overflow: auto;
            border-right: 2px solid #eee;
           
        height: 100%;
        overflow-y: auto;
        }

        h2 {
            padding: 20px;
            margin: 0;
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .nav {
            list-style-type: none;
            padding: 0;
        }

        .nav-item {
            display: block;
            text-decoration: none;
            color: #333;
            border-bottom: 1px solid #eee;
        }

        .nav-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .nav-link:hover {
            background-color: #f1f1f1;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }
        pre {
            width: 50%;
            max-width: 100%;
            overflow: auto;
            height: 200px;
            border: 1px solid black;
            background-color: #ccc;
            margin: 20px auto;
            padding: 10px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .sub-item {
            padding-left: 20px;
        }
    </style>
</head>
<body>
<div id="sidebar">
    <h2>Menú</h2>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#eventos-endpoint">Eventos</a>
            <ul>
            <li class="nav-item sub-item">
                    <a class="nav-link" href="https://titmouse-keen-camel.ngrok-free.app/eventos/documentacion">Probar API - Evento</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#eventos-getByNombre">getByNombre</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#eventos-getByTipo">getByTipo</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#eventos-getByEstado">getByEstado</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#eventos-getByArtista">getByArtista</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#eventos-getByUbicacion">getByUbicacion</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#eventos-getByFechaHora">getByFechaHora</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#eventos-getByOrganizador">getByOrganizador</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#recintos-endpoint">Recintos (Ubicaciones)</a>
            <ul>
            <li class="nav-item sub-item">
                    <a class="nav-link" href="https://titmouse-keen-camel.ngrok-free.app/recintos/documentacion">Probar API - Recinto</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#recintos-getByNombre">getByNombre</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#recintos-getByDireccionPais">getByDireccionPais</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#artistas-endpoint">Artistas</a>
            <ul>
            <li class="nav-item sub-item">
                    <a class="nav-link" href="https://titmouse-keen-camel.ngrok-free.app/artistas/documentacion">Probar API - Artista</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#artistas-getByNombre">getByNombre</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#artistas-getByGenero">getByGenero</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#artistas-getBySitio">getBySitio</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#artistas-getByNombreAndGenero">getByNombreAndGenero</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#organizadores-endpoint">Organizadores</a>
            <ul>
            <li class="nav-item sub-item">
                    <a class="nav-link" href="https://titmouse-keen-camel.ngrok-free.app/organizadores/documentacion">Probar API - Organizadores</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#organizadores-getByNombre">getByNombre</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#organizadores-getByEmpresa">getByEmpresa</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#organizadores-getByTelefono">getByTelefono</a>
                </li>
                <li class="nav-item sub-item">
                    <a class="nav-link" href="#organizadores-getByEmail">getByEmail</a>
                </li>
            </ul>
        </li>
    </ul>
</div>


<div class="col-md-10" id="content">
    <h1 style="text-align:center;">Bienvenido a la Documentación de la API</h1>
    <p style="text-align:center;">Esta es la documentación de la API donde se describen todos los métodos disponibles...</p>

    <div id="app">
        <h2 style="text-align:center;">Eventos</h2>

        <div class="separator_empty"></div>

        <div id="eventos-endpoint">
            <h3>eventos <span style="color:#9b9b9b">(endpoint)</span></h3>
            <code><p><span style="display: inline-block; background-color: blue; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span>
            https://titmouse-keen-camel.ngrok-free.app/eventos</p></code>

            <p>Esta petición devuelve todos los documentos que se tienen en la colección de eventos</p>
            <p><strong>Resultado de ejemplo de consulta:</strong></p>
            <pre v-if="eventos.length"><code>{{ eventos }}</code></pre>
        </div>

        <div class="separator_empty"></div>

        <div id="eventos-getByNombre">
            <h3>getByNombre <span style="color:#9b9b9b">(endpoint)</span></h3>
            <code><p><span style="display: inline-block; background-color: blue; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span>
            https://titmouse-keen-camel.ngrok-free.app/eventos/getByNombre/{nombre}</p></code>
            <p>Esta petición devuelve todos los documentos que se tienen en la colección de reservaciones que tengan en como valor de su atributo de "estatus" el mismo estado que se ingrese en la URL</p>
            <p><strong>Condiciones necesarias:</strong></p>
            <ul>
                <li>
                    <p>Se tiene que sustituir "{nombre}" por el nombre del evento que se requiera buscar</p>
                </li>
            </ul>
            <p><strong>Resultado de ejemplo de consulta:</strong></p>
            <p>
                <code>https://titmouse-keen-camel.ngrok-free.app/eventos/getByNombre/Refinado Fresco Guantes</code>
            </p>
            <pre v-if="eventosGetByNombre.length"><code>{{ eventosGetByNombre }}</code></pre>
        </div>

        <div id="eventos-getByTipo">
            <h3>getByTipo <span style="color:#9b9b9b">(endpoint)</span></h3>
            <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/eventos/getByTipo/{tipo}</p></code>
            <p>Esta petición devuelve todos los documentos que se tienen en la colección de eventos que corresponden al tipo especificado.</p>
            <p><strong>Condiciones necesarias:</strong></p>
            <ul>
                <li>
                    <p>Se debe sustituir "{tipo}" por el tipo de evento que se desea buscar.</p>
                </li>
            </ul>
            <p><strong>Resultado de ejemplo de consulta:</strong></p>
            <p><code>https://titmouse-keen-camel.ngrok-free.app/eventos/getByTipo/Savings</code></p>
            <pre v-if="eventosGetByTipo.length"><code>{{ eventosGetByTipo }}</code></pre>
        </div>

        <div id="eventos-getByEstado">
            <h3>getByEstado <span style="color:#9b9b9b">(endpoint)</span></h3>
            <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/eventos/getByEstado/{estado}</p></code>
            <p>Esta petición devuelve todos los documentos que se tienen en la colección de eventos que corresponden al estado especificado.</p>
            <p><strong>Condiciones necesarias:</strong></p>
            <ul>
                <li>
                    <p>Se debe sustituir "{estado}" por el estado de evento que se desea buscar.</p>
                </li>
            </ul>
            <p><strong>Resultado de ejemplo de consulta:</strong></p>
            <p><code>https://titmouse-keen-camel.ngrok-free.app/eventos/getByEstado/Cancelado</code></p>
            <pre v-if="eventosGetByEstado.length"><code>{{ eventosGetByEstado }}</code></pre>
        </div>

        <div id="eventos-getByArtista">
    <h3>getByArtista <span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/eventos/getByArtista/{artista}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de eventos que corresponden al artista especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{artista}" por el nombre del artista que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/eventos/getByArtista/Leticia</code></p>
    <pre v-if="eventosGetByArtista.length"><code>{{ eventosGetByArtista }}</code></pre>
</div>

<div id="eventos-getByUbicacion">
    <h3>getByUbicacion <span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/eventos/getByUbicacion/{ubicacion}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de eventos que corresponden a la ubicación especificada.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{ubicacion}" por el nombre de la ubicación que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/eventos/getByUbicacion/Pedroza e Hijos</code></p>
    <pre v-if="eventosGetByUbicacion.length"><code>{{ eventosGetByUbicacion }}</code></pre>
</div>

<div id="eventos-getByFechaHora">
    <h3>getByFechaHora <span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/eventos/getByFechaHora/{fechaHora}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de eventos que corresponden a la fecha y hora especificadas.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{fechaHora}" por la fecha y hora del evento que se desea buscar en formato ISO 8601.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/eventos/getByFechaHora/2025-04-03T04:30:27.420+00:00</code></p>
    <pre v-if="eventosGetByFechaHora.length"><code>{{ eventosGetByFechaHora }}</code></pre>
</div>

<div id="eventos-getByOrganizador">
    <h3>getByOrganizador <span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/eventos/getByOrganizador/{organizador}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de eventos que corresponden al organizador especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{organizador}" por el nombre del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/eventos/getByOrganizador/Irene</code></p>
    <pre v-if="eventosGetByOrganizador.length"><code>{{ eventosGetByOrganizador }}</code></pre>
</div>


<h2 style="text-align:center;">Recintos (Ubicaciones)</h2>

        <div class="separator_empty"></div>

        <div id="recintos-endpoint">
            <h3>recintos (ubicaciones) <span style="color:#9b9b9b">(endpoint)</span></h3>
            <code><p><span style="display: inline-block; background-color: blue; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span>
            https://titmouse-keen-camel.ngrok-free.app/recintos</p></code>

            <p>Esta petición devuelve todos los documentos que se tienen en la colección de recintos (ubicaciones)</p>
            <p><strong>Resultado de ejemplo de consulta:</strong></p>
            <pre v-if="recintos.length"><code>{{ recintos }}</code></pre>
        </div>
        <div class="separator_empty"></div>
        <div id="recintos-getByNombre">
    <h3>getByNombre<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/recintos/getByNombre/{nombre}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de recintos (ubicaciones) que corresponden al recinto especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{pais}" por el nombre del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/recintos/getByNombre/Nájera - Torres</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ recintosGetByNombre }}</code></pre>
</div>


<h2 style="text-align:center;">Artistas</h2>

        <div class="separator_empty"></div>

        <div id="artistas-endpoint">
            <h3>artistas <span style="color:#9b9b9b">(endpoint)</span></h3>
            <code><p><span style="display: inline-block; background-color: blue; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span>
            https://titmouse-keen-camel.ngrok-free.app/artistas</p></code>

            <p>Esta petición devuelve todos los documentos que se tienen en la colección de artistas</p>
            <p><strong>Resultado de ejemplo de consulta:</strong></p>
            <pre v-if="recintos.length"><code>{{ artistas }}</code></pre>
        </div>
        <div class="separator_empty"></div>
        <div id="artistas-getByNombre">
    <h3>getByNombre<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/artistas/getByNombre/{nombre}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de artistas que corresponden al recinto especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{nombre}" por el nombre del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/artistas/getByNombre/Antonio</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ artistasGetByNombre }}</code></pre>
</div>

<div class="separator_empty"></div>
        <div id="artistas-getByGenero">
    <h3>getByGenero<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/artistas/getByGenero/{genero}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de artistas que corresponden al genero especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{genero}" por el nombre del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/artistas/getByGenero/Electronic</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ artistasGetByGenero }}</code></pre>
</div>

<div class="separator_empty"></div>
        <div id="artistas-getBySitio">
    <h3>getBySitio<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/artistas/getBySitio/{sitio}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de artistas que corresponden al recinto especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{sitio}" por el sitio del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/artistas/getBySitio/http://monserrat.com.mx</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ artistasGetBySitio }}</code></pre>
</div>

<div class="separator_empty"></div>
        <div id="artistas-getByNombre">
    <h3>getByNombreAndGenero<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/artistas/getByNombreAndGenero/{nombre}/{genero}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de artistas que corresponden al recinto especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{nombre}" por el nombre del artista y "{genero}" por el genero del artista que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/artistas/getByNombreAndGenero/Antonio/Latin</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ artistasGetByNombreAndGenero }}</code></pre>
</div>




<h2 style="text-align:center;">Organizadores</h2>

        <div class="separator_empty"></div>

        <div id="organizadores-endpoint">
            <h3>organizadores <span style="color:#9b9b9b">(endpoint)</span></h3>
            <code><p><span style="display: inline-block; background-color: blue; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span>
            https://titmouse-keen-camel.ngrok-free.app/organizadores</p></code>

            <p>Esta petición devuelve todos los documentos que se tienen en la colección de organizadores</p>
            <p><strong>Resultado de ejemplo de consulta:</strong></p>
            <pre v-if="organizadores.length"><code>{{ organizadores }}</code></pre>
        </div>
        <div class="separator_empty"></div>
        
        
        <div id="organizadores-getByNombre">
    <h3>getByNombreo<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/organizadores/getByNombre/{nombre}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de artistas que corresponden al recinto especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{nombre}" por el nombre del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/organizadores/getByNombre/Irene</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ organizadoresGetByNombre }}</code></pre>
</div>

<div class="separator_empty"></div>
        
        
        <div id="organizadores-getByEmpresa">
    <h3>getByEmpresa<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/organizadores/getByEmpresa/{empresa}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de organizadores que corresponden a la emrpresa especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{empresa}" por el nombre de la empresa del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/organizadores/getByEmpresa/Carrillo, Benavídez and Montoya</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ organizadoresGetByEmpresa }}</code></pre>
</div>
<div class="separator_empty"></div>
        
        
        <div id="organizadores-getByTelefono">
    <h3>getByTelefono<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/organizadores/getByTelefono/{telefono}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de organizadores que corresponden al telefono especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{telefono}" por el nombre de la empresa del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/organizadores/getByTelefono/554407689</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ organizadoresGetByTelefono }}</code></pre>
</div>
<div class="separator_empty"></div>
        
        
        <div id="organizadores-getByEmail">
    <h3>getByEmail<span style="color:#9b9b9b">(endpoint)</span></h3>
    <code><p><span style="display: inline-block; background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; font-size: 12px;">GET</span> https://titmouse-keen-camel.ngrok-free.app/organizadores/getByEmail/{email}</p></code>
    <p>Esta petición devuelve todos los documentos que se tienen en la colección de organizadores que corresponden al email especificado.</p>
    <p><strong>Condiciones necesarias:</strong></p>
    <ul>
        <li>
            <p>Se debe sustituir "{telefono}" por el nombre de la empresa del organizador que se desea buscar.</p>
        </li>
    </ul>
    <p><strong>Resultado de ejemplo de consulta:</strong></p>
    <p><code>https://titmouse-keen-camel.ngrok-free.app/organizadores/getByEmail/Israel.Alcaraz@corpfolder.com</code></p>
    <pre v-if="recintosGetByDireccion.length"><code>{{ organizadoresGetByEmail }}</code></pre>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Vue({
            el: '#app',
            data: {
                eventos: [],
                eventosGetByNombre: [],
                eventosGetByTipo: [],
                eventosGetByEstado: [],
                eventosGetByFechaHora: [],
                eventosGetByOrganizador: [],
                eventosGetByArtista: [],
                eventosGetByUbicacion: [],
                recintos:[],
                recintosGetByNombre:[],
                recintosGetByDireccion:[],
                artistas:[],
                artistasGetByNombre:[],
                artistasGetByGenero:[],
                artistasGetBySitio:[],
                artistasGetByNombreAndGenero:[],
                organizadores:[],
                organizadoresGetByNombre:[],
                organizadoresGetByEmpresa:[],
                organizadoresGetByTelefono:[],
                organizadoresGetByEmail:[],
            },
            methods: {
                fetchEventos() {
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/eventos')
                        .then(response => {
                            this.eventos = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos:', error);
                        });
                },
                fetchEventosGetByNombre() {
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/eventos/getByNombre/Refinado Fresco Guantes')
                        .then(response => {
                            this.eventosGetByNombre = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos por nombre:', error);
                        });
                },
                fetchEventosGetByTipo() {
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/eventos/getByTipo/Savings')
                        .then(response => {
                            this.eventosGetByTipo = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos por tipo:', error);
                        });
                },
                fetchEventosGetByEstado() {
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/eventos/getByEstado/Cancelado')
                        .then(response => {
                            this.eventosGetByEstado = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos por estado:', error);
                        });
                },
                fetchEventosGetByFechaHora() {
                    axios.get(`https://titmouse-keen-camel.ngrok-free.app/eventos/getByFechaHora/2025-04-03T04:30:27.420+00:00`)
                        .then(response => {
                            this.eventosGetByFechaHora = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos por fecha y hora:', error);
                        });
                },
                fetchEventosGetByOrganizador() {
                    axios.get(`https://titmouse-keen-camel.ngrok-free.app/eventos/getByOrganizador/Irene`)
                        .then(response => {
                            this.eventosGetByOrganizador = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos por organizador:', error);
                        });
                },
                fetchEventosGetByArtista() {
                    axios.get(`https://titmouse-keen-camel.ngrok-free.app/eventos/getByArtista/Leticia`)
                        .then(response => {
                            this.eventosGetByArtista = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos por artista:', error);
                        });
                },
                fetchEventosGetByUbicacion() {
                    axios.get(`https://titmouse-keen-camel.ngrok-free.app/eventos/getByUbicacion/Pedroza e Hijos`)
                        .then(response => {
                            this.eventosGetByUbicacion = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos por ubicación:', error);
                        });
                },
                fetchRecintos() {
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/recintos')
                        .then(response => {
                            this.recintos = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener las ubicaciones:', error);
                        });
                },
                fetchRecintosGetByNombre(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/recintos/getByNombre/Nájera - Torres')
                    .then(response=>{
                        this.recintosGetByNombre=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },
                fetchRecintosGetByDireccion() {
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/recintos/getByDireccion/Bolivia')
                        .then(response => {
                            this.recintosGetByDireccion = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los eventos por nombre:', error);
                        });
                },
                fetchArtistas() {
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/artistas')
                        .then(response => {
                            this.artistas = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los artistas:', error);
                        });
                },
                fetchArtistasGetByNombre(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/artistas/getByNombre/Antonio')
                    .then(response=>{
                        this.artistasGetByNombre=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },
                fetchArtistasGetByGenero(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/artistas/getByGenero/Electronic')
                    .then(response=>{
                        this.artistasGetByGenero=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },
                fetchArtistasGetBySitio(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/artistas/getBySitio/http://monserrat.com.mx')
                    .then(response=>{
                        this.artistasGetBySitio=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },
                fetchArtistasGetByNombreAndGenero(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/artistas/getByNombreAndGenero/Antonio/Latin')
                    .then(response=>{
                        this.artistasGetByNombreAndGenero=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },

                fetchOrganizadores() {
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/organizadores')
                        .then(response => {
                            this.organizadores = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los organizadores:', error);
                        });
                },
                fetchOrganizadoresGetByNombre(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/organizadores/getByNombre/Irene')
                    .then(response=>{
                        this.organizadoresGetByNombre=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },
                fetchOrganizadoresGetByEmpresa(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/organizadores/getByEmpresa/Carrillo, Benavídez and Montoya')
                    .then(response=>{
                        this.organizadoresGetByEmpresa=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },
                fetchOrganizadoresGetByTelefono(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/organizadores/getByTelefono/554407689')
                    .then(response=>{
                        this.organizadoresGetByTelefono=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },
                fetchOrganizadoresGetByEmail(){
                    axios.get('https://titmouse-keen-camel.ngrok-free.app/organizadores/getByEmail/Israel.Alcaraz@corpfolder.com')
                    .then(response=>{
                        this.organizadoresGetByEmail=response.data;
                    })
                    .catch(error=>{
                        console.error('Error al obtener los eventos por nombre:', error);
                    });
                },
            },
            computed: {
                formattedEventos() {
                    return JSON.stringify(this.eventos, null, 2);
                },
                formattedEventosGetByNombre() {
                    return JSON.stringify(this.eventosGetByNombre, null, 2);
                },
                formattedEventosGetByTipo() {
                    return JSON.stringify(this.eventosGetByTipo, null, 2);
                },
                formattedEventosGetByEstado() {
                    return JSON.stringify(this.eventosGetByEstado, null, 2);
                },
                formattedEventosGetByFechaHora() {
                    return JSON.stringify(this.eventosGetByFechaHora, null, 2);
                },
                formattedEventosGetByOrganizador() {
                    return JSON.stringify(this.eventosGetByOrganizador, null, 2);
                },
                formattedEventosGetByArtista() {
                    return JSON.stringify(this.eventosGetByArtista, null, 2);
                },
                formattedEventosGetByUbicacion() {
                    return JSON.stringify(this.eventosGetByUbicacion, null, 2);
                },
                formattedRecintos() {
                    return JSON.stringify(this.recintos, null, 2);
                },
                formattedRecintosGetByNombre(){
                    return JSON.stringify(this.recintosGetByNombre, null, 2);
                },
                formattedRecintosGetByDireccion() {
                    return JSON.stringify(this.recintosGetByDireccion, null, 2);
                },
                formattedArtistas() {
                    return JSON.stringify(this.artistas, null, 2);
                },
                formattedArtistasGetByNombre(){
                    return JSON.stringify(this.artistasGetByNombre, null, 2);
                },
                formattedArtistasGetByGenero(){
                    return JSON.stringify(this.artistasGetByGenero, null, 2);
                },
                formattedArtistasGetBySitio(){
                    return JSON.stringify(this.artistasGetBySitio, null, 2);
                },
                formattedArtistasGetByNombreAndGenero(){
                    return JSON.stringify(this.artistasGetByNombreAndGenero, null, 2);
                },
                formattedOrganizadores() {
                    return JSON.stringify(this.organizadores, null, 2);
                },
                formattedOrganizadoresGetByNombre(){
                    return JSON.stringify(this.organizadoresGetByNombre, null, 2);
                },
                formattedOrganizadoresGetByEmpresa(){
                    return JSON.stringify(this.artistasGetByGenero, null, 2);
                },
                formattedOrganizadoresGetByTelefono(){
                    return JSON.stringify(this.organizadoresGetByTelefono, null, 2);
                },
                formattedOrganizadoresGetByEmail(){
                    return JSON.stringify(this.organizadoresGetByEmail, null, 2);
                },
            },
            mounted() {
                this.fetchEventos();
                this.fetchEventosGetByNombre();
                this.fetchEventosGetByTipo();
                this.fetchEventosGetByEstado();
                this.fetchEventosGetByArtista();
                this.fetchEventosGetByUbicacion();
                this.fetchEventosGetByOrganizador();
                this.fetchEventosGetByFechaHora();
                this.fetchRecintos();
                this.fetchRecintosGetByNombre();
                this.fetchRecintosGetByDireccion();
                this.fetchArtistas();
                this.fetchArtistasGetByNombre();
                this.fetchArtistasGetByGenero();
                this.fetchArtistasGetBySitio();
                this.fetchArtistasGetByNombreAndGenero();
                this.fetchOrganizadores();
                this.fetchOrganizadoresGetByNombre();
                this.fetchOrganizadoresGetByEmpresa();
                this.fetchOrganizadoresGetByTelefono();
                this.fetchOrganizadoresGetByEmail();
            }
        });
    });
</script>
