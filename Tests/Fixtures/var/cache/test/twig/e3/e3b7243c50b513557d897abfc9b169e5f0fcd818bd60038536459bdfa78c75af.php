<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f1423e19a5de93b23fda7a292e29c77e71c4a0b72cbbb07f29384ac876454752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17f6107b33044e2f013048628dcda7b611db86ee93d9c9fbb431a9a28269e6d2 = $this->env->getExtension("native_profiler");
        $__internal_17f6107b33044e2f013048628dcda7b611db86ee93d9c9fbb431a9a28269e6d2->enter($__internal_17f6107b33044e2f013048628dcda7b611db86ee93d9c9fbb431a9a28269e6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17f6107b33044e2f013048628dcda7b611db86ee93d9c9fbb431a9a28269e6d2->leave($__internal_17f6107b33044e2f013048628dcda7b611db86ee93d9c9fbb431a9a28269e6d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d407dd5f9e33e9951d67c3391df4ad79a91e716b2887e55f8920aa66ed910892 = $this->env->getExtension("native_profiler");
        $__internal_d407dd5f9e33e9951d67c3391df4ad79a91e716b2887e55f8920aa66ed910892->enter($__internal_d407dd5f9e33e9951d67c3391df4ad79a91e716b2887e55f8920aa66ed910892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d407dd5f9e33e9951d67c3391df4ad79a91e716b2887e55f8920aa66ed910892->leave($__internal_d407dd5f9e33e9951d67c3391df4ad79a91e716b2887e55f8920aa66ed910892_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e36978cd9818646f7645195d1e9ef2b157659b32b7c4f04c1b62d84da830a05 = $this->env->getExtension("native_profiler");
        $__internal_2e36978cd9818646f7645195d1e9ef2b157659b32b7c4f04c1b62d84da830a05->enter($__internal_2e36978cd9818646f7645195d1e9ef2b157659b32b7c4f04c1b62d84da830a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e36978cd9818646f7645195d1e9ef2b157659b32b7c4f04c1b62d84da830a05->leave($__internal_2e36978cd9818646f7645195d1e9ef2b157659b32b7c4f04c1b62d84da830a05_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11a5080bd318979c30f2a1e49eb1029f06443c55d2c1d1798d8e67758ee90a0 = $this->env->getExtension("native_profiler");
        $__internal_b11a5080bd318979c30f2a1e49eb1029f06443c55d2c1d1798d8e67758ee90a0->enter($__internal_b11a5080bd318979c30f2a1e49eb1029f06443c55d2c1d1798d8e67758ee90a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b11a5080bd318979c30f2a1e49eb1029f06443c55d2c1d1798d8e67758ee90a0->leave($__internal_b11a5080bd318979c30f2a1e49eb1029f06443c55d2c1d1798d8e67758ee90a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
