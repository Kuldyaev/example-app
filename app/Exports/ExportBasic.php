<?php

namespace App\Exports;

//use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\FromArray;

class ExportBasic implements FromArray
{
    public function array(): array
    {
        $contents = Storage::disk('local')->get('news.json');       
        return json_decode($contents, true);
    }
}
