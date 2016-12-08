<?php 
//REGISTRY CLASSES
/*
*The registry is an object where site wide variables can be stored without the use of globals.
By passing the registry object to the controllers that need them, we avoid pollution of the global namespace and render our variables safe.
We need to be able to set registry variables and to get them. The php magic functions __set() and __get() are ideal for this purpose. 
*/

/**
*	@Vars_array
*	@acces_private
*/
private $vars = array();

/**
 *
 * @set undefined vars
 *
 * @param string $index
 *
 * @param mixed $value
 *
 * @return void
 *
 */
 public function __set($index, $value)
 {
        $this->vars[$index] = $value;
 }

 /**
 *
 * @get variables
 *
 * @param mixed $index
 *
 * @return mixed
 *
 */
 public function __get($index)
 {
        return $this->vars[$index];
 }

}

//END OF CODE
?>