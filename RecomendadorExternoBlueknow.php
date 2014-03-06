<?php

namespace Mpwar;

/**
 * Class RecomendadorExternoBlueknow
 *
 * Encargada de la gestión de recomendaciones en base al sistema externo 'Blueknow'.
 * Al ser un proveedor externo, necesita inicializarse antes de intentar obtener las recomendaciones.
 *
 * @package Mpwar
 */
class RecomendadorExternoBlueknow extends RecomendadorExterno
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
				'Prophets in the Sky',
				'54-46 Was My Number'
		);
	}
}