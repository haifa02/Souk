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
        $__internal_afb3e62e512be09358a3fc14d76ef16a72fcdcaff4b3bfca67123841b5f4bdee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb3e62e512be09358a3fc14d76ef16a72fcdcaff4b3bfca67123841b5f4bdee->enter($__internal_afb3e62e512be09358a3fc14d76ef16a72fcdcaff4b3bfca67123841b5f4bdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a22898dcc90c24fc69372bccaebe01ccf1b3822e7df007b77b34569aeced33d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22898dcc90c24fc69372bccaebe01ccf1b3822e7df007b77b34569aeced33d4->enter($__internal_a22898dcc90c24fc69372bccaebe01ccf1b3822e7df007b77b34569aeced33d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_afb3e62e512be09358a3fc14d76ef16a72fcdcaff4b3bfca67123841b5f4bdee->leave($__internal_afb3e62e512be09358a3fc14d76ef16a72fcdcaff4b3bfca67123841b5f4bdee_prof);

        
        $__internal_a22898dcc90c24fc69372bccaebe01ccf1b3822e7df007b77b34569aeced33d4->leave($__internal_a22898dcc90c24fc69372bccaebe01ccf1b3822e7df007b77b34569aeced33d4_prof);

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
