<?php

namespace App\Http\Utilities;

class Programmes{
    
    protected  static $programmes = [
        "Accounting"                                => "ACC",
        "Business Computing"                        => "BUS",
        "Economics"                                 => "ECO",
        "Finance"                                   => "FIN",
        "Human Resources Management"                => "HRM",
        "International Business"                    => "INB",
        "Marketing"                                 => "MKT",
        "Project Management"                        => "PMT",
        "Transport Management"                      => "TPM"

        
        
        ];
    
    public static function all()
    {
        return array_keys(static::$programmes);
    }
}
    