<?PHP

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

// GOOGLE API KEY: AIzaSyC0iY_V_7CCDAZdbKYso2yRjjR3yJ5QYFM

class ApiController extends Controller
{

    public function __construct()
    {

    }

    public function show($lat,$lon)
    {
     //    $users = DB::select('select * from user');
     //    var_dump($users);
    	//  echo $lat;
    	// echo $lon;

    	// create a new client
    	$client = new \GuzzleHttp\Client();

  //   	// google place api to get near by busniess location
        // https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.581752899999998,-81.30447989999999&radius=500&key=AIzaSyC0iY_V_7CCDAZdbKYso2yRjjR3yJ5QYFM
        // https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='. $lat .','. $lon .'&radius=500&key=AIzaSyC0iY_V_7CCDAZdbKYso2yRjjR3yJ5QYFM
    	$response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=28.581752899999998,-81.30447989999999&radius=500&key=AIzaSyC0iY_V_7CCDAZdbKYso2yRjjR3yJ5QYFM');

	   echo $response->getBody();

		//$data = $response->getBody();
        //return view('welcome');

        //return Response::json($data);
    }


}

?>