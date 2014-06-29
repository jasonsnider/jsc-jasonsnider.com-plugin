<?php
/**
 * JSC Controller
 *
 * JSC (http://jasonsnider.com/jsc)
 * Copyright 2013, Jason D Snider. (http://jasonsnider.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2013, Jason D Snider. (http://jasonsnider.com)
 * @link http://jasonsnider.com
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @author Jason D Snider <jason@jasonsnider.com>
 * @package       Users
 */
App::uses('JasonSniderAppController', 'JasonSnider.Controller');
App::uses('Random', 'Utilities.Lib');
App::uses('Post', 'Contents.Model');

/**
 * JSC Controller
 * @author Jason D Snider <jason@jasonsnider.com>
 * @package Contents
 */
class JasonSniderController extends JasonSniderAppController {
    
    /**
     * Jsc uses
     * -Post
     * @var array
     */
    public $uses = array(
		'Contents.Post'
    );

	/**
	 *
	 * @var array
	 */
    public $components = array('Contents.Meta');
    
	/**
	 * 
	 * @var array
	 */
    public $utils = array(
		'cakephp_salt_and_cipher_generator'=>array(
			'title'=>'Cakephp Salt and Cipher Generator',
			'description'=>'Provides psuedo-random salt and cipher values for CakePHP applications'
		),
		'hash_generator'=>array(
			'title'=>'Hash Generator',
			'description'=>'Returns a hashed version of a given string'
		),
		'random_string_generator'=>array(
			'title'=>'Random String Generator',
			'description'=>'Generates psudo-random strings based on user supplied values.'
		),
		'who_am_i'=>array(
			'title'=>'Who Am I',
			'description'=>'This is who your seen to ISP\'s and websites.'
		),
		'domain_and_ip_analysis'=>array(
			'title'=>'Domain and IP Analysis',
			'description'=>'Returns information about a Ip address and/or domain name.'
		)
	);
	
    /**
     * Called before action
     * - Sets access levels
     * - Turns on meta data by default
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
        $this->Authorize->allow('*');
		
        $this->Meta->data();
		
		$this->set('utils', $this->utils);
    }

    /**
     * @return void
     */
    public function index() {}
    
    /**
     * The home page for jasonsnider.com
     * @return void
     */
    public function home() {
        $latestPost = $this->Post->fetchLatest();
        
		$randomPosts = $this->Post->find(
			'all', 
			array( 
			'fields'=>array(
				'title',
				'slug'
			),
			'conditions' => array(
				'Post.content_status' => 'published'
			), 
			'order' => 'rand()',
			'limit' => 6,
			)
		);
		
        $this->set(compact(
            'latestPost',
			'randomPosts'
        ));
    }

    /**
     * The home page for jasonsnider.com
     * @return void
     */
    public function cakephp_salt_and_cipher_generator() {
        
        $this->request->title = 'CakePHP Salt and Cipher Generator'; 
        
        $cipher = Random::random('CAKECIPHER');
        $salt = Random::random('CAKESALT');
        
        $this->set(compact(
            'cipher',
            'salt'
        ));
    }
    
    /**
     * Returns the hashed values of a given string
     * @return void
     */
    public function random_string_generator() {
        
        $this->request->title = 'Random String Generator'; 

        $string = false;
        
        if(empty($this->request->data)){
            $this->request->data['Hash']['length'] = 24;
            $this->request->data['Hash']['upper'] = 1;
            $this->request->data['Hash']['lower'] = 1;
            $this->request->data['Hash']['numeric'] = 1;
            $this->request->data['Hash']['special'] = 1;
            $this->request->data['Hash']['disambiguate'] = 1;
        }
        
        $length = empty($this->request->data['Hash']['length'])?0:$this->request->data['Hash']['length'];
        $upper = empty($this->request->data['Hash']['upper'])?false:'u';
        $lower = empty($this->request->data['Hash']['lower'])?false:'l';
        $numeric = empty($this->request->data['Hash']['numeric'])?false:'n';
        $special = empty($this->request->data['Hash']['special'])?false:'s';
        $disambiguate = empty($this->request->data['Hash']['disambiguate'])?false:'d';

        $alphabet = $upper.$lower.$numeric.$special.$disambiguate;
        $string = Random::random($alphabet, $length);
        
        
        $this->set(compact(
            'string'
        ));
    }

    /**
     * Returns the hashed values of a given string
     * @return void
     */
    public function hash_generator() {
        
        $this->request->title = 'Hash Generator'; 
        
        $algos = hash_algos();
        $numOfAlgos = count($algos);
        
        $this->set(compact(
            'algos',
            'numOfAlgos'
        ));
    }
    
    /**
     * A utilitity for showing meta data about a specific visitor
     * @return void
     */
    public function who_am_i(){
        $this->request->title = 'Who Am I?';
    }
	
    /**
     * Display information about a target location
     * @return void
     */
    public function domain_and_ip_analysis(){
        $this->request->title = 'Domain and IP Analysis';
		
		$data = array();

		if(!empty($this->request->data)){
			
			//Use IP validation to determine what type of look up to perform
			if(Validation::ip($this->request->data['WhoIs']['target'], 'both')){
				//Is an IP address
				$data['gethostbyaddr'] = gethostbyaddr($this->request->data['WhoIs']['target']);
				
				//Traceroute
				$traceRoute = shell_exec(escapeshellcmd("traceroute {$this->request->data['WhoIs']['target']}"));
				$data['traceRoute'] = $traceRoute;
				
			}elseif(Validation::url($this->request->data['WhoIs']['target'])){
				//Is a host name
				$data['gethostbyname'] = gethostbyname($this->request->data['WhoIs']['target']);
				$data['gethostbynamel'] = gethostbynamel($this->request->data['WhoIs']['target']);
			
				//Traceroute
				$traceRoute = shell_exec(escapeshellcmd("traceroute {$this->request->data['WhoIs']['target']}"));
				$data['traceRoute'] = $traceRoute;

				//Whois
				$whois = shell_exec("whois {$this->request->data['WhoIs']['target']}");
				$data['whois'] = $whois;
			}else{
				die('Invalid format');
			}
		}
		
		$this->set(compact('data'));
		
    }
}