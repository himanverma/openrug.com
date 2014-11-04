/**
 * Knockout Binding to convert from CM to FT and FT to CM
 * <span data-bind="cm2ft2cm:{'cm':12,'unit':mUnits}">12</span>cm
 * <span data-bind="cm2ft2cm:{'ft':12,'unit':mUnits}">12</span>ft
 */
ko.bindingHandlers.cm2ft2cm = {
    init: function(element, valueAccessor, allBindingsAccessor) {
        // First get the latest data that we're bound to
        var value = valueAccessor();
        if (value.cm != undefined) {
            if (value.unit() == 'cm') {
                $(element).html(value.cm);
            }
            if (value.unit() == 'ft') {
                $(element).html(value.cm * 0.032808);
            }
        }
        if (value.ft != undefined) {
            if (value.unit() == 'ft') {
                $(element).html(value.ft);
            }
            if (value.unit() == 'cm') {
                $(element).html(value.ft / 0.032808);
            }
        }
    },
    update: function(element, valueAccessor, allBindingsAccessor) {
        // First get the latest data that we're bound to
        var value = valueAccessor();
        if (value.cm != undefined) {
            if (value.unit() == 'cm') {
                $(element).html((value.cm).toFixed(2));
            }
            if (value.unit() == 'ft') {
                $(element).html((value.cm * 0.032808).toFixed(2));
            }
        }
        if (value.ft != undefined) {
            if (value.unit() == 'ft') {
                $(element).html((value.ft).toFixed(2));
            }
            if (value.unit() == 'cm') {
                $(element).html((value.ft / 0.032808).toFixed(2));
            }
        }
    }
};
ko.bindingHandlers.swatch = {
    init: function(element, valueAccessor, allBindingsAccessor) {
        // First get the latest data that we're bound to
        var value = valueAccessor();
        if (value.clrstamp != undefined) {
            var a = value.clrstamp.toString();
            var b = a.split("-");
            var c = "";
            for (i in b) {
                var t = b[i];
                if(swt[t] != undefined)
                c += '<img src="/swatch/' + swt[t].file + '" />';
            }
            $(element).html(c);
        }
    },
    update: function(element, valueAccessor, allBindingsAccessor) {
        // First get the latest data that we're bound to
        var value = valueAccessor();
        if (value.clrstamp != undefined) {
            var a = value.clrstamp.toString();
            var b = a.split("-");
            var c = "";
            for (i in b) {
                var t = b[i];
                if(swt[t] != undefined)
                c += '<img src="/swatch/' + swt[t].file + '" />';
            }
            $(element).html(c);
        }
    }
};