require('./bootstrap');
import Vue from "vue";

Vue.component('social-buttons', require('./components/SocialbuttonsComponent.vue').default);
Vue.component('social-buttons-small', require('./components/SocialButtonsSmallComponent.vue').default);


if(document.getElementById('content_wrapper')) {
    const content_wrapper = new Vue({
        el: '#content_wrapper'
    });
}