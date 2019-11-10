var lsjQuery = jQuery;
lsjQuery(document).ready(function() {
    if (typeof lsjQuery.fn.layerSlider == "undefined") {
        if (window._layerSlider && window._layerSlider.showNotice) {
            window._layerSlider.showNotice('layerslider_1', 'jquery');
        }
    } else {
        lsjQuery("#layerslider_1").layerSlider({
            sliderVersion: '6.1.6',
            type: 'fullwidth',
            allowFullscreen: false,
            showCircleTimer: false,
            thumbnailNavigation: 'disabled',
            skinsPath: 'https://ladystars.vn/wp-content/plugins/LayerSlider/static/layerslider/skins/'
        });
    }
});
lsjQuery(document).ready(function() {
    if (typeof lsjQuery.fn.layerSlider == "undefined") {
        if (window._layerSlider && window._layerSlider.showNotice) {
            window._layerSlider.showNotice('layerslider_2', 'jquery');
        }
    } else {
        lsjQuery("#layerslider_2").layerSlider({
            sliderVersion: '6.1.6',
            type: 'fullwidth',
            allowFullscreen: false,
            skinsPath: 'https://ladystars.vn/wp-content/plugins/LayerSlider/static/layerslider/skins/'
        });
    }
});