<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_61c8bb1badaf70942009c083bd6551c21e9185ce0fa67483f107ddeab6f485a1 extends Twig_Template
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
        $__internal_6eed76fef248d3951c1762846865d73e93fd97ab4bf98c8f3f5830e1c90e350d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eed76fef248d3951c1762846865d73e93fd97ab4bf98c8f3f5830e1c90e350d->enter($__internal_6eed76fef248d3951c1762846865d73e93fd97ab4bf98c8f3f5830e1c90e350d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_88f66179f5f79ce917af096af6aceee6bc12f306bf022ddcdf538860dcb77257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f66179f5f79ce917af096af6aceee6bc12f306bf022ddcdf538860dcb77257->enter($__internal_88f66179f5f79ce917af096af6aceee6bc12f306bf022ddcdf538860dcb77257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6eed76fef248d3951c1762846865d73e93fd97ab4bf98c8f3f5830e1c90e350d->leave($__internal_6eed76fef248d3951c1762846865d73e93fd97ab4bf98c8f3f5830e1c90e350d_prof);

        
        $__internal_88f66179f5f79ce917af096af6aceee6bc12f306bf022ddcdf538860dcb77257->leave($__internal_88f66179f5f79ce917af096af6aceee6bc12f306bf022ddcdf538860dcb77257_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
