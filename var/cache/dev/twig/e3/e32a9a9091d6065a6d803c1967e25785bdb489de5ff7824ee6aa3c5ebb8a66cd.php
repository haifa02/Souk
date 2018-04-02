<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a3553f46fbbd8778cdfd65ce6eb1aca2252895e9731d1536790ddbbf6c3d0429 extends Twig_Template
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
        $__internal_f470917d30ee41b067acfea38c10530702f81fc6da2309cde9f6f93cda2f4225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f470917d30ee41b067acfea38c10530702f81fc6da2309cde9f6f93cda2f4225->enter($__internal_f470917d30ee41b067acfea38c10530702f81fc6da2309cde9f6f93cda2f4225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_812ca30c53f0a35ef090f78697a10dad0c36701768a1698c7b50338be692c7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812ca30c53f0a35ef090f78697a10dad0c36701768a1698c7b50338be692c7e5->enter($__internal_812ca30c53f0a35ef090f78697a10dad0c36701768a1698c7b50338be692c7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f470917d30ee41b067acfea38c10530702f81fc6da2309cde9f6f93cda2f4225->leave($__internal_f470917d30ee41b067acfea38c10530702f81fc6da2309cde9f6f93cda2f4225_prof);

        
        $__internal_812ca30c53f0a35ef090f78697a10dad0c36701768a1698c7b50338be692c7e5->leave($__internal_812ca30c53f0a35ef090f78697a10dad0c36701768a1698c7b50338be692c7e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
