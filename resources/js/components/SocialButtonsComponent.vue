<template>
    <ul :class="'social-button '+getClassName">
        <li class="wow animated fadeInLeft">
            <a :href="'https://www.facebook.com/sharer/sharer.php?u='+getURL" target="_blank" @click="openPopup">
                <i class="fa fa-facebook"></i>
            </a>
        </li>
        <li class="wow animated fadeInLeft" style="animation-delay: .2s">
            <a href="https://www.instagram.com/bad_hat_films/" target="_blank" @click="openPopup">
            <i class="fa fa-instagram"></i>
            </a>
        </li>
        <li class="wow animated fadeInLeft" style="animation-delay: .4s">
            <a :href="'https://twitter.com/intent/tweet?url='+getURL" target="_blank" @click="openPopup">
            <i class="fa fa-twitter"></i>
            </a>
        </li>
        <li class="wow animated fadeInLeft" style="animation-delay: .6s">
            <a href="https://www.tiktok.com/" @click="openPopup">
                <i class="fa ico">
                    <svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.9549 6.95073C20.5588 6.95073 19.2707 6.48188 18.2363 5.69092C17.0499 4.78421 16.1975 3.45417 15.8965 1.92118C15.822 1.54241 15.7819 1.15154 15.778 0.750977H11.7899V11.7982L11.7852 17.8492C11.7852 19.467 10.746 20.8387 9.30543 21.3211C8.88737 21.4611 8.43585 21.5274 7.96571 21.5013C7.36561 21.4679 6.80325 21.2843 6.31447 20.9879C5.27433 20.3572 4.56911 19.2132 4.55 17.9044C4.5199 15.859 6.15107 14.1914 8.16734 14.1914C8.56534 14.1914 8.94757 14.2572 9.30543 14.3769V11.3574V10.272C8.92798 10.2153 8.54384 10.1857 8.15539 10.1857C5.94849 10.1857 3.88444 11.1157 2.40903 12.7911C1.29387 14.0572 0.624965 15.6725 0.521762 17.3663C0.386548 19.5915 1.18971 21.7066 2.7473 23.2672C2.97616 23.4963 3.21649 23.709 3.46781 23.9051C4.80323 24.947 6.43583 25.5117 8.15539 25.5117C8.54384 25.5117 8.92798 25.4827 9.30543 25.426C10.9118 25.1848 12.3939 24.4394 13.5635 23.2672C15.0007 21.8272 15.7948 19.9155 15.8034 17.8807L15.7828 8.84457C16.4684 9.38075 17.2181 9.82442 18.0227 10.1688C19.274 10.704 20.6008 10.9752 21.9664 10.9748V8.03908V6.94976C21.9673 6.95073 21.9558 6.95073 21.9549 6.95073Z" fill="#000"/>
                    </svg>    
                </i>
            </a>
        </li>
        <li class="wow animated fadeInLeft" style="animation-delay: 1s">
            <a href="">
                <i class="fa ico">
                    <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17.3325" cy="27.7632" r="2.47608" fill="black"/>
                        <circle cx="27.2368" cy="27.7632" r="2.47608" fill="black"/>
                        <circle cx="37.1411" cy="27.7632" r="2.47608" fill="black"/>
                    </svg>                            
                </i>
            </a>
        </li>
    </ul> 
</template>

<script>
    export default {
        props: [ "url", "classname"],
        data() {
            return {
                popupSize: {
                    width: 780,
                    height: 550
                }
            }
        },
        computed: {
            getURL() {
                return this.url;
            },
            getClassName() {
                return this.classname;
            }
        },
        mounted() {
            console.log(this.classname);
        },
        methods: {
            openPopup: function(e) {
                let link = $(e.target).closest('a').attr('href');

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