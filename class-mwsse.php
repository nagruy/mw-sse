<?php

/**
 * Hooks for MwSSE extension.
 *
 * @version 1.1.0
 */

class MwSSEHooks {

	public static function on_login_action( $ret, $user, $userName ){
		
		global $wgEmergencyContact;
		global $wgSitename;

		$ip_addr = filter_input(INPUT_SERVER, 'HTTP_X_FORWARDED_FOR') ?? filter_input(INPUT_SERVER, 'REMOTE_ADDR');

		//ini_set("log_errors", 1);
		//ini_set("error_log", "tectel.log");

		if ( empty( $ret->status ) ) {
			return;
		}

		if ( 'PASS' === $ret->status )
		{
			$email = $user->getEmail();
		}
		else
		{
			$email = $wgEmergencyContact;
			error_log( "[MwSSE - Extension]: Login $ret->status from $ip_addr" );
		}

		$body = "User{ $userName } IP{ $ip_addr }";

		$wgEmailSubject = "$wgSitename login $ret->status";
		
		$headers = "From: $wgSitename\r\n";

		$mailstatus = mail($email, $wgEmailSubject, $body, $headers);

		return;
	}
}
