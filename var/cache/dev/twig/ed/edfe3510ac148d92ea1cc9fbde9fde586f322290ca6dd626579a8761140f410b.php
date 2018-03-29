<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81a9e5401dc4dca1cf2825130da666f896a7b13f191c9bb327e5234d04c21ebb extends Twig_Template
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
        $__internal_c5c5381190bb7f6635e05ebf8440676e58d855585e9e9a66753f0438c360fa00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c5381190bb7f6635e05ebf8440676e58d855585e9e9a66753f0438c360fa00->enter($__internal_c5c5381190bb7f6635e05ebf8440676e58d855585e9e9a66753f0438c360fa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f04e6ddbf6f63b17cbdde7aa65c028a10954eab9f4bb7e53865182c9473a2545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04e6ddbf6f63b17cbdde7aa65c028a10954eab9f4bb7e53865182c9473a2545->enter($__internal_f04e6ddbf6f63b17cbdde7aa65c028a10954eab9f4bb7e53865182c9473a2545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c5c5381190bb7f6635e05ebf8440676e58d855585e9e9a66753f0438c360fa00->leave($__internal_c5c5381190bb7f6635e05ebf8440676e58d855585e9e9a66753f0438c360fa00_prof);

        
        $__internal_f04e6ddbf6f63b17cbdde7aa65c028a10954eab9f4bb7e53865182c9473a2545->leave($__internal_f04e6ddbf6f63b17cbdde7aa65c028a10954eab9f4bb7e53865182c9473a2545_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
