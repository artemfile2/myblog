<?php


    function formateDate($value = 2)
    {
        $months = [
            1 => 'Январь' ,
            'Февраль' ,
            'Март' ,
            'Апрель' ,
            'Май' ,
            'Июнь' ,
            'Июль' ,
            'Август' ,
            'Сентябрь' ,
            'Октябрь' ,
            'Ноябрь' ,
            'Декабрь',
        ];

        if ($value === 1)
        {
            $data = 'Y';
        }
        elseif ($value === 2)
        {
            $data = 'd.m.y';
        }
        elseif ($value === 3)
        {
            $data = 'd ' . $months[date( 'n' )] . ' Y';
        }

        return date($data);
    }