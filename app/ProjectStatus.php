<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';

    case Close = 'closed';

    public function label(){

        return match($this){
            self::Open => 'Aceitando propostas',
            self::Close => 'Encerrado'
        };
    }
}
