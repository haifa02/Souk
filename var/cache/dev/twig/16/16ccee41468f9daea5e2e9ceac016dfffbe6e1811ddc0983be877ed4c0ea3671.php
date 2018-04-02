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
        $__internal_e35df9911f580188f1ae91ddf375c60de3af8de32962b9e30ceddacdc2caaf42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35df9911f580188f1ae91ddf375c60de3af8de32962b9e30ceddacdc2caaf42->enter($__internal_e35df9911f580188f1ae91ddf375c60de3af8de32962b9e30ceddacdc2caaf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c7623e49968544af951dc47c75e0d67d05cce7fb74cee2a6b31464662e1b11ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7623e49968544af951dc47c75e0d67d05cce7fb74cee2a6b31464662e1b11ff->enter($__internal_c7623e49968544af951dc47c75e0d67d05cce7fb74cee2a6b31464662e1b11ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e35df9911f580188f1ae91ddf375c60de3af8de32962b9e30ceddacdc2caaf42->leave($__internal_e35df9911f580188f1ae91ddf375c60de3af8de32962b9e30ceddacdc2caaf42_prof);

        
        $__internal_c7623e49968544af951dc47c75e0d67d05cce7fb74cee2a6b31464662e1b11ff->leave($__internal_c7623e49968544af951dc47c75e0d67d05cce7fb74cee2a6b31464662e1b11ff_prof);

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
