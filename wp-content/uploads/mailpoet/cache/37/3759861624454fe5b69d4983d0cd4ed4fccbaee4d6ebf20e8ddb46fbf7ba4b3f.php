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

/* emails/statsNotificationAutomatedEmails.html */
class __TwigTemplate_3f076c792acebd0621ccd991d1c3e6eac1173fee199184e12b909a13398d7227 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("emails/statsNotificationLayout.html", "emails/statsNotificationAutomatedEmails.html", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "emails/statsNotificationLayout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
<tr>
  <td class=\"mailpoet_content\" align=\"center\" style=\"border-collapse:collapse\">
    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;border-collapse:collapse\">
      <tbody>
      <tr>
        <td style=\"padding-left:0;padding-right:0;border-collapse:collapse\">
          <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"mailpoet_cols-one\" style=\"border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;table-layout:fixed;margin-left:auto;margin-right:auto;padding-left:0;padding-right:0;border-collapse:collapse\">
            <tbody>
            <tr>
              <td class=\"mailpoet_spacer\" height=\"36\" valign=\"top\" style=\"border-collapse:collapse\"></td>
            </tr>
            <tr>
              <td class=\"mailpoet_image mailpoet_padded_vertical mailpoet_padded_side\" align=\"center\" valign=\"top\" style=\"border-collapse:collapse;padding-bottom:20px;padding-left:20px;padding-right:20px\">
                <img src=\"http://newsletters.mailpoet.com/wp-content/uploads/2018/10/new_logo_orange.png\" width=\"80\" alt=\"new_logo_orange\" style=\"height:auto;max-width:100%;-ms-interpolation-mode:bicubic;border:0;display:block;outline:none;text-align:center\" />
              </td>
            </tr>
            <tr>
              <td class=\"mailpoet_spacer\" height=\"26\" valign=\"top\" style=\"border-collapse:collapse\"></td>
            </tr>
            <tr>
              <td class=\"mailpoet_text mailpoet_padded_vertical mailpoet_padded_side\" valign=\"top\" style=\"word-break:break-word;word-wrap:break-word;padding-top:0;border-collapse:collapse;padding-bottom:20px;padding-left:20px;padding-right:20px\">
                <h1 style=\"text-align:center;padding:0;font-style:normal;font-weight:normal;margin:0 0 12px;color:#111111;font-family:'Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif;font-size:40px;line-height:64px\">
                  <strong>";
        // line 27
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your monthly stats are in!");
        echo "</strong>
                </h1>
              </td>
            </tr>
            <tr>
              <td class=\"mailpoet_spacer\" height=\"55\" valign=\"top\" style=\"border-collapse:collapse\"></td>
            </tr>
            </tbody>
          </table>
        </td>
      </tr>
      </tbody>
    </table>
  </td>
</tr>

";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = \MailPoetVendor\twig_ensure_traversable(($context["newsletters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 44
            echo "  <tr>
    <td class=\"mailpoet_content\" align=\"center\" style=\"border-collapse:collapse\">
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0\">
        <tbody>
        <tr>
          <td style=\"border-collapse:collapse;padding-left:0;padding-right:0\">
            <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"mailpoet_cols-one\" style=\"border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;table-layout:fixed;margin-left:auto;margin-right:auto;padding-left:0;padding-right:0\">
              <tbody>
              <tr>
                <td class=\"mailpoet_divider\" valign=\"top\" style=\"border-collapse:collapse;padding:29.5px 20px 29.5px 20px\">
                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0\">
                    <tr>
                      <td class=\"mailpoet_divider-cell\" style=\"border-collapse:collapse;border-top-width:1px;border-top-style:solid;border-top-color:#e8e8e8\">
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td class=\"mailpoet_text mailpoet_padded_vertical mailpoet_padded_side\" valign=\"top\" style=\"border-collapse:collapse;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;word-break:break-word;word-wrap:break-word\">
                  <h2 class=\"title\" style=\"margin:0 0 7.8px;color:#222222;font-family:lato,'helvetica neue',helvetica,arial,sans-serif;font-size:26px;line-height:31.2px;margin-bottom:0;text-align:center;padding:0;font-style:normal;font-weight:normal\">
                    <strong>
                      <a href=\"";
            // line 66
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "linkStats", []), "html", null, true);
            echo "\" style=\"color:#0074a2;text-decoration:underline\">
                        ";
            // line 67
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "subject", []), "html", null, true);
            echo "
                      </a>
                    </strong>
                  </h2>
                </td>
              </tr>
              <tr>
                <td class=\"mailpoet_spacer\" height=\"28\" valign=\"top\" style=\"border-collapse:collapse\"></td>
              </tr>
              </tbody>
            </table>
          </td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>

  <tr>
    <td class=\"mailpoet_content-cols-two\" align=\"left\" style=\"border-collapse:collapse\">
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0\">
        <tbody>
        <tr>
          <td align=\"center\" style=\"border-collapse:collapse;font-size:0\"><!--[if mso]>
            <table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
              <tbody>
              <tr>
                <td width=\"330\" valign=\"top\">
            <![endif]--><div style=\"display:inline-block; max-width:330px; vertical-align:top; width:100%;\">
              <table width=\"330\" class=\"mailpoet_cols-two\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\" style=\"border-collapse:collapse;width:100%;max-width:330px;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;table-layout:fixed;margin-left:auto;margin-right:auto;padding-left:0;padding-right:0\">
                <tbody>
                <tr>
                  <td class=\"mailpoet_padded_vertical mailpoet_padded_side\" valign=\"top\" style=\"border-collapse:collapse;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px\">
                    <div>
                      <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0\">
                        <tr>
                          <td class=\"mailpoet_button-container\" style=\"border-collapse:collapse;text-align:center\"><!--[if mso]>
                            <v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\"
                                         href=\"";
            // line 105
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "linkStats", []), "html", null, true);
            echo "\"
                                         style=\"height:20px;
                             width:50px;
                             v-text-anchor:middle;\"
                                         arcsize=\"15%\"
                                         strokeweight=\"0px\"
                                         strokecolor=\"#0074a2\"
                                         fillcolor=\"";
            // line 112
            echo $this->env->getExtension('MailPoet\Twig\Functions')->openedStatsColor($this->getAttribute($context["newsletter"], "opened", []));
            echo "\">
                              <w:anchorlock/>
                              <center style=\"color:#ffffff;
                      font-family:Arial;
                      font-size:10px;
                      font-weight:bold;\">";
            // line 117
            echo $this->env->getExtension('MailPoet\Twig\Functions')->openedStatsText($this->getAttribute($context["newsletter"], "opened", []));
            echo "
                              </center>
                            </v:roundrect>
                            <![endif]--><a class=\"mailpoet_button\" href=\"";
            // line 120
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "linkStats", []), "html", null, true);
            echo "\" style=\"color:#ffffff;text-decoration:none !important;display:inline-block;-webkit-text-size-adjust:none;mso-hide:all;text-align:center;background-color:";
            echo $this->env->getExtension('MailPoet\Twig\Functions')->openedStatsColor($this->getAttribute($context["newsletter"], "opened", []));
            echo ";border-color:#0074a2;border-width:0px;border-radius:3px;border-style:solid;width:80px;line-height:20px;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:10px;font-weight:normal\">
                              ";
            // line 121
            echo $this->env->getExtension('MailPoet\Twig\Functions')->openedStatsText($this->getAttribute($context["newsletter"], "opened", []));
            echo "
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class=\"mailpoet_text mailpoet_padded_vertical mailpoet_padded_side\" valign=\"top\" style=\"border-collapse:collapse;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;word-break:break-word;word-wrap:break-word\">
                    <h3 style=\"margin:0 0 5.4px;color:#333333;font-family:'Courier New',Courier,'Lucida Sans Typewriter','Lucida Typewriter',monospace;font-size:18px;line-height:21.6px;margin-bottom:0;text-align:center;padding:0;font-style:normal;font-weight:normal\">
                      <span style=\"color: ";
            // line 132
            echo $this->env->getExtension('MailPoet\Twig\Functions')->openedStatsColor($this->getAttribute($context["newsletter"], "opened", []));
            echo ";\">
                        <strong>";
            // line 133
            echo number_format_i18n($this->getAttribute($context["newsletter"], "opened", []), 1);
            echo "% </strong>
                        <span style=\"color: #000000;\">
                          ";
            // line 135
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("open rate");
            echo "
                        </span>
                      </span>
                    </h3>
                  </td>
                </tr>
                </tbody>
              </table>
            </div><!--[if mso]>
            </td>
            <td width=\"330\" valign=\"top\">
            <![endif]--><div style=\"display:inline-block; max-width:330px; vertical-align:top; width:100%;\">
              <table width=\"330\" class=\"mailpoet_cols-two\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\" style=\"border-collapse:collapse;width:100%;max-width:330px;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0;table-layout:fixed;margin-left:auto;margin-right:auto;padding-left:0;padding-right:0\">
                <tbody>
                <tr>
                  <td class=\"mailpoet_padded_vertical mailpoet_padded_side\" valign=\"top\" style=\"border-collapse:collapse;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px\">
                    <div>
                      <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse;border-spacing:0;mso-table-lspace:0;mso-table-rspace:0\">
                        <tr>
                          <td class=\"mailpoet_button-container\" style=\"border-collapse:collapse;text-align:center\"><!--[if mso]>
                            <v:roundrect xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:w=\"urn:schemas-microsoft-com:office:word\"
                                         href=\"";
            // line 156
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "linkStats", []), "html", null, true);
            echo "\"
                                         style=\"height:20px;
                             width:80px;
                             v-text-anchor:middle;\"
                                         arcsize=\"15%\"
                                         strokeweight=\"0px\"
                                         strokecolor=\"#0074a2\"
                                         fillcolor=\"";
            // line 163
            echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsColor($this->getAttribute($context["newsletter"], "clicked", []));
            echo "\">
                              <w:anchorlock/>
                              <center style=\"color:#ffffff;
                      font-family:Arial;
                      font-size:10px;
                      font-weight:bold;\">";
            // line 168
            echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsText($this->getAttribute($context["newsletter"], "clicked", []));
            echo "
                              </center>
                            </v:roundrect>
                            <![endif]--><a class=\"mailpoet_button\" href=\"";
            // line 171
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "linkStats", []), "html", null, true);
            echo "\" style=\"color:#ffffff;text-decoration:none !important;display:inline-block;-webkit-text-size-adjust:none;mso-hide:all;text-align:center;background-color:";
            echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsColor($this->getAttribute($context["newsletter"], "clicked", []));
            echo ";border-color:#0074a2;border-width:0px;border-radius:3px;border-style:solid;width:80px;line-height:20px;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;font-size:10px;font-weight:normal\">
                              ";
            // line 172
            echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsText($this->getAttribute($context["newsletter"], "clicked", []));
            echo "
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class=\"mailpoet_text mailpoet_padded_vertical mailpoet_padded_side\" valign=\"top\" style=\"border-collapse:collapse;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;word-break:break-word;word-wrap:break-word\">
                    <h3 style=\"margin:0 0 5.4px;color:#333333;font-family:'Courier New',Courier,'Lucida Sans Typewriter','Lucida Typewriter',monospace;font-size:18px;line-height:21.6px;margin-bottom:0;text-align:center;padding:0;font-style:normal;font-weight:normal\">
                      <span style=\"color: ";
            // line 183
            echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsColor($this->getAttribute($context["newsletter"], "clicked", []));
            echo ";\">
                        <strong>
                          <span style=\"color: ";
            // line 185
            echo $this->env->getExtension('MailPoet\Twig\Functions')->clickedStatsColor($this->getAttribute($context["newsletter"], "clicked", []));
            echo ";\">";
            echo number_format_i18n($this->getAttribute($context["newsletter"], "clicked", []), 1);
            echo "%</span>
                        </strong>
                        <span style=\"color: #000000;\">
                          ";
            // line 188
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("click rate");
            echo "
                        </span>
                      </span>
                    </h3>
                  </td>
                </tr>
                </tbody>
              </table>
            </div><!--[if mso]>
            </td>
            </tr>
            </tbody>
            </table>
            <![endif]--></td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "
<tr>
  <td class=\"mailpoet_spacer\" height=\"55\" valign=\"top\" style=\"border-collapse:collapse\"></td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "emails/statsNotificationAutomatedEmails.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 208,  293 => 188,  285 => 185,  280 => 183,  266 => 172,  260 => 171,  254 => 168,  246 => 163,  236 => 156,  212 => 135,  207 => 133,  203 => 132,  189 => 121,  183 => 120,  177 => 117,  169 => 112,  159 => 105,  118 => 67,  114 => 66,  90 => 44,  86 => 43,  67 => 27,  42 => 4,  39 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "emails/statsNotificationAutomatedEmails.html", "/homepages/10/d628789933/htdocs/WP/wp-content/plugins/mailpoet/views/emails/statsNotificationAutomatedEmails.html");
    }
}
