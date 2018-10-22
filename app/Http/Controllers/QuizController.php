<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quiz;

class QuizController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }
          /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //This shows the main form
            return view('questionnaire');
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            // This is the route where we get the form values
            // $answer1 = $request->fooby_1;
            // $answer2 = $request->fooby_2;
            // $answer3 = $request->fooby_3;
            // $answer4 = $request->fooby_4;
            // $answer5 = $request->fooby_5;
            // $answer6 = $request->fooby_6;
            // $answer7 = $request->fooby_7;

             
            //  //Do a request to the DB with the Data..
            //  $questionsAnswers = Quiz::where('population','$answer1')->get();
            // var_dump ($questionsAnswers); var_dump($questionsAnswers);
            //  return view('results', compact('questionsAnswers'));
            

             
        }

    
        /**
         * Display the specified resource.
         *@param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Request $request, Quiz $choices)
        {
          
            //Do a request to the DB with the Data..
            //  $answers = Quiz::all();
            //  Quiz::where('population','$request->fooby_1')->get();
             //  return view('results')->with('answers', $answers);
            //  echo("hey test run");
            
    
            $choices = $choices->newQuery();
            $answer1 = $request->fooby_1;
            $answer2 = $request->fooby_2;
            $answer3 = $request->fooby_3;
            $answer4 = $request->fooby_4;
            $answer5 = $request->fooby_5;
            $answer6 = $request->fooby_6;
            $answer7 = $request->fooby_7;

        
             
           
            
        
            // Get the results
            // var_dump([$answer2,$answer5,$answer6]);
            // $results = $choices->where([
            //     ['Cost_of_Living',$answer2],
            //      ['Region', $answer6],
            //      ['Geography', $answer7]
            //     ])->get();
            // var_dump([$answer1,$answer2,$answer3,$answer6,$answer7]);
            //  $results = $choices->where([['population', $answer1]])->get();
                $results = $choices->where([['Cost_of_Living', $answer2]])
                    ->where([['Weather', $answer3]])
                    ->where([['Region', $answer6]])
                    ->where([['Geography', $answer7]])
                    ->get();
               
            // var_dump($results);
            //render the view template with the data
            return view('results', compact('results'));
        }

    
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    
}


