export default e=>{var t=window.navigator.userAgent;if(!t.match(/iPad/i)&&!t.match(/iPhone/i))return;const o=(e,t)=>{let o=e?.elements?.container?.getRootNode()?.host;for(;(null!=o?o.nodeType:void 0)===Node.ELEMENT_NODE&&"BODY"!==o.tagName&&"HTML"!==o.tagName;)t?o.classList.add("presto-player-fullscreen-open"):o.classList.remove("presto-player-fullscreen-open"),o=o.parentNode};wp.hooks.addAction("presto.playerEnterFullScreen","presto-player",(()=>{e?.fullscreen?.active&&o(e,!0)})),wp.hooks.addAction("presto.playerExitFullScreen","presto-player",(()=>{e?.fullscreen?.active||o(e,!1)}))};