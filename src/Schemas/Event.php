<?php

namespace FNVi\Events\Schemas;
use FNVi\Mongo\Schema;
/**
 * Description of Event
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class Event extends Schema{
    
    public $type;
    public $user;
    public $seen = [];
    
    public function __construct() {
        parent::__construct();
    }
}
