<?PHP

namespace App\Http\Controllers;

use DB;
use Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ApiController extends Controller
{

    public function __construct()
    {

    }

    public function show($lat,$lon)
    {
    	//  echo $lat;
    	// echo $lon;

        $GoogleApiKey = env('Google_APIKEY','forge');


    	// create a new client
    	$client = new \GuzzleHttp\Client();

   	   // google place api to get near by busniess location
    	$response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='. $lat .','. $lon .'&radius=500&key='. $GoogleApiKey);

	   //echo $response->getBody();

		$data = $response->getBody();
        //return view('welcome');

        //echo $data;
        return Response::json($data);
    }
    public function getData(Request $request){

        // form data
        $name = $request->input('query');
        $city = $request->input('city');

        
        $GoogleApiKey = env('Google_APIKEY','forge');

        // create a new client
        $client = new \GuzzleHttp\Client();

        // google place api to get near by busniess location
        $response = $client->get('https://maps.googleapis.com/maps/api/place/textsearch/json?query='. $name . '+in+'. $city .'&radius=500&key='. $GoogleApiKey);


        // api response
        $apiData = $response->getBody();


     
        // convert to json
        $jsonarr = json_decode($apiData,true);

        //var_dump($jsonarr);
        //echo $jsonarr;
        //echo $jsonarr['results'][0]['name'];



        $data = array(
                'places'=>$jsonarr
        );


        return view('places',$data);

    }
    public function getUser(){


        $userEmail = session('userEmail');

    

        $query = DB::table('businessContent')->select('*')->where('userEmail', $userEmail)->get();

        // $users = DB::table('businessContent')
        //     ->join('businessTitle', 'businessContent.userEmail', '=', 'businessTitle.userEmail')
        //     ->where('businessContent.userEmail', $userEmail)
        //     ->select('*')
        //     ->get();

        //var_dump($users);

        return response()->json(['data' => $query]);
       


    }
    public function getTitle(){


        $userEmail = session('userEmail');

    

        $query = DB::table('businessTitle')->select('*')->where('userEmail', $userEmail)->get();

        // $users = DB::table('businessContent')
        //     ->join('businessTitle', 'businessContent.userEmail', '=', 'businessTitle.userEmail')
        //     ->where('businessContent.userEmail', $userEmail)
        //     ->select('*')
        //     ->get();

        //var_dump($users);

        return response()->json(['data' => $query]);
       


    }
    public function getContent(){


        // Get Business modeal from DB for user's to search threw.
        $query = DB::table('businessTitle')->select('*')->get();

        //var_dump($query);

        return response()->json(['data' => $query]);
       


    }
    public function updateUserKey($content,$table){

        $userEmail = session('userEmail');

        echo $content;
        echo $table;

        DB::table('businessContent')->insert(
                array('userEmail' => $userEmail, 'content' => $content, 'type' => $table)
        );


        // $userEmail = session('userEmail');

        // $query = DB::table('businessVontent')->select('*')->where('userEmail', $userEmail);

        // echo $query;

        //return response()->json(['email' => $userEmail]);
       


    }

    public function updateNote($content,$table,$type){

        $userEmail = session('userEmail');
        // $userEmail = 'test@test.com';
        // echo $userEmail;
        // echo $content;
        // echo $table;
        // echo $type;

        $query = DB::table('businessContent')->select('*')->where('userEmail', $userEmail)->where('type', $table)->where('value', $type)->get();

        //var_dump($query);

        if(count($query) === 0){

                DB::table('businessContent')->insert(
                        array('userEmail' => $userEmail, 'content' => $content, 'type' => $table, 'value' => $type)
                );

                // echo 'true';

        


            }else{

               // echo 'false';
                DB::table('businessContent')
                            ->where('userEmail', $userEmail)
                            ->where('type', $table)
                            ->where('value', $type)
                            ->update(array('content' => $content));


            }

                return response()->json(['data' => true]);
            
            

    }

    public function addTitle($title){

        $userEmail = session('userEmail');
        // $userEmail = 'test@test.com';
         echo $userEmail;
         echo $title;
        $mytime = Carbon\Carbon::now();
        $formattedTime =  $mytime->toDateTimeString();

        $query = DB::table('businessTitle')->select('*')->where('userEmail', $userEmail)->get();

        //var_dump($query);

        // Check if title exist
        if(count($query) === 0){

                DB::table('businessTitle')->insert(
                        array('userEmail' => $userEmail, 'Title' => $title, 'timeStamp' => $formattedTime)
                );

                 echo 'true';

                return response()->json(['data' => 'true']);

            // Create
            }else{

                echo 'else';

                DB::table('businessTitle')
                            ->where('userEmail', $userEmail)
                            ->update(array('Title' => $title,'timeStamp' => $formattedTime));

                return response()->json(['data' => 'false']);

            }


            return response()->json(['data' => 'false']);
            
            

    }

    public function deleteNote($table,$type){

        $userEmail = session('userEmail');
        // $userEmail = 'test@test.com';
        //  echo $userEmail;
        // // echo $content;
        //  echo $table;
        //  echo $type;

         DB::table('businessContent')->where('userEmail', $userEmail)->where('type', $table)->where('value', $type)->delete();

 

        return response()->json(['data' => 'Good']);
            
            

    }
    public function moreInfo($email){

        //$userEmail = session('userEmail');
        // $userEmail = 'test@test.com';
         // echo $email;
        // // echo $content;
        //  echo $table;
        //  echo $type;

        // DB::table('businessContent')->where('userEmail', $userEmail)->where('type', $table)->where('value', $type)->delete();

         //$query = DB::table('businessContent')->select('*')->where('userEmail', $email)->get();

        $users = DB::table('businessContent')
            ->join('businessTitle', 'businessContent.userEmail', '=', 'businessTitle.userEmail')
            ->where('businessContent.userEmail', $email)
            ->select('*')
            ->get();



        return response()->json(['data' => $users]);

            
            

    }
    public function sendMessage($toEmail,$message){

        $userEmail = session('userEmail');
        // $userEmail = 'test@test.com';
         // echo $email;
        // // echo $content;
            echo $toEmail;
            echo $message;
            $mytime = Carbon\Carbon::now();
            $formattedTime =  $mytime->toDateTimeString();


        DB::table('messages')->insert(
            array('email' => $toEmail, 'message' => $message, 'fromEmail' => $userEmail, 'timeStamp' => $formattedTime)
        );





        return response()->json(['data' => True]);

            
            

    }
    public function getMessages(){

        $userEmail = session('userEmail');
 

        $query = DB::table('messages')->select('*')->where('email', $userEmail)->get();



        return response()->json(['data' => $query]);

            
            

    }
    public function getUserMessages($fromEmail){

        $userEmail = session('userEmail');

       // echo $fromEmail;


         $query = DB::table('messages')
            ->where('email', $userEmail)
            ->where('fromEmail', $fromEmail)
            ->orWhere(function($query2) use ($fromEmail,$userEmail)
            {
                $query2->where('email', $fromEmail)
                      ->where('fromEmail',$userEmail);
            })
            ->get();

        

        return response()->json(['data' => $query]);

            
            

    }
    public function searchTitle($input){

        $userEmail = session('userEmail');

        //echo $input;


        $query = DB::table('businessTitle')->select('*')->where('Title', $input)->orWhere('userEmail', $input)->get();

        

        return response()->json(['data' => $query]);

            
            

    }
}

?>