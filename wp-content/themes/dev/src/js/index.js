import $ from 'jquery';
import PubSub from 'pubsub-js';

import '../components/top/top';

class Main {
    onDOMContentLoaded = () => {
        PubSub.publish('init');
    };
  }
  
  const main = new Main();
  window.addEventListener('DOMContentLoaded', main.onDOMContentLoaded);