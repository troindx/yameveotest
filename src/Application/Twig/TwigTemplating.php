<?php
namespace Application\Twig;

class TwigTemplating
{
	public $loader;
	public $env;
	public $template;
	public $vars;

	public function __construct($template)
	{
		$this->loader =  new \Twig_Loader_Filesystem("templates/$template");
		$this->env = new \Twig_Environment($this->loader);
		$this->template = DEFAULT_TEMPLATE;
		$this->vars = new \stdClass;
	}

	public function setTemplate($template)
    {
        $this->template = $template;
    }

    public function render()
    {
    	return $this->env->render('friends.twig',array('vars' => $this->vars));
    }

}
?>