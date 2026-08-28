<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intent;
use App\Models\Response;

class ChatBotController extends Controller
{
public function handle(Request $request)
{
    $input = $this->normalizar($request->input('message'));
    
    $intents = Intent::with('keywords', 'responses')->get();
    $bestIntent = null;
    $bestScore = 0;

    foreach ($intents as $intent) {
        $score = 0;
        foreach ($intent->keywords as $keyword) {
            if (str_contains($input, $this->normalizar($keyword->nome))) {
                $score += $keyword->peso ?? 1;
            }
        }
        if ($score > $bestScore) {
            $bestScore = $score;
            $bestIntent = $intent;
        }
    }
    
    $desculpe = Response::where('intent_id',13)->first();

    if (!$bestIntent || $bestIntent->responses->isEmpty()) {
        return response()->json([
            'response' => $desculpe->resposta
        ]);
    }

if ($bestIntent->nome === 'levar_whatsApp') {

    $mensagem = urlencode('Olá! Vim através do chatbot.');

    return response()->json([
        'redirect' => "https://wa.me/244925134068?text={$mensagem}"
    ]);
}

    
    $response = $bestIntent->responses->first()->resposta;

    return response()->json(['response' => $response]);
}



private function normalizar($texto)
{
    $texto = mb_strtolower($texto, 'UTF-8');

    $texto = str_replace(
        [
            'á','à','ã','â','ä',
            'é','è','ê','ë',
            'í','ì','î','ï',
            'ó','ò','õ','ô','ö',
            'ú','ù','û','ü',
            'ç'
        ],
        [
            'a','a','a','a','a',
            'e','e','e','e',
            'i','i','i','i',
            'o','o','o','o','o',
            'u','u','u','u',
            'c'
        ],
        $texto
    );

    return trim($texto);
}

}
