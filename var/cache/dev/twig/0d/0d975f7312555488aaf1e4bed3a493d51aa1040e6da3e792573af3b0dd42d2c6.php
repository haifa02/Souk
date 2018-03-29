<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_82f67baeb531d48d8cffb759266e69e0e50b12fe6aada54bd26eccdd256500dc extends Twig_Template
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
        $__internal_ec5e7beaf725e2857df811560580dc4e41bb6a56284bd204746ce981a3ce4feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5e7beaf725e2857df811560580dc4e41bb6a56284bd204746ce981a3ce4feb->enter($__internal_ec5e7beaf725e2857df811560580dc4e41bb6a56284bd204746ce981a3ce4feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_fb2e698b8718c3fb4766ff61f29578751307813b98d7bff1728e155f83bf52b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2e698b8718c3fb4766ff61f29578751307813b98d7bff1728e155f83bf52b4->enter($__internal_fb2e698b8718c3fb4766ff61f29578751307813b98d7bff1728e155f83bf52b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ec5e7beaf725e2857df811560580dc4e41bb6a56284bd204746ce981a3ce4feb->leave($__internal_ec5e7beaf725e2857df811560580dc4e41bb6a56284bd204746ce981a3ce4feb_prof);

        
        $__internal_fb2e698b8718c3fb4766ff61f29578751307813b98d7bff1728e155f83bf52b4->leave($__internal_fb2e698b8718c3fb4766ff61f29578751307813b98d7bff1728e155f83bf52b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
