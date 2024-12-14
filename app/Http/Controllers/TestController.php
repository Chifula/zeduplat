<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function showQuestions()
    {
        $apiKey = 'your-api-key';
        $response = Http::withHeaders([
            'X-Api-Key' => $apiKey,
        ])->get('https://quizapi.io/api/v1/questions', [
            'category' => 'code',
            'difficulty' => 'easy',
            'limit' => 5,
        ]);

        if ($response->successful()) {
            $questions = $response->json();
            return view('test', compact('questions'));
        } else {
            return view('error')->with('message', 'Unable to fetch questions.');
        }
    }
}
