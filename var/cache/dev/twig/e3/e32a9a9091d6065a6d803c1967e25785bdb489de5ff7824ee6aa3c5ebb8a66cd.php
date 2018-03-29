<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a3553f46fbbd8778cdfd65ce6eb1aca2252895e9731d1536790ddbbf6c3d0429 extends Twig_Template
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
        $__internal_c0a278ea8ed58da21ce85dfefaa39f88b3e6a57979b7e9d6b70c9014135c9320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a278ea8ed58da21ce85dfefaa39f88b3e6a57979b7e9d6b70c9014135c9320->enter($__internal_c0a278ea8ed58da21ce85dfefaa39f88b3e6a57979b7e9d6b70c9014135c9320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9084e094726d4ffe1e73e7f3b113ff92b2a693c53b8aae73b13a051cac0f1f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9084e094726d4ffe1e73e7f3b113ff92b2a693c53b8aae73b13a051cac0f1f94->enter($__internal_9084e094726d4ffe1e73e7f3b113ff92b2a693c53b8aae73b13a051cac0f1f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c0a278ea8ed58da21ce85dfefaa39f88b3e6a57979b7e9d6b70c9014135c9320->leave($__internal_c0a278ea8ed58da21ce85dfefaa39f88b3e6a57979b7e9d6b70c9014135c9320_prof);

        
        $__internal_9084e094726d4ffe1e73e7f3b113ff92b2a693c53b8aae73b13a051cac0f1f94->leave($__internal_9084e094726d4ffe1e73e7f3b113ff92b2a693c53b8aae73b13a051cac0f1f94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
