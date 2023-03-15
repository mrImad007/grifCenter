import{h}from"@stencil/core";export class PrestoYoutubeSubscribeButton{constructor(){this.channel=void 0,this.layout="default",this.showCount=void 0}waitForApi(t){var e=setInterval((function(){var o;(null===(o=null===window||void 0===window?void 0:window.gapi)||void 0===o?void 0:o.ytsubscribe)&&(clearInterval(e),t())}),50)}componentDidLoad(){const t=document.createElement("script");t.type="text/javascript",t.async=!1,t.src="https://apis.google.com/js/platform.js";const e=document.getElementsByTagName("script")[0];e&&e.parentNode.insertBefore(t,e),this.waitForApi((()=>{window.gapi.ytsubscribe.render(this.textInput,{channelId:this.channel,layout:this.layout,count:this.showCount?"default":"hidden"})}))}render(){return h("div",{class:"g-ytsubscribe",ref:t=>this.textInput=t})}static get is(){return"presto-youtube-subscribe-button"}static get originalStyleUrls(){return{$:["presto-youtube-subscribe-button.css"]}}static get styleUrls(){return{$:["presto-youtube-subscribe-button.css"]}}static get properties(){return{channel:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"channel",reflect:!1},layout:{type:"string",mutable:!1,complexType:{original:"string",resolved:"string",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"layout",reflect:!1,defaultValue:"'default'"},showCount:{type:"boolean",mutable:!1,complexType:{original:"boolean",resolved:"boolean",references:{}},required:!1,optional:!1,docs:{tags:[],text:""},attribute:"show-count",reflect:!1}}}}