<?php

/* forms/fields/input/imagepicker.html.twig */
class __TwigTemplate_1b5ef53c27e24fa774c6ee98718202c6a156bdca90e7d08df94e855c376a53fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/input/filepicker.html.twig", "forms/fields/input/imagepicker.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/input/filepicker.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["field"] = twig_array_merge(array("icon" => "fa-file-image-o", "filter" => ".(jpe?g|gif|png|svg)\$"), (isset($context["field"]) ? $context["field"] : null));
        // line 5
        echo "    ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/input/imagepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/input/imagepicker.html.twig", "C:\\xampp\\htdocs\\g5\\user\\plugins\\gantry5\\admin\\templates\\forms\\fields\\input\\imagepicker.html.twig");
    }
}
