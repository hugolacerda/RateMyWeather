<?php

require_once 'models/view.php';

class Home {
	function get($pairs) {

		//===== Check to see if an action is typed in
		if(empty($pairs['action'])) {
			$action = 'home';
		}
		else {
			$action = $pairs['action'];
		}

		$view = new View();

		//== Get weather data
		$w_data = $this->weatherData();

		$data = array(
			'site_title' => "Rate My Weather",
			'city' => $w_data{'city'},
			'weather_type' => $w_data{'weather_type'},
			'temp' => $w_data{'temp'},
			'humidity' => $w_data{'humidity'},
			'wind_speed' => $w_data{'wind_speed'},
			'wind_direction' => $w_data{'wind_direction'},
			'icon' => $w_data{'icon'},
			'map' => $w_data{'map'}
		);

		// echo $data{'city'};


		//== Get Views
		$view->getView('header', $data);

		if($action == 'rateWeather') {
			// echo '=-==========';
			$this->rateWeather();

			// echo '<div class="container"><div class="row-fluid"><h2>Thank you for your rating</h2></div></div>';

			$db = new DBConnector();
			$result = $db->getRate();

			// var_dump($result);

			$like = 0;
			$dislike = 0;

			foreach($result as $v){
				// echo '========<br>';
				// echo $v['post'];
				// echo '========<br>';
				
				$post = $v['post'];
				// echo $post;
				if($post == '1'){
					$like++;
				}
				else {
					$dislike++;
				}
			}

			// echo $like;
			// echo $dislike;

			$likeStr = "$like";
			$dislikeStr = "$dislike";

			$userData = array (
				'like' => $likeStr,
				'dislike' => $dislikeStr
			);

			// var_dump($data);

			$array = array_merge($data, $userData);
			// var_dump($array);

			$data = $array;

			// var_dump($data);

			$view->getView('home', $data);
		}

		else {
			$view->getView('home', $data);
		}

		$view->getView('footer', $data);
	}

	function callAPIs(){

		//== User Location API
		//$locationAPI = "http://api.hostip.info/get_json.php?position=true";
		$locationAPI = "http://api.wunderground.com/api/e6a8c06bb1ce5653/geolookup/q/autoip.json";
		$results = file_get_contents($locationAPI);
		$deCode = json_decode($results, true);

		// var_dump($deCode);

		//User city data
		$cityData = $deCode["location"]["city"];

		//Regular expressions to get strings from Location API data
		//$state = preg_replace("/^.+, /", '' , $cityData);
		$state = $deCode["location"]["state"];
		$city = preg_replace("/, \w\w$/", '' , $cityData);
		$cityFix = preg_replace("/ /", "_" , $city); // Fixes cities that have more than 1 word (West Palm Beach) and replaces the spaces with "_"

		// $state = 'FL';
		// $cityFix = 'west_palm_beach';
		//== Weather API
		$weatherAPI = "http://api.wunderground.com/api/e6a8c06bb1ce5653/conditions/q/". $state. "/" . $cityFix .".json";
		$results = file_get_contents($weatherAPI);
		$deCode = json_decode($results, true);

		// Animated Map
		$map = "http://api.wunderground.com/api/e6a8c06bb1ce5653/animatedradar/q/" . $state . "/" . $cityFix . ".gif?newmaps=1&timelabel=1&timelabel.y=10&num=5&delay=50";

		// echo 'MAP: ' . $map;

		$API_data = array(
			'weather_data' => $deCode,
			'map_data' => $map
		);

		return $API_data;
	}

	function weatherData(){

		$API_data = $this->callAPIs();
		$data = $API_data{'weather_data'};
		$map = $API_data{'map_data'};

		//== |> City <|
		$city = $data['current_observation']['display_location']['city'];
		// echo $city;

		//== |> Weather Type <|
		$weather_type = $data['current_observation']['weather'];
		// echo $weather_type;

		//== |> Temperature <|
		$temp = $data['current_observation']['temp_f'] . '&deg;';
		// echo $temp;

		//== |> Humidity <|
		$humidity = $data['current_observation']['relative_humidity'];
		// echo $humidity;

		//== |> Wind Speed <|
		$windSpeed = $data['current_observation']['wind_mph'] . ' mph';
		// echo $windSpeed;

		//== |> Wind Direction <|
		$windDirection = $data['current_observation']['wind_dir'];
		// echo $windDirection;

		//== |> Weather Icon <|
		$icon = $data['current_observation']['icon_url'];
		// echo "<img src='".$icon."' />";

		// echo '=====';

		$w_data = array(
			'city' => $city,
			'weather_type' => $weather_type,
			'temp' => $temp,
			'humidity' => $humidity,
			'wind_speed' => $windSpeed,
			'wind_direction' => $windDirection,
			'icon' => $icon,
			'map' => $map
		);

		return $w_data;
	}

	function rateWeather(){
		include 'models/connection.php';

		// echo '============== <br>';
		// var_dump($_POST);
		// echo '============== <br>';

		if (empty($_POST["good"])){
			$good = false;
		} else {
		$good = true;
		}

		if (empty($_POST["bad"])){
			$bad = false;
		} else{
		$bad = true;
		}

		if($bad == true){
			$post = 2;
		}else{
			$post = 1;
		}

		//Need to set default time zone
		date_default_timezone_set('America/New_York');
		$date = date("m.d.y"); 

		// var_dump($date);

		$Connect = new DBConnector();
		$Connect->addRate($post, $date);
	}
}




?>