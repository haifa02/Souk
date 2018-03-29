<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_51b5ce7653fcce3b78aac30d2b250cc886a4ea8c1aa44624a9f3b88b2fd080aa extends Twig_Template
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
        $__internal_0ff351c709992fbb3bcaeaddcfc773c913919d744606ab9df707fc785195dfa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff351c709992fbb3bcaeaddcfc773c913919d744606ab9df707fc785195dfa5->enter($__internal_0ff351c709992fbb3bcaeaddcfc773c913919d744606ab9df707fc785195dfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_13f99a50267b04936023e13f20308d3b259d5489c2a3f959322056cb5f2d90d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f99a50267b04936023e13f20308d3b259d5489c2a3f959322056cb5f2d90d5->enter($__internal_13f99a50267b04936023e13f20308d3b259d5489c2a3f959322056cb5f2d90d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0ff351c709992fbb3bcaeaddcfc773c913919d744606ab9df707fc785195dfa5->leave($__internal_0ff351c709992fbb3bcaeaddcfc773c913919d744606ab9df707fc785195dfa5_prof);

        
        $__internal_13f99a50267b04936023e13f20308d3b259d5489c2a3f959322056cb5f2d90d5->leave($__internal_13f99a50267b04936023e13f20308d3b259d5489c2a3f959322056cb5f2d90d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
