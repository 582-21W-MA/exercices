const figcaption = document.querySelector("figcaption");

const observer = new ResizeObserver(entries => {
	for (const entry of entries) {
		const width = entry.contentRect.width;

		figcaption.textContent = width + "px";
	}
})

const form = document.querySelector("form");

observer.observe(form);