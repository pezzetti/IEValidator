<?php

namespace Pezzetti\InscricaoEstadual\Util\Validator;


class Maranhao extends Ceara
{    
    protected function itStartsWith(string $ie) : bool {	                
		return substr($ie, 0, 2) == '12';
    }
}