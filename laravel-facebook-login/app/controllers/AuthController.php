<?php



class AuthController extends BaseController {

	public function getFacebookLogin($auth=NULL){

		if ($auth=='auth') {
			try {
				Hybrid_Endpoint::process();
			} catch (Exception $e) {
				return Redirect::to('fbauth');
			}

			return;
		}

		$oauth=new Hybrid_Auth(app_path().'/config/fb_auth.php');
		$provider=$oauth->authenticate('Facebook');
		$profile=$provider->getUserProfile();
		echo '<a href="logout">Log Out</a>';
		//return var_dump($profile).'<a href="logout">Log Out</a>';
		print_r($profile);
	}

	public function getLoggedOut(){
		$fauth=new Hybrid_Auth(app_path().'/config/fb_auth.php');
		$fauth->logoutAllProviders();
		return 'deslogueado';
	
	}

}

