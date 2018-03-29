<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b9e1fb8b6c8a86fe9b7dc5172ba8ca6ce85cf71f7f532d613d4aff04dd332ffd extends Twig_Template
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
        $__internal_d1cd7fa9148672b80b39368600e21f82b374076de673eafa1ed3fa77d0a1a610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cd7fa9148672b80b39368600e21f82b374076de673eafa1ed3fa77d0a1a610->enter($__internal_d1cd7fa9148672b80b39368600e21f82b374076de673eafa1ed3fa77d0a1a610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_df276489e93af418544754ea7b83ceded54584fdcc94ebe4dc0e21870c8304dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df276489e93af418544754ea7b83ceded54584fdcc94ebe4dc0e21870c8304dd->enter($__internal_df276489e93af418544754ea7b83ceded54584fdcc94ebe4dc0e21870c8304dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d1cd7fa9148672b80b39368600e21f82b374076de673eafa1ed3fa77d0a1a610->leave($__internal_d1cd7fa9148672b80b39368600e21f82b374076de673eafa1ed3fa77d0a1a610_prof);

        
        $__internal_df276489e93af418544754ea7b83ceded54584fdcc94ebe4dc0e21870c8304dd->leave($__internal_df276489e93af418544754ea7b83ceded54584fdcc94ebe4dc0e21870c8304dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
