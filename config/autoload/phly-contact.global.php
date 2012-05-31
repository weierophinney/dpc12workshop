<?php
/**
 * This configuration example demonstrates using an File mail transport, a
 * Dumb CAPTCHA adapter, and setting the to and sender addresses for the
 * mail message.
 */
return array(
    'phly_contact' => array(
        // This is simply configuration to pass to Zend\Captcha\Factory
        'captcha' => array(
            'class'   => 'dumb',
        ),

        // This sets the default "to" and "sender" headers for your message
        'message' => array(
            // These can be either a string, or an array of email => name pairs
            'to'     => 'contact@your.tld',
            'from'   => 'contact@your.tld',
            // This should be an array with minimally an "address" element, and 
            // can also contain a "name" element
            'sender' => array(
                'address' => 'contact@your.tld'
            ),
        ),

        // Transport consists of two keys: 
        // - "class", the mail tranport class to use, and
        // - "options", any options to use to configure the 
        //   tranpsort. Usually these will be passed to the 
        //   transport-specific options class
        // This example configures the File transport
        'mail_transport' => array(
            'class'   => 'Zend\Mail\Transport\File',
            'options' => array(
                'path' => 'data/mail/contact',
            ),
        ),
    ),
);
