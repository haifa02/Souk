<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e71a413152038b47de4c0f732045dacd46411bb2022b8d2e839899c2d27572f8 extends Twig_Template
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
        $__internal_a5b4cf0082f608f2b1616da281e14a38bc9e1b984c2cfc6d623f4518b7552b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b4cf0082f608f2b1616da281e14a38bc9e1b984c2cfc6d623f4518b7552b8d->enter($__internal_a5b4cf0082f608f2b1616da281e14a38bc9e1b984c2cfc6d623f4518b7552b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_aa0c5d23d9c87b3647d7e869680849560db11df19fe2cdb7ce2c79bf2428d6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0c5d23d9c87b3647d7e869680849560db11df19fe2cdb7ce2c79bf2428d6c9->enter($__internal_aa0c5d23d9c87b3647d7e869680849560db11df19fe2cdb7ce2c79bf2428d6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a5b4cf0082f608f2b1616da281e14a38bc9e1b984c2cfc6d623f4518b7552b8d->leave($__internal_a5b4cf0082f608f2b1616da281e14a38bc9e1b984c2cfc6d623f4518b7552b8d_prof);

        
        $__internal_aa0c5d23d9c87b3647d7e869680849560db11df19fe2cdb7ce2c79bf2428d6c9->leave($__internal_aa0c5d23d9c87b3647d7e869680849560db11df19fe2cdb7ce2c79bf2428d6c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
