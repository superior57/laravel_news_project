<template>
    <div class="social-buttons">
        <a :href="'https://twitter.com/intent/tweet?url='+getURL+'&text='+getText" class="btn btn-primary btn-social" @click="openPopup">
            <img :src="getBaseURL+'/img/svg/twitter.svg'" alt="Twitter">                           
        </a>
        <a :href="'https://www.facebook.com/sharer/sharer.php?u='+getURL" class="btn btn-primary btn-social" @click="openPopup">
            <img :src="getBaseURL+'/img/svg/facebook.svg'" alt="facebook">                  
        </a>
        <a :href="'mailto:info@example.com?&subject='+getBaseURL+'&body='+getURL+' '+getText" class="btn btn-primary btn-social" @click="openPopup">
            <img :src="getBaseURL+'/img/svg/mail.svg'" alt="mail">                
        </a>
        <a :href="'https://www.linkedin.com/shareArticle?mini=true&url='+getURL+'&title=&summary='+getText+'&source='" class="btn btn-primary btn-social" @click="openPopup">
            <img :src="getBaseURL+'/img/svg/linkedin.svg'" alt="linkedin"> 
        </a>
    </div>
</template>

<script>
    export default {
        props: [ "url", "text" ],
        data: () => {
            return {
                popupSize: {
                    width: 780,
                    height: 550
                }
            }
        },
        computed: {
            getBaseURL: function() {
                return window.base_url;
            },
            getURL: function() {
                return this.url;
            },
            getText: function() {
                return this.text;
            }
        },
        mounted() {

        },
        methods: {
            openPopup: function(e) {
                let link = $(e.target).parent().attr('href');
                console.log('123');
                var
                    verticalPos = Math.floor(($(window).width() - this.popupSize.width) / 2),
                    horisontalPos = Math.floor(($(window).height() - this.popupSize.height) / 2);

                var popup = window.open(link, 'social',
                    'width='+this.popupSize.width+',height='+this.popupSize.height+
                    ',left='+verticalPos+',top='+horisontalPos+
                    ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

                if (popup) {
                    popup.focus();
                    e.preventDefault();
                }
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>