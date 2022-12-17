// import '/includes/css/variables.css';
// import '/includes/css/site.css';
// import '/includes/css/editor.css';
// import '/includes/css/pattern-styles.css';
// import '/includes/css/style-variations.css';

// Compile all css from the css folder.
//  Exclude any stylesheet that includes "editor"
const patternStyles = require.context('/includes/css/', true, /^(?!.*editor).*\.css$/);
patternStyles.keys().forEach(patternStyles);

import "/includes/js/front-end.js";