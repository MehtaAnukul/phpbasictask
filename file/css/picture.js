! function (a) {
    function b(a) {
        -1 === a.name.indexOf("[]") && (a.name = a.name + "[]")
    }

    function c(b, c, d) {
        var e = b.name + "-" + d
            , f = b.name + "-" + (d + 1);
        a(b).attr("data-upload-preview", e);
        var g = b.cloneNode();
        return b.style.display = "none", c === !1 ? a(b).before(a(g).attr("data-upload-preview", f)) : (g.id = c, a(b).removeAttr("id").before(a(g).attr("data-upload-preview", f))), e
    }

    function d(b, c, d, e, f) {
        if (b === !1) return f;
        var g = document.createElement("div");
        g.appendChild(f);
        var h = document.createElement("p")
            , i = document.createTextNode(c);
        return a(h).attr("data-upload-preview", e), h.appendChild(i), h.style.cursor = "pointer", "before" == d ? g.insertBefore(h, f) : g.appendChild(h), g
    }

    function e(a, b, c, d) {
        var e = document.createElement(d === !1 ? "img" : "div");
        if (e.style.width = b + "px", e.style.height = c + "px", d) {
            var f = "scale"
                , g = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + a + "',sizingMethod=" + f + ")";
            e.style.filter = g
        } else e.src = a;
        return e
    }

    function f(a, b) {
        var b = parseInt(b)
            , c = a / 1048576;
        return isNaN(b) || b >= c ? !0 : !1
    }

    function g(a, b) {
        for (var c = a.substr((~-a.lastIndexOf(".") >>> 0) + 2), d = b.split("/"), e = d.length - 1; e >= 0; e--)
            if (c == d[e]) return !0;
        return !1
    }
    a.fn.previewimage = function (h) {
        var h = a.extend({
                div: ""
                , imgwidth: 150
                , imgheight: 90
                , imgsize: ""
                , imgdel: !0
                , delname: "Delete"
                , position: "after"
                , ext: "jpg/jpeg/png"
            }, h)
            , i = a(this)
            , j = i.prop("name")
            , k = i.prop("id") ? i.prop("id") : !1
            , l = i.parent()
            , m = a(h.div)
            , n = 0;
        if (i.length && m.length && "" !== j) b(i[0]), l.on("change", "input[name='" + j + "[]']", function () {
            var b = this
                , i = this.files;
            if (i && i[0])
                if (g(i[0].name, h.ext) && f(i[0].size, h.imgsize)) {
                    var l = new FileReader;
                    l.onload = function (a) {
                        var f = a.target.result
                            , g = c(b, k, n)
                            , i = e(f, h.imgwidth, h.imgheight, !1);
                        m.prepend(d(h.imgdel, h.delname, h.position, g, i)), n++
                    }, l.readAsDataURL(this.files[0])
                } else alert("Your input is not an image or file size are too big");
            else {
                b.select(), b.blur();
                var o = document.selection.createRange().text;
                if (g(o, h.ext)) {
                    var p = c(b, k, j, h.inputname)
                        , q = e(o, h.imgwidth, h.imgheight, !0);
                    m.prepend(d(h.imgdel, h.delname, h.position, p, q)), n++
                }
            }
        });
        else {
            if (!i.length) throw "Cannot find selector or selector is not an input file type";
            if (!m.length) throw "Target div cannot be found";
            if ("" == j) throw "Name attribute is not defined in input file type"
        }
        h.imgdel !== !1 && m.on("click", "p", function () {
            var c = this.parentNode;
            c.parentNode.removeChild(c);
            var d = a(this).attr("data-upload-preview");
            l.children("[data-upload-preview='" + d + "']").remove()
        })
    }
}(jQuery);