<?php
namespace Page;

class Lightbox
{
    // include url of current page
    public static $URL = '';
    public static $firstChild = 'ul.rtm-gallery-list li:first-child'; //Id of first media from the list
    public static $closeButton = '.rtm-mfp-close';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}