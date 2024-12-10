{"version":3,"file":"img.map.js","names":["BX","namespace","attr","Landing","Utils","data","encodeDataValue","decodeDataValue","Block","Node","Img","options","apply","this","arguments","type","editPanel","lastValue","field","uploadParams","isGrouped","node","addEventListener","onClick","bind","isAllowInlineEdit","setAttribute","Loc","getMessage","isBackground","nodeName","isImage","isIcon","getBackgroundUrl","bg","style","getPropertyValue","res","match","replace","getBackgroundUrl2x","getFileId","fileId","parseInt","dataset","fileid","getFileId2x","fileid2x","getAlt","alt","getPseudoUrl","url","getImageSrc","src","getImageSrc2x","setImageValue","value","newNode","create","attrs","id","parentNode","insertBefore","remove","srcset","src2x","id2x","setBackgroundValue","push","oldStyleObj","oldStyle","Array","from","map","prop","join","setProperty","removeProperty","prototype","__proto__","constructor","event","manifest","allowInlineEdit","Main","getInstance","isControlsEnabled","Text","currentNode","isEditable","UI","Panel","StylePanel","isShown","preventDefault","stopPropagation","Button","ColorAction","hideAll","Content","selector","title","className","appendFooterButton","BaseButton","text","save","hide","window","parent","document","body","appendChild","layout","form","Form","BaseForm","name","addField","getField","clear","appendForm","show","EditorPanel","forms","fields","getValue","JSON","stringify","setValue","description","dimensions","width","maxWidth","minWidth","height","maxHeight","minHeight","disableLink","closest","Field","Image","content","create2xByDefault","disableAltField","requestAnimationFrame","adjustPreviewBackgroundSize","preventSave","preventHistory","decodeURIComponent","preparePseudoUrl","onChange","History","fileId2x","href","target","enabled"],"sources":["img.js"],"mappings":"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"}