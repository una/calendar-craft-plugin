<?php

namespace Craft;

class CalendarPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Calendar');
    }

    public function getVersion()
    {
        return '0.1';
    }

    public function getDeveloper()
    {
        return 'Una Kravets';
    }

    public function getDeveloperUrl()
    {
        return 'http://unakravets.com';
    }

    public function hasCpSection()
    {
        return true; //gives the plugin its own tabin the CP
    }
}
