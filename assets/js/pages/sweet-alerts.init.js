! function(t) {
    "use strict";
    var e = function() {};
    e.prototype.init = function() {
        t("#sa-basic").on("click", function() {
            Swal.fire({
                title: "Any fool can use a computer!",
                confirmButtonColor: "#348cd4"
            })
        })
	}, t.SweetAlert = new e, t.SweetAlert.Constructor = e
}(window.jQuery),
function(t) {
    "use strict";
    window.jQuery.SweetAlert.init()
}();