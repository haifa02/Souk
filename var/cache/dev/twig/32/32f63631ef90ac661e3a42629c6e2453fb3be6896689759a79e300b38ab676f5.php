<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9ec7411a635cd5e77ca5c71dd8140aeae649a4bd484c4e49699738fa52c2c0ce extends Twig_Template
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
        $__internal_130882445bf9544b34a630334251501b15513424ffa177fe12536ba3012d9825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130882445bf9544b34a630334251501b15513424ffa177fe12536ba3012d9825->enter($__internal_130882445bf9544b34a630334251501b15513424ffa177fe12536ba3012d9825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_471c539f00a9cef0cbe4283e9eff63aba3a7910e05f0e83f52f039fb87a09edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471c539f00a9cef0cbe4283e9eff63aba3a7910e05f0e83f52f039fb87a09edb->enter($__internal_471c539f00a9cef0cbe4283e9eff63aba3a7910e05f0e83f52f039fb87a09edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_130882445bf9544b34a630334251501b15513424ffa177fe12536ba3012d9825->leave($__internal_130882445bf9544b34a630334251501b15513424ffa177fe12536ba3012d9825_prof);

        
        $__internal_471c539f00a9cef0cbe4283e9eff63aba3a7910e05f0e83f52f039fb87a09edb->leave($__internal_471c539f00a9cef0cbe4283e9eff63aba3a7910e05f0e83f52f039fb87a09edb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
