<?php

namespace Mpwar;

/**
 * Class RecomendadorExternoRedknow
 *
 * Encargada de la gestión de recomendaciones en base al sistema externo 'Redknow'.
 * Al ser un proveedor externo, necesita inicializarse antes de intentar obtener las recomendaciones.
 *
 * @package Mpwar
 */
class RecomendadorExternoRedknow extends RecomendadorExterno
{
	/**
	 * Método fake.
	 * Simula la funcionalidad de recomendar una serie de canciones en base al título de una canción dada como parámetro de entrada.
	 *
	 * @param string $nombre_cancion_base nombres de la canción en la que basar las recomendaciones
	 *
	 * @return array de strings con los nombres de las canciones a recomendar
	 */
	protected function getCancion( $nombre_cancion_base )
	{
		return array(
				'La vida está de lujo',
				'El cuarto de Tula'
		);
	}
}