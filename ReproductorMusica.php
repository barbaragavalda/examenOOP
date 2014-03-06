<?php

namespace Mpwar;

/**
 * Class ReproductorMusica
 *
 * Clase responsable de la reproducción de música.
 * Sabemos que pueden haber 3 tipos de reproductores: 'local', 'spotify' o 'google_play'.
 *
 * Delega la obtención de recomendaciones en las clases RecomendadorLocal, RecomendadorExternoBlueknow y RecomendadorExternoRedknow.
 *
 * @package Mpwar
 */
class ReproductorMusica
{
	/**
	 * @var RecomendadorLocal|RecomendadorExternoBlueknow|RecomendadorExternoRedknow Instancia del recomendador a utilizar para obtener canciones relacionadas.
	 */
	private $recomendador;

	/**
	 */
	public function __construct( RecomendadorInterface $recomendador )
	{
		$this->recomendador = $recomendador;
	}

	/**
	 * Simula la funcionalidad de recomendar una serie de canciones en base al título de una canción dada como parámetro de entrada.
	 *
	 * @param string $nombre_cancion_base
	 *
	 * @return array de strings con los nombres de las canciones a recomendar
	 */
	public function obtenerRecomendaciones( $nombre_cancion_base )
	{
		return $this->recomendador->obtenerRecomendaciones( $nombre_cancion_base );
	}
}