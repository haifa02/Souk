<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d3cf0dac3c7f0214c7137141212a4e8a10be4b8e484d3220ceae6f66dc3dd91b extends Twig_Template
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
        $__internal_13f9184090bcb439857191d520ae625da624642ac85684e1b245ee90e6cfc424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f9184090bcb439857191d520ae625da624642ac85684e1b245ee90e6cfc424->enter($__internal_13f9184090bcb439857191d520ae625da624642ac85684e1b245ee90e6cfc424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4e0c313f79cd9a263221dd07505467afaef8b67757eae59b294e426a43d0521c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0c313f79cd9a263221dd07505467afaef8b67757eae59b294e426a43d0521c->enter($__internal_4e0c313f79cd9a263221dd07505467afaef8b67757eae59b294e426a43d0521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_13f9184090bcb439857191d520ae625da624642ac85684e1b245ee90e6cfc424->leave($__internal_13f9184090bcb439857191d520ae625da624642ac85684e1b245ee90e6cfc424_prof);

        
        $__internal_4e0c313f79cd9a263221dd07505467afaef8b67757eae59b294e426a43d0521c->leave($__internal_4e0c313f79cd9a263221dd07505467afaef8b67757eae59b294e426a43d0521c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
