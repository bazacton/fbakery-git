/*
 * CROPPIC
 * dependancy: jQuery
 * author: Ognjen "Zmaj Džedaj" Boži�?ković and Mat Steinlin
 */

!function(o, t){
Croppic = function(o, t){
var e = this; e.id = o, e.obj = $("#" + o), e.outputDiv = e.obj, e.options = {uploadUrl:"", uploadData:{}, cropUrl:"", cropData:{}, outputUrlId:"", imgEyecandy:!0, imgEyecandyOpacity:.2, zoomFactor:10, rotateFactor:5, doubleZoomControls:!0, rotateControls:!0, modal:!1, customUploadButtonId:"", loaderHtml:"", scaleToFill:!0, processInline:!1, loadPicture:"", onReset:null, enableMousescroll:!1, onBeforeImgUpload:null, onAfterImgUpload:null, onImgDrag:null, onImgZoom:null, onImgRotate:null, onBeforeImgCrop:null, onAfterImgCrop:null, onBeforeRemoveCroppedImg:null, onAfterRemoveCroppedImg:null, onError:null}; for (i in t)e.options[i] = t[i]; e.init()
}, Croppic.prototype = {

//alert('This file size is ::: ' + o.form.find("input[type=file]")[0].files[0].size / 1024 / 1024 + "MB");
// if (1){
id:"", imgInitW:0, imgInitH:0, imgW:0, imgH:0, objW:0, objH:0, actualRotation:0, windowW:0, windowH:$(o).height(), obj:{}, outputDiv:{}, outputUrlObj:{}, img:{}, defaultImg:{}, croppedImg:{}, imgEyecandy:{}, form:{}, iframeform:{}, iframeobj:{}, cropControlsUpload:{}, cropControlsCrop:{}, cropControlZoomMuchIn:{}, cropControlZoomMuchOut:{}, cropControlZoomIn:{}, cropControlZoomOut:{}, cropControlCrop:{}, cropControlReset:{}, cropControlRemoveCroppedImage:{}, modal:{}, loader:{},
        init:function(){
        var o = this; o.objW = o.obj.width(), o.objH = o.obj.height(), o.actualRotation = 0, $.isEmptyObject(o.defaultImg) && (o.defaultImg = o.obj.find("img")), o.createImgUploadControls(), $.isEmptyObject(o.options.loadPicture)?o.bindImgUploadControl():o.loadExistingImage()
        },
        createImgUploadControls:function(){
        	var o = this, t = ""; "" === o.options.customUploadButtonId && (t = '<i class="cropControlUpload"></i><i class="cropControlRemoveCroppedImage"></i>');
			var e = "";
			$.isEmptyObject(o.croppedImg) && (e = ""), $.isEmptyObject(o.options.loadPicture) || (t = "");
			var n = '<div class="cropControls cropControlsUpload"> ' + t + e + " </div>";
			o.outputDiv.append(n), o.cropControlsUpload = o.outputDiv.find(".cropControlsUpload"), "" === o.options.customUploadButtonId?o.imgUploadControl = o.outputDiv.find(".cropControlUpload"):(o.imgUploadControl = $("#" + o.options.customUploadButtonId), o.imgUploadControl.show()), $.isEmptyObject(o.croppedImg) || (o.cropControlRemoveCroppedImage = o.outputDiv.find(".cropControlRemoveCroppedImage"))
        },
        bindImgUploadControl:function(){
        var o = this, e = '<form class="' + o.id + '_imgUploadForm" style="visibility: hidden;">  <input type="file" name="img" id="' + o.id + '_imgUploadField">  </form>'; o.outputDiv.append(e), o.form = o.outputDiv.find("." + o.id + "_imgUploadForm"); var n = o.CreateFallbackIframe(); o.imgUploadControl.off("click"), o.imgUploadControl.on("click", function(){"" === n?o.form.find('input[type="file"]').trigger("click"):o.iframeform.find('input[type="file"]').trigger("click")}), $.isEmptyObject(o.croppedImg) || o.cropControlRemoveCroppedImage.on("click", function(){
            typeof o.options.onBeforeRemoveCroppedImg == typeof Function && o.options.onBeforeRemoveCroppedImg.call(o), o.croppedImg.remove(), 
            jQuery(".croppedImg2").hide()
            , jQuery("#cropContainerModal img").attr.src(""), o.croppedImg = {}, $(this).hide(), typeof o.options.onAfterRemoveCroppedImg == typeof Function && o.options.onAfterRemoveCroppedImg.call(o), $.isEmptyObject(o.defaultImg) || o.obj.append(o.defaultImg), "" !== o.options.outputUrlId && $("#" + o.options.outputUrlId).val("")}),
                o.form.find('input[type="file"]').change(function(){

        var image_size = o.form.find("input[type=file]")[0].files[0].size / 1024 / 1024;
                // alert('This file size is image_size ==::: ' + image_size + "MB");
                if (image_size <= 1){
        if (o.options.onBeforeImgUpload && o.options.onBeforeImgUpload.call(o), o.showLoader(), o.imgUploadControl.hide(), o.options.processInline)
                if ("undefined" == typeof FileReader)o.options.onError && o.options.onError.call(o, "processInline is not supported by your Browser"), o.reset();
                else{
                var e = new FileReader; e.onload = function(t){var e = new Image; e.src = t.target.result, e.onload = function(){o.imgInitW = o.imgW = e.width, o.imgInitH = o.imgH = e.height, o.options.modal && o.createModal(), $.isEmptyObject(o.croppedImg) || o.croppedImg.remove(), o.imgUrl = e.src, o.obj.append('<img src="' + e.src + '">'), o.initCropper(), o.hideLoader(), o.options.onAfterImgUpload && o.options.onAfterImgUpload.call(o)}}, e.readAsDataURL(o.form.find('input[type="file"]')[0].files[0])
                }
        else{
        try{formData = new FormData(o.form[0])} catch (n){
        formData = new FormData, formData.append("img", o.form.find("input[type=file]")[0].files[0])}
        for (var i in o.options.uploadData)
                o.options.uploadData.hasOwnProperty(i) && formData.append(i, o.options.uploadData[i]);
                formData.append("action", "save_iamge_to_file"), console.log(formData),
                $.ajax({
                url:o.options.uploadUrl, data:formData, context:t.body, cache:!1, contentType:!1, processData:!1, type:"POST"
                }).always(function(t){
        o.afterUpload(t)
        })
        }
        } else{
        alert('Image size too large max image size is 1 MB');
        }
        }
        )}, loadExistingImage:function(){
var o = this; if ($.isEmptyObject(o.croppedImg)){o.options.onBeforeImgUpload && o.options.onBeforeImgUpload.call(o), o.showLoader(), o.options.modal && o.createModal(), $.isEmptyObject(o.croppedImg) || o.croppedImg.remove(), o.imgUrl = o.options.loadPicture; var t = $('<img src="' + o.options.loadPicture + '">'); o.obj.append(t), t.load(function(){o.imgInitW = o.imgW = this.width, o.imgInitH = o.imgH = this.height, o.initCropper(), o.hideLoader(), o.options.onAfterImgUpload && o.options.onAfterImgUpload.call(o)})} else o.cropControlRemoveCroppedImage.on("click", function(){o.croppedImg.remove(), $(this).hide(), $.isEmptyObject(o.defaultImg) || o.obj.append(o.defaultImg), "" !== o.options.outputUrlId && $("#" + o.options.outputUrlId).val(""), o.croppedImg = "", o.reset()})
}, afterUpload:function(o){
var t = this; if (response = "object" == typeof o?o:jQuery.parseJSON(o), "success" == response.status){t.imgInitW = t.imgW = response.width, t.imgInitH = t.imgH = response.height, t.options.modal && t.createModal(), $.isEmptyObject(t.croppedImg) || t.croppedImg.remove(), t.imgUrl = response.url; var e = $('<img src="' + response.url + '">'); t.obj.append(e), e.load(function(){t.initCropper(), t.hideLoader(), t.options.onAfterImgUpload && t.options.onAfterImgUpload.call(t)}), t.options.onAfterImgUpload && t.options.onAfterImgUpload.call(t)}"error" == response.status && (alert(response.message), t.options.onError && t.options.onError.call(t, response.message), t.hideLoader(), setTimeout(function(){t.reset()}, 2e3))
}, createModal:function(){
var o = this, t = o.windowH / 2 - o.objH / 2, e = '<div id="croppicModal"><div id="croppicModalObj" style="width:' + o.objW + "px; height:" + o.objH + "px; margin:0 auto; margin-top:" + t + 'px; position: relative;"> </div></div>'; $("body").append(e), o.modal = $("#croppicModal"), o.obj = $("#croppicModalObj")
}, destroyModal:function(){
var o = this; o.obj = o.outputDiv, o.modal.remove(), o.modal = {}
}, initCropper:function(){
var o = this; o.img = o.obj.find("img"), o.img.wrap('<div class="cropImgWrapper" style="overflow:hidden; z-index:1; position:absolute; width:' + o.objW + "px; height:" + o.objH + 'px;"></div>'), o.createCropControls(), o.options.imgEyecandy && o.createEyecandy(), o.initDrag(), o.initialScaleImg()
}, createEyecandy:function(){var o = this; o.imgEyecandy = o.img.clone(), o.imgEyecandy.css({"z-index":"0", opacity:o.options.imgEyecandyOpacity}).appendTo(o.obj)
}, destroyEyecandy:function(){
var o = this; o.imgEyecandy.remove()
}, initialScaleImg:function(){
var o = this; o.zoom( - o.imgInitW), o.zoom(40), o.options.enableMousescroll && o.img.on("mousewheel", function(t){t.preventDefault(), o.zoom(o.options.zoomFactor * t.deltaY)}), o.img.css({left: - (o.imgW - o.objW) / 2, top: - (o.imgH - o.objH) / 2, position:"relative"}), o.options.imgEyecandy && o.imgEyecandy.css({left: - (o.imgW - o.objW) / 2, top: - (o.imgH - o.objH) / 2, position:"relative"})
}, createCropControls:function(){
var o, t = this, e = "", n = '<i class="cropControlZoomIn"></i>', i = '<i class="cropControlZoomOut"></i>', r = "", a = "", p = "", s = '<i class="cropControlCrop"></i>', c = '<i class="cropControlReset"></i>'; t.options.doubleZoomControls && (e = '<i class="cropControlZoomMuchIn"></i>', r = '<i class="cropControlZoomMuchOut"></i>'), t.options.rotateControls && (a = '<i class="cropControlRotateLeft"></i>', p = '<i class="cropControlRotateRight"></i>'), o = '<div class="cropControls cropControlsCrop">' + e + n + i + r + a + p + s + c + "</div>", t.obj.append(o), t.cropControlsCrop = t.obj.find(".cropControlsCrop"), t.options.doubleZoomControls && (t.cropControlZoomMuchIn = t.cropControlsCrop.find(".cropControlZoomMuchIn"), t.cropControlZoomMuchIn.on("click", function(){t.zoom(10 * t.options.zoomFactor)}), t.cropControlZoomMuchOut = t.cropControlsCrop.find(".cropControlZoomMuchOut"), t.cropControlZoomMuchOut.on("click", function(){t.zoom(10 * - t.options.zoomFactor)})), t.cropControlZoomIn = t.cropControlsCrop.find(".cropControlZoomIn"), t.cropControlZoomIn.on("click", function(){t.zoom(t.options.zoomFactor)}), t.cropControlZoomOut = t.cropControlsCrop.find(".cropControlZoomOut"), t.cropControlZoomOut.on("click", function(){t.zoom( - t.options.zoomFactor)}), t.cropControlZoomIn = t.cropControlsCrop.find(".cropControlRotateLeft"), t.cropControlZoomIn.on("click", function(){t.rotate( - t.options.rotateFactor)}), t.cropControlZoomOut = t.cropControlsCrop.find(".cropControlRotateRight"), t.cropControlZoomOut.on("click", function(){t.rotate(t.options.rotateFactor)}), t.cropControlCrop = t.cropControlsCrop.find(".cropControlCrop"), t.cropControlCrop.on("click", function(){t.crop()}),
 t.cropControlReset = t.cropControlsCrop.find(".cropControlReset"),
        t.cropControlReset.on("click", function(){
        t.reset();
        })
}, initDrag:function(){
var t = this; t.img.on("mousedown touchstart", function(e){e.preventDefault(); var n, i, r = o.navigator.userAgent; r.match(/iPad/i) || r.match(/iPhone/i) || r.match(/android/i) || void 0 == (e.pageY && e.pageX)?(n = e.originalEvent.touches[0].pageX, i = e.originalEvent.touches[0].pageY):(n = e.pageX, i = e.pageY); var a = t.img.css("z-index"), p = t.img.outerHeight(), s = t.img.outerWidth(), c = t.img.offset().top + p - i, l = t.img.offset().left + s - n; t.img.css("z-index", 1e3).on("mousemove touchmove", function(o){var e, n; if (r.match(/iPad/i) || r.match(/iPhone/i) || r.match(/android/i) || void 0 == (o.pageY && o.pageX)?(e = o.originalEvent.touches[0].pageY + c - p, n = o.originalEvent.touches[0].pageX + l - s):(e = o.pageY + c - p, n = o.pageX + l - s), t.img.offset({top:e, left:n}).on("mouseup", function(){$(this).removeClass("draggable").css("z-index", a)}), t.options.imgEyecandy && t.imgEyecandy.offset({top:e, left:n}), t.objH < t.imgH){parseInt(t.img.css("top")) > 0 && (t.img.css("top", 0), t.options.imgEyecandy && t.imgEyecandy.css("top", 0)); var i = - (t.imgH - t.objH); parseInt(t.img.css("top")) < i && (t.img.css("top", i), t.options.imgEyecandy && t.imgEyecandy.css("top", i))} else{parseInt(t.img.css("top")) < 0 && (t.img.css("top", 0), t.options.imgEyecandy && t.imgEyecandy.css("top", 0)); var i = t.objH - t.imgH; parseInt(t.img.css("top")) > i && (t.img.css("top", i), t.options.imgEyecandy && t.imgEyecandy.css("top", i))}if (t.objW < t.imgW){parseInt(t.img.css("left")) > 0 && (t.img.css("left", 0), t.options.imgEyecandy && t.imgEyecandy.css("left", 0)); var m = - (t.imgW - t.objW); parseInt(t.img.css("left")) < m && (t.img.css("left", m), t.options.imgEyecandy && t.imgEyecandy.css("left", m))} else{parseInt(t.img.css("left")) < 0 && (t.img.css("left", 0), t.options.imgEyecandy && t.imgEyecandy.css("left", 0)); var m = t.objW - t.imgW; parseInt(t.img.css("left")) > m && (t.img.css("left", m), t.options.imgEyecandy && t.imgEyecandy.css("left", m))}t.options.onImgDrag && t.options.onImgDrag.call(t)})}).on("mouseup", function(){t.img.off("mousemove")}).on("mouseout", function(){t.img.off("mousemove")})
}, rotate:function(o){
var t = this; t.actualRotation += o, t.img.css({"-webkit-transform":"rotate(" + t.actualRotation + "deg)", "-moz-transform":"rotate(" + t.actualRotation + "deg)", transform:"rotate(" + t.actualRotation + "deg)"}), t.options.imgEyecandy && t.imgEyecandy.css({"-webkit-transform":"rotate(" + t.actualRotation + "deg)", "-moz-transform":"rotate(" + t.actualRotation + "deg)", transform:"rotate(" + t.actualRotation + "deg)"}), "function" == typeof t.options.onImgRotate && t.options.onImgRotate.call(t)
}, zoom:function(o){
var t = this, e = t.imgW / t.imgH, n = t.imgW + o, i = n / e, r = !0; (n < t.objW || i < t.objH) && (n - t.objW < i - t.objH?(n = t.objW, i = n / e):(i = t.objH, n = e * i), r = !1), !t.options.scaleToFill && (n > t.imgInitW || i > t.imgInitH) && (n - t.imgInitW < i - t.imgInitH?(n = t.imgInitW, i = n / e):(i = t.imgInitH, n = e * i), r = !1), t.imgW = n, t.img.width(n), t.imgH = i, t.img.height(i); var a = parseInt(t.img.css("top")) - o / 2, p = parseInt(t.img.css("left")) - o / 2; a > 0 && (a = 0), p > 0 && (p = 0); var s = - (i - t.objH); s > a && (a = s); var c = - (n - t.objW); c > p && (p = c), r && t.img.css({top:a, left:p}), t.options.imgEyecandy && (t.imgEyecandy.width(n), t.imgEyecandy.height(i), r && t.imgEyecandy.css({top:a, left:p})), t.options.onImgZoom && t.options.onImgZoom.call(t)
}, crop:function(){
var o = this; o.options.onBeforeImgCrop && o.options.onBeforeImgCrop.call(o), o.cropControlsCrop.hide(), o.showLoader(); var e, n = {imgUrl:o.imgUrl, imgInitW:o.imgInitW, imgInitH:o.imgInitH, imgW:o.imgW, imgH:o.imgH, imgY1:Math.abs(parseInt(o.img.css("top"))), imgX1:Math.abs(parseInt(o.img.css("left"))), cropH:o.objH, cropW:o.objW, rotation:o.actualRotation}; if ("undefined" == typeof FormData){var i = new XMLHttpRequest, r = "", a = []; for (var p in n)a.push(encodeURIComponent(p) + "=" + encodeURIComponent(n[p])); for (var p in o.options.cropData)a.push(encodeURIComponent(p) + "=" + encodeURIComponent(o.options.cropData[p])); r = a.join("&").replace(/%20/g, "+"), i.addEventListener("error", function(t){o.options.onError && o.options.onError.call(o, "XHR Request failed")}), i.onreadystatechange = function(){4 == i.readyState && 200 == i.status && o.afterCrop(i.responseText)}, i.open("POST", o.options.cropUrl), i.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), i.setRequestHeader("Content-Length", r.length), i.send(r)} else{e = new FormData; for (var p in n)n.hasOwnProperty(p) && e.append(p, n[p]); for (var p in o.options.cropData)o.options.cropData.hasOwnProperty(p) && e.append(p, o.options.cropData[p]); e.append("action", "image_crop_to_file"), $.ajax({url:o.options.cropUrl, data:e, context:t.body, cache:!1, contentType:!1, processData:!1, type:"POST"}).always(function(t){o.afterCrop(t)})}
}, afterCrop:function(o){
var t = this; try{response = jQuery.parseJSON(o)} catch (e){response = "object" == typeof o?o:jQuery.parseJSON(o)}if ("success" == response.status){t.options.imgEyecandy && t.imgEyecandy.hide(), t.destroy(); var n = response.url, i = n.split("croppedImg_"), r = response.absolute_path, a = r.split("croppedImg_"); t.obj.append('<img style="display:none" class="croppedImg" src="' + response.url + '"><img data-src="' + response.url + '" class="croppedImg2" src="' + a[0] + "croppedImg_" + i[1] + '">'), jQuery("#foodbakery_publisher_profile_image").val(response.absolute_path), "" !== t.options.outputUrlId && $("#" + t.options.outputUrlId).val(response.url), t.croppedImg = t.obj.find(".croppedImg"), t.init(), t.hideLoader()}"error" == response.status && (t.options.onError && t.options.onError.call(t, response.message), t.hideLoader(), setTimeout(function(){t.reset()}, 2e3)), t.options.onAfterImgCrop && t.options.onAfterImgCrop.call(t, response)
}, showLoader:function(){
var o = this; o.obj.append(o.options.loaderHtml), o.loader = o.obj.find(".loader")
}, hideLoader:function(){
var o = this; o.loader.remove()
}, reset:function(){
var o = this; o.destroy2(), o.init(), $.isEmptyObject(o.croppedImg) || (o.obj.append(o.croppedImg), "" !== o.options.outputUrlId && $("#" + o.options.outputUrlId).val(o.croppedImg.attr("url"))), "function" == typeof o.options.onReset && o.options.onReset.call(o)
}, destroy:function(){
var o = this; o.options.modal && !$.isEmptyObject(o.modal) && o.destroyModal(), o.options.imgEyecandy && !$.isEmptyObject(o.imgEyecandy) && o.destroyEyecandy(), $.isEmptyObject(o.cropControlsUpload) || o.cropControlsUpload.remove(), $.isEmptyObject(o.cropControlsCrop) || o.cropControlsCrop.remove(), $.isEmptyObject(o.loader) || o.loader.remove(), $.isEmptyObject(o.form) || o.form.remove(), o.obj.html("")
}, isAjaxUploadSupported:function(){
var o = t.createElement("input"); return o.type = "file", "multiple"in o && "undefined" != typeof File && "undefined" != typeof FormData && "undefined" != typeof (new XMLHttpRequest).upload
}, CreateFallbackIframe:function(){
var o = this; if (o.isAjaxUploadSupported())return""; if (jQuery.isEmptyObject(o.iframeobj)){var e = t.createElement("iframe"); e.setAttribute("id", o.id + "_upload_iframe"), e.setAttribute("name", o.id + "_upload_iframe"), e.setAttribute("width", "0"), e.setAttribute("height", "0"), e.setAttribute("border", "0"), e.setAttribute("src", "javascript:false;"), e.style.display = "none", t.body.appendChild(e)} else e = o.iframeobj[0]; var n = '<!DOCTYPE html><html><head><title>Uploading File</title></head><body><form class="' + o.id + '_upload_iframe_form" name="' + o.id + '_upload_iframe_form" action="' + o.options.uploadUrl + '" method="post" enctype="multipart/form-data" encoding="multipart/form-data" style="display:none;">' + $("#" + o.id + "_imgUploadField")[0].outerHTML + "</form></body></html>"; e.contentWindow.document.open("text/htmlreplace"), e.contentWindow.document.write(n), e.contentWindow.document.close(), o.iframeobj = $("#" + o.id + "_upload_iframe"), o.iframeform = o.iframeobj.contents().find("html").find("." + o.id + "_upload_iframe_form"), o.iframeform.on("change", "input", function(){o.SubmitFallbackIframe(o)}), o.iframeform.find("input")[0].attachEvent("onchange", function(){o.SubmitFallbackIframe(o)}); var i = function(){e.detachEvent?e.detachEvent("onload", i):e.removeEventListener("load", i, !1); var t = o.getIframeContentJSON(e); jQuery.isEmptyObject(o.modal) && o.afterUpload(t)}; return e.addEventListener && e.addEventListener("load", i, !0), e.attachEvent && e.attachEvent("onload", i), "#" + o.id + "_imgUploadField"
}, SubmitFallbackIframe:function(o){
o.showLoader(), o.options.processInline && !o.options.uploadUrl?o.options.onError && (o.options.onError.call(o, "processInline is not supported by your browser "), o.hideLoader()):(o.options.onBeforeImgUpload && o.options.onBeforeImgUpload.call(o), o.iframeform[0].submit())
}, getIframeContentJSON:function(o){
try{var t, e = o.contentDocument?o.contentDocument:o.contentWindow.document, n = e.body.innerHTML; "<pre>" == n.slice(0, 5).toLowerCase() && "</pre>" == n.slice( - 6).toLowerCase() && (n = e.body.firstChild.firstChild.nodeValue), t = jQuery.parseJSON(n)} catch (i){t = {success:!1}}return t
}, destroy2:function(){
var o = this; o.options.modal && !$.isEmptyObject(o.modal) && o.destroyModal(), o.options.imgEyecandy && !$.isEmptyObject(o.imgEyecandy) && o.destroyEyecandy(), $.isEmptyObject(o.cropControlsUpload) || o.cropControlsUpload.remove(), $.isEmptyObject(o.cropControlsCrop) || o.cropControlsCrop.remove(), $.isEmptyObject(o.loader) || o.loader.remove(), $.isEmptyObject(o.form) || o.form.remove()
}
//} // end image size check
}
}(window, document);