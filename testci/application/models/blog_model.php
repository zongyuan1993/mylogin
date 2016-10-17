<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Model {
//	增删delete改update查get存save
public  function get_all(){
	return $this -> db ->get('t_blog') -> result();
}
}
