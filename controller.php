<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeBootstrap3Package extends Package {
    protected $pkgHandle = 'theme_bootstrap3';
    protected $appVersionRequired = '5.3.0';
    protected $pkgVersion = '1.0';

    public function getPackageDescription() {
        return t("Designed for a quick start using bootstrap version 3");
    }

    public function getPackageName() {
        return t("Bootstrap 3");
    }
                   
    public function install() {
        $pkg = parent::install();
        PageTheme::add('bootstrap3', $pkg);
    }
                   
}

