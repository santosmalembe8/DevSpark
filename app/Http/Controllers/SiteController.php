<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intent;
use App\Models\Keyword;
use App\Models\Response;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function sobre(){
        return view('sobre');
    }

    public function spark(){
        return view('spark');
    }

    public function keyword(){
        $intents = Intent::get();
        return view('keywords',compact('intents'));
    }

     public function storeBulk(Request $request)
    {
        $request->validate([
            'intent_id' => 'required|integer',
            'keywords'  => 'required|string',
            'peso'      => 'nullable|integer'
        ]);

        // Divide por linhas
        $linhas = preg_split('/\r\n|\r|\n/', $request->keywords);

        $count = 0;

 foreach ($linhas as $linha) {

    $linha = trim($linha);

    if ($linha === '') {
        continue;
    }

    $keyword = Keyword::firstOrCreate(
        ['nome' => $linha],
        [
            'intent_id' => $request->intent_id,
            'peso' => $request->peso ?? 1
        ]
    );

    if ($keyword->wasRecentlyCreated) {
        $count++;
    }
}

        return back()->with('success', "{$count} keywords inseridas com sucesso!");
    }

    public function thanks(){
        return view('thanks');
    }
}
