<div class="elipse bg-light">
    <img src="assets/img/logo.png" alt="">

</div>


<style>
    .slogan {
        max-width: 345px;
        position: absolute;
        bottom: 4rem;
        right: 2rem;

    }

    .slogan p {
        margin-bottom: 0;
        color: #395a6f;
    }

    .elipse {
        background-color: #f3e9df;
        z-index: 99999;
        position: fixed;
        z-index: 9999999;
        height: 100%;
        width: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .elipse img {
        opacity: 0.3;
        width: 15rem;
        position: absolute;
        animation-name: colombia;
        animation-duration: 2s;
        /* or: Xms */
        animation-iteration-count: infinite;
        animation-direction: alternate;
        /* or: normal */
        animation-timing-function: ease-out;
        animation-fill-mode: forwards;
        /* or: backwards, both, none */
        animation-delay: 1s;
    }



    @-webkit-keyframes colombia {
        0% {
            opacity: 0.3;
        }

        100% {
            opacity: 0.8;
        }
    }
</style>
