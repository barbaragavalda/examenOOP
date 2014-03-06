<?php

namespace Mpwar;

abstract class RecomendadorExterno implements RecomendadorInterface
{
	/**
	 * @var bool indica si el sistema externo ha sido inicializado o no. Para poder obtener recomendaciones, debe ser true.
	 */
	protected $sistema_externo_inicializado = false;

	/**
	* inicializa el sistema, porque es comun para todos
	*/
	public function __construct()
	{
		$this->inicializarSistemaExterno();
	}
	
	/**
	 * Método fake.
	 *
	 * Simula la inicialización del sistema de recomendaciones.
	 * Común a todo sistema de recomendación externo.
	 */
	private function inicializarSistemaExterno()
	{
		$this->sistema_externo_inicializado = true;
	}
	
	/**
	 * Método fake.
	 * Simula la funcionalidad de recomendar una serie de canciones en base al título de una canción dada como parámetro de entrada.
	 *
	 * @param string $nombre_cancion_base nombres de la canción en la que basar las recomendaciones
	 *
	 * @return array de strings con los nombres de las canciones a recomendar
	 * 
	 * @throws \RuntimeException En caso de intentar obtener recomendaciones sin haber inicializado previamente el sistema (operación necesaria al tratarse de un sistema de recomendaciones externo).
	 */
	public function obtenerRecomendaciones( $nombre_cancion_base ){
		if ( !$this->sistema_externo_inicializado )
		{
			throw new \RuntimeException( "Error al intentar obtener recomendaciones de la clase " . __CLASS__ . ": Al ser un servicio de recomendaciones externo, primero debe ser inicializado." );
		}
		
		return $this->getCancion( $nombre_cancion_base );
	}
	
	/**
	* metodo abstracto distino para cada tipo de recomendador externo
	*/
	abstract protected function getCancion( $nombre_cancion_base );
}