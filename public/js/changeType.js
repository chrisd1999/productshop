// Change type of item.
function changeType(product, sku, name, placeholder) {
  $('#type-switcher').html(product);
  $('.form-control.sku').attr('placeholder', sku);
  $('.form-control.name').attr('placeholder', name);
  $('.form-control.type-switcher').attr('placeholder', placeholder);
}

// Used to change the selected item.
function changeItem(selected) {
  if (selected.value == '1/Disc') {
    changeType(
      'Enter disc <strong>size</strong>:',
      'e.g DISC12345',
      'e.g Acme disc',
      'e.g 700 MB'
    );
  }
  if (selected.value == '2/Book') {
    changeType(
      'Enter book <strong>weight</strong>:',
      'e.g BOOK12345',
      'e.g War of Gods',
      'e.g 1 KG'
    );
  }
  if (selected.value == '3/Furniture') {
    changeType(
      'Enter furniture <strong>dimensions HxWxL (cm)</strong>:',
      'e.g FURN12345',
      'e.g Table',
      'e.g 100x400x100 cm (HxWxL cm)'
    );
  }
}
