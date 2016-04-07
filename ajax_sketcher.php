<?php

/**
 * Returns rendered ChemDoodle Sketcher previews using the active ChemRender filter.
 *
 * Compression of the preview text is required to avoid the "Request-URI Too Large" error for very large molecules.
 *
 * @package    atto_chemrender
 * @copyright  2016 UC Regents
 */

define('AJAX_SCRIPT', true);

require_once(dirname(__FILE__) . '/../../../../../config.php');

$contextid = required_param('contextid', PARAM_INT);

list($context, $course, $cm) = get_context_info_array($contextid);
$PAGE->set_url('/lib/editor/atto/plugins/chemrender/ajax_sketcher.php');
$PAGE->set_context($context);

require_login($course, false, $cm);
require_sesskey();

$action = required_param('action', PARAM_ALPHA);

if ($action === 'filtertext') {
    $paramstring = required_param('paramstring', PARAM_RAW);
    $sketcheroutput = required_param('sketcheroutput', PARAM_RAW);
    $compressed = base64_encode(gzencode($sketcheroutput));
    $text = '<a href="' . $paramstring . '&sketcheroutput=true">' . $compressed . '</a>';
    $result = filter_manager::instance()->filter_text($text, $context);
    echo $OUTPUT->header();
    echo $result;
    die();
}

print_error('invalidarguments');
