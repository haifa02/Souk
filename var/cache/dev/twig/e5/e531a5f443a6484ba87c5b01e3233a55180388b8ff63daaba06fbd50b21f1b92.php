<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e430b77aba1bd6b68b9d06c09bc219d12f2f2766c0d072e69fd3cd5f5b4313de extends Twig_Template
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
        $__internal_300c7722f0d0c9a2b8b67a831ef04998fc36c3095d719fac7fce872f05b91051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300c7722f0d0c9a2b8b67a831ef04998fc36c3095d719fac7fce872f05b91051->enter($__internal_300c7722f0d0c9a2b8b67a831ef04998fc36c3095d719fac7fce872f05b91051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a930acc1ea2f2258da6301081a3ebaed6c391943a6f29451e8e077bb8e9e6e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a930acc1ea2f2258da6301081a3ebaed6c391943a6f29451e8e077bb8e9e6e68->enter($__internal_a930acc1ea2f2258da6301081a3ebaed6c391943a6f29451e8e077bb8e9e6e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_300c7722f0d0c9a2b8b67a831ef04998fc36c3095d719fac7fce872f05b91051->leave($__internal_300c7722f0d0c9a2b8b67a831ef04998fc36c3095d719fac7fce872f05b91051_prof);

        
        $__internal_a930acc1ea2f2258da6301081a3ebaed6c391943a6f29451e8e077bb8e9e6e68->leave($__internal_a930acc1ea2f2258da6301081a3ebaed6c391943a6f29451e8e077bb8e9e6e68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
