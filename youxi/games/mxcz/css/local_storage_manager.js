function LocalStorageManager(){this.bestScoreKey="bestScore",this.gameStateKey="gameState";var e=this.localStorageSupported();this.storage=e?window.localStorage:window.fakeStorage}window.fakeStorage={_data:{},setItem:function(e,t){return this._data[e]=String(t)},getItem:function(e){return this._data.hasOwnProperty(e)?this._data[e]:undefined},removeItem:function(e){return delete this._data[e]},clear:function(){return this._data={}}},LocalStorageManager.prototype.localStorageSupported=function(){var e="test",t=window.localStorage;try{return t.setItem(e,"1"),t.removeItem(e),!0}catch(n){return!1}},LocalStorageManager.prototype.getBestScore=function(){return this.storage.getItem(this.bestScoreKey)||0},LocalStorageManager.prototype.setBestScore=function(e){this.storage.setItem(this.bestScoreKey,e)},LocalStorageManager.prototype.getGameState=function(){var e=this.storage.getItem(this.gameStateKey);return e?JSON.parse(e):null},LocalStorageManager.prototype.setGameState=function(e){this.storage.setItem(this.gameStateKey,JSON.stringify(e))},LocalStorageManager.prototype.clearGameState=function(){this.storage.removeItem(this.gameStateKey)}