window.onerror = function(msg, url, line, col, error) {
  new Image().src = 'https://st.nambafood.kg/js_errors_note?msg=' + encodeURIComponent(msg) + '&url=' + encodeURIComponent(url) + '&line=' + encodeURIComponent(line) + '&col=' + encodeURIComponent(col) + '&error=' + encodeURIComponent(error);
};