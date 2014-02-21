<?php
/**
 * Provides a post-centric controler for contents
 *
 * Parbake (http://jasonsnider.com/parbake)
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
App::uses('JscAppController', 'Jsc.Controller');
App::uses('Random', 'Utilities.Lib');

/**
 * Provides a post-centric controler for contents
 * @author Jason D Snider <jason@jasonsnider.com>
 * @package Contents
 */
class JscController extends JscAppController {
    
    /**
     * Jsc uses
     * -Content
     * @var array
     */
    public $uses = array(
        'Content'
    );

    public $components = array('Contents.Meta');
    
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
		
        $this->request->checkForMeta = true;
        $this->Meta->data();
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
        $latestPost = $this->Content->find(
            'first',
            array(
                'conditions'=>array(
                    'Content.content_type'=>'post'
                ),
                'contain'=>array(),
                'order'=>'Content.created DESC'
            )
        );
        
        $this->set(compact(
            'latestPost'
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
    public function who_is_this(){
        $this->request->title = 'Who is This?';
    }

    /**
     * The home page for jasonsnider.com
     * @return void
     */
    public function parbake() {}

}