    (function () {
        var ctx = require.s.contexts._,
            origNameToUrl = ctx.nameToUrl,
            baseUrl = ctx.config.baseUrl;

        ctx.nameToUrl = function() {
            var url = origNameToUrl.apply(ctx, arguments);
            if (url.indexOf(baseUrl)===0&&!url.match(/\/tiny_mce\//)&&!url.match(/\/v1\/songbird/)&&!url.match(/\/pay.google.com\//)) {
                url = url.replace(/(\.min)?\.js$/, '.min.js');
            }
            return url;
        };
    })();