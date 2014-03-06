<?php

namespace Mpwar;

class ReproductorMusicaGooglePlay extends ReproductorMusica
{

	public function __construct(){
		parent::__construct();
		$this->recomendador = new RecomendadorExternoRedknow();
	}
	
}