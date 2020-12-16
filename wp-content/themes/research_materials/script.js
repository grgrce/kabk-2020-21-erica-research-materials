window.addEventListener('DOMContentLoaded', e => {
	const rangeSlider = document.querySelector('#range-slider');
	
	rangeSlider.addEventListener('input', e => {
		update(rangeSlider.value);
	});

	update(rangeSlider.value);

});

function update(sliderVal) {
	let nearestArticleBar, nearestArticleDist;
	let nearestMapLayerBar, nearestMapLayerDist;

	document.querySelectorAll('.bar').forEach(bar => {
		const percentage = Math.floor(parseFloat(bar.dataset.percentage));
		const dist = Math.abs(percentage - sliderVal);

		if (bar.dataset.type === 'article') {
			if (!nearestArticleBar || dist < nearestArticleDist && sliderVal > percentage) {
				nearestArticleDist = dist;
				nearestArticleBar = bar;
			}
		}
		if (bar.dataset.type === 'maplayer') {	
			if (!nearestMapLayerBar || dist < nearestMapLayerDist && sliderVal > percentage) {
				nearestMapLayerDist = dist;
				nearestMapLayerBar = bar;
			}			
		}
	});

	const timelinepostArticle = parseInt(nearestArticleBar.dataset.timelinepost);
	document.querySelectorAll('.source').forEach(el => {
		el.classList.remove('visible');
	});

	const article = document.querySelector('.source[data-timelinepost="' + timelinepostArticle + '"');
	article.classList.add('visible');

	const timelinepostMapLayer = parseInt(nearestMapLayerBar.dataset.timelinepost);
	document.querySelectorAll('.map-layer').forEach(el => {
		el.classList.remove('visible');
	});
	

	const mapLayer = document.querySelector('.map-layer[data-timelinepost="' + timelinepostMapLayer + '"');
	mapLayer.classList.add('visible');


}