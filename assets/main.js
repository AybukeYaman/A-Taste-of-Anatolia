// Dil butonları: URL'yi ?lang=tr / ?lang=en ile değiştirir
document.querySelectorAll('.lang-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const lang = btn.dataset.lang;
    const url = new URL(window.location.href);
    url.searchParams.set('lang', lang);
    window.location.href = url.toString();
  });
});
