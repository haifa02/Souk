<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7c0849cff7667c6473393206d221a3e99f592b27fba76c3665627383d103cbdc extends Twig_Template
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
        $__internal_ab3822e12ae145ff490b9a0ed24d5e78fe09c7acb5a947e53e8fcda1b1bd2548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3822e12ae145ff490b9a0ed24d5e78fe09c7acb5a947e53e8fcda1b1bd2548->enter($__internal_ab3822e12ae145ff490b9a0ed24d5e78fe09c7acb5a947e53e8fcda1b1bd2548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b1c5e70d5e43abde3e7ae1f54a32896a49c2bfed70168283bd30700d599741bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c5e70d5e43abde3e7ae1f54a32896a49c2bfed70168283bd30700d599741bd->enter($__internal_b1c5e70d5e43abde3e7ae1f54a32896a49c2bfed70168283bd30700d599741bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ab3822e12ae145ff490b9a0ed24d5e78fe09c7acb5a947e53e8fcda1b1bd2548->leave($__internal_ab3822e12ae145ff490b9a0ed24d5e78fe09c7acb5a947e53e8fcda1b1bd2548_prof);

        
        $__internal_b1c5e70d5e43abde3e7ae1f54a32896a49c2bfed70168283bd30700d599741bd->leave($__internal_b1c5e70d5e43abde3e7ae1f54a32896a49c2bfed70168283bd30700d599741bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
