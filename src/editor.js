// Compile all css from the css folder.
const patternStyles = require.context('/includes/css/', true, /\.css$/);
patternStyles.keys().forEach(patternStyles);

import "/includes/js/editor.js";