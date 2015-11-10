<?PHP

namespace App\Http\Controllers;

use DB;
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

        echo $data;
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
        //echo $jsonarr['results'][0]['name'];


        $data = array(
                'places'=>$jsonarr
        );


        return view('places',$data);

    }


}

?>