var suap = new SuapClient(SUAP_URL, CLIENT_ID, REDIRECT_URI, SCOPE);
suap.init();
$("#suap-login-button").attr('href', suap.getLoginURL());