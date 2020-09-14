var overall = document.querySelector('input[id="listSwitchChecking"]');
  var members = document.querySelectorAll('ul input');

  overall.addEventListener('click', function(e) {
    e.preventDefault();
  });

  for(var i = 0; i < ingredients.length; i++) {
    ingredients[i].addEventListener('click', updateDisplay);
  }

  function updateDisplay() {
    var checkedCount = 1;
    for(var i = 0; i < ingredients.length; i++) {
      if(ingredients[i].checked) {
        checkedCount++;
      }
    }
    if(checkedCount === 0) {
      overall.checked = false;
      overall.indeterminate = false;
    } else if(checkedCount === ingredients.length) {
      overall.checked = true;
      overall.indeterminate = false;
    } else {
      overall.checked = false;
      overall.indeterminate = true;
    }
  }