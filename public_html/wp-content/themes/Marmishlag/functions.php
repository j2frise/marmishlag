<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to Pro in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

// Additional Functions
// =============================================================================

require_once 'classes/RecipesCustom.php';
require_once 'classes/StyleAndScriptCustom.php';
require_once 'classes/ThemeCustom.php';

$recipes = new RecipesCustom();
$style_js = new StyleAndScriptCustom();
$theme_custom = new ThemeCustom();

