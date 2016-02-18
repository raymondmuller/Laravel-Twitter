<?php namespace Philo\Twitter;

use Config;

class Twitter extends \TijsVerkoyen\Twitter\Twitter{

	/**
	 * Default constructor
	 *
	 * @param string $consumerKey    The consumer key to use.
	 * @param string $consumerSecret The consumer secret to use.
	 */
	public function __construct()
	{
	    $this->setConsumerKey( config('services.twitter.consumer_key', false) );
	    $this->setConsumerSecret( config('services.twitter.consumer_secret', false) );
	}

}
