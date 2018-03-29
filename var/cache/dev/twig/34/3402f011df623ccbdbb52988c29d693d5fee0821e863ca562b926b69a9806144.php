<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_04de49f606eb76c9e8c2d20ae4aab7d4a71e8bafa6d895af7672846deeac1499 extends Twig_Template
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
        $__internal_2cd9902fc5e35152e450f6014e49e73515cafb097f81f0be89474701ca29c03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd9902fc5e35152e450f6014e49e73515cafb097f81f0be89474701ca29c03e->enter($__internal_2cd9902fc5e35152e450f6014e49e73515cafb097f81f0be89474701ca29c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_80917801f24a2c3bf54f05c9d6562c54cd63370f2e66fdcdaba0ee06b7e3cd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80917801f24a2c3bf54f05c9d6562c54cd63370f2e66fdcdaba0ee06b7e3cd7d->enter($__internal_80917801f24a2c3bf54f05c9d6562c54cd63370f2e66fdcdaba0ee06b7e3cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2cd9902fc5e35152e450f6014e49e73515cafb097f81f0be89474701ca29c03e->leave($__internal_2cd9902fc5e35152e450f6014e49e73515cafb097f81f0be89474701ca29c03e_prof);

        
        $__internal_80917801f24a2c3bf54f05c9d6562c54cd63370f2e66fdcdaba0ee06b7e3cd7d->leave($__internal_80917801f24a2c3bf54f05c9d6562c54cd63370f2e66fdcdaba0ee06b7e3cd7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
