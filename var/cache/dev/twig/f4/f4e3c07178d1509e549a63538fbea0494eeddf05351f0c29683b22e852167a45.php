<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_e2f54634e94e82582f51823048a0a651eea08ea296f03c4576026c551ba2a5fb extends Twig_Template
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
<<<<<<< HEAD
        $__internal_e894f7c142b68b16e5b4fbd8b5e700609f916ee658de4f783797c01cc66781cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e894f7c142b68b16e5b4fbd8b5e700609f916ee658de4f783797c01cc66781cb->enter($__internal_e894f7c142b68b16e5b4fbd8b5e700609f916ee658de4f783797c01cc66781cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_194fe44025e0740ca2d34647dcf09ac6fccdc2459da84eabb57c238c44d084bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194fe44025e0740ca2d34647dcf09ac6fccdc2459da84eabb57c238c44d084bb->enter($__internal_194fe44025e0740ca2d34647dcf09ac6fccdc2459da84eabb57c238c44d084bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
=======
        $__internal_311f0ec56fd4775c65e1ef40a4ab8cb035e6ee37b2fe4b7757b5fa0a92592fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311f0ec56fd4775c65e1ef40a4ab8cb035e6ee37b2fe4b7757b5fa0a92592fd8->enter($__internal_311f0ec56fd4775c65e1ef40a4ab8cb035e6ee37b2fe4b7757b5fa0a92592fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        $__internal_a04865982323f24fc5afe6bf6a902861dc246fccf5945e4448c1dd618d613e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04865982323f24fc5afe6bf6a902861dc246fccf5945e4448c1dd618d613e9a->enter($__internal_a04865982323f24fc5afe6bf6a902861dc246fccf5945e4448c1dd618d613e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

        // line 1
        echo "<div class=\"sf-toolbar-block sf-toolbar-block-";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " sf-toolbar-status-";
        echo twig_escape_filter($this->env, ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "normal")) : ("normal")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((array_key_exists("additional_classes", $context)) ? (_twig_default_filter((isset($context["additional_classes"]) ? $context["additional_classes"] : $this->getContext($context, "additional_classes")), "")) : ("")), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("block_attrs", $context)) ? (_twig_default_filter((isset($context["block_attrs"]) ? $context["block_attrs"] : $this->getContext($context, "block_attrs")), "")) : (""));
        echo ">
    ";
        // line 2
        if (( !array_key_exists("link", $context) || (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
        }
        // line 3
        echo "        <div class=\"sf-toolbar-icon\">";
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
    ";
        // line 4
        if (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), false)) : (false))) {
            echo "</a>";
        }
        // line 5
        echo "        <div class=\"sf-toolbar-info\">";
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
<<<<<<< HEAD
        $__internal_e894f7c142b68b16e5b4fbd8b5e700609f916ee658de4f783797c01cc66781cb->leave($__internal_e894f7c142b68b16e5b4fbd8b5e700609f916ee658de4f783797c01cc66781cb_prof);

        
        $__internal_194fe44025e0740ca2d34647dcf09ac6fccdc2459da84eabb57c238c44d084bb->leave($__internal_194fe44025e0740ca2d34647dcf09ac6fccdc2459da84eabb57c238c44d084bb_prof);
=======
        $__internal_311f0ec56fd4775c65e1ef40a4ab8cb035e6ee37b2fe4b7757b5fa0a92592fd8->leave($__internal_311f0ec56fd4775c65e1ef40a4ab8cb035e6ee37b2fe4b7757b5fa0a92592fd8_prof);

        
        $__internal_a04865982323f24fc5afe6bf6a902861dc246fccf5945e4448c1dd618d613e9a->leave($__internal_a04865982323f24fc5afe6bf6a902861dc246fccf5945e4448c1dd618d613e9a_prof);
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  47 => 4,  42 => 3,  36 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-block sf-toolbar-block-{{ name }} sf-toolbar-status-{{ status|default('normal') }} {{ additional_classes|default('') }}\" {{ block_attrs|default('')|raw }}>
    {% if link is not defined or link %}<a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{% endif %}
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
    {% if link|default(false) %}</a>{% endif %}
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
</div>
<<<<<<< HEAD
", "@WebProfiler/Profiler/toolbar_item.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
=======
", "@WebProfiler/Profiler/toolbar_item.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_item.html.twig");
>>>>>>> 80fa6f66e08daa4be442e4f9636c6ac1c2ea561b
    }
}
