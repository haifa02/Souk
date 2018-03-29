<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3074221b836b08f5e016716cc13c6469d96fa8493179ae94b2ff9626bb27c704 extends Twig_Template
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
        $__internal_bc96eaf5d639fcb473342a8828ec64bcc71bfddcaebc5a8a73d8a66a8e5df73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc96eaf5d639fcb473342a8828ec64bcc71bfddcaebc5a8a73d8a66a8e5df73b->enter($__internal_bc96eaf5d639fcb473342a8828ec64bcc71bfddcaebc5a8a73d8a66a8e5df73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4dc3c60cd417f5a0d1278b12c900a65e98587fff3ae2e43f7c59e3669f46e463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc3c60cd417f5a0d1278b12c900a65e98587fff3ae2e43f7c59e3669f46e463->enter($__internal_4dc3c60cd417f5a0d1278b12c900a65e98587fff3ae2e43f7c59e3669f46e463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_bc96eaf5d639fcb473342a8828ec64bcc71bfddcaebc5a8a73d8a66a8e5df73b->leave($__internal_bc96eaf5d639fcb473342a8828ec64bcc71bfddcaebc5a8a73d8a66a8e5df73b_prof);

        
        $__internal_4dc3c60cd417f5a0d1278b12c900a65e98587fff3ae2e43f7c59e3669f46e463->leave($__internal_4dc3c60cd417f5a0d1278b12c900a65e98587fff3ae2e43f7c59e3669f46e463_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
