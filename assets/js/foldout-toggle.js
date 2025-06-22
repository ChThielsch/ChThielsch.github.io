document.addEventListener("DOMContentLoaded", function () {
	const toggleButtons = document.querySelectorAll(".expand-toggle");

	toggleButtons.forEach(function (button) {
		button.addEventListener("click", function () {
			if (button.textContent.trim() === "Learn More") {
				button.textContent = "Show Less";
			} else {
				button.textContent = "Learn More";
			}
		});
	});
});
