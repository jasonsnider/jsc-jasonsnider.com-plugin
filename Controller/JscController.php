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

    /**
     * Called before action
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
        $this->Authorize->allow('*');
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
        $cipher = Random::random('CAKECIPHER');
        $salt = Random::random('CAKESALT');
        
        $this->set(compact(
            'cipher',
            'salt'
        ));
        
    }
    

    /**
     * The home page for jasonsnider.com
     * @return void
     */
    public function parbake() {}

}