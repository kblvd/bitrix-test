{"version":3,"file":"promo-video-popup.bundle.map.js","names":["this","BX","exports","main_core","main_core_events","main_popup","ui_iconSet_api_core","ui_buttons","_","t","_t","AnglePosition","Object","freeze","TOP","LEFT","BOTTOM","RIGHT","PromoVideoPopupEvents","ACCEPT","HIDE","_videoSrc","babelHelpers","classPrivateFieldLooseKey","_title","_text","_icon","_colors","_targetOptions","_angleOptions","_offset","_popup","_iniPopup","_getPopupClassname","_getAnimationCloseClassName","_renderPopupContent","_renderAcceptButton","_renderIcon","_getPopupContentVariablesStyles","_getOptionsTitleColor","_getOptionsIconColor","_getOptionsButtonColor","_validateOptions","_isIconExist","PromoVideoPopup","EventEmitter","constructor","_options","super","defineProperty","value","_isIconExist2","_validateOptions2","_getOptionsButtonColor2","_getOptionsIconColor2","_getOptionsTitleColor2","_getPopupContentVariablesStyles2","_renderIcon2","_renderAcceptButton2","_renderPopupContent2","_getAnimationCloseClassName2","_getPopupClassname2","_iniPopup2","writable","setEventNamespace","classPrivateFieldLooseBase","videoSrc","title","text","icon","Main","B_24","colors","targetOptions","angleOptions","offset","static","show","isShown","hide","_babelHelpers$classPr","close","_babelHelpers$classPr2","Boolean","adjustPosition","_babelHelpers$classPr3","forceBindPosition","_babelHelpers$classPr4","_babelHelpers$classPr5","styles","getComputedStyle","document","body","backgroundPrimary","getPropertyValue","backgroundPrimaryRgb","Popup","bindElement","cacheable","width","getWidth","borderRadius","angle","content","closeByEsc","autoHide","closeIcon","background","contentBackground","contentPadding","contentBorderRadius","className","events","onPopupClose","setTimeout","emit","destroy","animation","showClassName","closeClassName","closeAnimationType","setOffset","offsetTop","top","offsetLeft","left","_babelHelpers$classPr6","_babelHelpers$classPr7","classNames","position","join","_babelHelpers$classPr8","Tag","render","color","ButtonColor","PRIMARY","btn","Button","Loc","getMessage","size","Size","SMALL","round","onclick","Icon","cssVariables","entries","map","variable","_babelHelpers$classPr9","_babelHelpers$classPr10","iconBackground","_babelHelpers$classPr11","button","options","_options$colors","_options$colors2","_options$colors3","video","iconColor","titleColor","buttonColor","TypeError","Error","Type","isString","isStringFilled","values","includes","isPlainObject","isNumber","Set","UI","Event","IconSet"],"sources":["promo-video-popup.bundle.js"],"mappings":"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"}