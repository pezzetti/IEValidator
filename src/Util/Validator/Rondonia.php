<?php

namespace Pezzetti\InscricaoEstadual\Util\Validator;

use Pezzetti\InscricaoEstadual\Util\Validator\StateValidator;

class Rondonia extends StateValidator
{

    protected function checkLength(string $ie) : bool {		        
		return strlen($ie) == 14;
    }
    
	protected function itStartsWith(string $ie) : bool {	                
		return true;
    }

    protected function calcIE(string $ie) : bool {
        $sum = 0;
        $length = strlen($ie);
        $position = $length - 1;
        $weight = 6;
        $body = substr($ie, 0, $position);
        foreach (str_split($body) as $item) {
            $sum += $item * $weight;
            $weight--;
            if ($weight == 1) {
                $weight = 9;
            }
        }

        $rest = $sum % 11;
        $dig = 11 - $rest;

        if ($dig >= 10) {
            $dig -= 10;
        }
        return $dig == $ie[$position];
    }
}