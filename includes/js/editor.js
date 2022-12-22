const remove_user_autocomplete = wp.hooks.removeFilter(
	'editor.Autocomplete.completers',
	'editor/autocompleters/set-default-completers'
  );