(function() {

	var root = this;
	var divs = {};
	var numdivs = 0;
	var id = 0;
        
	function reset() {
		divs = {};
		numdivs = 0;
		id = 0;
	}

	function addDiv() {
		var div = {
			getId: (function(myId) {
				return function() {
					return myId;
				};
			}(id))
		};
		divs[id] = div;
		numdivs++;
		id++;
		return div;
	}

	function getDiv(id) {
		return divs[id];
	}

	function delDiv(id) {
		var deleted = divs[id];
		deleted.isDeleted = function() {
			return true;
		};
		delete divs[id];
		numdivs--;
		return deleted;
	}

	function countDivs() {
		return numdivs;
	}

	root.DIV_APP = {
		addDiv: addDiv,
		getDiv: getDiv,
		delDiv: delDiv,
		countDivs: countDivs,
		reset: reset
	};

}).call(this);
