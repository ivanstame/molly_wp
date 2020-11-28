import {menuToggle} from "../javascript/menuToggle.js";
import {initHeaderHt} from "../javascript/initHeader.js";
import {showUP} from "../javascript/fadein.js";
import {initMap} from "../javascript/map.js";

export default {
  init(){
    initHeaderHt();
    menuToggle();
    showUP();
    initMap();
  }
}