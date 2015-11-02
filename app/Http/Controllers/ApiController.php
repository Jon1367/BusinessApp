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

        return Response::json($data);
    }


}

?>