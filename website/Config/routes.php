<?php

/**
 * LibreDTE
 * Copyright (C) SASCO SpA (https://sasco.cl)
 *
 * Este programa es software libre: usted puede redistribuirlo y/o
 * modificarlo bajo los términos de la Licencia Pública General Affero de GNU
 * publicada por la Fundación para el Software Libre, ya sea la versión
 * 3 de la Licencia, o (a su elección) cualquier versión posterior de la
 * misma.
 *
 * Este programa se distribuye con la esperanza de que sea útil, pero
 * SIN GARANTÍA ALGUNA; ni siquiera la garantía implícita
 * MERCANTIL o de APTITUD PARA UN PROPÓSITO DETERMINADO.
 * Consulte los detalles de la Licencia Pública General Affero de GNU para
 * obtener una información más detallada.
 *
 * Debería haber recibido una copia de la Licencia Pública General Affero de GNU
 * junto a este programa.
 * En caso contrario, consulte <http://www.gnu.org/licenses/agpl.html>.
 */

// rutas para servicios web
\sowerphp\core\Routing_Router::connect('/api/dte/:controller/*', [
    'module' => 'Dte',
    'action' => 'api',
]);

// ruta para consultar DTE
\sowerphp\core\Routing_Router::connect('/consultar', [
    'module' => 'Dte',
    'controller' => 'Documentos',
    'action' => 'consultar',
]);
\sowerphp\core\Routing_Router::connect('/boletas', [
    'module' => 'Dte',
    'controller' => 'Documentos',
    'action' => 'consultar',
    39,
]);
