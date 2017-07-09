<?php

use Carbon\Carbon;

    function formatDate($value = 2, $inputdate = null)
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
            $format = 'Y';

            $current_date = is_null($inputdate)
                ? date('d.m.y')
                : Carbon::parse($inputdate)->format('d.m.Y');

            return date($format, strtotime($current_date));
        }
        elseif ($value === 2)
        {
            $format = 'd.m.y';

            $current_date = is_null($inputdate)
                ? date('d.m.y')
                : Carbon::parse($inputdate)->format('d.m.Y');

            return date($format, strtotime($current_date));
        }
        elseif ($value === 4)
        {
            $format = 'd.m.Y H:i:s';

            if (is_null($inputdate))
            {
                return "-";
            }
            else
            {
                return date($format,
                            strtotime(
                                Carbon::parse($inputdate)->format('d.m.Y H:i:s')
                                     )
                            );
            }
        }
        else
        {
            $inputdate = is_null($inputdate)
                ? date('d.m.y')
                : Carbon::parse($inputdate)->format('d.m.Y');

            $current_date =
                date('d ', strtotime($inputdate))
                . $months[date( 'n', strtotime($inputdate))]
                . date(' Y', strtotime($inputdate));

            return date($current_date);
        }

    }