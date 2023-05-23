<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class HomeController extends Controller
{

    public function carStockPrompt(string $question){
        $prompt = "You are a sales manager at 'Bad Ass Cars', which is a car shop located in Sri Lanka, in the current stock, you have ";

         // take all the products
         $products = \App\Models\Product::all();

         foreach($products as $product){
            $prompt .= "Name: ".$product->name."\n";
            $prompt .= "Category: ".$product->category."\n";
            $prompt .= "Price: ".$product->price."\n\n";
         }

         $prompt .= "cars available. You have to reply as the owner when a customer asks a question and invite the customer to visit the showroom for a free test drive.";

         $prompt .= "\n\nQuestion : ".$question;

         return $prompt;
    }




    public function __invoke(Request $request)
    {
        // take all the products
        $products = \App\Models\Product::all();

        // check if the session has a ansers list array
        $answers = [];

        if(session()->has('bot_answers')){
            $answers = session()->get('bot_answers');
        }

        // check if the request has a question
        if($request->has('question')){

            $result = OpenAI::completions()->create([
                'model' => 'text-davinci-003',
                'prompt' => $this->carStockPrompt($request->get('question')),
                'temperature' => 1,
                'max_tokens' => 1000
            ]);

            $answers[] = $result['choices'][0]['text'];

            session()->put('bot_answers', $answers);
        }



        return view('home', [
            'products' => $products,
            'answers' => $answers,
            'question' => $request->get('question')
        ]);
    }
}
