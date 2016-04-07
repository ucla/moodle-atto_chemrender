<?php

/**
 * Atto ChemRender plugin lib.
 *
 * @package    atto_chemrender
 * @copyright  2016 UC Regents
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Initialise the strings required for JS.
 * 
 * @return void
 */
function atto_chemrender_strings_for_js() {
    global $PAGE;

    $PAGE->requires->strings_for_js(array(
        'browserepositories',
        'chemdoodle',
        'enterfilename',
        'enterurl',
        'height',
        'jmol',
        'jmoloptions',
        'optionaxis',
        'optionconsolecommand',
        'optionconsolecommandhelp',
        'optiondownloadlink',
        'optionhelplink',
        'optionlabel',
        'optionspin',
        'optionstyleselect',
        'optionxaxis',
        'optionyaxis',
        'pluginname',
        'preview',
        'rendererselection',
        'submit',
        'width'
            ), 'atto_chemrender');
}

/**
 * Set plugin parameters.
 *
 * @param string $elementid
 * @param stdClass $options - the options for the editor, including the context.
 * @param stdClass $fpoptions - unused.
 */
function atto_chemrender_params_for_js($elementid, $options, $fpoptions) {

    $context = $options['context'];
    if (!$context) {
        $context = context_system::instance();
    }

    return array(
        'contextid' => $context->id,
    );
}