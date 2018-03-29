<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_33ee2f3f389df3326ec0fa64f41fd91a956a049f0c2198920b6f67b7636b3441 extends Twig_Template
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
        $__internal_991750b7d02bd8443c7e4dabdbb1b8f165b9a7fdea67ab283006a4ddf98bdbf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991750b7d02bd8443c7e4dabdbb1b8f165b9a7fdea67ab283006a4ddf98bdbf6->enter($__internal_991750b7d02bd8443c7e4dabdbb1b8f165b9a7fdea67ab283006a4ddf98bdbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_acc61749cd47501de5ec684ad3fafce2e65aa951f3a41aa69efba3d258dc1f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc61749cd47501de5ec684ad3fafce2e65aa951f3a41aa69efba3d258dc1f7b->enter($__internal_acc61749cd47501de5ec684ad3fafce2e65aa951f3a41aa69efba3d258dc1f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_991750b7d02bd8443c7e4dabdbb1b8f165b9a7fdea67ab283006a4ddf98bdbf6->leave($__internal_991750b7d02bd8443c7e4dabdbb1b8f165b9a7fdea67ab283006a4ddf98bdbf6_prof);

        
        $__internal_acc61749cd47501de5ec684ad3fafce2e65aa951f3a41aa69efba3d258dc1f7b->leave($__internal_acc61749cd47501de5ec684ad3fafce2e65aa951f3a41aa69efba3d258dc1f7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
