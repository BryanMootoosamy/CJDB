/**
 * Modal LightBox by Bryan
 */
function modal() {
	let modalButton = document.getElementById("modalTrigger");
	let modalDiv = document.getElementById("modalSearch");
	let modalClose = document.getElementById("modalClose");
	modalButton.addEventListener("click", function () {
		modalDiv.classList.toggle("isActive")
	});
	modalClose.addEventListener("click", function () {
		modalDiv.classList.remove("isActive")
	});
}