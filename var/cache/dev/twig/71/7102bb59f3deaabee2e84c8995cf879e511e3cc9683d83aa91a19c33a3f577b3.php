<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1d6f285278dd4ce61e124db53abeb6f13b88787e7556b720f58ab2c0fb70f46e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34760402370d046a57443656115cf1f0701c1d5c9fccd7bf072942f32fc5fe20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34760402370d046a57443656115cf1f0701c1d5c9fccd7bf072942f32fc5fe20->enter($__internal_34760402370d046a57443656115cf1f0701c1d5c9fccd7bf072942f32fc5fe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b1a1753206a6a56fd9a08bc8b6fde2266122392f4499e2da234ffeb311c1eef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a1753206a6a56fd9a08bc8b6fde2266122392f4499e2da234ffeb311c1eef6->enter($__internal_b1a1753206a6a56fd9a08bc8b6fde2266122392f4499e2da234ffeb311c1eef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_34760402370d046a57443656115cf1f0701c1d5c9fccd7bf072942f32fc5fe20->leave($__internal_34760402370d046a57443656115cf1f0701c1d5c9fccd7bf072942f32fc5fe20_prof);

        
        $__internal_b1a1753206a6a56fd9a08bc8b6fde2266122392f4499e2da234ffeb311c1eef6->leave($__internal_b1a1753206a6a56fd9a08bc8b6fde2266122392f4499e2da234ffeb311c1eef6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
