<?php

namespace Mpwar;

/**
 * Class ExamenIndexCtrl
 *
 * Controlador encargado de la home de nuestra aplicación.
 *
 * @package Mpwar
 */
class ExamenIndexCtrl
{
	/**
	 * @var ReproductorMusica Instancia de la clase encargada de la gestión de la música
	 */
	private $reproductor_musica;

	/**
	 * Instancia un reproductor de música y obtiene recomendaciones de canciones a escuchar en base a un título.
	 */
	public function index()
	{
		echo '<h1>Local</h1>';
		// Instancio el reproductor de música pasándole el tipo de reproductor que quiero.
		$this->reproductor_musica = new ReproductorMusica();
		$this->getRecomendaciones();
		
		echo '<h1>Google Play</h1>';
		$this->reproductor_musica = new ReproductorMusicaGooglePlay();
		$this->getRecomendaciones();
		
		echo '<h1>Spotify</h1>';
		$this->reproductor_musica = new ReproductorMusicaSpotify();
		$this->getRecomendaciones();
	}
	
	private function getRecomendaciones()
	{
		// Obtengo las recomendaciones para la canción "Segundo movimiento: Lo de fuera"
		$recomendaciones = $this->reproductor_musica->obtenerRecomendaciones( 'Segundo movimiento: Lo de fuera' );

		// Imprimo por pantalla las recomendaciones
		echo '<pre>Recomendaciones obtenidas: '; // TODO: Remove
		var_dump( $recomendaciones );
		echo '</pre>';
	}
}


