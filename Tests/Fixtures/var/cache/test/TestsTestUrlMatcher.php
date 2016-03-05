<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * TestsTestUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class TestsTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/twbs_css')) {
                // _assetic_twbs_css
                if ($pathinfo === '/assetic/twbs_css.less') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'twbs_css',  'pos' => NULL,  '_format' => 'less',  '_route' => '_assetic_twbs_css',);
                }

                if (0 === strpos($pathinfo, '/assetic/twbs_css_')) {
                    // _assetic_twbs_css_0
                    if ($pathinfo === '/assetic/twbs_css_bootstrap_1.less') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'twbs_css',  'pos' => 0,  '_format' => 'less',  '_route' => '_assetic_twbs_css_0',);
                    }

                    // _assetic_twbs_css_1
                    if ($pathinfo === '/assetic/twbs_css_theme_2.less') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'twbs_css',  'pos' => 1,  '_format' => 'less',  '_route' => '_assetic_twbs_css_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/assetic/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/assetic/jquery_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/twbs_js')) {
                // _assetic_twbs_js
                if ($pathinfo === '/assetic/twbs_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'twbs_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_twbs_js',);
                }

                // _assetic_twbs_js_0
                if ($pathinfo === '/assetic/twbs_js_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'twbs_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_twbs_js_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/db219a6')) {
                // _assetic_db219a6
                if ($pathinfo === '/css/db219a6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'db219a6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_db219a6',);
                }

                // _assetic_db219a6_0
                if ($pathinfo === '/css/db219a6_part_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'db219a6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_db219a6_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/03100d3')) {
                // _assetic_03100d3
                if ($pathinfo === '/css/03100d3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '03100d3',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_03100d3',);
                }

                if (0 === strpos($pathinfo, '/css/03100d3_part_1_')) {
                    // _assetic_03100d3_0
                    if ($pathinfo === '/css/03100d3_part_1_dashboard_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '03100d3',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_03100d3_0',);
                    }

                    // _assetic_03100d3_1
                    if ($pathinfo === '/css/03100d3_part_1_ie10-viewport-bug-workaround_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '03100d3',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_03100d3_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/f55aaa5')) {
                // _assetic_f55aaa5
                if ($pathinfo === '/js/f55aaa5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f55aaa5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f55aaa5',);
                }

                if (0 === strpos($pathinfo, '/js/f55aaa5_part_')) {
                    // _assetic_f55aaa5_0
                    if ($pathinfo === '/js/f55aaa5_part_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f55aaa5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f55aaa5_0',);
                    }

                    // _assetic_f55aaa5_1
                    if ($pathinfo === '/js/f55aaa5_part_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f55aaa5',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f55aaa5_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/f55aaa5_part_3_')) {
                        // _assetic_f55aaa5_2
                        if ($pathinfo === '/js/f55aaa5_part_3_holder.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f55aaa5',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f55aaa5_2',);
                        }

                        // _assetic_f55aaa5_3
                        if ($pathinfo === '/js/f55aaa5_part_3_ie10-viewport-bug-workaround_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f55aaa5',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_f55aaa5_3',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/255e18f')) {
                // _assetic_255e18f
                if ($pathinfo === '/js/255e18f.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '255e18f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_255e18f',);
                }

                if (0 === strpos($pathinfo, '/js/255e18f_part_')) {
                    // _assetic_255e18f_0
                    if ($pathinfo === '/js/255e18f_part_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '255e18f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_255e18f_0',);
                    }

                    // _assetic_255e18f_1
                    if ($pathinfo === '/js/255e18f_part_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '255e18f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_255e18f_1',);
                    }

                }

            }

        }

        // asf_user_ajax_request_user_by_username
        if ($pathinfo === '/ajax/request/search/by/username') {
            return array (  '_controller' => 'ASF\\UserBundle\\Controller\\AjaxRequestController::byUsernameAction',  '_route' => 'asf_user_ajax_request_user_by_username',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
