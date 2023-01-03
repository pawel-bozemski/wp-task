import { Header } from './components/header';
import { Section4 } from './components/section4';
let Main = {
  init() {
    const header = new Header();
    const section4 = new Section4();
    header.init();
    section4.init();
  }
};

Main.init();
