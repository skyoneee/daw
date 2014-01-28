(function() {
	function divsUI(val, parent) {
		var that = this;
		var divs = DIV_APP.addDiv();
		var div = $("<div class='col-lg-4'> name </div>");
		div.css("background" , "green");
		div.css("height" , "150px");
		this.divs = divs;
		this.container = div;
		this.parent = parent;
	}
		DIV_APP.divsUI = divsUI;
})();

	