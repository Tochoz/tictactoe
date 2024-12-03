window.onload = () => {
	let field = document.querySelector("#field");

	if (!field) {
		return;
	}

	field.querySelectorAll("div").forEach(div => {
		div.addEventListener("click", () => {
			fetch("./api/turn", {
				body: {
					square: div.dataset.cell
				}
			});
		});
	});
};