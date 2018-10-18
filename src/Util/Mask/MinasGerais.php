<?php

namespace Pezzetti\InscricaoEstadual\Util\Mask;

use Pezzetti\InscricaoEstadual\Util\MaskInterface;

class MinasGerais implements MaskInterface
{

    public static function getIE($inscricaoEstadual)
    {
        if(preg_match( '/^(\d{3})(\d{3})(\d{3})(\d{4})$/', $inscricaoEstadual,  $inscricaoArr )) {
            return $inscricaoArr[1] . '.' . $inscricaoArr[2] . '.' . $inscricaoArr[3] . '/' . $inscricaoArr[4];
        }
        return $inscricaoEstadual;
    }

}