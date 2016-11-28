 <?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/autodeploy', 'GitAutoDeploy@doPull');
Route::post('/autodeploy', 'GitAutoDeploy@doPull');

Route::get('/test', 'RaspberryTesting@printHello');

Route::any('/echo', function (Request $request) {
    dd($request->all());
});

Route::resource('administrar/figuras-geograficas', 'Admin\\FigurasGeograficasController');
Route::resource('administrar/parcelas', 'Admin\\ParcelasController');
Route::resource('administrar/sectores', 'Admin\\SectoresController');
Route::resource('administrar/tipos-plantas', 'Admin\\TiposPlantasController');
Route::resource('administrar/plantas', 'Admin\\PlantasController');
Route::resource('administrar/cultivos', 'Admin\\CultivosController');
Route::resource('administrar/fabricantes', 'Admin\\FabricantesController');
Route::resource('administrar/controladores', 'Admin\\ControladoresController');
Route::resource('administrar/actuadores', 'Admin\\ActuadoresController');
Route::resource('administrar/instrucciones', 'Admin\\InstruccionesController');
Route::resource('administrar/sensores', 'Admin\\SensoresController');
Route::resource('administrar/mediciones', 'Admin\\MedicionesController');
Route::resource('administrar/roles', 'Admin\\RolesController');
Route::resource('administrar/ordenes-muestreos', 'Admin\\OrdenesMuestreosController');
Route::resource('administrar/muestras-suelo', 'Admin\\MuestrasSueloController');
Route::resource('administrar/variables', 'Admin\\VariablesController');
Route::resource('administrar/personas', 'Admin\\PersonasController');
Route::resource('administrar/usuarios', 'Admin\\UsuariosController');
Route::resource('administrar/analisis-suelo', 'Admin\\AnalisisSueloController');
Route::resource('administrar/examenes-visuales', 'Admin\\ExamenesVisualesController');
Route::resource('administrar/muestras-agua', 'Admin\\MuestrasAguaController');
Route::resource('administrar/muestras-biologicas', 'Admin\\MuestrasBiologicasController');
Route::resource('administrar/categorias-taxonomicas', 'Admin\\CategoriasTaxonomicasController');
Route::resource('administrar/taxonomias', 'Admin\\TaxonomiasController');
Route::resource('administrar/valores-limites', 'Admin\\ValoresLimitesController');
Route::post('/test', 'RaspberryTesting@printHello');
//Route::post('/comdata', 'ControladoresApi@procesar');
Route::post('/comdata', 'ProcesadorPeticiones@procesar');
