<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9b39c1c7e98ad2fdb1534fbb5dad20897395a06f88a773880de7b8d1d67ca173 extends Twig_Template
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
        $__internal_f9d07be556510fb7a41b950ebd1ce84edce849b29f2612bcd214e6b83c7ddbfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d07be556510fb7a41b950ebd1ce84edce849b29f2612bcd214e6b83c7ddbfa->enter($__internal_f9d07be556510fb7a41b950ebd1ce84edce849b29f2612bcd214e6b83c7ddbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_52ff51db58b961a3fbcbf8b44bcf8955f39510f2704f37212a5795e7f010db3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ff51db58b961a3fbcbf8b44bcf8955f39510f2704f37212a5795e7f010db3a->enter($__internal_52ff51db58b961a3fbcbf8b44bcf8955f39510f2704f37212a5795e7f010db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f9d07be556510fb7a41b950ebd1ce84edce849b29f2612bcd214e6b83c7ddbfa->leave($__internal_f9d07be556510fb7a41b950ebd1ce84edce849b29f2612bcd214e6b83c7ddbfa_prof);

        
        $__internal_52ff51db58b961a3fbcbf8b44bcf8955f39510f2704f37212a5795e7f010db3a->leave($__internal_52ff51db58b961a3fbcbf8b44bcf8955f39510f2704f37212a5795e7f010db3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
