window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());

gtag('config', document.getElementById('google_analytics_id').dataset.googleAnalyticsId);