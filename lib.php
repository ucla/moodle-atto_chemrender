<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Atto ChemRender plugin lib.
 *
 * @package    atto_chemrender
 * @copyright  2016 UC Regents
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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