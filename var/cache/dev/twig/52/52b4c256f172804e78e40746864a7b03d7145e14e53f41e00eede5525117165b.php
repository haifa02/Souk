<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9deec5dab0fb528cdad6875a176992f86a301f89ca5fb7c1bfb5c5f2e5333832 extends Twig_Template
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
        $__internal_8d0ee0e94c61c6896fd12eaaf768b30189dd9f61878d6a630b8a96ae918bc61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0ee0e94c61c6896fd12eaaf768b30189dd9f61878d6a630b8a96ae918bc61f->enter($__internal_8d0ee0e94c61c6896fd12eaaf768b30189dd9f61878d6a630b8a96ae918bc61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3016b8795ee7f33a7b881e0c1c2d921f37c66fa1ebe9be405ce4831c725a3c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3016b8795ee7f33a7b881e0c1c2d921f37c66fa1ebe9be405ce4831c725a3c69->enter($__internal_3016b8795ee7f33a7b881e0c1c2d921f37c66fa1ebe9be405ce4831c725a3c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8d0ee0e94c61c6896fd12eaaf768b30189dd9f61878d6a630b8a96ae918bc61f->leave($__internal_8d0ee0e94c61c6896fd12eaaf768b30189dd9f61878d6a630b8a96ae918bc61f_prof);

        
        $__internal_3016b8795ee7f33a7b881e0c1c2d921f37c66fa1ebe9be405ce4831c725a3c69->leave($__internal_3016b8795ee7f33a7b881e0c1c2d921f37c66fa1ebe9be405ce4831c725a3c69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
