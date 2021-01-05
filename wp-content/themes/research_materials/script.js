
window.addEventListener('DOMContentLoaded', e => {
	const rangeSlider = document.querySelector('#range-slider');
	
	rangeSlider.addEventListener('input', e => {
		update(rangeSlider.value);
	});

	update(rangeSlider.value);

	document.querySelectorAll('.about-toggle').forEach(toggle=>{
		toggle.addEventListener('click', e=>{	
			document.body.classList.toggle('about-open');			
		});
	});



});

function update(sliderVal) {
	let nearestArticleBar, nearestArticleDist;
	let nearestArmeniaMapLayerBar, nearestArmeniaMapLayerDist;
	let nearestAzerbaijanMapLayerBar, nearestAzerbaijanMapLayerDist;

	document.querySelectorAll('.bar').forEach(bar => {
		const percentage = Math.floor(parseFloat(bar.dataset.percentage));
		const dist = Math.abs(percentage - sliderVal);

		if (bar.dataset.type === 'article') {
			if (!nearestArticleBar || dist < nearestArticleDist && sliderVal > percentage) {
				nearestArticleDist = dist;
				nearestArticleBar = bar;
			}
		}
		if (bar.dataset.type === 'map_layer' && bar.classList.contains('armenia')) {	
			if (!nearestArmeniaMapLayerBar || dist < nearestArmeniaMapLayerDist && sliderVal > percentage) {
				nearestArmeniaMapLayerDist = dist;
				nearestArmeniaMapLayerBar = bar;
			}			
		}

		if (bar.dataset.type === 'map_layer' && bar.classList.contains('azerbaijan')) {	
			if (!nearestAzerbaijanMapLayerBar || dist < nearestAzerbaijanMapLayerDist && sliderVal > percentage) {
				nearestAzerbaijanMapLayerDist = dist;
				nearestAzerbaijanMapLayerBar = bar;
			}			
		}
	});

	const timelinepostArticle = parseInt(nearestArticleBar.dataset.timelinepost);
	document.querySelectorAll('.source').forEach(el => {
		el.classList.remove('visible');
	});

	const article = document.querySelector('.source[data-timelinepost="' + timelinepostArticle + '"');
	article.classList.add('visible');

	



	const timelinepostArmeniaMapLayer = parseInt(nearestArmeniaMapLayerBar.dataset.timelinepost);
	document.querySelectorAll('.map-layer.armenia').forEach(el => {
		el.classList.remove('visible');
	});
	
	const armeniaMapLayer = document.querySelector('.map-layer[data-timelinepost="' + timelinepostArmeniaMapLayer + '"');
	armeniaMapLayer.classList.add('visible');


	const timelinepostAzerbaijanMapLayer = parseInt(nearestAzerbaijanMapLayerBar.dataset.timelinepost);
	document.querySelectorAll('.map-layer.azerbaijan').forEach(el => {
		el.classList.remove('visible');
	});
	
	const azerbaijanMapLayer = document.querySelector('.map-layer[data-timelinepost="' + timelinepostAzerbaijanMapLayer + '"');
	azerbaijanMapLayer.classList.add('visible');


}