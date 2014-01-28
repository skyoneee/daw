(function() {

  var parent = {
	delDivUI: delProyectUI
  };
  
  var todosUI = [];
  $(document).ready(function() {
    $('#nProy').click(function() {
      addProyectUI(); 
    });
  });
  
  function addProyectUI() {
    var dUI = new DIV_APP.divsUI();
    todosUI.push(dUI);
    $('.proy').append(dUI.container);
  }
  
  function delProyectUI(divUI) {
	divUI.remove();
	var removed = false,
	i = 0;
	while (!removed && i < todosUI.length) {
		if (todosUI[i] === divUI) {
			todosUI.splice(i, 1);
			removed = true;
		} else {
			i++;
		}
	}
  }
})();