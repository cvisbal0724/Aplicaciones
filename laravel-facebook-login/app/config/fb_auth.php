<?php

return array(
      "base_url" => "http://b2.com:84/fbauth/auth",
      "providers" => array (
        "Facebook" => array (
          "enabled" => true,
          "keys"    => array ( "id" => "692875394158198", "secret" => "1c4657a3f46feac8ceb27baaf7cf651f" ),
          "scope"   => "public_profile,email"//, // optional
          //"display" => "popup" // optional
    )));


/*$config = array(
      "base_url" => "http://mywebsite.com/path/to/hybridauth/",
      "providers" => array (
        "Facebook" => array (
          "enabled" => true,
          "keys"    => array ( "id" => "PUT_YOURS_HERE", "secret" => "PUT_YOURS_HERE" ),
          "scope"   => "email, user_about_me, user_birthday, user_hometown", // optional
          "display" => "popup" // optional
    )));*/