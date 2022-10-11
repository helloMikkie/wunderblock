var gaProperty = 'UA-156247667-1';

// Disable tracking if the opt-out cookie exists.
var disableStr = 'ga-disable-' + gaProperty;
if (document.cookie.indexOf(disableStr + '=true') > -1) {
  window[disableStr] = true;
  // console.log('Tracking disabled');
}

$(function() {
  var lang = $('html').attr('lang');
  var cookieConsentContent = lang === 'de' ? {
      message: "Auf dieser Website werden Cookies verwendet.",
      deny: "Ablehnen",
      allow: "Akzeptieren",
      link: "Zum Datenschutz",
      // href: "https://offensive-tanz.de/de/datenschutz",
      href: "/de/datenschutz",
      policy: 'Datenschutz'
    } : {
      message: "This website uses cookies.",
      deny: "Decline",
      allow: "Allow",
      link: "More info",
      href: "/en/datenschutz",
      policy: 'Privacy Policy'
    };
    
  // init cookie constent popup
  window.cookieconsent.initialise({
    position: 'bottom-right',
    type: 'opt-in',
    content: cookieConsentContent,
    animateRevokable: false,
    onInitialise: function (status) {
      var type = this.options.type;
      var didConsent = this.hasConsented();
      if (type == 'opt-in' && didConsent) {
        // enable cookies
        embedTrackingCode();
      }
      if (type == 'opt-out' && !didConsent) {
        // disable cookies
        gaOptout();
      }
    },
    onStatusChange: function (status, chosenBefore) {
      var type = this.options.type;
      var didConsent = this.hasConsented();
      if (type == 'opt-in' && didConsent) {
        // enable cookies
        embedTrackingCode();
      }
      if (type == 'opt-in' && !didConsent) {
        // disable cookies
        gaOptout();
      }
      if (type == 'opt-out' && !didConsent) {
        // disable cookies
        gaOptout();
      }
    },
    onRevokeChoice: function () {
      var type = this.options.type;
      if (type == 'opt-in') {
        // disable cookies
        gaOptout();
      }
      if (type == 'opt-out') {
        // enable cookies
        embedTrackingCode();
      }
    }
  });
});

/**
 * Load google tag manager
 */
function embedTrackingCode() {
  $.loadScript('https://www.googletagmanager.com/gtag/js?id=' + gaProperty, gaOptin);
}

/**
 * Opt in google tracking
 */
function gaOptin() {
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', gaProperty, { 'anonymize_ip': true });
  // remove ga-disable cookie, if set
  if (document.cookie.indexOf(disableStr + '=true') > -1) {
    document.cookie = disableStr + '=true; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/';
    window[disableStr] = true;
  }
  // console.log('Tracking enabled');
}

/**
 * Opt out google tracking
 */
function gaOptout() {
  document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
  window[disableStr] = true;
  // console.log('Tracking disabled');
}

/**
 * Reopen cookie settings popup
 */
function openCookieSettings() {
  $('.cc-revoke').click();
}

/**
 * Load external script
 */
$.loadScript = function (url, callback) {
  $.ajax({
      url: url,
      dataType: 'script',
      success: callback,
      async: true
  });
}
