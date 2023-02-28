import PubSub from 'pubsub-js';

PubSub.subscribe('init', () => {
    console.log(process.env.NODE_ENV);
});
