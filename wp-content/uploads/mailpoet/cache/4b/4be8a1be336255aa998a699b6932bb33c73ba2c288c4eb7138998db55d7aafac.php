<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* mss_pitch_translations.html */
class __TwigTemplate_35623f85e2779da9ca00e348e6c45af4183fdcc1ed12972ba584db9bb3c473e7 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(["welcomeWizardMSSFreeTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("MailPoet Premium is entirely free for you. Sign up!", "Promotion for our email sending service: Title"), "welcomeWizardMSSFreeSubtitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Did you know? Users with 1,000 subscribers or less get the Premium for free.", "Promotion for our email sending service: Paragraph"), "welcomeWizardMSSFreeListTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("You’ll get", "Promotion for our email sending service: Paragraph"), "welcomeWizardMSSList1" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Access to detailed analytics", "Promotion for our email sending service: Feature item"), "welcomeWizardMSSList2" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("MailPoet sends your emails for great deliverability", "Promotion for our email sending service: Feature item"), "welcomeWizardMSSList3WooCommerce" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Email marketing for WooCommerce", "Promotion for our email sending service: Feature item"), "welcomeWizardMSSList4" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Fast, priority support", "Promotion for our email sending service: Feature item"), "welcomeWizardMSSList5" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Remove the MailPoet logo from the footer of your emails", "Promotion for our email sending service: Feature item"), "welcomeWizardMSSFreeButton" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Sign up for free!", "Promotion for our email sending service: Button"), "welcomeWizardMSSNotFreeTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("It’s now time to take your MailPoet to the next level", "Promotion for our email sending service: Title"), "welcomeWizardMSSNotFreeSubtitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Starting at only \$13 per month, MailPoet Premium offers the following features", "Promotion for our email sending service: Paragraph"), "welcomeWizardMSSNotFreeButton" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Sign up now", "Promotion for our email sending service: Button"), "welcomeWizardMSSNoThanks" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("No thanks!", "Promotion for our email sending service: Skip link")]);
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "mss_pitch_translations.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "mss_pitch_translations.html", "/homepages/10/d628789933/htdocs/WP/wp-content/plugins/mailpoet/views/mss_pitch_translations.html");
    }
}
