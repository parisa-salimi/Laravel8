<style>
    $font-family:   "Roboto";
    $font-size:     14px;

    $color-primary: #ABA194;

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: $font-family;
        font-size: $font-size;
        background-size: 200% 100% !important;
        animation: move 10s ease infinite;
        transform: translate3d(0, 0, 0);
        background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
        height: 100vh
    }

    .user {
        width: 90%;
        max-width: 340px;
        margin: 10vh auto;
    }

    .user__header {
        text-align: center;
        opacity: 0;
        transform: translate3d(0, 500px, 0);
        animation: arrive 500ms ease-in-out 0.7s forwards;
    }

    .user__title {
        font-size: $font-size;
        margin-bottom: -10px;
        font-weight: 500;
        color: white;
    }

    .form {
        margin-top: 40px;
        border-radius: 6px;
        overflow: hidden;
        opacity: 0;
        transform: translate3d(0, 500px, 0);
        animation: arrive 500ms ease-in-out 0.9s forwards;
    }

    .form--no {
        animation: NO 1s ease-in-out;
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    .form__input {
        display: block;
        width: 100%;
        padding: 20px;
        font-family: $font-family;
        -webkit-appearance: none;
        border: 0;
        outline: 0;
        transition: 0.3s;
        
        
    }

    .btn {
        display: block;
        width: 100%;
        padding: 20px;
        font-family: $font-family;
        -webkit-appearance: none;
        outline: 0;
        border: 0;
        color: white;
        background: $color-primary;
        transition: 0.3s;
        
        background-color: #1b5247;
    }

    @keyframes NO {
    from, to {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }

    10%, 30%, 50%, 70%, 90% {
        -webkit-transform: translate3d(-10px, 0, 0);
        transform: translate3d(-10px, 0, 0);
    }

    20%, 40%, 60%, 80% {
        -webkit-transform: translate3d(10px, 0, 0);
        transform: translate3d(10px, 0, 0);
    }
    }

    @keyframes arrive {
        0% {
            opacity: 0;
            transform: translate3d(0, 50px, 0);
        }
        
        100% {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes move {
        0% {
            background-position: 0 0
        }

        50% {
            background-position: 100% 0
        }

        100% {
            background-position: 0 0
        }
    }
</style>
<script>
    const button = document.querySelector('.btn')
    const form   = document.querySelector('.form')

    button.addEventListener('click', function() {
    form.classList.add('form--no') 
    });
</script>