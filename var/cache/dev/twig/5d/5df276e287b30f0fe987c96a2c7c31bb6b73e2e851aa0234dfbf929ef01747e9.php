<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b0b3cc6a23f9b616759c938c4b2965f3f10c61f140780f431ceb9e167d69a527 extends Twig_Template
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
        $__internal_b890bddc031cf1bd5ec6a4c1359ddd19782f1a482f485d8794328f738fcd48a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b890bddc031cf1bd5ec6a4c1359ddd19782f1a482f485d8794328f738fcd48a1->enter($__internal_b890bddc031cf1bd5ec6a4c1359ddd19782f1a482f485d8794328f738fcd48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fb1b0d81e27b514a76503a740041dba5ea70666f6ba63699f0dab1d6bde4198c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1b0d81e27b514a76503a740041dba5ea70666f6ba63699f0dab1d6bde4198c->enter($__internal_fb1b0d81e27b514a76503a740041dba5ea70666f6ba63699f0dab1d6bde4198c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b890bddc031cf1bd5ec6a4c1359ddd19782f1a482f485d8794328f738fcd48a1->leave($__internal_b890bddc031cf1bd5ec6a4c1359ddd19782f1a482f485d8794328f738fcd48a1_prof);

        
        $__internal_fb1b0d81e27b514a76503a740041dba5ea70666f6ba63699f0dab1d6bde4198c->leave($__internal_fb1b0d81e27b514a76503a740041dba5ea70666f6ba63699f0dab1d6bde4198c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
