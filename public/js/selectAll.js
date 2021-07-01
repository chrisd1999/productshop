let isChecked = true;

function clickAll() {
  const checkboxes = document.getElementsByClassName('checkbox');
  for (let i = 0; i < checkboxes.length; i++) {
    if (isChecked) checkboxes[i].checked = true;
    else checkboxes[i].checked = false;
  }
  const select = document.getElementById('select-all');
  if (!isChecked) select.value = 'Select All';
  else select.value = 'Unselect All';
  isChecked = !isChecked;
}
