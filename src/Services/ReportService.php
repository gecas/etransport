<?php

namespace App\Services;

use App\Services\Contracts\ReportContract;
use Symfony\Component\HttpFoundation\Response;

class ReportService
{
    public static function report(ReportContract $reporter)
    {
        return Response::create($reporter->report());
    }
}