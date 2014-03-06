<?php

namespace Mpwar;

class ReproductorMusicaSpotify extends ReproductorMusica
{

	public function __construct(){
		parent::__construct();
		$this->recomendador = new RecomendadorExternoBlueknow();
	}
		
}