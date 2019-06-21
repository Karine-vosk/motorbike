        (function() {
            var setCoockie = function(name, value, options) {
                options = options || {};
                options.path = '/';
                var expires = options.expires;
                if (typeof expires == "number" && expires) {
                    var d = new Date();
                    d.setTime(d.getTime() + expires * 1000);
                    expires = options.expires = d;
                }
                if (expires && expires.toUTCString) {
                    options.expires = expires.toUTCString();
                }
                value = encodeURIComponent(value);
                var updatedCookie = name + "=" + value;
                for (var propName in options) {
                    updatedCookie += "; " + propName;
                    var propValue = options[propName];
                    if (propValue !== true) {
                        updatedCookie += "=" + propValue;
                    }
                }
                document.cookie = updatedCookie;
            }

            window.__user_cmsguide__ = {
                location: "motocms.com",
                uid: "0100ok0anoja1et9",
                folder: "0100ok0anoja1et9",
                template_id: "59546",
                added: "2017-04-23 05:37:10",
                changed: "2017-04-23 05:37:10",
                closed: "0000-00-00 00:00:00",
                activated: "2017-04-23 05:37:10",
                logged: "0000-00-00 00:00:00",
                location: "motocms.com",
                campaign: "",
                demo_aff: "",
                http_referer: "https%253A%252F%252Fwww.google.am%252F",
                http_referer_host: "",
                http_referer_uri: "https%253A%252F%252Fwww.google.am%252F",
                logged_times: "2",
                last_update_demo: "",
                last_edited: "2017-04-23 09:40:11",
                last_code_confirm: "1",
                google_cid: "1720593451.1492629567",
                email: "karinvosk@gmail.com",
                locale: "en",
                window_location_href: ""
            };

            setCoockie("motocallback_demoid", "0100ok0anoja1et9");
            
        })();

        (function($){
            $(window).load(function(){
               
            });
        })(jQuery);        (function(){
            var script = document.createElement('script');
            script.setAttribute("id", "motocallback");
            script.src = "http://demo.cms-guide.com/calls/motocallback/getcode/5/en/";
            document.getElementsByTagName('head')[0].appendChild(script);            
         })();        angular.module("xxxx.trial.external",["pascalprecht.translate","ui.bootstrap","ui.router","kr.ngNamespaceUrl","xxxx.trial.external.templates","xxxx.trial.external.translations"]),angular.module("xxxx.trial.external.templates",[]),angular.module("xxxx.trial.external.translations",[]),angular.module("xxxx.trial.external").directive("xxxxTrialInformer",["$compile","xxxxTrialService","$state","$http","$window","$timeout",function(a,b,c,d,e,f){return{restrict:"E",templateUrl:"@pluginXxxxTrial/views/informer.html",scope:!0,link:function(a,c,f){a.site=b.getSite(),a.expiredDays=b.getRemaining(),a.isExpired=b.isExpired(),a.currentUser=b.getCurrentUser(),a.getCheckoutUrl=b.getCheckoutUrl(),a._demoBar={showBar:!1,_ticket:{isShow:!1,url:"https://support.cms-guide.com/hc/"+b.getUserLocale()+"/requests/new/"},_motoCallback:{isShow:!1,status:""},_motoChat:{isShow:!1,url:"#",status:""},buyBundle:{showTooltip:!1,showLabelSale:!1,items:{template:{name:"template",isShow:!1,url:b.getCheckoutUrl()+"&rnd"+Date.now(),regularPrice:199,discountPrice:119},templateInstall:{name:"template_install",isShow:!1,url:b.getCheckoutUrl()+"&additionalServices=install&rnd"+Date.now(),regularPrice:199,discountPrice:199},templateInstallHosting:{name:"template_install_hosting",isShow:!1,url:b.getCheckoutUrl()+"&additionalServices=insatllandhosting&rnd"+Date.now(),regularPrice:199,discountPrice:199}}}},a.processingTopBar=function(){if("undefined"==typeof window.__site__||"undefined"==typeof window.__site__.template_number)return a._demoBar._ticket.isShow=!0,a._demoBar.showBar=!0,!1;var c=b.getUserLocale();d.jsonp("https://demo.cms-guide.com/calls/apisupportblock/status/?idmotocalback=5&rnd="+Date.now()+"&chatroom="+("ru"==c?"moto-ru":"moto")+"&uid="+a.site.uid+"&callback=JSON_CALLBACK").success(function(b){if("undefined"!=typeof b&&"undefined"!=typeof b.motocallback&&"undefined"!=typeof b.motocallback.code&&~["ru","en","com"].indexOf(c)){var d=document.querySelector("#motocallback");null!==d&&(a._demoBar._motoCallback.isShow=!0),a._demoBar._motoCallback.status=0==b.motocallback.code?"active":"passive"}"undefined"!=typeof b.chat&&"undefined"!=typeof b.chat.exclude&&"undefined"!=typeof b.chat.presence&&0!=+b.chat.presence&&0==b.chat.exclude&&"undefined"!=typeof b.chat.url&&"undefined"!=typeof b.chat.state&&(a._demoBar._motoChat.url=b.chat.url,"#"!=b.chat.url&&(a._demoBar._motoChat.isShow=!0),a._demoBar._motoChat.status=b.chat.state),0==a._demoBar._motoChat.isShow&&(a._demoBar._ticket.isShow=!0),a._demoBar.showBar=!0})},a.processingTopBar(),a.openChatWindow=function(b){a.formatGAAnalytics("startChat"),window.open(b,"chat","height=750,width=985")},a.handlerStatusDemo=function(){return a.isExpired?"viewTemplate-live":"viewTemplate-expired"},a.formatGAAnalytics=function(b){var c=a.getUserLocation(),d=b;switch(c){case"motocms.ru":d=b+"-ru";break;case"motocms.de":d=b+"-de";break;case"templatemonster.ru":d=b+"-tmru";break;case"templatemonster.com":d=b+"-tm";break;case"templatemonster.de":d=b+"-tmde"}var f=f||[];f.push(["_trackEvent",a.handlerStatusDemo(),d,e.__site__.template_number])},a.getUserLocation=function(){var a="templatemonster.com";return"undefined"!=typeof e.__user_cmsguide__&&"undefined"!=typeof e.__user_cmsguide__.location&&(a=e.__user_cmsguide__.location),a},a.processingBundle=function(){var b=a.getUserLocation();if(!~["motocms.com","motocms.ru","motocms.de","motocms.es","motocms.pl"].indexOf(b))return!1;if(a._demoBar.buyBundle.showTooltip=!0,a.getCheckoutUrl="#","undefined"==typeof window.__site__||"undefined"==typeof window.__site__.template_number)return!1;var c="en";"undefined"!=typeof a.currentUser&&"undefined"!=typeof a.currentUser.language_code&&(c=a.currentUser.language_code),~["ru","en","es","pl","de"].indexOf(c)||(c="en");var e="https://www.motocms.com/website-templates/";"en"!=c&&(e+=c+"/"),e+="trial/template/"+window.__site__.template_number,e+="?rnd="+Date.now()+"&callback=JSON_CALLBACK",d.jsonp(e).success(function(b){"undefined"!=typeof b&&"undefined"!==b.status&&1==b.status&&"undefined"!==b.data&&"undefined"!==b.data.bundles&&("undefined"!=typeof b.data.bundles.template&&(a._demoBar.buyBundle.items.template.regularPrice=+b.data.bundles.template.regularPrice,a._demoBar.buyBundle.items.template.discountPrice=+b.data.bundles.template.discountPrice,a._demoBar.buyBundle.items.template.isShow=!0,a._demoBar.buyBundle.items.template.regularPrice>a._demoBar.buyBundle.items.template.discountPrice&&(a._demoBar.buyBundle.showLabelSale=!0)),"undefined"!=typeof b.data.bundles.template_installation&&(a._demoBar.buyBundle.items.templateInstall.regularPrice=+b.data.bundles.template_installation.regularPrice,a._demoBar.buyBundle.items.templateInstall.discountPrice=+b.data.bundles.template_installation.discountPrice,a._demoBar.buyBundle.items.templateInstall.isShow=!0,a._demoBar.buyBundle.items.templateInstall.regularPrice>a._demoBar.buyBundle.items.templateInstall.discountPrice&&(a._demoBar.buyBundle.showLabelSale=!0)),"undefined"!=typeof b.data.bundles.template_installation&&(a._demoBar.buyBundle.items.templateInstallHosting.regularPrice=+b.data.bundles.template_installation_hosting.regularPrice,a._demoBar.buyBundle.items.templateInstallHosting.discountPrice=+b.data.bundles.template_installation_hosting.discountPrice,a._demoBar.buyBundle.items.templateInstallHosting.isShow=!0,a._demoBar.buyBundle.items.templateInstallHosting.regularPrice>a._demoBar.buyBundle.items.templateInstallHosting.discountPrice&&(a._demoBar.buyBundle.showLabelSale=!0)))})},a.processingBundle(),a.sliderUp=function(a){var b=$(a);return b.length<1?!1:(b.hasClass("act")?b.removeClass("act").next().slideUp():b.addClass("act").next().slideDown(),$(document).on("click",".xxxx-trial_container, body",function(a){$(".xxxx-trial_container .lasttop__btn__call, .xxxx-trial_container .lasttop__btn__buy").removeClass("act").next().slideUp()}),void $(".xxxx-trial_container .lasttop__btn__wrapper").click(function(a){a.stopPropagation()}))},a.notifyBTTrial=function(){if("undefined"==typeof window.__user_cmsguide__||"undefined"==typeof window.__user_cmsguide__.uid||"undefined"==typeof window.__user_cmsguide__.template_id||"undefined"==typeof window.__user_cmsguide__.email||"undefined"==typeof window.__user_cmsguide__.locale)return!1;var a={};a["user[email]"]=window.__user_cmsguide__.email,a["user[locale]"]=window.__user_cmsguide__.locale,a["packages[0][eventAction]"]="trialHistory";var b=["added","changed","closed","activated","logged","location","campaign","demo_aff","http_referer","http_referer_host","http_referer_uri","logged_times","last_update_demo","last_edited","last_code_confirm","google_cid","template_id","folder","uid","window_location_href"];b.map(function(b){window.__user_cmsguide__.hasOwnProperty(b)&&""!=window.__user_cmsguide__[b]&&(a["packages[0]["+b+"]"]=window.__user_cmsguide__[b])});var c="https://apps.motocms.com/api/bt/collect?_rnd="+Date.now();c+="&callback=JSON_CALLBACK",d({method:"jsonp",url:c,params:a}).success(function(a,b,c,d){}).error(function(a,b,c,d){})},a.notifyBTTrial()}}}]),angular.module("xxxx.trial.external.templates",["@pluginXxxxTrial/views/informer.html","@pluginXxxxTrial/views/site_blocked.html"]),angular.module("@pluginXxxxTrial/views/informer.html",[]).run(["$templateCache",function(a){a.put("@pluginXxxxTrial/views/informer.html",'<div class="xxxx-trial_container" ng-init="appendScript" ng-init="formatGAAnalytics(\'viewtopbar\')">\n	<div class="lasttop">\n        <article class="lasttop__left">\n            <i ng-hide="isExpired" translate="XXXX.TRIAL.INFORMER.TIMER" translate-values="{expiredDays: expiredDays}"></i>\n			<i ng-show="isExpired">{{"XXXX.TRIAL.INFORMER.EXPIRED" | translate}}</i>\n            <span class="lasttop__btn__wrapper">\n				<a class="lasttop__btn lasttop__btn__buy"\n				   ng-click="formatGAAnalytics(\'buyButton\'); sliderUp(\'.xxxx-trial_container .lasttop__btn__buy\')"ng-if="_demoBar.buyBundle.showTooltip" ng-class="{\'showtooltip\':_demoBar.buyBundle.showTooltip}">\n                     {{"XXXX.TRIAL.INFORMER.BUY_BUTTON" | translate}}\n                </a>\n				<a class="lasttop__btn lasttop__btn__buy" ng-click="formatGAAnalytics(\'buyButton\')" ng-if="!_demoBar.buyBundle.showTooltip" ng-href="{{getCheckoutUrl}}" target="_blank">\n                     {{"XXXX.TRIAL.INFORMER.BUY_BUTTON" | translate}}\n                </a>\n				<div class="lasttop__btn__content lasttop__btn__content__price">\n					<ul>\n						<li>\n							<a href="#" target="_blank" ng-href="{{_demoBar.buyBundle.items.template.url}}">\n                                {{"XXXX.TRIAL.BUNDLES.TEMPLATE" | translate}}\n                                <div class="lasttop__btn__content__price _price _bundle_template" ng-show="_demoBar.buyBundle.items.template.isShow" ng-class="{\'_sale\': _demoBar.buyBundle.items.template.regularPrice > _demoBar.buyBundle.items.template.discountPrice}">\n									<span class="lasttop__btn__content__price__sale _regular">\n										${{_demoBar.buyBundle.items.template.regularPrice}}\n									</span>\n									<span class="lasttop__btn__content__price__current _discount">\n										${{_demoBar.buyBundle.items.template.discountPrice}}\n									</span>\n								</div>\n                            </a>\n						</li>\n						<li>\n							<a href="#" target="_blank" ng-href="{{_demoBar.buyBundle.items.templateInstall.url}}">\n                                {{"XXXX.TRIAL.BUNDLES.TEMPLATE_INSTALL" | translate}}\n                                <div class="lasttop__btn__content__price _price _bundle_template" ng-show="_demoBar.buyBundle.items.templateInstall.isShow" ng-class="{\'_sale\': _demoBar.buyBundle.items.templateInstall.regularPrice > _demoBar.buyBundle.items.templateInstall.discountPrice}">\n									<span class="lasttop__btn__content__price__sale _regular">\n										${{_demoBar.buyBundle.items.templateInstall.regularPrice}}\n									</span>\n									<span class="lasttop__btn__content__price__current _discount">\n										${{_demoBar.buyBundle.items.templateInstall.discountPrice}}\n									</span>\n								</div>\n                            </a>\n						</li>\n						<li>\n							<a href="#" target="_blank" ng-href="{{_demoBar.buyBundle.items.templateInstallHosting.url}}">\n                                {{"XXXX.TRIAL.BUNDLES.TEMPLATE_INSTALL_HOSTING" | translate}}\n                                <div class="lasttop__btn__content__price _price _bundle_template" ng-show="_demoBar.buyBundle.items.templateInstallHosting.isShow" ng-class="{\'_sale\': _demoBar.buyBundle.items.templateInstallHosting.regularPrice > _demoBar.buyBundle.items.templateInstallHosting.discountPrice}">\n									<span class="lasttop__btn__content__price__sale _regular">\n										${{_demoBar.buyBundle.items.templateInstallHosting.regularPrice}}\n									</span>\n									<span class="lasttop__btn__content__price__current _discount">\n										${{_demoBar.buyBundle.items.templateInstallHosting.discountPrice}}\n									</span>\n								</div>\n                            </a>\n						</li>\n					</ul>\n				</div>\n			</span>\n			<span class="lasttop__discount _label_discount" ng-show="_demoBar.buyBundle.showLabelSale">\n				{{"XXXX.TRIAL.INFORMER.LABEL_DISCOUNT" | translate}}\n			</span>\n        </article>\n        <article class="lasttop__right">\n            <span>{{"XXXX.TRIAL.INFORMER.NEED_HELP" | translate}}</span>\n            <a class="lasttop__btn lasttop__btn__grey lasttop__btn__chat" ng-show="_demoBar._motoChat.isShow" ng-click="openChatWindow(_demoBar._motoChat.url)">\n				{{"XXXX.TRIAL.INFORMER.START_CHAT" | translate}}\n			</a>\n			<a href="#" target="_blank" class="lasttop__btn lasttop__btn__grey lasttop__btn__ticket" ng-href="{{_demoBar._ticket.url}}" ng-show="_demoBar._ticket.isShow" ng-click="formatGAAnalytics(\'ticketSend\')">\n				{{"XXXX.TRIAL.INFORMER.SUBMIT_TICKET" | translate}}\n			</a>\n            <span class="lasttop__btn__wrapper" ng-show="_demoBar._motoCallback.isShow">\n				<a class="lasttop__btn lasttop__btn__grey lasttop__btn__call showtooltip" ng-click="sliderUp(\'.xxxx-trial_container .lasttop__btn__call\')">\n					{{"XXXX.TRIAL.INFORMER.GET_CALL" | translate}}\n				</a>\n				<div class="lasttop__btn__content">\n                    <div class="chat _chat _support_block_wrapper act" style="display: block;" id="_tab_content_motocallback">\n                        <input type="hidden" id="_motocallback_status" value="0">\n                        <input type="hidden" id="_motocallback_statusName" value="active">\n                        <input type="hidden" id="_motocallback_locked" value="0">\n                        <div class="chat__content__list pannel-content pannel-content_article" id="motocalback__wrapper"></div>\n                    </div>\n                </div>\n            </span>\n        </article>\n    </div>\n</div>')}]),angular.module("@pluginXxxxTrial/views/site_blocked.html",[]).run(["$templateCache",function(a){a.put("@pluginXxxxTrial/views/site_blocked.html",'<div class="xxxx-trial_container xxxx-trial_blocker-container">\n    <div class="text-center">\n        <span class="xxxx-trial_logo"></span>\n    </div>\n    <div class="text-center">\n        <h2 class="h2" translate="XXXX.TRIAL.MODAL.TITLE"></h2>\n        <p class="text-left" translate="XXXX.TRIAL.MODAL.MESSAGE"></p>\n        <div class="text-center">\n            <a class="btn btn-primary btn-lg xxxx-trial_btn" ng-href="{{ getCheckoutUrl }}" target="_blank"\n               translate="XXXX.TRIAL.MODAL.BUY_BUTTON"></a>\n        </div>\n        <p class="text-center xxxx-trial_blocker-desc" translate="XXXX.TRIAL.MODAL.DESCRIPTION"></p>\n    </div>\n</div>')}]);try{angular.module("xxxx.trial.external.translations")}catch(e){angular.module("xxxx.trial.external.translations",["pascalprecht.translate"])}angular.module("xxxx.trial.external.translations").config(["$translateProvider",function(a){var b={SETTINGS:{TOOLTIPS:{ADDRESS:"Diese Adresse ist die URL Ihrer Seite.<br/><br/><b>Inaktiv im Testmodus</b>"}},XXXX:{TRIAL:{INFORMER:{TIMER:"Sie nutzen zur Zeit eine Testversion (<span>{{ expiredDays }} verbleibende Tage</span>).",BUY_BUTTON:"Vorlage kaufen",EXPIRED:"Ihre Testversion ist abgelaufen",NEED_HELP:"Brauchen Sie Hilfe?",START_CHAT:"Chat starten",SUBMIT_TICKET:"Anfrage erstellen",LABEL_DISCOUNT:"rabatt"},MODAL:{TITLE:"Ooops! Die Testversion ist abgelaufen.",MESSAGE:"Es tut uns leid, aber Ihre Testversion ist abgelaufen und Sie werden keinen Zugriff mehr auf das Admin-Panel bekommen.<br/><br/>Die gute Nachricht ist, dass die Inhalte, die Sie in Ihrer Testversion bisher gespeichert haben, werden Ihnen, nachdem Sie die Template-Lizenz erworben haben, wieder zur Verfügung stehen.",BUY_BUTTON:"Template kaufen",DESCRIPTION:"* - Der Inhalt vom Testkonto wird 7 Tage nach Ablauf der Testzeit dauerhaft gelöscht werden."},PROFILE:{TOOLTIPS:{EMAIL:"<b>Inaktiv im Testmodus</b>"}},BUNDLES:{TEMPLATE:"Vorlage",TEMPLATE_INSTALL:"Vorlage + Installation",TEMPLATE_INSTALL_HOSTING:"Vorlage + Installation + Webhosting"}}}};a.translations("de",b),a.translations(b)}]);try{angular.module("xxxx.trial.external.translations")}catch(e){angular.module("xxxx.trial.external.translations",["pascalprecht.translate"])}angular.module("xxxx.trial.external.translations").config(["$translateProvider",function(a){var b={SETTINGS:{TOOLTIPS:{ADDRESS:"This address is your site’s URL.<br/><br/><b>Disabled in the trial mode</b>"}},XXXX:{TRIAL:{INFORMER:{TIMER:"You are currently using a trial version (<span>{{ expiredDays }} days remaining</span>).",BUY_BUTTON:"BUY THIS TEMPLATE",EXPIRED:"You trial is expired",NEED_HELP:"Need Help?",START_CHAT:"Start Chat",SUBMIT_TICKET:"Submit Ticket",GET_CALL:"Get Call",LABEL_DISCOUNT:"discount"},MODAL:{TITLE:"Ooops! Trial version expired.",MESSAGE:"Sorry to say that, but it seems like the trial period is over and your can no longer access the admin panel.<br/><br/>The good news is that the content you've saved in your trial version is available (so far*) and you'll get it after you purchase the template license.",BUY_BUTTON:"Purchase the Template",DESCRIPTION:"* - the content from trial account will be deleted permanently 7 days after the trial expiration."},PROFILE:{TOOLTIPS:{EMAIL:"<b>Email field is disabled in the trial mode</b>"}},BUNDLES:{TEMPLATE:"Template",TEMPLATE_INSTALL:"Template + Installation",TEMPLATE_INSTALL_HOSTING:"Template + Installation + Hosting"}}}};a.translations("en",b),a.translations(b)}]);try{angular.module("xxxx.trial.external.translations")}catch(e){angular.module("xxxx.trial.external.translations",["pascalprecht.translate"])}angular.module("xxxx.trial.external.translations").config(["$translateProvider",function(a){var b={SETTINGS:{TOOLTIPS:{ADDRESS:" Esta dirección es la URL de su sitio.<br/><br/><b> Desactivado en el modo de prueba</b>"}},XXXX:{TRIAL:{INFORMER:{TIMER:" Actualmente estás usando una versión de prueba (<span>{{ expiredDays }} días restantes </span>).",BUY_BUTTON:" COMPRAR ESTA PLANTILLA ",EXPIRED:" Su ensayo ha expirado ",NEED_HELP:" ¿Necesitas ayuda?",START_CHAT:" Comenzar charla",SUBMIT_TICKET:" Enviar Ticket ",GET_CALL:" Obtener Llamada ",LABEL_DISCOUNT:" descuento"},MODAL:{TITLE:"Ooops! Versión de prueba caducada.",MESSAGE:" Lamento decirlo, pero el período de prueba ha terminado, y Usted no puede acceder al panel de administración.<br/><br/> La buena noticia es que el contenido que ha almacenado en su versión de prueba está disponible (hasta ahora *) y usted lo recibirá después de haber comprado una plantilla de licencia.",BUY_BUTTON:" Compra la Plantilla ",DESCRIPTION:"* - el contenido de la cuenta de prueba se eliminará de forma permanente después de 7 días después del final de la prueba."},PROFILE:{TOOLTIPS:{EMAIL:"<b> Campo de email está desactivado en el modo de prueba </b>"}},BUNDLES:{TEMPLATE:" Plantilla",TEMPLATE_INSTALL:" Plantilla + Instalación",TEMPLATE_INSTALL_HOSTING:" Plantilla + Instalación + Hosting"}}}};a.translations("es",b),a.translations(b)}]);try{angular.module("xxxx.trial.external.translations")}catch(e){angular.module("xxxx.trial.external.translations",["pascalprecht.translate"])}angular.module("xxxx.trial.external.translations").config(["$translateProvider",function(a){var b={SETTINGS:{TOOLTIPS:{ADDRESS:"Ten adres jest adresem URL Twojej strony.<br/><br/><b>Jest wyłaczony w trybie wersji próbnej</b>"}},XXXX:{TRIAL:{INFORMER:{TIMER:"Obecnie używasz wersji próbnej, (<span>{{ expiredDays }} dni zostało do wygasnięcia</span>).",BUY_BUTTON:"KUP TEN SZABLON",EXPIRED:"Czas trwania wersji próbnej wygasł",NEED_HELP:"Potrzebujesz pomocy?",START_CHAT:"Czat!",SUBMIT_TICKET:"Zloz wniosek",GET_CALL:"Połącz mnie!",LABEL_DISCOUNT:"zniżka"},MODAL:{TITLE:"Ooops! Czas trwania wersji próbnej wygasł.",MESSAGE:"Przykro nam to mówić, ale czas trwania wersji próbnej wygasł, więc nie masz już dostępu do panelu admina. <br/><br/>Dobrą wiadomością jest to, że Twoje treści zostały zapisane i będa dostepne (do *) po zakupie odpowiedniej licencji na ten szablon.",BUY_BUTTON:"Kup szablon",DESCRIPTION:"* - treść z konta próbnego zostanie usunięta na zawsze po 7 dniach z czasu zakończenia okresu próbnego."},PROFILE:{TOOLTIPS:{EMAIL:"<b>Pole email jest wyłączone w trybie wersji probnej</b>"}},BUNDLES:{TEMPLATE:"Szablon",TEMPLATE_INSTALL:"Szablon + Instalacja",TEMPLATE_INSTALL_HOSTING:"Szablon + Instalacja + Hosting"}}}};a.translations("pl",b),a.translations(b)}]);try{angular.module("xxxx.trial.external.translations")}catch(e){angular.module("xxxx.trial.external.translations",["pascalprecht.translate"])}angular.module("xxxx.trial.external.translations").config(["$translateProvider",function(a){var b={SETTINGS:{TOOLTIPS:{ADDRESS:"Данный адрес является доменным именем сайта (URL).<br/><br/><b>Отключено в демо-режиме.</b>"}},XXXX:{TRIAL:{INFORMER:{TIMER:"Вы пользуетесь демо версией (<span>осталось дней: {{ expiredDays }}</span>).",BUY_BUTTON:"КУПИТЬ ЭТОТ ШАБЛОН",EXPIRED:"Срок демо-версии шаблона истек",NEED_HELP:"Нужна помощь?",START_CHAT:"Начать чат",SUBMIT_TICKET:"Отправить запрос",GET_CALL:"Позвонить",LABEL_DISCOUNT:"скидка"},MODAL:{TITLE:"Ой! Демо-период окончен...",MESSAGE:"Жаль Вас разочаровывать, но похоже, что период демонстрационного использования продукта истек и Вы больше не можете пользоваться админ-панелью.<br/><br/>                Хорошая новость в том, что сохраненные Вами данные не удалены (пока что*) и Вы получите их после покупки лицензии на шаблон.",BUY_BUTTON:"Купить шаблон",DESCRIPTION:"* - данные из демо-аккаунта будут безвозратно удалены через 7 дней после окончания демонстрационного периода."},PROFILE:{TOOLTIPS:{EMAIL:"<b>Отключено в демо-режиме.</b>"}},BUNDLES:{TEMPLATE:"Шаблон",TEMPLATE_INSTALL:"Шаблон + Установка",TEMPLATE_INSTALL_HOSTING:"Шаблон + Установка + Хостинг"}}}};a.translations("ru",b),a.translations(b)}]);