<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Magento\TestFramework\Response;

class TelecomController extends Controller
{
    public function index()
    {
        return Response()->json(['Vodafone', 'Etisalat', 'Orange']);
    }
    public function getServices($teleCom)
    {
        return Response()->json([$teleCom.'-service1', $teleCom.'-service2', $teleCom.'-service3']);
    }
}
